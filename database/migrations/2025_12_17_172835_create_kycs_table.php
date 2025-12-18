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
        Schema::create('kycs', function (Blueprint $table) {
        $table->id();
        $table->foreignId('user_id')->constrained()->cascadeOnDelete();
        $table->foreignId('tenant_id')->constrained()->cascadeOnDelete();
        // Bio data
        $table->string('phone')->nullable();
        $table->text('address')->nullable();
        $table->string('state')->nullable();
        $table->string('lga')->nullable();

        // ID document
        $table->string('id_type')->nullable();
        $table->string('id_document')->nullable();

        // Status flags
        $table->boolean('bio_completed')->default(false);
        $table->boolean('doc_completed')->default(false);
        $table->boolean('face_completed')->default(false);
        $table->boolean('kyc_completed')->default(false);
        $table->string('current_step')->default('bio');

        $table->timestamps();
    });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kycs');
    }
};
