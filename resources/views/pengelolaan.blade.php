@extends('layout.app')

@section('content')
<div class="flex h-screen bg-gray-100">
    <x-sidebar></x-sidebar>
    <div class="flex flex-col flex-1 overflow-hidden pt-16 md:pt-0">
        @include('layout.topbar', ['slot'=>'Pengelolaan'])

        <div class="flex-1 overflow-auto p-4">
            <div class="flex justify-between items-center mb-6">
                <div class="relative w-full max-w-md">
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                        <svg class="h-5 w-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <input id="search" type="text" class="block w-full pl-10 pr-3 py-2 border border-gray-300 rounded-md leading-5 bg-white placeholder-gray-500 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="Cari teman...">
                </div>
                <button id="add-friend-btn" class="ml-4 inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Tambah Teman
                </button>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach ($friends as $friend)
                <div class="bg-white shadow rounded-lg p-6 flex items-center gap-5">
                    <img src="{{ asset($friend['foto']) }}" alt="{{ $friend['username'] }}" class="w-24 h-24 rounded-full">
                    <div class="flex flex-col justify-center flex-1">
                        <h3 class="text-2xl font-bold text-gray-800">{{ $friend['username'] }}</h3>
                        <p class="text-gray-600 mb-4">{{ $friend['email'] }}</p>
                        <div class="flex space-x-2">
                            <button class="px-4 py-2 bg-indigo-600 text-white rounded-md hover:bg-indigo-700 transition">Edit</button>
                            <button class="px-4 py-2 bg-red-600 text-white rounded-md hover:bg-red-700 transition">Hapus</button>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>


        </div>
    </div>
</div>


<script>
    document.getElementById('mobile-menu-button').addEventListener('click', function() {
        const menu = document.getElementById('mobile-menu');
        menu.classList.toggle('hidden');
    });
</script>

@endsection
