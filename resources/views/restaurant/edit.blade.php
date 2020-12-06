@extends("layouts.app")

@section("content")
    <div class="flex justify-center flex-wrap p-4 mt-5">
      <div class="flex justify-center flex-wrap  p-1 mt-1">
        <div class="text-center">
          <h1 class="mb-1">{{ __("EDITAR PLATO") }}</h1>
        </div>
      </div>
      <div class="container-ciudades">
        <div class="container">
          <form class="w-full max-w-lg" method="POST" action="{{ route('restaurant.update', $restaurant) }}" enctype="multipart/form-data">
            @csrf @method('PATCH')
            <div>
              <div class="flex flex-wrap -mx-3 mb-6">
                <div class="w-full px-3">
                  <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="nombre">
                    {{ __("Nombre") }}
                  </label>
                  <input name="nombre" value="{{ old("nombre", $restaurant->nombre) }}"
                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                    id="nombre" type="text">
                  <p class="text-gray-600 text-xs italic"></p>
                  @error("nombre")
                    <div class="border border-red-400 rounded-b bg-red-100 mt-1 px-4 py-3 text-red-700">
                      {{ $message }}
                    </div>
                  @enderror
                </div>

                <div class="w-full px-3">
                  <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="nombre">
                    {{ __("Descripcion") }}
                  </label>
                  <textarea name="descripcion" value="{{ old('descripcion', $restaurant->descripcion) }}" rows="3"
                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                    id="descripcion"></textarea>
                  <p class="text-gray-600 text-xs italic"></p>
                  @error("descripcion")
                    <div class="border border-red-400 rounded-b bg-red-100 mt-1 px-4 py-3 text-red-700">
                      {{ $message }}
                    </div>
                  @enderror
                </div>

                <div class="w-full px-3">
                  <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="telefono">
                    Categoria
                  </label>
                  <input name="categoria" id="categoria" value="{{ old("categoria", $restaurant->categoria) }}"
                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                    type="text">
                  <p class="text-gray-600 text-xs italic"></p>
                  @error("categoria")
                    <div class="border border-red-400 rounded-b bg-red-100 mt-1 px-4 py-3 text-red-700">
                      {{ $message }}
                    </div>
                  @enderror
                </div>

                <div class="w-full px-3">
                  <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="file">Imagen</label>
                  <input type="file" name="file" id="file" accept="image/*"
                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                  <p class="text-gray-600 text-xs italic"></p>
                  @error("file")
                    <div class="border border-red-400 rounded-b bg-red-100 mt-1 px-4 py-3 text-red-700">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
                <div class="w-full px-3">
                  <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="direccion">
                    Restaurante
                  </label>
                  <select name="idLocal"
                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                    id="idLocal">
                    <option value="">Selecciona un restaurante</option>
                    @foreach($cochabamba as $cochabamba)
                      <option value="{{ $cochabamba->id }}">{{ $cochabamba->nombre }}</option>
                    @endforeach
                  </select>
                  <div class="w-full px-3">
                    <button type="submit" class="btn btn-primary">GUARDAR DATOS</button>
                  </div>
          </form>
        </div>
      </div>
    </div>
@endsection
