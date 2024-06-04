<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('client_policies', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid')->nullable();
            $table->unsignedBigInteger('customer_id');
            $table->unsignedBigInteger('insurer_id');
            $table->string('policy_no');
            $table->date('policy_start_date');
            $table->date('policy_end_date');
            $table->string('occupancy');
            $table->string('property_address');
            $table->decimal('premium_inc_gst', 20, 2)->default(0);
            $table->string('file_path');

            $table->timestamps();
            $table->softDeletes();

            // Foreign key for customer
            $table->foreign('customer_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('client_policies');
    }
};
