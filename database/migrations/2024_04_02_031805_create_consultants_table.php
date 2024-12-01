<?php

use App\Models\User;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConsultantsTable extends Migration
{

    public function up()
    {
        Schema::create('consultants', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->enum('specialization' , ['Educational Counseling' , 'Family Counseling' , 'Marriage Counseling']);
            $table->text('image');
            $table->string('major');
            $table->enum('education' , ['Bachelor' , 'Master' , 'PH.D']);
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('consultants');
    }
}
