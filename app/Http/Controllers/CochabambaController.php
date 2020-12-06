<?php

namespace App\Http\Controllers;

use App\Models\Cochabamba;
use Illuminate\Http\Request;
  use Illuminate\Http\Response;
use App\File;
use App\Models\ComenRest;
use App\Models\Plato;
use App\Models\User;
use Illuminate\Support\Facades\Storage;

class CochabambaController extends Controller
{
    public function __construct(){
        $this->middleware('auth')->except('index');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cochabamba =Cochabamba::paginate();
        return view("cochabamba.index",compact("cochabamba"));
    }
    public function create()
    {
        $cochabamba = new Cochabamba;
        $title = __("Crear cochabamba");
        $textButton = __("Crear");
        $route = route("cochabamba.store");
        return view("cochabamba.create", compact("title", "textButton", "route", "cochabamba"));
    }

    public function store(Request $request)
    {
      $request->validate([
        'nombre' => 'required',
        'direccion' => 'required',
        'telefono' => 'required',
        'file' => 'required|image|max:1024'
      ]);

      $imagen = $request->file('file')->store('public/imagenes');

      $url = Storage::url($imagen);

      Cochabamba::create([
        'nombre' => request('nombre'),
        'direccion' => request('direccion'),
        'telefono' => request('telefono'),
        'url' => $url,
      ]);

        return redirect()->route('cochabamba.index');
        /* if($request->hasFile('imagen')){
            $file=$request->file('imagen');
            $nombre=time().$file->getClientOriginalName();
            $file->move(public_path().'/images/base/',$nombre);
        }
        $cochabamba=new Cochabamba();
        $cochabamba->nombre=$request->input('nombre');
        $cochabamba->imagen=$nombre;
        $cochabamba->save(); */
        // $cochabamba=$request->all();
        // if($imagen=$request->file('file')){

        //     $nombre=$imagen->getClientOriginalName();
        //     $imagen->move('/images/base/',$nombre);

        //     $cochabamba['imagen']=$nombre;
        // }
        // Cochabamba::create($cochabamba);
        // return redirect(route("cochabamba.index"))->with("success", __("cochabamba creado!"));
        /* Cochabamba::create($request->only("nombre", "descripcion","telefono","direccion"));
        return redirect(route("cochabamba.index"))
            ->with("success", __("cochabamba creado!")); */
    }

    public function edit (Cochabamba $cochabamba){
      return view('cochabamba.edit', [
        'cochabamba' => $cochabamba,
      ]);
    }

    public function update (Request $request, Cochabamba $cochabamba){
      $imagen = $request->file('file')->store('public/imagenes');

/*       $url = Storage::url($imagen);
 */      $cochabamba->update([
        'nombre' => request('nombre'),
        'direccion' => request('direccion'),
        'telefono' => request('telefono'),
        /* 'url' => $url, */
      ]);
      return redirect()->route('cochabamba.index')->with('status', 'El local se ha actualizado');
    }
    public function destroy (Cochabamba $cochabamba){
      $cochabamba->delete();
      return redirect()->route('cochabamba.index')->with('status', 'El local fue eliminado');
    }

    public function show (Cochabamba $cochabamba){
      $plato = Plato::all();
      return view('cochabamba.show', [
        'cochabamba' => $cochabamba,
        'plato' => $plato
      ]);
    }
    public function comentario (Cochabamba $cochabamba){
      $comen = ComenRest::all();
      $user = User::all();
      return view('cochabamba.comentario', [
        'cochabamba' => $cochabamba,
        'comentario' => $comen,
        'user' => $user
      ]);
    }
}
