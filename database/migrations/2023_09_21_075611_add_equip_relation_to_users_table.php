<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->unsignedBigInteger('equip_id')->nullable();
            $table->foreign('equip_id')->references('id')->on('equips')->onDelete('cascade');
            $table->string('role')->nullable(); 
          
        });
    }
    
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign(['equip_id']); 
            $table->dropColumn('equip_id');
        });
    }
    
};
