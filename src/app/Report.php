<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Events\ReportCreated;

class Report extends Model
{
    protected $fillable = [
        'content'
    ];

    protected $dispatchesEvents = [
        'created' => ReportCreated::class
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
