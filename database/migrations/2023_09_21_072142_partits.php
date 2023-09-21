<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  
    public function up(): void
    {
        Schema::create('partits', function(Blueprint $table)
        {
            $table->id();
            $table->string('resultat',30);
            $table->date('data');
            $table->time('temps');
            $table->string('estadi',30);
            $table->unsignedBigInteger('equipLocal_id');
            $table->foreign('equipLocal_id')->references('id')->on('equips')->onDelete('cascade');
            $table->unsignedBigInteger('equipVisitant_id');
            $table->foreign('equipVisitant_id')->references('id')->on('equips')->onDelete('cascade');
            $table->unsignedBigInteger('lliga_id');
            $table->foreign('lliga_id')->references('id')->on('lligas')->onDelete('cascade');
            $table->timestamps();

        });
    }

    public function down(): void
    {
        Schema::dropIfExists('partits');

    }
};
