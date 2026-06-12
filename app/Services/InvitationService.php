<?php

namespace App\Services;


use App\Models\User;
use Illuminate\Support\Facades\Http;
use DB;
use Illuminate\Support\Str;
use App\Models\Tenant;
use Carbon\Carbon;
use App\Models\VisitorInvitation;
use App\Models\AccessLog;


class InvitationService{


    public function allVisitors(){

       return VisitorInvitation::with(['visitor','resident','tenant'])->simplePaginate(10);
    }

    public function allAccessLogs(){

       return AccessLog::with(['Invitation'])->simplePaginate(10);
    }

    public function adminCountVisitors($tenant){

       return VisitorInvitation::where([
         'tenant_id'=>$tenant->id,
         'status' => 'used'
         ])->count();
    }
    
    public function userCountVisitors($user,$tenant){

       return VisitorInvitation::where([
         'tenant_id'=>$tenant->id,
         'status' => 'used',
         'resident_id'=>$user->id
         ])->count();
    }
   
}