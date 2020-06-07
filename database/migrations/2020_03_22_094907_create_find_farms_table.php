<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFindFarmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('find_farms', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id');
            $table->string('crop')->nullable();
            $table->float('quantity')->nullable();
            $table->string('color')->nullable();
            $table->string('maturity')->nullable();
            $table->string('source_state')->nullable();
            $table->string('source_lga')->nullable();
            $table->string('state_location')->nullable();
            $table->string('lga_location')->nullable();
            $table->boolean('status')->default(0);
            $table->integer('contract')->default(0);
            $table->string('production_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('find_farms');
    }
}
