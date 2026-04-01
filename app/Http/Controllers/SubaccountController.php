<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Tenant;
use App\Http\Requests\StoreSubaccountRequest;
use App\Services\PaystackSubaccountService;
use App\Models\Subaccount;
use App\Models\Bank;

class SubaccountController extends Controller
{

    protected $subaccountservice;

    public function __construct(
        
        PaystackSubaccountService $paystackSubaccountService
        )
    {
        
         $this->subaccountservice = $paystackSubaccountService;
        
    }

    public function createSubAccount(){
         
        $tenants = Tenant::latest()->get();
        $banks   = Bank::all();
        $subaccts = Subaccount::latest()->simplePaginate(10);
        return view('dashboard.superadmin.estates.subaccount',compact('tenants','banks','subaccts'));
    }


    public function verifyAccount(Request $request)
    {
        $request->validate([
            'account_number' => ['required', 'digits:10'],
            'bank_code' => ['required']
        ]);

        try {
            $name = $this->subaccountservice->verifyAccount(
                $request->account_number,
                $request->bank_code
            );

            return response()->json([
                'status' => true,
                'account_name' => $name
            ]);

        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => $e->getMessage()
            ], 422);
        }
    }

    public function store(StoreSubaccountRequest $request)
    {
        try {
            $this->subaccountservice->create($request->validated());

            return response()->json([
                'status' => true,
                'message' => 'Subaccount created successfully'
            ]);

        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => $e->getMessage()
            ], 422);
        }
    }
}
