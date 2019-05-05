<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSaleItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sale_items', function (Blueprint $table) {
            $table->bigInteger('sale_Id')->unsigned();
            $table->foreign('sale_Id')->references('saleId')->on('sales');
            $table->bigInteger('product_Id')->unsigned();
            $table->foreign('product_Id')->references('productId')->on('products');
            $table->primary(['product_Id', 'Sale_Id']);
            $table->bigInteger('price');
            $table->bigInteger('quantity');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sale_items');
    }
}
