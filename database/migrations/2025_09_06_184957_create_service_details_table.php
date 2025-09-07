<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('service_details', function (Blueprint $table) {
            $table->integer('invoice_id_invoice');
            $table->string('service_id_service', 15);
            $table->text('description')->nullable();
            $table->decimal('price_service', 10, 2);
            $table->timestamps();

            $table->primary(['invoice_id_invoice', 'service_id_service']);
            
            $table->foreign('invoice_id_invoice')
                  ->references('id_invoice')
                  ->on('invoices')
                  ->onDelete('cascade');
                  
            $table->foreign('service_id_service')
                  ->references('id_service')
                  ->on('services')
                  ->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('service_details');
    }
};