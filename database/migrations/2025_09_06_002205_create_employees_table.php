<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->date('date_birth');
            $table->string('email')->unique();
            $table->string('phone_number');
            $table->decimal('salary', 10, 2);
            $table->string('type_staff');
            $table->string('image')->nullable();
            $table->boolean('status')->default(true);
            $table->unsignedBigInteger('registerby');
            $table->timestamps();
            
            $table->foreign('registerby')->references('id')->on('users');
        });
    }

    public function down()
    {
        Schema::dropIfExists('employees');
    }
};