<?php

use App\Models\Topic;
use App\Models\Consultant;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConsultationsTable extends Migration
{

    public function up()
    {
        Schema::create('consultations', function (Blueprint $table) {
            $table->id();
            $table->string('topic');
            $table->enum('type' , ['in-person' , 'on-call']);
            $table->dateTime('time');
            $table->text('description');
            $table->timestamps();
            $table->foreignIdFor(Consultant::class);
            $table->foreignIdFor(Topic::class);
        });
    }


    public function down()
    {
        Schema::dropIfExists('consultations');
    }
}
