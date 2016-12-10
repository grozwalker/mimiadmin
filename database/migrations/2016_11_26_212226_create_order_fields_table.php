<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderFieldsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_fields', function (Blueprint $table) {
            $table->integer('order_id')->unsigned();
            $table->integer('good_id')->unsigned();
            $table->integer('quantity');
            $table->decimal('price', 5, 2);
            $table->timestamps();

            $table->index(['order_id', 'good_id']);

            $table->foreign('good_id')->references('id')->on('goods');
            $table->foreign('order_id')->references('id')->on('goods');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_fields');
    }
}
