<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       

        Schema::create('bills', function (Blueprint $table) {
            $table->id();
            $table->text('b_content')->nullable();
            $table->text('b_note')->nullable();
            $table->unsignedBigInteger('b_user_id');
            $table->integer('b_total_money'); 
            $table->foreign('b_user_id')->references('id')->on('users')
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
        Schema::dropIfExists('bills');
       

    }
}
