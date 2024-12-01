<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddEmailToConsultantsTable extends Migration
{

    public function up()
    {
        Schema::table('consultants', function (Blueprint $table) {
            $table->string('email')->after('name');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('consultants', function (Blueprint $table) {
            //
        });
    }
}
