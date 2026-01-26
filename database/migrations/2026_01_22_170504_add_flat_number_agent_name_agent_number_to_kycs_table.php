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
        Schema::table('kycs', function (Blueprint $table) {
             $table->unsignedBigInteger('flat_number')->nullable(); 
             $table->string('agent_name')->nullable();
             $table->string('agent_number')->nullable();
             
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('kycs', function (Blueprint $table) {
            $table->dropColumn(['flat_number', 'agent_name','agent_number']);
        });
    }
};
