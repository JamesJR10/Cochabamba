@extends("layouts.app")

@section("content")
<form class="w-full max-w-lg" method="POST" action="{{ route('cochabamba.update', $cochabamba) }}" enctype="multipart/form-data">
  @csrf @method('PATCH')
  <div>
    <div class="flex flex-wrap -mx-3 mb-6">
      <div class="w-full px-3">
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="nombre">
          {{ __("Nombre") }}
        </label>
        <input name="nombre" value="{{ old('nombre', $cochabamba->nombre) }}"
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
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="direccion">
          Direccion
        </label>
        <input name="direccion" value="{{ old('direccion', $cochabamba->direccion) }}"
          class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
          id="direccion" type="text">
        <p class="text-gray-600 text-xs italic"></p>
        @error("direccion")
          <div class="border border-red-400 rounded-b bg-red-100 mt-1 px-4 py-3 text-red-700">
            {{ $message }}
          </div>
        @enderror
      </div>

      <div class="w-full px-3">
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="telefono">
          Telefono
        </label>
        <input name="telefono" id="telefono" value="{{ old('telefono', $cochabamba->telefono) }}" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
        <p class="text-gray-600 text-xs italic"></p>
        @error("teleofno")
          <div class="border border-red-400 rounded-b bg-red-100 mt-1 px-4 py-3 text-red-700">
            {{ $message }}
          </div>
        @enderror
      </div>

      <div class="w-full px-3">
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="file">Imagen</label>
        <input type="file" name="file" id="file" accept="image/*" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
        <p class="text-gray-600 text-xs italic"></p>
        @error("file")
          <div class="border border-red-400 rounded-b bg-red-100 mt-1 px-4 py-3 text-red-700">
            {{ $message }}
          </div>
        @enderror
      </div>
      <div class="w-full px-3">
        <button type="submit" class="btn btn-primary">GUARDAR DATOS</button>
      </div>
</form>
@endsection
