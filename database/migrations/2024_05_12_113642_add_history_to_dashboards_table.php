<?php

use App\Models\client;
use App\Models\historynew;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddHistoryToDashboardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('dashboards', function (Blueprint $table) {
            $table->foreignIdFor(historynew::class);
            $table->foreignIdFor(client::class);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('dashboards', function (Blueprint $table) {
            //
        });
    }
}
