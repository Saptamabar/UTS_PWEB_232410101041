@extends('layout.app')

@section('content')
<x-navbar> </x-navbar>
<section class="relative py-25 md:py-23 overflow-hidden">

    <div class="absolute inset-0">
        <img src="{{ asset('asset/Hero.jpg') }}" alt="Group of friends together" class="w-full h-full object-cover">
        <div class="absolute inset-0 bg-indigo-700 opacity-75"></div>
    </div>


    <div class="container mx-auto px-4 relative z-10 text-center">
        <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-6 text-white leading-tight">
            Temukan Teman yang Tepat <br> untuk Setiap Momen
        </h1>
        <p class="text-xl md:text-2xl mb-8 max-w-3xl mx-auto text-indigo-100">
            Temanin menyediakan jasa jual beli dan sewa teman untuk berbagai kebutuhan sosial Anda.
        </p>
        <div class="flex flex-col sm:flex-row justify-center gap-4">
            <a href="#layanan" class="bg-white text-indigo-600 px-8 py-4 rounded-lg font-semibold hover:bg-indigo-100 transition duration-300 transform hover:scale-105">
                Lihat Layanan
            </a>
            <a href="#kontak" class="border-2 border-white text-white px-8 py-4 rounded-lg font-semibold hover:bg-white hover:text-indigo-600 transition duration-300 transform hover:scale-105">
                Hubungi Kami
            </a>
        </div>
    </div>
