<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\SubscriptionService;
use App\Models\SubscriptionPlan;
use App\Http\Requests\SubscribeRequest;


class SubscriptionController extends Controller
{
    protected $subscriptionService;

    public function __construct(
        SubscriptionService $subscriptionService,
    
    )
    {
        $this->subscriptionService = $subscriptionService;
        
    }


     public function allSub()
    {
        $plans = $this->subscriptionService->allPlans();
        $currentSubscription = $this->subscriptionService->currentSubscription();
        return view('dashboard.user.subscription.plans', compact('plans','currentSubscription'));
    }

    public function subscribe(SubscribeRequest $request)
    {

        //$paystackFee = $this->calculatePaystackFee($request->total);
        try{
            $tenant = app('tenant');
            $url = $this->subscriptionService->subscribe(
            $tenant,    
            auth()->user(),
            $request->plan_id,
            $request->billing_cycle,
            $request->total,
            $request->vatt,
            $request->pay_as_you_go,
            $request->access_fee,
            $request->base_price,
            $tenant->subdomain,
            $request->paystackFee
            //$paystackFee
        );

           return redirect($url);
           
           

        }catch(\Exception $e){
            
            return redirect()->back()->with('error', $e->getMessage());
        }
        
    }


    function calculatePaystackFee($amount)
    {
        $fee = ($amount * 1.5) / 100;

        if ($amount > 2500) {
            $fee += 100;
        }

        return round(min($fee, 2000), 2);
    }

    public function callback(Request $request)
    {
        $tenant = app('tenant');
        try {
            $this->subscriptionService->verifyPaymentAndCreateSubscription($request->reference);

            return redirect()->route('subscription.create',$tenant->subdomain)
                ->with('success', 'Subscription activated successfully!');

        } catch (\Exception $e) {
            return redirect()->route('subscription.create',$tenant->subdomain)
                ->with('error', $e->getMessage());
        }
    }

    public function subCheckout(Request $request,$subdomain,$plan_id){
         try {
           $planId = decrypt($plan_id);
        } catch (\Exception $e) {
            abort(404); // invalid or tampered ID
        }
        
      $plan = $this->subscriptionService->getUserPlanDetails($planId);
      return view('dashboard.user.subscription.checkout', compact('plan'));
    }

    

}
