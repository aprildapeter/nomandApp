<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TravelPackage extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'title',
        'slug',
        'location',
        'about',
        'featured_event',
        'language',
        'foods',
        'depature_date',
        'duration',
        'type',
        'price',
    ];

    public function  galleries(){
        return $this->hasMany(Gallery::class, 'travel_packages_id','id');
    }
}
