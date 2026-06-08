<?php

use App\Models\Stop;
use App\Models\Line;

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
    Schema::create('stops_lines', function (Blueprint $table) {
      $table->id();
      $table->timestamps();
      $table->string('stop_id', 255)->nullable(false)
        // więzy integralności referencyjnej
        // integral reference constraints
        ->references('stop_id')
        ->on('stops');
      $table->foreignIdFor(Line::class)
        ->references('id')
        ->on('lines');
    });
  }
  
  /**
  * Reverse the migrations.
  */
  public function down(): void
  {
    Schema::dropIfExists('stops_lines');
  }
};
