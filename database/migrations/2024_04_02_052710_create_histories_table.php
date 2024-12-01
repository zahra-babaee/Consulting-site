<?php

use App\Models\Customer;
use App\Models\Consultant;
use App\Models\Consultation;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHistoriesTable extends Migration
{

    public function up()
    {
        Schema::create('histories', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignIdFor(Customer::class);
            $table->foreignIdFor(Consultant::class);
            $table->foreignIdFor(Consultation::class);
        });
    }


    public function down()
    {
        Schema::dropIfExists('histories');
    }
}
