<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldsToFarmersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('farmers', function (Blueprint $table) {
            $table->integer('age')->nullable();
            $table->string('bvn')->nullable();
            $table->string('gender')->nullable();
            $table->string('address')->nullable();
            $table->string('state')->nullable();
            $table->string('city')->nullable();
            $table->string('ref_code')->nullable();
            $table->string('grains')->nullable();
            $table->string('legumes')->nullable();
            $table->string('vegetables')->nullable();
            $table->string('roots')->nullable();
            $table->string('farmland')->nullable();
            $table->boolean('farm_manager')->nullable();
            $table->boolean('smart_phone')->nullable();


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('farmers', function (Blueprint $table) {
            //
        });
    }
}
