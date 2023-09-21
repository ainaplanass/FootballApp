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
            $table->string('role')->nullable(); // La columna 'role' puede ser nula para usuarios sin rol asignado.
          
        });
    }
    
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign(['equip_id']); // si un equip s'elimina, s'eliminen els usuaris que formen part del equip
            $table->dropColumn('equip_id');
        });
    }
    
};
