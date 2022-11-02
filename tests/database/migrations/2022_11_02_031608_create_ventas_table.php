<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVentasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ventas', function (Blueprint $table) {
            $table->integer('id_venta')->primary();
            $table->integer('id_producto');
            $table->float('cantidad');
            $table->integer('subtotal');
            $table->integer('id_ticket');
            
            $table->foreign('id_producto', 'ventas_ibfk_1')->references('id_producto')->on('productos');
            $table->foreign('id_ticket', 'ventas_ibfk_2')->references('id_ticket')->on('tickets');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ventas');
    }
}
