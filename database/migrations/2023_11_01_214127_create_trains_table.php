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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->string('agency', 60);
            $table->string('departure_station', 30);
            $table->string('arrival_station', 30);
            $table->string('departure_time', 8);
            $table->string('arrival_time', 8);
            $table->string('train_code', 5)->unique();
            $table->tinyInteger('number_of_carriages')->unsigned()->default(0);
            $table->boolean('in_time')->nullable();
            $table->boolean('deleted')->nullable();
            $table->string('slug', 50)->unique();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};
