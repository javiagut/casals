<?php

namespace App\Http\Controllers;
use App\Models\Casal;
use App\Models\Ciutat;
use Illuminate\Http\Request;

class CasalController extends Controller
{
    public function inicio(){
        $casals = Casal::all();
        return view('home',compact('casals'));
    }
    static function devolverNomCiutat($id){
        return Ciutat::find($id)->nom;
    }
    public function eliminar($id){
        Casal::find($id)->delete();
        return back()->with('status','Se ha eliminado el casal');
    }

    public function añadir(){
        if (request('nom')) {
            if (request('inici')>request('final')) {
                return back()->with('status','La data final ha de ser posterior a la inicial');
            }
            else{
                Casal::create([
                    'nom' => request('nom'),
                    'data_inici' => request('inici'),
                    'data_final' => request('final'),
                    'id_ciutat' => request('ciutat'),
                    'n_places' => request('places'),
                ]);
                $casals = Casal::all();
                return redirect('/')->with('status','Se ha añadido correctamente el casal');
            }
        }
        else{
            $ciutats = Ciutat::all();
            return view('añadir',compact('ciutats'));
        }
    }
}
