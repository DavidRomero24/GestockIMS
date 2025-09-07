<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->string('id_service', 15)->primary();
            $table->text('description');
            $table->decimal('price', 10, 2);
            $table->string('service_type_id_service', 15);
            $table->timestamps();

            $table->foreign('service_type_id_service')
                  ->references('id_service_type')
                  ->on('service_types')
                  ->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('services');
    }
};