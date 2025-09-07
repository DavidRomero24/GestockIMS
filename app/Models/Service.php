<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_service';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'id_service',
        'description',
        'price',
        'service_type_id_service'
    ];

    public function serviceType()
    {
        return $this->belongsTo(ServiceType::class, 'service_type_id_service', 'id_service_type');
    }

    public function serviceDetails()
    {
        return $this->hasMany(ServiceDetail::class, 'service_id_service', 'id_service');
    }
}