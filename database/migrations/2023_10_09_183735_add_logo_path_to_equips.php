<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddLogoPathToEquips extends Migration
{
    public function up()
    {
        Schema::table('equips', function (Blueprint $table) {
            $table->string('logo_path')->nullable();
        });
    }

    public function down()
    {
        Schema::table('equips', function (Blueprint $table) {
            $table->dropColumn('logo_path');
        });
    }
}
