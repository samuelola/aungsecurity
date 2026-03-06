<?php

namespace App\Services;


use App\Models\User;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Hash;
use App\Interfaces\RegisterInterface;
use DB;
use App\Models\Wallet;
use Illuminate\Support\Str;
use App\Models\Tenant;
use App\Models\Transaction;
use App\Models\VisitorInvitation;
use Carbon\Carbon;


class InvitationGraphService {


    public function invitationChart($user){
        
       // Get last 30 days
       $startDate = Carbon::now()->subDays(29)->startOfDay();
       $endDate   = Carbon::now()->endOfDay();
       $dailyInvitations = VisitorInvitation::where('resident_id', $user->id)
        ->whereBetween('created_at', [$startDate, $endDate])
        ->select(
            DB::raw('DATE(created_at) as date'),
            DB::raw('COUNT(*) as total')
        )
        ->groupBy('date')
        ->pluck('total', 'date');

        // Prepare 30 days data
        $chartLabels = [];
        $chartData   = [];

        for ($i = 29; $i >= 0; $i--) {
            $date = Carbon::now()->subDays($i)->format('Y-m-d');
            $chartLabels[] = Carbon::parse($date)->format('d M');
            $chartData[]   = $dailyInvitations[$date] ?? 0;
        }

        return [
           'labels' => $chartLabels,
           'data'   => $chartData
         ];
    }


    public function allInvitationChart(){
        
       // Get last 30 days
       $startDate = Carbon::now()->subDays(29)->startOfDay();
       $endDate   = Carbon::now()->endOfDay();
       $dailyInvitations = VisitorInvitation::whereBetween('created_at', [$startDate, $endDate])
        ->select(
            DB::raw('DATE(created_at) as date'),
            DB::raw('COUNT(*) as total')
        )
        ->groupBy('date')
        ->pluck('total', 'date');

        // Prepare 30 days data
        $chartLabels = [];
        $chartData   = [];

        for ($i = 29; $i >= 0; $i--) {
            $date = Carbon::now()->subDays($i)->format('Y-m-d');
            $chartLabels[] = Carbon::parse($date)->format('d M');
            $chartData[]   = $dailyInvitations[$date] ?? 0;
        }

        return [
           'labels' => $chartLabels,
           'data'   => $chartData
         ];
    }
    

   
}