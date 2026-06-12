<?php 

namespace App\Services;

use App\Models\Subscription;
use App\Models\SubscriptionPlan;
use Carbon\Carbon;

class PlanService
{
    
    public function storePlan($name,$price,$duration, $desc,$tenant)
    {
        SubscriptionPlan::create([
            'name'=>$name,
            'price'=>$price,
            'duration'=>$duration,
            'description' => $desc,
            'tenant_id' => $tenant->id
        ]);    
    }

    public function editPlan($id)
    {
        $plan = SubscriptionPlan::findOrFail($id);
        return $plan;
    }

    public function updatePlan($request,$id)
    {
        $plan = SubscriptionPlan::findOrFail($id);
        $plan->update($request->all());
        return true;
    }

}