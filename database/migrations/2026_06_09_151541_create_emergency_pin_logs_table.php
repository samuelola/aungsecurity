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
        Schema::create('emergency_pin_logs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kyc_id')->nullable();
            $table->string('resident_id')->nullable();
            $table->integer('tenant_id')->nullable();
            $table->integer('user_id')->nullable();
            $table->string('action')->nullable();
            $table->timestamp('emergency_pin_used_at')->nullable();
            $table->string('guard_name')->nullable();
            $table->string('ip')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('emergency_pin_logs');
    }
};
