@extends("layouts.app")
@section('content')
<div class="flex justify-center flex-wrap  p-1 mt-1">
  <div class="text-center">
    <h1 class="mb-1">{{ __("LISTA DE LOS PLATOS") }}</h1>
  </div>
</div>
<div class="container-ciudades">
  @forelse($plato as $platos)
      @if ($platos->idLocal == $cochabamba->id)
      <div class="max-w-sm rounded overflow-hidden shadow-lg card">
        <img class="w-full" src="{{$platos->url}}" id="imagen" alt="imagen" style="width:400px ;height:250px">
        <div class="px-6 py-4">
          <div class="d-flex justify-content-between align-items-center mb-3">{{ $platos->nombre }}
          </div>
        </div>
        <div class="flex items-center">

          <img class="w-10 h-10 rounded-full mr-4" src="/images/cristo.jpg" alt="imagen cristo">
          <div class="text-sm">
            <p>{{$platos->descripcion}}</p>
            <p>{{$platos->categoria}}</p>
          </div>
        </div>
      </div>
      <br>
      @else
      <div class="bg-red-100 text-center border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
        <p><strong class="font-bold">{{ __("No hay Platos por el momento") }}</strong></p>
        <span
          class="block sm:inline">{{ __("Todavía no hay nada que mostrar aquí") }}</span>
      </div>
      @endif
@empty
  <div class="bg-red-100 text-center border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
    <p><strong class="font-bold">{{ __("No hay Platos por el momento") }}</strong></p>
    <span
      class="block sm:inline">{{ __("Todavía no hay nada que mostrar aquí") }}</span>
  </div>
@endforelse
</div>
<a href="{{ route("cochabamba.index") }}" class=" btn btn-primary">Regresar</a>
@endsection
