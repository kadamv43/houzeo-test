<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class FillUpDataPropertyType extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('property_types')->insert([
            [
                'name' => 'Single Family Home',
            ],
            [
                'name' => 'Condo/Coop/Town House/Mobile',
            ],
            [
                'name' => 'Multifamlily 1-4 Units',
            ],
            [
                'name' => 'Land /Lot',
            ],
            [
                'name' => 'Other',
            ]
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
