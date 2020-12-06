@extends('layouts.app')
@section('content')
<div class="flex justify-center flex-wrap  p-1 mt-1">
  <div class="text-center">
    <h1 class="mb-1">{{ __("Comentarios del local") }}</h1>
    @auth
    <br>
      <a href="{{ route("comentario.create") }}" class=" btn btn-success">
        Crear Nuevo Comentario
      </a>
      <br>
    @endauth
  </div>
</div>
<div class="container-ciudades">

<div class="container-ciudades">
  @forelse($comentario as $comentarios)
      @if ($comentarios->idLocal == $cochabamba->id)
      <div class="max-w-sm rounded overflow-hidden shadow-lg card">
        <div class="px-6 py-4">
          @foreach ($user as $users)
            @if ($comentarios->idUser == $users->id)
              <div class="d-flex justify-content-between align-items-center mb-3">{{ $users->name }}
            @endif
          @endforeach
          </div>
        </div>
        <div class="flex items-center">
          <img class="w-10 h-10 rounded-full mr-4" src="/images/cristo.jpg" alt="imagen cristo">
          <div class="text-sm">
            <p>Calificacion: {{$comentarios->calificacion}}</p>
            <p>Comentario: {{$comentarios->comentario}}</p>
          </div>
        </div>
      </div>
      <br>
      @endif
@empty
  <div class="bg-red-100 text-center border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
    <p><strong class="font-bold">{{ __("No hay Comentarios por el momento") }}</strong></p>
    <span
      class="block sm:inline">{{ __("Todavía no hay nada que mostrar aquí") }}</span>
  </div>
@endforelse
</div>
<a href="{{ route("cochabamba.index") }}" class=" btn btn-primary">Regresar</a>
@endsection
