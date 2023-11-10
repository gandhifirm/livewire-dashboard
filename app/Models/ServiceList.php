<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceList extends Model
{
    use HasFactory;

    protected $table = "service_lists";

    protected $fillable = [
        'service_id',
        'lang',
        'list',
    ];

    public function service() {
        return $this->belongsTo(Service::class);
    }
}