<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddWherefromToClients extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('clients', function (Blueprint $table) {
            $table->integer('wherefrom_id')->unsigned();

            //$table->foreign('wherefrom_id')->references('id')->on('clients_wherefrom_type');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('clients', function (Blueprint $table) {
            //$table->dropForeign('clients_wherefrom_id_foreign');
            $table->dropColumn('wherefrom_id');
        });
    }
}
