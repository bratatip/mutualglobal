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
        Schema::create('uhids', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid')->nullable();

            $table->string('policy_number')->nullable();
            $table->string('emp_id')->nullable();
            $table->string('policy_name')->nullable();
            $table->string('uhid')->nullable();
            $table->string('insured_name')->nullable();
            $table->string('age')->nullable();
            $table->date('dob')->nullable();
            $table->string('gender')->nullable();
            $table->string('relationship')->nullable();
            $table->date('doj')->nullable();
            $table->date('doc')->nullable();
            $table->date('doe')->nullable();
            $table->decimal('sum_insured', 15, 2)->default(0);
            $table->string('status')->nullable();
            $table->string('insurer');

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('uhids');
    }
};
