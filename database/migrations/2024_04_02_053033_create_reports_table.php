<?php

use App\Models\Admin;
use App\Models\History;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReportsTable extends Migration
{

    public function up()
    {
        Schema::create('reports', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignIdFor(Admin::class);
            $table->foreignIdFor(History::class);
        });
    }


    public function down()
    {
        Schema::dropIfExists('reports');
    }
}
