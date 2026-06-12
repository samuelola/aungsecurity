<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tenant;
use App\Models\Transaction;
use App\Models\User;
use App\Exports\ResidentsExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Jobs\ExportResidentsJob;
use App\Models\Export;

class ResidentController extends Controller
{
    public function residentTransaction(Request $request, $subdomain){

        $tenant = app('tenant');
        $transactions = Transaction::where('user_id',auth()->id())->get();
        return view('dashboard.user.transaction.index',compact('transactions'));
    }

    public function adminTransaction(Request $request, $subdomain){

        $tenant = app('tenant');
        return view('dashboard.admin.transaction.index');
    }

    public function allResidents(Request $request, $subdomain){

        $tenant = app('tenant');
        $allresidents = User::with('kyc')
                        ->latest()
                        ->where('tenant_id',$tenant->id)
                        ->where('id','!=',auth()->id())
                        ->get();
        return view('dashboard.admin.resident.index', compact('allresidents'));
    }

    

    public function details(Request $request){
       
        $tenant = app('tenant');
        $user_id = auth()->id();
        $resident = User::with('kyc')
                  ->where(['id'=>$user_id,'tenant_id'=>$tenant->id])
                  ->first();
        return view('dashboard.user.resident.details', compact('resident'));
    }


    public function admindetails(Request $request){

        $tenant = app('tenant');
        $user_id = auth()->id();
        $resident = User::with('kyc')
                         ->where([
                            'id'=> $user_id,
                            'tenant_id'=>$tenant->id,
                            'role'=>'admin'
                            ])->first();
        return view('dashboard.admin.account.details', compact('resident'));
    }

    

    // public function exportResidents()
    // {
    //     $tenant = app('tenant');

    //     return Excel::download(
    //         new ResidentsExport($tenant->id),
    //         'residents.xlsx'
    //     );
    // }

     public function exportResidents()
    {
        $tenant = app('tenant');

        $export = Export::create([
            'tenant_id' => $tenant->id,
            'user_id' => auth()->id(),
            'status' => 'processing',
        ]);

        // this dispatch job to jobs table
        // after job table is run and empty the job ExportResidentsJob class is run
        ExportResidentsJob::dispatch($export->id);

        return response()->json([
            'export_id' => $export->id,
            'message' => 'Export started'
        ]);
    }

    public function exportStatus($subdomain,$id)
    {
        $export = Export::findOrFail($id);
        $tenant = app('tenant');

        return response()->json([
            'status' => $export->status,
            'download_url' => $export->status === 'done'
                ? route('residents.exports.download', [
                        $tenant->subdomain,
                        $id
                    ])
                : null
        ]);
    }

    public function downloadExport($subdomain,$id)
    {
        $export = Export::findOrFail($id);

        if ($export->status !== 'done') {
            return response()->json(['message' => 'File not ready'], 422);
        }

        return response()->download(storage_path("app/public/" . $export->file_path));
    }
    

    public function printResidents()
    {
        $tenant = app('tenant');

        $allresidents = User::with('kyc')
            ->where('tenant_id', $tenant->id)
            ->get();

        return view('dashboard.admin.resident.print', compact('allresidents'));
    }

    
}
