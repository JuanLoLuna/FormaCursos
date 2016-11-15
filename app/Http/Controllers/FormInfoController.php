<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Form;

class FormInfoController extends Controller
{
     public function store(Request $request){

    	$form = new Form;

		$form->Socio = $request->input('Socio');
		$form->NumSocio = $request->input('NumSocio');
    	$form->Nombre = $request->input('Nombre');
    	$form->ApPat = $request->input('ApPat');
    	$form->ApMat = $request->input('ApMat');
    	$form->FechaNacimiento = $request->input('FechaNacimiento');
    	$form->Genero = $request->input('Genero');
    	$form->Nacionalidad = $request->input('Nacionalidad');
    	$form->CP = $request->input('CP');
    	$form->Grado_Academico = $request->input('Grado_Academico');
    	$form->Institucion = $request->input('Institucion');
    	$form->Cargo = $request->input('Cargo');
    	$form->Cel = $request->input('Cel');
    	$form->Email = $request->input('Email');

    	$form->Info_Fiscal = $request->input('Info_Fiscal');
    	$form->Nombre_RS = $request->input('Nombre_RS');
    	$form->RFC = $request->input('RFC');
    	$form->Calle = $request->input('Calle');
    	$form->Num_ext = $request->input('Num_ext');
    	$form->Num_int = $request->input('Num_int');
    	$form->Colonia = $request->input('Colonia');
    	$form->Municipio = $request->input('Municipio');
    	$form->Estado = $request->input('Estado');
    	$form->CP_fiscal = $request->input('CP_fiscal');
    	$form->Email_fiscal = $request->input('Email_fiscal');

    	$form->save();
    	return redirect('/EndOfForm');
     }
}