<?php

use App\Models\Result;
use App\Models\Appointment;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHistorynewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('historynews', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Appointment::class);
            $table->foreignIdFor(Result::class);
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
        Schema::dropIfExists('historynews');
    }
}
