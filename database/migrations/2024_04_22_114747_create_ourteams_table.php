<?php

use App\Models\Consultant;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOurteamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ourteams', function (Blueprint $table) {
            $table->id()->uniqid();
            $table->string('name');
            $table->text('description');
            $table->text('shortdescription');
            $table->foreignIdFor(Consultant::class);
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
        Schema::dropIfExists('ourteams');
    }
}
