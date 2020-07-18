<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RenameCnoutyToSearchData extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('search_data', function(Blueprint $table) {
            $table->renameColumn('conuty', 'county');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('search_data', function(Blueprint $table) {
            $table->renameColumn('county', 'conuty');
        });
    }
}
