<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Empresas extends Model {

	//
	protected $table = 'Empresas';
	protected $fillable	= ['Telefono','Direccion','Nombre','Fk_localidad'];
	protected $guarded = 'id';	
}
