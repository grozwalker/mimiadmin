<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGoodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('goods', function (Blueprint $table) {
            $table->increments('id');
            $table->char('name',255);
            $table->integer('category_id')->unsigned();
            $table->decimal('price', 5, 2);
            $table->boolean('active')->default(0);
            $table->boolean('have_photo')->default(0);
            $table->text('description');
            $table->char('vk_link',200);
            $table->char('img',200);
            $table->boolean('featured')->default(0);
            $table->timestamps();

            $table->foreign('category_id')->references('id')->on('categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('goods');
    }
}
