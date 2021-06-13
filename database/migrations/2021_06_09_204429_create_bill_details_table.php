<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBillDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bill_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('d_bill_id');
            $table->unsignedBigInteger('d_product_id');
            $table->unsignedBigInteger('b_supplier_id');
            $table->integer('d_number');
            $table->integer('d_price');
            $table->foreign('d_bill_id')->references('id')->on('bills')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->foreign('d_product_id')->references('id')->on('products')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->foreign('b_supplier_id')->references('id')->on('suppliers')
            ->onUpdate('cascade')
            ->onDelete('cascade');
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
        Schema::dropIfExists('bill_details');
    }
}
