<?php

use App\Models\Departure;
use App\Models\TimePeriod;

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
    Schema::create('departures', function (Blueprint $table) {
      $table->id();
      $table->timestamps();
      $table->foreignId('stops_lines_id')
        ->references('id')
        ->on('stops_lines');
      $table->foreignIdFor(Departure::class, 'next_id');
      $table->foreignIdFor(TimePeriod::class)
        ->references('id')
        ->on('time_periods');
      $table->dateTime('departure')->nullable(false);
      $table->boolean('isTakeoff')->nullable(true);
    });
  }
  
  /**
  * Reverse the migrations.
  */
  public function down(): void
  {
    Schema::dropIfExists('departures');
  }
};
