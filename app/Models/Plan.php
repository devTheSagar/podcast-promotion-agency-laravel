<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    private static $plan;

    public static function addPlan($request){
        self::$plan = new Plan();
        self::$plan->service_id = $request->service;
        self::$plan->planName = $request->planName;
        self::$plan->planPrice = $request->planPrice;
        self::$plan->planDuration = $request->planDuration;
        self::$plan->planFeatures = json_encode($request->planFeatures);
        self::$plan->planDescription = $request->planDescription;
        self::$plan->save();
    }

    // one to many relationship with Service 
    public function service(){
        return $this->belongsTo(Service::class);
    }
}
