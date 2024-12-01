<?php

use App\Models\job;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewusersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('newusers', function (Blueprint $table) {
            $table->id();
            $table->text('avatar')->nullable();
            $table->text('name');
            $table->text('email');
            $table->text('phone')->nullable();
            $table->string('reset_link')->nullable();
            $table->text('password');
            $table->rememberToken();
            $table->foreignIdFor(job::class);
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
        Schema::dropIfExists('newusers');
    }
}
