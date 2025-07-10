<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('shipps', function (Blueprint $table) {
            $table->id();
           // $table->foreignId('order_id')->constrained('orders')->onDelete('cascade');
            $table->string('tracking_number')->unique();
            $table->string('senders_name');
            $table->string('company_location');
            $table->string('code');
            $table->string('company_email');
            $table->string('receivers_name');
            $table->string('receiver_location');
            $table->string('zip_code');
            $table->string('receiver_email');
            $table->string('package');
            $table->string('destination');
            $table->string('carier');
            $table->string('type_of_shippment');
            $table->string('weight');
            $table->string('shipment_mode');
            $table->string('carrier_No');
            $table->string('product');
            $table->string( 'qty');
            $table->string('payment_mode')->default('PEPAL');
            $table->string('comment');
            $table->string( 'delivery_date');
            $table->string('delivery_time');
            $table->string('pick_up_date');
            $table->string('pick_up_time');
            $table->string('date');
            $table->string('time');
            $table->string('location');
            $table->string('status');
            $table->string('remark');
            $table->string('updated_by');
            $table->timestamps(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shipps');
    }
};
