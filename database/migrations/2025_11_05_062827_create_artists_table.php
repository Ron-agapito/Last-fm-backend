<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('artists', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('play_count')->default(0);
            $table->unsignedBigInteger('listeners')->default(0);
            $table->string('mbid')->nullable();
            $table->string('url')->nullable();
            $table->boolean('streamable')->default(false);
            $table->string('image')->nullable();
            $table->timestamps();
            $table->unique('mbid');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('artists');
    }
};
