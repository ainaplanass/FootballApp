<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('equips', function(Blueprint $table)
        {
            $table->id();
            $table->string('nom',30);
            $table->unsignedBigInteger('clubs_esportius_id');
            $table->foreign('clubs_esportius_id')->references('id')->on('clubs_esportius')->onDelete('cascade');
            $table->timestamps();

        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('equips');
    }
};
