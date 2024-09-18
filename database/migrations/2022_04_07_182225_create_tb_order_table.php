<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_order', function (Blueprint $table) {
            $table->id();
            $table->dateTime('date_order');
            $table->string('id_user');
            $table->string('id_product');
            $table->string('quantity_order');
            $table->string('total_order');
            $table->string('type_order');
            $table->string('status_order');
            $table->longText('description_order');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void1
     */
    public function down()
    {
        Schema::dropIfExists('tb_order');
    }
}
