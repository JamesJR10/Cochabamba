@extends("layouts.app")

@section("content")
  <div class="flex justify-center flex-wrap  p-1 mt-1">
    <div class="text-center">
      <h1 class="mb-5">{{ __("LISTA DE RESTAURANTS") }}</h1>
      @if (auth()->check() && auth()->user()->role!=="0")
      <br>
        <a href="{{ route("cochabamba.create") }}" class=" btn btn-success">
          Crear Nuevo Local
        </a>
        <br>
      @endif
    </div>
  </div>
  <div class="container-ciudades">
    @forelse($cochabamba as $cochabamba)
    <div class="max-w-sm rounded overflow-hidden shadow-lg card">
      <img class="w-full" src="{{$cochabamba->url}}" id="imagen" alt="imagen" style="width:400px ;height:250px">
      <div class="px-6 py-4">
        <div class="d-flex justify-content-between align-items-center mb-3">{{ $cochabamba->nombre }}
          @if (auth()->check() && auth()->user()->role!=="0")
          <a href="{{ route("cochabamba.edit", $cochabamba) }}" class=" btn btn-warning" title="Editar">
            <svg class="bi bi-receipt" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor"
            xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd"
              d="M1.92.506a.5.5 0 0 1 .434.14L3 1.293l.646-.647a.5.5 0 0 1 .708 0L5 1.293l.646-.647a.5.5 0 0 1 .708 0L7 1.293l.646-.647a.5.5 0 0 1 .708 0L9 1.293l.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .801.13l.5 1A.5.5 0 0 1 15 2v12a.5.5 0 0 1-.053.224l-.5 1a.5.5 0 0 1-.8.13L13 14.707l-.646.647a.5.5 0 0 1-.708 0L11 14.707l-.646.647a.5.5 0 0 1-.708 0L9 14.707l-.646.647a.5.5 0 0 1-.708 0L7 14.707l-.646.647a.5.5 0 0 1-.708 0L5 14.707l-.646.647a.5.5 0 0 1-.708 0L3 14.707l-.646.647a.5.5 0 0 1-.801-.13l-.5-1A.5.5 0 0 1 1 14V2a.5.5 0 0 1 .053-.224l.5-1a.5.5 0 0 1 .367-.27zm.217 1.338L2 2.118v11.764l.137.274.51-.51a.5.5 0 0 1 .707 0l.646.647.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.509.509.137-.274V2.118l-.137-.274-.51.51a.5.5 0 0 1-.707 0L12 1.707l-.646.647a.5.5 0 0 1-.708 0L10 1.707l-.646.647a.5.5 0 0 1-.708 0L8 1.707l-.646.647a.5.5 0 0 1-.708 0L6 1.707l-.646.647a.5.5 0 0 1-.708 0L4 1.707l-.646.647a.5.5 0 0 1-.708 0l-.509-.51z" />
            <path fill-rule="evenodd"
              d="M3 4.5a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zm8-6a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5z" />
          </svg>
        </a>

        <a href="#" class=" btn btn-danger" data-toggle="modal" data-target="#exampleModalCenter" title="Eliminar">
          <svg class="bi bi-trash" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor"
            xmlns="http://www.w3.org/2000/svg">
            <path
              d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
            <path fill-rule="evenodd"
              d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
          </svg>
        </a>
        @endif
        @if (auth()->check() && auth()->user()->role!=="1")

        <a href="{{ route('cochabamba.show', $cochabamba) }}" class=" btn btn-primary" title="Ver Platos">
          <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-eye-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
            <path fill-rule="evenodd" d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
          </svg>
        </a>
        @endif
        @if (auth()->check() && auth()->user()->role!=="0")

        <a href="{{ route('cochabamba.comentario', $cochabamba) }}" class=" btn btn-info" title="Comentarios">
          <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chat-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path d="M8 15c4.418 0 8-3.134 8-7s-3.582-7-8-7-8 3.134-8 7c0 1.76.743 3.37 1.97 4.6-.097 1.016-.417 2.13-.771 2.966-.079.186.074.394.273.362 2.256-.37 3.597-.938 4.18-1.234A9.06 9.06 0 0 0 8 15z"/>
          </svg>
        </a>
          @endif
        </div>
      </div>
      <div class="flex items-center">

        <img class="w-10 h-10 rounded-full mr-4" src="/images/cristo.jpg" alt="imagen cristo">
        <div class="text-sm">
          <p>{{$cochabamba->direccion}}</p>
          <p>{{$cochabamba->telefono}}</p>
        </div>
      </div>
    </div>
    <br>
    <!-- MODAL DE ELIMINADO LOGICO-->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="exampleModalCenterTitle">Elimnar Local</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
          </div>
          <form method="POST" action="{{ route('cochabamba.destroy', $cochabamba) }}">
              @csrf @method('DELETE')
              <input type="hidden" id="idDelete" name="idDelete" value="">
              <div class="modal-body">
                  ¿Estas seguro que deseas eliminar el Local?
              </div>
              <div class="modal-footer">
                  <button class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                  <button class="btn btn-danger btn-danger">Eliminar</button>
              </div>
          </form>
      </div>
  </div>
</div>
<!-- FINAL DEL MODAL DE ELIMINADO LOGICO-->
  @empty
    <div class="bg-red-100 text-center border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
      <p><strong class="font-bold">{{ __("No hay restaurants por el momento") }}</strong></p>
      <span
        class="block sm:inline">{{ __("Todavía no hay nada que mostrar aquí") }}</span>
    </div>
  @endforelse
  </div>


    
      

@endsection
