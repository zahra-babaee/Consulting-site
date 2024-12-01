<?php

use App\Models\Newadmin;
use App\Models\Historynew;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewreportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('newreports', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Newadmin::class);
            $table->foreignIdFor(Historynew::class);
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
        Schema::dropIfExists('newreports');
    }
}
