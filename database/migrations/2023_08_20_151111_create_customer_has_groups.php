<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('customer_has_groups', function (Blueprint $table): void {
            $table->foreignUlid('customer_id');
            $table->foreignUlid('customer_group_id');
            $table->timestamps();

            $table->unique(['customer_id', 'customer_group_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customer_has_groups');
    }
};
