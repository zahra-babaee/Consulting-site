<?php

use App\Models\Topic;
use App\Models\Consultant;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConsultantTopicsTable extends Migration
{

    public function up()
    {
        Schema::create('consultant_topics', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Consultant::class);
            $table->foreignIdFor(Topic::class);
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('consultant__topics');
    }
}
