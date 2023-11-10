<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceName extends Model
{
    use HasFactory, Sluggable;

    protected $table = "service_names";

    protected $fillable = [
        'service_id',
        'lang',
        'name',
        'slug'
    ];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }

    public function service() {
        return $this->belongsTo(Service::class);
    }
}