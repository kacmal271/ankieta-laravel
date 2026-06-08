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
    Schema::create('pictures', function (Blueprint $table) {
      $table->id();
      $table->timestamps();

      // path_relative_url, not null, unique
      $table->text('path_relative_url', 65535)
        ->nullable(false);
    });
  }
  
  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('pictures');
  }
};
