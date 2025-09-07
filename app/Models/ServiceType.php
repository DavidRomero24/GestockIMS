<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceType extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_service_type';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'id_service_type',
        'service_category'
    ];

    public function services()
    {
        return $this->hasMany(Service::class, 'service_type_id_service', 'id_service_type');
    }
}