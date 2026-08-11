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
            $table->boolean('free_trial_enabled')
                ->default(false)
                ->after('kyc_required');

            $table->unsignedInteger('trial_duration_days')
                ->nullable()
                ->after('free_trial_enabled');

            $table->dateTime('trial_start_date')
                ->nullable()
                ->after('trial_duration_days');

            $table->dateTime('trial_end_date')
                ->nullable()
                ->after('trial_start_date');

            $table->boolean('auto_convert_to_paid')
                ->default(false)
                ->after('trial_end_date');

            $table->unsignedInteger('custom_trial_days')
                ->nullable()
                ->after('auto_convert_to_paid');    
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('tenants', function (Blueprint $table) {
            $table->dropColumn([
                'free_trial_enabled',
                'trial_duration_days',
                'trial_start_date',
                'trial_end_date',
                'auto_convert_to_paid',
                'custom_trial_days'
            ]);
        });
    }
};
