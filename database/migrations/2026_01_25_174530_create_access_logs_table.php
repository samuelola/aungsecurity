<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('access_logs', function (Blueprint $table) {
            $table->id();

            // Which invitation was used
            $table->foreignId('invitation_id')
                  ->constrained('visitor_invitations')
                  ->onDelete('cascade');

            // Which gate
            $table->string('gate_name')->default('Main Gate');

            // Guard (nullable because you removed auth)
            $table->foreignId('security_id')
                  ->nullable()
                  ->constrained('users')
                  ->nullOnDelete();

            // entry or exit
            $table->enum('action', ['entry', 'exit']);

            // timestamp = when scan happened
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('access_logs');
    }
};
