@extends('layouts.app')

@section('content')

<div class="max-w-6xl mx-auto">

    <div class="flex justify-between items-center mb-6">
        <h1 class="text-3xl font-extrabold text-[var(--color--sena--white)] tracking-tight">Listado de Aprendices</h1>
        
        <a href="{{ route('aprendices.create') }}" class="inline-flex items-center bg-[var(--color--sena--green)] text-[var(--color--sena--black)] text-sm font-bold px-4 py-2 rounded-lg">
            + Nuevo aprendiz
        </a>
    </div>

    @if (session('ok'))
        <div class="mb-6 bg-emerald-950 border-l-4 border-emerald-500 p-4 text-emerald-200 text-sm">
            {{ session('ok') }}
        </div>
    @endif

    <div class="bg-[var(--color--sena--black)] rounded-xl border border-gray-800 overflow-hidden">
        <table class="min-w-full divide-y divide-gray-800 text-left">
            <thead class="bg-white text-black uppercase text-xs font-semibold">
                <tr>
                    <th class="px-6 py-3">ID</th>
                    <th class="px-6 py-3">Nombre</th>
                    <th class="px-6 py-3">Documento</th>
                    <th class="px-6 py-3">Correo</th>
                    <th class="px-6 py-3">Ficha</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-800 text-sm text-gray-300">
                @forelse ($aprendices as $aprendiz)
                    <tr class="hover:bg-gray-900">
                        <td class="px-6 py-4">{{ $aprendiz->id }}</td>
                        <td class="px-6 py-4">{{ $aprendiz->nombre }}</td>
                        <td class="px-6 py-4">{{ $aprendiz->documento }}</td>
                        <td class="px-6 py-4">{{ $aprendiz->correo }}</td>
                        <td class="px-6 py-4">{{ $aprendiz->ficha_id ?? 'Sin ficha' }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="px-6 py-10 text-center text-gray-500 italic">
                            No hay aprendices registrados.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <div class="mt-6 text-gray-300">
        {{ $aprendices->links() }}
    </div>

</div>

@endsection