<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Respuestas extends Model {

	//
	protected $table = 'Respuestas';
	protected $fillable	= ['Descripcion','Fk_Respuestas'];
	protected $guarded = 'id';

}
