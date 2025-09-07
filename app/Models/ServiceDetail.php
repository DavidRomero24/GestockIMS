<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceDetail extends Model
{
    use HasFactory;

    protected $primaryKey = ['invoice_id_invoice', 'service_id_service'];
    public $incrementing = false;

    protected $fillable = [
        'invoice_id_invoice',
        'service_id_service',
        'description',
        'price_service'
    ];

    public function invoice()
    {
        return $this->belongsTo(Invoice::class, 'invoice_id_invoice', 'id_invoice');
    }

    public function service()
    {
        return $this->belongsTo(Service::class, 'service_id_service', 'id_service');
    }
}