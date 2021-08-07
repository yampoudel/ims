<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string("product_name",100);
            $table->text("product_description");
            $table->string("product_image")->nullable();
            $table->string("product_color");
            $table->float("product_price",8,2);
            $table->integer("product_starting_stock");
            $table->integer("product_purchased");
            $table->integer("product_total_stock");
            $table->integer("product_shipped");
            $table->unsignedInteger("supplier_id");
            $table->foreign("supplier_id")->references('id') ->on ('suppliers');
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
        Schema::dropIfExists('products');
    }
}
