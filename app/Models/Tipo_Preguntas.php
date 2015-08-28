<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tipo_Preguntas extends Model {

	//
	protected $table = 'Tipo_Preguntas';
	protected $fillable	= ['Descripcion','Fk_Pregunta'];
	protected $guarded = 'id';
}
