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
        Schema::create('billing_imports', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tenant_id')
        ->constrained()
        ->cascadeOnDelete();

        $table->string('file_path');

        $table->integer('total_rows')->default(0);

        $table->integer('processed_rows')->default(0);

        $table->integer('successful_rows')->default(0);

        $table->integer('failed_rows')->default(0);

        $table->enum('status', [
            'pending',
            'processing',
            'completed',
            'failed',
        ])->default('pending');

        $table->text('error_message')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('billing_imports');
    }
};
