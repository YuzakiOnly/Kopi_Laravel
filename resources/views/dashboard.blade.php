<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- Original welcome card -->
            <div class="overflow-hidden bg-gradient-to-r from-amber-800 to-amber-600 rounded-lg shadow-xl mb-8">
                {{-- <div class="p-6 center text-white">
                    @if (Auth::user()->role === 'admin')
                    <h1>Selamat Datang Admin</h1>
                    @elseif (Auth::user()->role ==='moderator')
                    <h1>Selamat Datang Moderator</h1>
                    @elseif (Auth::user()->role ==='pengguna')
                    <h1>Selamat Datang Pengguna</h1>
                    @endif
                </div> --}}
            </div>

            <!-- Hero Section -->
            <div class="bg-gradient-to-r from-amber-800 to-amber-600 rounded-lg shadow-xl mb-8">
                <div class="p-8 text-center">
                    <h2 class="text-3xl font-bold text-white mb-4">Selamat Datang di Warung Kopi Kita</h2>
                    <p class="text-white text-lg mb-6">Nikmati racikan kopi pilihan dengan suasana yang nyaman dan harga
                        bersahabat</p>
                    <button
                        class="bg-white text-amber-800 px-6 py-2 rounded-full font-semibold hover:bg-amber-50 transition-colors">
                        <x-nav-link :href="route('products.index')" :active="request()->routeIs('products.index')">
                            {{ __('Lihat Produk') }}
                        </x-nav-link>
                    </button>
                </div>
            </div>

            <!-- Menu Highlights Grid -->
            <div class="grid md:grid-cols-3 gap-6 mb-8">
                <!-- Coffee Menu -->
                <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow">
                    <div class="w-12 h-12 bg-amber-100 rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-amber-800" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Menu Kopi</h3>
                    <p class="text-gray-600">Berbagai pilihan kopi dari biji pilihan: Arabika, Robusta, dan racikan
                        spesial warung.</p>
                    <div class="mt-4 space-y-2">
                        <div class="flex justify-between">
                            <span>Kopi Lette</span>
                            <span class="font-semibold">Rp 30.000</span>
                        </div>
                        <div class="flex justify-between">
                            <span>Kopi Hitam</span>
                            <span class="font-semibold">Rp 10.000</span>
                        </div>
                        <div class="flex justify-between">
                            <span>Kopi Susu</span>
                            <span class="font-semibold">Rp 15.000</span>
                        </div>
                    </div>
                </div>

                <!-- Snacks Menu -->
                <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow">
                    <div class="w-12 h-12 bg-amber-100 rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-amber-800" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Cemilan</h3>
                    <p class="text-gray-600">Pelengkap kopi dengan cemilan tradisional dan modern yang menggugah selera.
                    </p>
                    <div class="mt-4 space-y-2">
                        <div class="flex justify-between">
                            <span>Pisang Goreng</span>
                            <span class="font-semibold">Rp 8.000</span>
                        </div>
                        <div class="flex justify-between">
                            <span>Kentang Goreng</span>
                            <span class="font-semibold">Rp 10.000</span>
                        </div>
                        <div class="flex justify-between">
                            <span>Roti Bakar</span>
                            <span class="font-semibold">Rp 12.000</span>
                        </div>
                    </div>
                </div>

                <!-- Special Menu -->
                <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow">
                    <div class="w-12 h-12 bg-amber-100 rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-amber-800" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Menu Spesial</h3>
                    <p class="text-gray-600">Menu spesial warung dengan racikan unik dan rasa yang tak terlupakan.</p>
                    <div class="mt-4 space-y-2">
                        <div class="flex justify-between">
                            <span>Es Kopi Susu</span>
                            <span class="font-semibold">Rp 12.000</span>
                        </div>
                        <div class="flex justify-between">
                            <span>Vietnamese Drip</span>
                            <span class="font-semibold">Rp 15.000</span>
                        </div>
                        <div class="flex justify-between">
                            <span>Avocado Coffee</span>
                            <span class="font-semibold">Rp 20.000</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Info Section -->
            <div class="bg-white rounded-lg shadow-md p-8">
                <div class="text-center mb-8">
                    <h2 class="text-2xl font-bold text-gray-800">Mengapa Memilih Kami?</h2>
                </div>
                <div class="grid md:grid-cols-3 gap-6">
                    <div class="text-center">
                        <div class="text-4xl font-bold text-amber-800">100%</div>
                        <div class="text-gray-600 mt-2">Biji Kopi Pilihan</div>
                    </div>
                    <div class="text-center">
                        <div class="text-4xl font-bold text-amber-800">15+</div>
                        <div class="text-gray-600 mt-2">Varian Menu</div>
                    </div>
                    <div class="text-center">
                        <div class="text-4xl font-bold text-amber-800">5.0</div>
                        <div class="text-gray-600 mt-2">Rating Pelanggan</div>
                    </div>
                </div>
            </div>

            <!-- Operating Hours -->
            <div class="bg-white rounded-lg shadow-md p-8 mt-8">
                <div class="text-center">
                    <h2 class="text-2xl font-bold text-gray-800 mb-4">Jam Operasional</h2>
                    <div class="space-y-2">
                        <p class="text-gray-600">Senin - Jumat: 09.00 - 22.00</p>
                        <p class="text-gray-600">Sabtu: 10.00 - 23.59</p>
                        <p class="text-gray-600">Minggu: <span class="text-red-600">Libur 24 Jam</span></p>
                    </div>
                </div>
            </div>

            <!-- Google Maps Embed -->
            <div class="mt-20">
                <h2 class="text-center text-xl font-semibold text-gray-700 mb-4">Lokasi Kami Warung Kopi</h2>
                <div class="relative w-full h-80">
                    <iframe class="w-full h-full rounded-lg shadow-lg"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d987.2747456518942!2d114.37512841859532!3d-8.19278346937145!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd145cfd7b82b3b%3A0x443e83f6f4e9cc3e!2sAMENK%20SALAD!5e0!3m2!1sen!2sid!4v1731639932760!5m2!1sen!2sid"
                        allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
