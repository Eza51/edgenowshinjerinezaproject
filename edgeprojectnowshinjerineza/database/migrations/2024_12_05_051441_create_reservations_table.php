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
        Schema::create('reservations', function (Blueprint $table) {
            $table->id(); // Auto-incrementing ID
            $table->string('name'); // Full name of the person making the reservation
            $table->string('email'); // Email address
            $table->string('phone'); // Phone number
            $table->dateTime('reservation_date'); // Date and time of reservation
            $table->text('message')->nullable(); // Special requests or notes
            $table->timestamps(); // created_at and updated_at timestamps
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservations');
    }
};
