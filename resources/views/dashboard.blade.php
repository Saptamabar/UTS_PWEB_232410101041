@extends('layout.app')

@section('content')
<div class="flex h-screen bg-gray-100">
    <x-sidebar></x-sidebar>

    <div class="flex flex-col flex-1 overflow-hidden pt-16 md:pt-0">
        @include('layout.topbar', ['slot'=>'Dashboard'])

        <div class="flex justify-center p-4">
            <div class="bg-white rounded-lg w-full shadow p-6 text-center">
                <h3 class="text-gray-900 text-2xl font-medium">Selamat datang {{ $user['username'] }}</h3>
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
