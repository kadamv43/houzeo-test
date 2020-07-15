<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSearchDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('search_data')) {
            Schema::create('search_data', function (Blueprint $table) {
                $table->increments('id');
                $table->string('street_address');
                $table->string('city');
                $table->string('state');
                $table->string('zip');
                $table->integer('propert_type');
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('search_data');
    }
}
