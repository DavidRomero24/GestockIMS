<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;

    protected $table='suppliers';
    
    protected $fillable=['name','phone_number','email','company','department','city','status'];

    protected $guarded=['id','status','registerby','created_at','updated_at'];

    // public function orders(){
    //     return $this->hasMany(Order::class);
    // }
}

