<?php

use App\Models\ServiceType;

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
    Schema::create('lines', function (Blueprint $table) {

      /**
       * columns
       */

      $table->id();
      $table->timestamps();
      $table->integer('no')->nullable(false)->unique();
      $table->foreignIdFor(ServiceType::class);

      /**
       * constraints
       */

      $table->foreign('service_type_id')
        ->references('id')
        ->on('service_types');

    });
  }
  
  /**
  * Reverse the migrations.
  */
  public function down(): void
  {
    Schema::dropIfExists('lines');
  }
};
