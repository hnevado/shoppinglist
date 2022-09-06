<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        @vite('resources/css/app.css')
        <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
    </head>
    <body class="bg-gray-200 py-10">
     <div class="max-w-lg bg-white mx-auto p-5 rounded shadow">
        <form action="{{route('store')}}" method="POST" class="flex mb-4">
            @csrf 
            <input type="text" name="name" class="rounded-l bg-gray-200 p-4 w-full outline-none" placeholder="Nuevo producto" autocomplete="off">
            <button type="submit" class="rounded-r px-8 bg-blue-500 text-white font-weight outline-none">Agregar</button>
        </form>

        <h4 class="mt-8 mb-4 text-2xl font-bold uppercase mb-4 border text-center">Lista de la compra</h4>
        
        <form class="text-center mb-6" method="POST" action="{{route('destroyAll')}}" onsubmit="return confirm('Seguro que quieres vaciar la lista?')"> 
            @csrf 
            @method('DELETE')
            <button type="submit" class="px-3 rounded bg-red-500 text-white uppercase">Limpiar lista</button>
        </form>

        <table class="w-full">
            @forelse ($tags as $tag)
         <tr>
           <td class="border px-4 py-2">{{$tag->name}} </td>
           <td class="px-4 py-2 border">
             <form action="{{route('destroy', $tag)}}" method="POST">
                @csrf 
                @method('DELETE')
                <button type="submit" class="px-3 rounded bg-red-500 text-white">X</button>
             </form>
           </td>
        </tr>
            @empty

            <tr>
                <td>
                    <p>No hay productos creados</p>
                </td>
            </tr>

            @endforelse
        </table>
      </div>
    </body>
</html>
