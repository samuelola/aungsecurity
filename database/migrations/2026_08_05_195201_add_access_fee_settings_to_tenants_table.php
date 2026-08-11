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
        Schema::table('tenants', function (Blueprint $table) {

            $table->boolean('access_fee_enabled')
                ->default(false)
                ->after('kyc_required');

            $table->decimal('access_fee_amount', 12, 2)
                ->default(10000)
                ->after('access_fee_enabled');

            $table->enum('access_fee_timing', [
                'immediately',
                'after_trial'
            ])
                ->default('immediately')
                ->after('access_fee_amount');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('tenants', function (Blueprint $table) {
            $table->dropColumn([
                'access_fee_enabled',
                'access_fee_amount',
                'access_fee_timing',
            ]);
        });
    }
};
