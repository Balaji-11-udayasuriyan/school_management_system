<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SystemSetting extends Model
{
    protected $fillable = [

        'company_name',
        'email',
        'website',
        'customer_care_no'
    ];
}
