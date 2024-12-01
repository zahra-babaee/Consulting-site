<?php

use App\Models\Appointment;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResultsTable extends Migration
{

    public function up()
    {
        Schema::create('results', function (Blueprint $table) {
            $table->id();
            $table->text('Result');
            $table->dateTime('Result time');
            $table->timestamps();
            $table->foreignIdFor(Appointment::class);
        });
    }


    public function down()
    {
        Schema::dropIfExists('results');
    }
}
