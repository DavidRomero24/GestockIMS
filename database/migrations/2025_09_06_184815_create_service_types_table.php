<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('service_types', function (Blueprint $table) {
            $table->string('id_service_type', 15)->primary();
            $table->string('service_category', 30);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('service_types');
    }
};