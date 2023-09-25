<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('lligas', function(Blueprint $table)
        {
            $table->id();
            $table->string('nom',30);
            $table->string('temporada',30);
            $table->timestamps();

        });
    }

    public function down(): void
    {
        Schema::dropIfExists('lligas');

    }
};
