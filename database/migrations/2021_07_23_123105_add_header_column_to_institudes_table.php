<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddHeaderColumnToInstitudesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('institudes', function (Blueprint $table) {
            $table->string('header')->nullable();
            $table->dropColumn('view');
            $table->string('view')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('institudes', function (Blueprint $table) {
            //
        });
    }
}
