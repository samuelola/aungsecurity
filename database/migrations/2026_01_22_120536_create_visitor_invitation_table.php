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
        Schema::create('visitor_invitation', function (Blueprint $table) {
            $table->id();
            $table->foreignId('resident_id')->constrained('users');
            $table->foreignId('visitor_id')->constrained();
            $table->longText('purpose');
            $table->date('visit_date');
            $table->time('valid_from');
            $table->time('valid_to');
            $table->longText('qr_token');
            $table->enum('status', ['pending','used','expired'])->default('pending');
            $table->timestamp('used_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('visitor_invitation');
    }
};
