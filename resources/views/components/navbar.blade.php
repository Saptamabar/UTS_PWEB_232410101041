<nav class="bg-indigo-600 text-white shadow-lg">
    <div class="container mx-auto sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16">
            <div class="flex items-center">
                <div class="flex items-center space-x-2">
                    <img src="{{ asset('appicon.svg') }}" class="h-8 w-8" alt="">

                    <span class="text-xl font-bold">Temanin</span>
                </div>
            </div>

            <div class="flex items-center space-x-5">
                <div class="hidden md:flex">
                    <a href="#" class="hover:text-indigo-200 font-medium px-3 py-2">Beranda</a>
                    <a href="#layanan" class="hover:text-indigo-200 font-medium px-3 py-2">Layanan</a>
                    <a href="#tentang" class="hover:text-indigo-200 font-medium px-3 py-2">Tentang Kami</a>
                    <a href="#testimoni" class="hover:text-indigo-200 font-medium px-3 py-2">Testimoni</a>
                    <a href="#kontak" class="hover:text-indigo-200 font-medium px-3 py-2">Kontak</a>
                </div>


                <div class="hidden md:block">
                    <a href="/login" class="whitespace-nowrap inline-flex items-center justify-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-indigo-600 bg-white hover:bg-indigo-50 transition duration-300">
                        Masuk
                    </a>
                </div>
                <div class="md:hidden flex items-center">
                    <button class="mobile-menu-button inline-flex items-center justify-center p-2 rounded-md text-indigo-200 hover:text-white hover:bg-indigo-500 focus:outline-none transition duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Menu Mobile -->
    <div class="mobile-menu hidden md:hidden bg-indigo-700 px-4 py-2 gap-2">
        <a href="#" class="block px-3 py-2 hover:text-indigo-200">Beranda</a>
        <a href="#layanan" class="block px-3 py-2 hover:text-indigo-200">Layanan</a>
        <a href="#tentang" class="block px-3 py-2 hover:text-indigo-200">Tentang Kami</a>
        <a href="#testimoni" class="block px-3 py-2 hover:text-indigo-200">Testimoni</a>
        <a href="#kontak" class="block px-3 py-2 hover:text-indigo-200">Kontak</a>
        <a href="/login" class="block px-3 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-indigo-600 bg-white hover:bg-indigo-50 transition duration-300">Masuk</a>
    </div>
</nav>

<script>
    const btn = document.querySelector('.mobile-menu-button');
    const menu = document.querySelector('.mobile-menu');

    btn.addEventListener('click', () => {
        menu.classList.toggle('hidden');
    });
</script>
