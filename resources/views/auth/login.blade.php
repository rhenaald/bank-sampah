<x-guest-layout>
    <div class="flex min-h-screen">
        <!-- Left Side - Image & Branding -->
        <div class="relative hidden overflow-hidden lg:flex lg:w-1/2 bg-gradient-to-br from-green-600 via-green-500 to-emerald-600">
            <!-- Decorative circles -->
            <div class="absolute top-0 right-0 -mt-48 -mr-48 rounded-full w-96 h-96 bg-white/10"></div>
            <div class="absolute bottom-0 left-0 -mb-40 -ml-40 rounded-full w-80 h-80 bg-white/10"></div>
            
            <div class="relative z-10 flex flex-col items-center justify-center w-full px-12 text-white">
                <!-- Logo/Icon -->
                <div class="mb-8">
                    <svg class="w-32 h-32 drop-shadow-2xl" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-5 14h-4v-4H7l5-5 5 5h-3v4z"/>
                    </svg>
                </div>
                
                <!-- Title -->
                <h1 class="mb-4 text-5xl font-bold text-center drop-shadow-lg">Bank Sampah</h1>
                <p class="max-w-md mb-12 text-xl text-center text-green-50">
                    Kelola sampah dengan bijak, lindungi lingkungan untuk masa depan yang lebih baik
                </p>
                
                <!-- Illustration/Image -->
                <div class="max-w-md p-8 bg-white/20 backdrop-blur-sm rounded-2xl">
                    <img src="https://plus.unsplash.com/premium_photo-1681488048176-1cd684f6be8a?q=80&w=1374&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" 
                         alt="Recycle" 
                         class="object-cover w-full h-64 shadow-2xl rounded-xl">
                </div>
                
                <!-- Features -->
                <div class="grid grid-cols-3 gap-6 mt-12 text-center">
                    <div>
                        <div class="text-3xl font-bold">♻️</div>
                        <div class="mt-2 text-sm">Ramah Lingkungan</div>
                    </div>
                    <div>
                        <div class="text-3xl font-bold">💰</div>
                        <div class="mt-2 text-sm">Menguntungkan</div>
                    </div>
                    <div>
                        <div class="text-3xl font-bold">🌱</div>
                        <div class="mt-2 text-sm">Berkelanjutan</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Right Side - Login Form -->
        <div class="flex items-center justify-center w-full px-8 py-12 lg:w-1/2 bg-gray-50">
            <div class="w-full max-w-md">
                <!-- Mobile Logo -->
                <div class="mb-8 text-center lg:hidden">
                    <div class="inline-flex items-center justify-center w-20 h-20 mb-4 bg-gradient-to-br from-green-600 to-emerald-600 rounded-2xl">
                        <svg class="w-12 h-12 text-white" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-5 14h-4v-4H7l5-5 5 5h-3v4z"/>
                        </svg>
                    </div>
                    <h2 class="text-3xl font-bold text-gray-800">Bank Sampah</h2>
                </div>

                <!-- Welcome Text -->
                <div class="mb-8">
                    <h2 class="mb-2 text-3xl font-bold text-gray-800">Selamat Datang!</h2>
                    <p class="text-gray-600">Silakan login untuk melanjutkan ke dashboard</p>
                </div>

                <!-- Session Status -->
                <x-validation-errors class="mb-4" />

                @if (session('status'))
                    <div class="p-4 mb-4 text-sm font-medium text-green-600 border border-green-200 rounded-lg bg-green-50">
                        {{ session('status') }}
                    </div>
                @endif

                <!-- Login Form -->
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <!-- Email -->
                    <div class="mb-6">
                        <label for="email" class="block mb-2 text-sm font-semibold text-gray-700">Email</label>
                        <div class="relative">
                            <input id="email" type="email" name="email" :value="old('email')" required autofocus 
                                   class="block w-full pl-12 pr-4 py-3.5 border border-gray-300 rounded-xl focus:ring-2 focus:ring-green-500 focus:border-transparent transition duration-200 bg-white text-gray-900"
                                   placeholder="nama@email.com">
                        </div>
                    </div>

                    <!-- Password -->
                    <div class="mb-6">
                        <label for="password" class="block mb-2 text-sm font-semibold text-gray-700">Password</label>
                        <div class="relative">
                            <input id="password" type="password" name="password" required
                                   class="block w-full pl-12 pr-4 py-3.5 border border-gray-300 rounded-xl focus:ring-2 focus:ring-green-500 focus:border-transparent transition duration-200 bg-white text-gray-900"
                                   placeholder="••••••••">
                        </div>
                    </div>

                    <!-- Remember Me & Forgot Password -->
                    <div class="flex items-center justify-between mb-6">
                        <label class="flex items-center">
                            <input type="checkbox" name="remember" class="w-4 h-4 text-green-600 border-gray-300 rounded shadow-sm focus:ring-green-500">
                            <span class="ml-2 text-sm text-gray-600">Ingat saya</span>
                        </label>

                        @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}" class="text-sm font-semibold text-green-600 transition duration-200 hover:text-green-700">
                                Lupa password?
                            </a>
                        @endif
                    </div>

                    <!-- Login Button -->
                    <button type="submit" 
                            class="w-full bg-gradient-to-r from-green-600 to-emerald-600 hover:from-green-700 hover:to-emerald-700 text-white font-bold py-3.5 rounded-xl transition duration-200 transform hover:scale-[1.02] shadow-lg hover:shadow-xl">
                        Masuk
                    </button>
                </form>

                <!-- Footer -->
                <div class="mt-8 text-xs text-center text-gray-500">
                    <p>© 2025 Bank Sampah. Semua hak dilindungi.</p>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>