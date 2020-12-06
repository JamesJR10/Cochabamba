@extends('layouts.app')
@section('content')
<div class="flex justify-center flex-wrap  p-1 mt-1">
  <div class="text-center">
    <h1 class="mb-1">{{ __("NUEVO COMENTARIO") }}</h1>
  </div>
</div>

<div class="container-ciudades">
  <form class="w-full max-w-lg" method="POST" action="{{ route('comentario.store') }}" >
    @csrf
    <input type="hidden" name="idUser" id="idUser" value="{{ auth()->user()->id }}">
    <div>
      <div class="flex flex-wrap -mx-3 mb-6">

        <div class="w-full px-3">
          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="direccion">
            Calificacion
          </label>
          <select name="calificacion" value="{{ old("calificacion") }}"
            class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
            id="calificacion" type="text">
            <option value="">Selecciona una</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
          </select>


          <p class="text-gray-600 text-xs italic"></p>
          @error("calificacion")
            <div class="border border-red-400 rounded-b bg-red-100 mt-1 px-4 py-3 text-red-700">
              {{ $message }}
            </div>
          @enderror
        </div>

        <div class="w-full px-3">
          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="nombre">
            {{ __("Comentario") }}
          </label>
          <textarea name="comentario" value="{{ old("comentario") }}" rows="3"
            class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
            id="comentario"></textarea>
          <p class="text-gray-600 text-xs italic"></p>
          @error("comentario")
            <div class="border border-red-400 rounded-b bg-red-100 mt-1 px-4 py-3 text-red-700">
              {{ $message }}
            </div>
          @enderror
        </div>

        <div class="w-full px-3">
          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="direccion">
            Restaurante
          </label>
          <select name="idLocal" value="{{ old("idLocal") }}"
            class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
            id="idLocal">
            <option value="">Selecciona un restaurante</option>
              @foreach ($cochabamba as $cochabamba)
                <option value="{{ $cochabamba->id }}">{{ $cochabamba->nombre }}</option>
              @endforeach
          </select>


          <p class="text-gray-600 text-xs italic"></p>
          @error("idLocal")
            <div class="border border-red-400 rounded-b bg-red-100 mt-1 px-4 py-3 text-red-700">
              {{ $message }}
            </div>
          @enderror
        </div>

        <div class="w-full px-3">
          <button type="submit" class="btn btn-primary">GUARDAR DATOS</button>
        </div>
  </form>
</div>
@endsection