</section>


    <section id="layanan" class="py-16 bg-white">
        <div class="container mx-auto px-10">
            <h2 class="text-3xl font-bold text-center mb-12 text-gray-800">Layanan Kami</h2>

            <div class="grid md:grid-cols-3 gap-8">

                <div class="bg-gray-50 p-6 rounded-lg shadow-md hover:shadow-lg transition duration-300">
                    <div class="text-indigo-500 mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-3 text-gray-800">Jual Beli Teman</h3>
                    <p class="text-gray-600">Temukan teman baru dengan sistem jual beli yang aman dan terpercaya. Pilih teman sesuai kriteria yang Anda inginkan.</p>
                </div>


                <div class="bg-gray-50 p-6 rounded-lg shadow-md hover:shadow-lg transition duration-300">
                    <div class="text-indigo-500 mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-3 text-gray-800">Sewa Teman</h3>
                    <p class="text-gray-600">Butuh teman untuk acara khusus atau sekadar menemani sehari-hari? Sewa teman sesuai kebutuhan dan durasi yang Anda inginkan.</p>
                </div>


                <div class="bg-gray-50 p-6 rounded-lg shadow-md hover:shadow-lg transition duration-300">
                    <div class="text-indigo-500 mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-3 text-gray-800">Konsultasi Pertemanan</h3>
                    <p class="text-gray-600">Kesulitan dalam pertemanan? Konsultasikan masalah Anda dengan ahli hubungan sosial kami untuk solusi terbaik.</p>
                </div>
            </div>
        </div>
    </section>


    <section id="tentang" class="py-16 bg-gray-50">
        <div class="container mx-auto px-10">
            <div class="flex flex-col md:flex-row items-center">
                <div class="md:w-1/2 mb-8 md:mb-0 md:pr-8">
                    <h2 class="text-3xl font-bold mb-6 text-gray-800">Tentang Temanin</h2>
                    <p class="text-gray-600 mb-4">Temanin adalah platform inovatif yang menghubungkan orang-orang yang membutuhkan teman dengan mereka yang bersedia menjadi teman, baik melalui sistem jual beli maupun sewa.</p>
                    <p class="text-gray-600 mb-4">Didirikan pada tahun 2023, kami telah membantu ribuan orang menemukan teman yang sesuai dengan kebutuhan mereka, baik untuk acara khusus, pendampingan sehari-hari, atau sekadar mengisi waktu luang.</p>
                    <p class="text-gray-600">Dengan sistem verifikasi yang ketat, kami menjamin keamanan dan kenyamanan semua pengguna platform kami.</p>
                </div>
                <div class="md:w-1/2">
                    <img src="{{ asset('asset/Hero.jpg') }}" alt="Tentang Temanin" class="rounded-lg shadow-lg w-full">
                </div>
            </div>
        </div>
    </section>


    <section id="testimoni" class="py-16 bg-white">
        <div class="container mx-auto px-10">
            <h2 class="text-3xl font-bold text-center mb-12 text-gray-800">Apa Kata Mereka?</h2>

            <div class="grid md:grid-cols-3 gap-8">

                <div class="bg-gray-50 p-6 rounded-lg shadow-md hover:shadow-lg transition duration-300">
                    <div class="flex items-center mb-4">
                        <div class="h-12 w-12 rounded-full overflow-hidden mr-4">
                            <img src="{{ asset('asset/Testimoni 1.jpg') }}"
                                 alt="Andi"
                                 class="w-full h-full object-cover">
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-800">Sakip</h4>
                            <p class="text-gray-500 text-sm">Pengguna sejak 2023</p>
                        </div>
                    </div>
                    <p class="text-gray-600">"Saya sangat puas dengan layanan Temanin. Berkat mereka, saya bisa menemukan teman untuk menghadiri pernikahan sepupu saya. Sangat profesional!"</p>
                    <div class="flex mt-4 text-yellow-400">
                        ★ ★ ★ ★ ★
                    </div>
                </div>


                <div class="bg-gray-50 p-6 rounded-lg shadow-md hover:shadow-lg transition duration-300">
                    <div class="flex items-center mb-4">
                        <div class="h-12 w-12 rounded-full overflow-hidden mr-4">
                            <img src="{{ asset("asset/Testimoni 2.jpg") }}"
                                 alt="Budi"
                                 class="w-full h-full object-cover">
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-800">Ekak</h4>
                            <p class="text-gray-500 text-sm">Pengguna sejak 2024</p>
                        </div>
                    </div>
                    <p class="text-gray-600">"Awalnya ragu, tapi setelah mencoba saya jadi ketagihan. Sekarang saya punya beberapa teman tetap yang saya sewa secara rutin untuk menemani hiking."</p>
                    <div class="flex mt-4 text-yellow-400">
                        ★ ★ ★ ★ ☆
                    </div>
                </div>

                <div class="bg-gray-50 p-6 rounded-lg shadow-md hover:shadow-lg transition duration-300">
                    <div class="flex items-center mb-4">
                        <div class="h-12 w-12 rounded-full overflow-hidden mr-4">
                            <img src="{{ asset('asset/Testimoni 3.jpg') }}"
                                 alt="Citra"
                                 class="w-full h-full object-cover">
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-800">rici</h4>
                            <p class="text-gray-500 text-sm">Mitra Temanin</p>
                        </div>
                    </div>
                    <p class="text-gray-600">"Sebagai mitra, saya sangat menghargai sistem yang transparan dan adil. Penghasilan tambahan dari menjadi teman sewa sangat membantu ekonomi saya."</p>
                    <div class="flex mt-4 text-yellow-400">
                        ★ ★ ★ ★ ★
                    </div>
                </div>
            </div>

        </div>
    </section>


    <section id="kontak" class="py-16 bg-indigo-600 text-white">
        <div class="container mx-auto px-10">
            <h2 class="text-3xl font-bold text-center mb-12">Hubungi Kami</h2>

            <div class="max-w-4xl mx-auto">
                <form class="grid md:grid-cols-2 gap-6">
                    <div>
                        <label for="name" class="block mb-2">Nama Lengkap</label>
                        <input type="text" id="name" class="w-full px-4 py-2 rounded-lg bg-indigo-500 border border-indigo-400 focus:outline-none focus:ring-2 focus:ring-white" placeholder="Nama Anda">
                    </div>
                    <div>
                        <label for="email" class="block mb-2">Email</label>
                        <input type="email" id="email" class="w-full px-4 py-2 rounded-lg bg-indigo-500 border border-indigo-400 focus:outline-none focus:ring-2 focus:ring-white" placeholder="email@anda.com">
                    </div>
                    <div class="md:col-span-2">
                        <label for="subject" class="block mb-2">Subjek</label>
                        <input type="text" id="subject" class="w-full px-4 py-2 rounded-lg bg-indigo-500 border border-indigo-400 focus:outline-none focus:ring-2 focus:ring-white" placeholder="Subjek pesan">
                    </div>
                    <div class="md:col-span-2">
                        <label for="message" class="block mb-2">Pesan</label>
                        <textarea id="message" rows="4" class="w-full px-4 py-2 rounded-lg bg-indigo-500 border border-indigo-400 focus:outline-none focus:ring-2 focus:ring-white" placeholder="Tulis pesan Anda di sini..."></textarea>
                    </div>
                    <div class="md:col-span-2 text-center">
                        <button type="submit" class="bg-white text-indigo-600 px-8 py-3 rounded-lg font-medium hover:bg-indigo-100 transition duration-300">Kirim Pesan</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
<x-footer> </x-footer>
@endsection

