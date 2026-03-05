<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SubscriptionPlan;
use App\Models\User;
use App\Services\SubscriptionService;
use App\Services\PlanService;
use App\Http\Requests\PlanRequest;

class AdminSubscriptionPlanController extends Controller
{
    protected $subscriptionService;
    protected $planService;

    public function __construct(SubscriptionService $subscriptionService, PlanService $planService)
    {
        $this->subscriptionService = $subscriptionService;
        $this->planService = $planService;
    }
    
    public function index()
    {
        $plans = SubscriptionPlan::latest()->get();

        return view('dashboard.admin.plans.index', compact('plans'));
    }

    public function create()
    {
        return view('dashboard.admin.plans.create');
    }

    public function store(PlanRequest $request)
    {
        $tenant = app('tenant');
        $this->planService->storePlan(
            $request->name,
            $request->price,
            $request->duration,
            $request->description,
        );

        return redirect()->back()->with('success','Subscription Created successfully');
    }

    public function edit($id)
    {
        $plan = $this->planService->editPlan($id);
        return view('dashboard.admin.plans.edit', compact('plan'));
    }

    public function update(Request $request, $id)
    {
        $plan = $this->planService->updatePlan($request,$id);
        return redirect()->route('dashboard.admin.plans.index');
    }
}
