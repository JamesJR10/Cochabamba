@extends("layouts.app")

@section("content")
<div class="flex justify-center flex-wrap  p-1 mt-1">
    <div class="text-center">
        <form class="form-inline">
          
            <input name="categoria"  class="form-control mr-sm-2" type="search" placeholder="categoria" aria-label="categoria">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
        </form>
        <h1 class="">{{ __("Platos") }}</h1>
        @if (auth()->check() && auth()->user()->role!=="0")
        <br>
        <a href="{{ route("restaurant.create") }}" class=" btn btn-success">
          Crear Nuevo Plato
        </a>
        
        <br>
        @endif
    </div>

</div>

<div class="container-ciudades">

<table class="border-separate border-2 text-center border-gray-500 mt-3" style="width: 100%">
    <thead>
        <tr>
          <th>Nombre</th>
          <th>Descripcion</th>
          <th>Categoria</th>
          <th>Imagen</th>
          <th>Local</th>
            </th>
        </tr>
    </thead>
    <tbody>
        @forelse($restaurant as $restaurant)
        <tr>
            <td class="border px-4 py-2">{{ $restaurant->nombre }}</td>
            <td class="border px-4 py-2">{{ $restaurant->descripcion }}</td>
            <td class="border px-4 py-2">{{ $restaurant->categoria }}</td>
            <td class="border px-4 py-2">
              <img height="30px" width="30px" src="{{ $restaurant->url }}" alt="">
            </td>
            <td class="border px-4 py-2">
              @foreach ($cochabamba as $cocha)
                  @if ($restaurant->idLocal == $cocha->id)
                    {{ $cocha->nombre }}
                  @endif
              @endforeach
            </td>
            @if (auth()->check() && auth()->user()->role!=="0")
            <td class="border px-4 py-2">

                <a href="{{ route("restaurant.edit", $restaurant) }}" class=" btn btn-warning">
                    <svg class="bi bi-receipt" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M1.92.506a.5.5 0 0 1 .434.14L3 1.293l.646-.647a.5.5 0 0 1 .708 0L5 1.293l.646-.647a.5.5 0 0 1 .708 0L7 1.293l.646-.647a.5.5 0 0 1 .708 0L9 1.293l.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .801.13l.5 1A.5.5 0 0 1 15 2v12a.5.5 0 0 1-.053.224l-.5 1a.5.5 0 0 1-.8.13L13 14.707l-.646.647a.5.5 0 0 1-.708 0L11 14.707l-.646.647a.5.5 0 0 1-.708 0L9 14.707l-.646.647a.5.5 0 0 1-.708 0L7 14.707l-.646.647a.5.5 0 0 1-.708 0L5 14.707l-.646.647a.5.5 0 0 1-.708 0L3 14.707l-.646.647a.5.5 0 0 1-.801-.13l-.5-1A.5.5 0 0 1 1 14V2a.5.5 0 0 1 .053-.224l.5-1a.5.5 0 0 1 .367-.27zm.217 1.338L2 2.118v11.764l.137.274.51-.51a.5.5 0 0 1 .707 0l.646.647.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.509.509.137-.274V2.118l-.137-.274-.51.51a.5.5 0 0 1-.707 0L12 1.707l-.646.647a.5.5 0 0 1-.708 0L10 1.707l-.646.647a.5.5 0 0 1-.708 0L8 1.707l-.646.647a.5.5 0 0 1-.708 0L6 1.707l-.646.647a.5.5 0 0 1-.708 0L4 1.707l-.646.647a.5.5 0 0 1-.708 0l-.509-.51z" />
                        <path fill-rule="evenodd"
                            d="M3 4.5a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zm8-6a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5z" />
                    </svg>
                </a>

                <a href="#" class=" btn btn-danger" onclick="document.getElementById('delete-restaurant').submit()
                ">

                    <svg class="bi bi-trash" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                        <path fill-rule="evenodd"
                            d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
                    </svg>
                </a>
                <form action="{{ route("restaurant.destroy", ["restaurant" => $restaurant]) }}"
                    id="delete-restaurant-{{ $restaurant->id }}-form" method="DELETE" class="hidden">
                    @csrf @method('DELETE')
                </form>
            </td>
        @endif
            

        </tr>
        @empty
        <tr>
            <td colspan="4">
                <div class="bg-red-100 text-center border border-red-400 text-red-700 px-4 py-3 rounded relative"
                    role="alert">
                    <p><strong class="font-bold">{{ __("No hay Platos") }}</strong></p>
                    <span class="block sm:inline">{{ __("Todavía no hay nada que mostrar aquí") }}</span>
                </div>
            </td>
        </tr>
        @endforelse
    </tbody>

</table>


</div>

@endsection
