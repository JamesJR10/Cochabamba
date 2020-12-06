<form class="w-full max-w-lg" method="POST" action="{{ $route }}" enctype="multipart/form-data">
    @csrf
    @isset($update)
        @method("PUT")
    @endisset
  <div>
    <div class="flex flex-wrap -mx-3 mb-6">
        <div class="w-full px-1">
            <label class="block uppercase tracking-wide text-gray-600 text-xs font-bold mb-2" for="nombre">
                {{ __("Nombre") }}
            </label>
            <input name="nombre" value="{{ old("nombre") ?? $cochabamba->nombre }}" class="appearance-none block w-full bg-gray-300 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="name" type="text">
            <p class="text-gray-600 text-xs italic"></p>
            @error("nombre")
            <div class="border border-red-400 rounded-b bg-red-100 mt-1 px-4 py-3 text-red-700">
                {{ $message }}
            </div>
            @enderror
        </div>
    </div>
    {{-- <div class="flex flex-wrap -mx-3 mb-6">
        <div class="w-full px-3">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="telefono">
                {{ __("Telefono") }}
            </label>
            <input name="telefono" value="{{ old("telefono") ?? $cochabamba->telefono }}" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="telefono" type="text">
            <p class="text-gray-600 text-xs italic"></p>
            @error("telefono")
            <div class="border border-red-400 rounded-b bg-red-100 mt-1 px-4 py-3 text-red-700">
                {{ $message }}
            </div>
            @enderror
        </div>
    </div>
    <div class="flex flex-wrap -mx-3 mb-6">
        <div class="w-full px-3">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="direccion">
                {{ __("direccion") }}
            </label>
            <input name="direccion" value="{{ old("direccion") ?? $cochabamba->direccion }}" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="direccion" type="text">
            <p class="text-gray-600 text-xs italic"></p>
            @error("direccion")
            <div class="border border-red-400 rounded-b bg-red-100 mt-1 px-4 py-3 text-red-700">
                {{ $message }}
            </div>
            @enderror
        </div>
    </div>
    <div class="flex flex-wrap -mx-3 mb-6">
        <div class="w-full px-3">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="descripcion">
                {{ __("descripcion") }}
            </label>
            <textarea name="descripcion" class="no-resize appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 h-48 resize-none" id="descripcion">{{ old("descripcion") ?? $cochabamba->descripcion }}</textarea>
            @error("descripcion")
            <div class="border border-red-400 rounded-b bg-red-100 mt-1 px-4 py-3 text-red-700">
                {{ $message }}
            </div>
            @enderror
        </div>
    </div> --}}
      <div class="form-group">
            <label for="imagen">imagen</label>
            <input type="file" name="imagen" id="imagen" >
      </div>
      <button type="submit" class="btn btn-primary">guardar</button>
  </div>

</form>