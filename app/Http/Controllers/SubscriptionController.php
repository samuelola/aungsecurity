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

     public function create()
    {
        $plans = SubscriptionPlan::where('is_active', true)->get();

        return view('dashboard.user.subscription.plans', compact('plans'));
    }

    public function subscribe(SubscribeRequest $request)
    {

        $this->subscriptionService->subscribe(
            auth()->user(),
            $request->plan_id,
            $request->billing_cycle
        );

        return redirect()->back()->with('success','Subscribed successfully');
    }

}
