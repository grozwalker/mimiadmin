<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePurchaseFieldsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('purchase_fields', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('purchase_id')->unsigned();
            $table->integer('good_id')->unsigned();
            $table->decimal('price', 5, 2);
            $table->integer('quantity');
            $table->timestamps();

            $table->index(['purchase_id', 'good_id']);

            $table->foreign('purchase_id')->references('id')->on('purchases');
            $table->foreign('good_id')->references('id')->on('goods');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('purchase_fields');
    }
}
