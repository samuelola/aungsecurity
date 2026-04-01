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
        Schema::create('subaccounts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tenant_id')
            ->constrained()
            ->cascadeOnDelete()
            ->unique();
            $table->string('subaccount_code');
            $table->string('business_name');
            $table->string('account_number');
            $table->string('bank_code');
            $table->string('account_name');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subaccounts');
    }
};
