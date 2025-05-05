@extends('layout.app')

@section('content')
<div class="flex h-screen bg-gray-100">
    <x-sidebar user="{{  $user['username']  }}"></x-sidebar>

    <div class="flex flex-col flex-1 overflow-hidden pt-16 md:pt-0">
        @include('layout.topbar', ['slot'=>'Profile'])

        <div class="flex-1 flex p-6">
            <div class="bg-white shadow rounded-lg p-8 w-full max-w-xl">
                <div class="flex flex-col">
                    <div class="flex items-center gap-5">
                        <img src="{{ asset('asset/Testimoni 1.jpg') }}" alt="User Avatar" class="w-24 h-24 rounded-full object-cover"
                        >
                        <div class="flex flex-col justify-center">
                            <h3 class="text-3xl font-bold text-gray-800">
                                {{ $user['username'] ?? 'sakip' }}
                            </h3>
                            <p class="text-gray-600">
                                {{ $user['email'] ?? 'sakipmabar@gmail.com' }}
                            </p>
                        </div>
                    </div>

                    <div class="mt-6 w-full">
                        <div class="mb-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2">Nama Pengguna</label>
                            <input type="text" value="{{ $user['username'] ?? 'sakip'}}" class="w-full px-4 py-2 border rounded-lg text-gray-700 bg-gray-100">
                        </div>

                        <div class="mb-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2">Email</label>
                            <input type="email" value="{{ $user['email'] ?? 'sakipmabar@gmail.com' }}" class="w-full px-4 py-2 border rounded-lg text-gray-700 bg-gray-100">
                        </div>

                        <div class="text-right">
                            <a href="#" class="inline-block px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700 transition">Edit Profil</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
