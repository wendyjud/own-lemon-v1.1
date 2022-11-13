<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
class CreatePedidoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedido', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('cantidad');
            $table->string('modalidad', 20);
            $table->string('nombre', 20);
            $table->string('apellido', 10);
            $table->string('tel', 13);
            $table->string('calle', 30);
            $table->string('num', 6);
            $table->string('col', 30);
            $table->string('estado', 20);
            $table->integer('cod_Postal');
            $table->string('rfc_Empresa', 13)->index('llave_foranea_pedido');
            //$table->string('rfc_Empresa', 13)->unique();
            $table->timestamp('fecha_Pedido')->useCurrent();
            $table->text('nota')->nullable();
            $table->boolean('aprobacion')->default(false);
            $table->boolean('terminos')->default(true);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pedido');
    }
}
