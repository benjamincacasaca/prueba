<?php

namespace App\Http\Controllers;

use App\Citas;
use App\Mail\NuevoUsuario;
use Illuminate\Http\Request;
use App\User;
use Session;
use PDF;
use Mail;

class CitasController extends Controller
{
    public function index (Request $request){
        $filtro = 'ejemplo de variable';
        Session::put('item', '1.');
        return view("adminTemplate.citas.index", compact('filtro'));
    }

    /**
     * FUncion para guardar registro
     */
    public function store(Request $request){


        toastr()->success('Registrado con éxito.','Ejemplo ', ['positionClass' => 'toast-bottom-right']);
        return back();
    }


    /**
     * FUncion para actualizar registro
     */
    public function update(Request $request, $id){
        toastr()->info('Modificado con éxito.','Ejemplo ', ['positionClass' => 'toast-bottom-right']);
        return back();
    }

    /**
     * FUncion para eliminar registro
     */
    public function destroy($id){
        toastr()->error('Eliminado correctamente.','Ejemplo ', ['positionClass' => 'toast-bottom-right']);
        return back();
    }

    function cambiarEstado($id,$estado){
        return back();
    }

    /**
     * FUncion para exportar PDF
     */
    public function exportPdf(Request $request){

    }

    public function enviarMail(){

        return back();
    }
}
