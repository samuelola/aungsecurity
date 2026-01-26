<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('visitor_invitation', function (Blueprint $table) {
            $table->timestamp('exited_at')->nullable()->after('used_at');
            $table->enum('status', ['pending','used','exited','expired'])
                  ->default('pending')
                  ->change();
        });
    }

    public function down(): void
    {
        Schema::table('visitor_invitation', function (Blueprint $table) {
            $table->dropColumn('exited_at');
        });
    }
};
