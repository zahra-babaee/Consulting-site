<?php

use App\Models\newuserjob;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddJobidToNewusersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('newusers', function (Blueprint $table) {
            $table->foreignIdFor(newuserjob::class);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('newusers', function (Blueprint $table) {
            //
        });
    }
}
