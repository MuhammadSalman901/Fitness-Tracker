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
        Schema::create('workouts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Fixed foreign key
            $table->string('workout_name');
            $table->string('workout_type');
            $table->string('workout_duration');
            $table->text('workout_description'); // Use `text` for longer descriptions
            $table->date('workout_date');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('workouts'); // Fixed table name
    }
};
