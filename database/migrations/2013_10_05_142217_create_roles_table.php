<?php

use App\Helpers\UuidGeneratorHelper;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Ramsey\Uuid\Uuid;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid')->nullable()->default(null);
            $table->string('name')->unique();
            $table->timestamps();
        });

        DB::table('roles')->insert([
            ['name' => 'admin'],
            ['name' => 'client'],
        ]);

        $roles = DB::table('roles')->get();

        foreach ($roles as $role) {
            $uuid = UuidGeneratorHelper::generateUniqueUuidForTable('roles');
            DB::table('roles')->where('id', $role->id)->update(['uuid' => $uuid]);
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('roles');
    }
};
