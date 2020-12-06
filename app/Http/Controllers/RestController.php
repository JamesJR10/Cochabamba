<?php

namespace App\Http\Controllers;

use App\Models\Cochabamba;
use App\Models\Plato;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\File;
use Illuminate\Support\Facades\Storage;

class RestController extends Controller
{
    public function __construct(){
      $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $restaurant =Plato::all();
        $cochabamba = Cochabamba::all();

        return view("restaurant.index",[
          'restaurant' => $restaurant,
          'cochabamba' => $cochabamba]);
    }


    public function create()
    {
        $cochabamba = Cochabamba::all();
        $restaurant = new Plato;
        $title = __("Crear Restaurant");
        $textButton = __("Crear");
        $route = route("restaurant.store");
        return view("restaurant.create", compact("title", "textButton", "route", "restaurant", 'cochabamba'));
    }

    public function store(Request $request)
    {
      $request->validate([
        'nombre' => 'required',
        'descripcion' => 'required',
        'categoria' => 'required',
        'file' => 'required|image|max:1024',
        'idLocal' => 'required'
      ]);

      $imagen = $request->file('file')->store('public/storage/imagenes');

      $url = Storage::url($imagen);

      Plato::create([
        'nombre' => request('nombre'),
        'descripcion' => request('descripcion'),
        'categoria' => request('categoria'),
        'url' => $url,
        'idLocal' => request('idLocal'),
      ]);
      return redirect()->route('restaurant.index');

        // $this->validate($request, [
        //     "name" => "required|max:140|unique:rest",
        //     "desciption" => "nullable|string|min:10"
        // ]);
        // Plato::create($request->only("name", "desciption"));
        // return redirect(route("restaurant.index"))
        //     ->with("success", __("Restaurant creado!"));

    }

    public function edit(Plato $restaurant)
    {
      $cochabamba = Cochabamba::all();
      return view('restaurant.edit', [
        'restaurant' => $restaurant,
        'cochabamba' => $cochabamba
      ]);
        // $update = true;
        // $title = __("Editar Restaurant");
        // $textButton = __("Actualizar");
        // $route = route("restaurant.update", ["restaurant" => $restaurant]);
        // return view("restaurant.edit", compact("update", "title", "textButton", "route", "restaurant"));
    }

    public function update(Request $request, Plato $restaurant)
    {
      $imagen = $request->file('file')->store('public/imagenes');

      $url = Storage::url($imagen);
      $restaurant->update([
        'nombre' => request('nombre'),
        'descripcion' => request('descripcion'),
        'categoria' => request('categoria'),
        'url' => $url,
        'idLocal' => request('idLocal'),
      ]);
      return redirect()->route('restaurant.index')->with('status', 'El local se ha actualizado');
        // $this->validate($request, [
        //     "name" => "required|unique:rest,name," . $restaurant->id,
        //     "desciption" => "nullable|string|min:10"
        // ]);
        // $restaurant->fill($request->only("name", "desciption"))->save();
        // return back()->with("success", __("Restaurant actualizado!"));
    }

    public function destroy(Plato $restaurant)
    {
        $restaurant->delete();
        return back()->with("success", __("Restaurant eliminado!"));
    }
}
