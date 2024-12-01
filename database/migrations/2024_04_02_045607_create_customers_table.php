<?php

use App\Models\User;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersTable extends Migration
{

    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->date('birthdate');
            $table->enum('marital status' , ['married','single']);
            $table->timestamps();
            $table->foreignIdFor(User::class);
        });
    }


    public function down()
    {
        Schema::dropIfExists('customers');
    }
}
