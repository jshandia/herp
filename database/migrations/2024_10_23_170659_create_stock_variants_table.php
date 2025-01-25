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
        Schema::create('stock_variants', function (Blueprint $table) {
            $table->id();
            $table->integer('stocks_id')->default('0.00');
            $table->string('variant_type');
            $table->string('variant_name');
            $table->string('variant_unit');
            $table->integer('created_by');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stock_variants');
    }
};
