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
        Schema::create('inventory', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('sku');
            $table->string('manuifacturer');
            $table->integer('quantity');
            $table->decimal('cost_price', 8, 2);
            $table->decimal('sell_price', 8, 2);
            $table->string('unit_of_measure');
            $table->json('attributes');
            $table->unsignedBigInteger('user_id');
            $table->integer('category_id');
            $table->unsignedBigInteger('vendor_id');
            $table->string('location');
            $table->string('description');
            $table->unsignedBigInteger('business_id');
            $table->string('po_number');
            $table->decimal('minimum_order', 8, 2);
            $table->string('platforms_selling_on');
            $table->string('last_sold');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inventory');
    }
};


// 'sku',
// 'manuifacturer',
// 'quantity',
// 'cost_price',
// 'sell_price',
// 'unit_of_measure',
// 'attributes',
// 'user_id',
// 'category_id',
// 'vendor_id',
// 'location',
// 'description',
// 'business_id',