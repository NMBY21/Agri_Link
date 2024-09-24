<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddStockProductToTbProdukTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
{
    Schema::table('tb_produk', function (Blueprint $table) {
        $table->integer('stock_product')->after('tags_product'); // Adjust the column type as needed
    });
}

public function down()
{
    Schema::table('tb_produk', function (Blueprint $table) {
        $table->dropColumn('stock_product'); // Rollback action
    });
}

}
