<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceDetail extends Model
{
    use HasFactory;

    protected $table = "service_details";

    protected $fillable = [
        'service_id',
        'lang',
        'description',
    ];

    public function service() {
        return $this->belongsTo(Service::class);
    }
}