<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\SubscriptionService;
use App\Models\SubscriptionPlan;
use App\Http\Requests\SubscribeRequest;

class SubscriptionController extends Controller
{
    protected $subscriptionService;

    public function __construct(SubscriptionService $subscriptionService)
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

        try{

            $this->subscriptionService->subscribe(
            auth()->user(),
            $request->plan_id,
            $request->billing_cycle
        );

           return redirect()->back()->with('success','Subscribed successfully');

        }catch(\Exception $e){
            
            return redirect()->back()->with('error', $e->getMessage());
        }
        
    }

}
