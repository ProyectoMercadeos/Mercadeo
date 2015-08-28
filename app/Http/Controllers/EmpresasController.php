<?php namespace App\Http\Controllers;
use App\Models\Empresas as Empresas;
use App\Http\Requests;
use App\Http\Controllers;

use Illuminate\Http\Request;

class EmpresasController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	    $Empresas = Empresas::all();
		return \View::make('Empresas/listEmpresas',compact('Empresas'));

	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	  return \View::make('EMPRESAS/Empresas');

	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		//
		$Empresas = new Empresas;
		$Empresas->Nombre= $request->Nombre;
		$Empresas->Fk_localidad= $request->Fk_localidad;
		$Empresas->Telefono= $request->Telefono;
		$Empresas->Correo= $request->Correo;
		$Empresas->Direccion= $request->Direccion;
		$Empresas->save();
		return redirect('Empresas');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
		$Empresas = Empresas::find($id);
		return\View::make('EMPRESAS/UpdateEmpresas',compact('Empresas'));

	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Request $request)
	{
		//
		$Empresas = Empresas::find($request->id);
		$Empresas->Nombre = $request->Nombre;
		$Empresas->Fk_localidad = $request->Fk_localidad;
		$Empresas->Telefono = $request->Telefono;
		$Empresas->Correo = $request->Correo;
		$Empresas->Direccion = $request->Direccion;
		$Empresas->save();
		return redirect('Empresas');
	}
	
	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
		$Empresas = Empresas::find($id);
		$Empresas->delete();
		return redirect()->back();
	}

	public function search(Request $request)
	{
		$Empresas = Empresas::where('Nombre','like','%'.$request->Nom.'%')->get();
		return \View::make('Empresas/listEmpresas',compact('Empresas'));
	}


}
