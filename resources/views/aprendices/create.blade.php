@extends('layouts.app')

@section('content')

<div class="max-w-xl mx-auto bg-[var(--color--sena--black)] text-[var(--color--sena--white)] p-8 rounded-xl border border-gray-800">

    <h1 class="text-2xl font-bold mb-6">Crear Aprendiz</h1>

    @if ($errors->any())
        <div class="mb-6 bg-red-950 border-l-4 border-red-500 p-4 text-red-200 text-sm">
            <strong class="font-bold block mb-1">Se encontraron errores:</strong>
            <ul class="list-disc list-inside">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('aprendices.store') }}" method="POST" class="space-y-5">
        @csrf

        <div>
            <label class="block text-sm font-medium mb-1">Nombre:</label>
            <input
                type="text"
                name="nombre"
                value="{{ old('nombre') }}"
                class="w-full px-4 py-2 bg-black border border-gray-700 rounded-lg text-white focus:border-[var(--color--sena--green)] outline-none text-sm"
            >
        </div>

        <div>
            <label class="block text-sm font-medium mb-1">Documento:</label>
            <input
                type="text"
                name="documento"
                value="{{ old('documento') }}"
                class="w-full px-4 py-2 bg-black border border-gray-700 rounded-lg text-white focus:border-[var(--color--sena--green)] outline-none text-sm"
            >
        </div>

        <div>
            <label class="block text-sm font-medium mb-1">Correo:</label>
            <input
                type="email"
                name="correo"
                value="{{ old('correo') }}"
                class="w-full px-4 py-2 bg-black border border-gray-700 rounded-lg text-white focus:border-[var(--color--sena--green)] outline-none text-sm"
            >
        </div>

        <div>
            <label class="block text-sm font-medium mb-1">Ficha:</label>
            <input
                type="number"
                name="ficha_id"
                value="{{ old('ficha_id') }}"
                class="w-full px-4 py-2 bg-black border border-gray-700 rounded-lg text-white focus:border-[var(--color--sena--green)] outline-none text-sm"
            >
        </div>

        <div class="flex items-center justify-between pt-4 border-t border-gray-800">
            <a href="{{ route('aprendices.index') }}" class="text-sm text-gray-400 hover:text-[var(--color--sena--green)]">
                &larr; Volver al listado
            </a>

            <button type="submit" class="bg-[var(--color--sena--white)] text-[var(--color--sena--black)] hover:bg-[var(--color--sena--green)] font-bold px-5 py-2 rounded-lg">
                Guardar aprendiz
            </button>
        </div>

    </form>

</div>

@endsection