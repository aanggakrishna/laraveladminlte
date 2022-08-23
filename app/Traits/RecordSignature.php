<?php
namespace App\Traits;

use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

trait RecordSignature
{
  protected static function boot()
  {
    parent::boot();

    static::updating(function ($model) {
      if (Auth::User()) {
        $model->updated_by = Auth::User()->id;
        $model->updated_at = Carbon::now()->timestamp;
      }      
    });

    static::creating(function ($model) {
      if (Auth::User()) {
        $model->created_by = Auth::User()->id;
        $model->created_at = Carbon::now()->timestamp;
      }
    });
    
  }
}