<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetallePreguntasRecomendacionesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('detalle__preguntas__recomendaciones', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('Fk_DOFA_Pregunta');
			$table->string('Fk_Recomendaciones');
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
		Schema::drop('detalle__preguntas__recomendaciones');
	}

}
