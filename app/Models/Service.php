<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $table = "services";

    protected $fillable = [
        'title',
        'image'
    ];

    public function serviceName() {
        return $this->hasMany(ServiceName::class);
    }

    public function serviceList() {
        return $this->hasMany(ServiceList::class);
    }

    public function serviceDetail() {
        return $this->hasMany(serviceDetail::class);
    }
}
