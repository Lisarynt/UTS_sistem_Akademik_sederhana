<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Sistem Akademik</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-white">

    <div class="flex h-screen">
        
        <div class="w-full md:w-1/2 flex items-center justify-center px-8">
            <div class="w-full max-w-sm">
                
                <div class="mb-11">
                    <h1 class="text-3xl font-extrabold mb-2" style="color: #2a3f8f;">Login</h1>
                    <p class="text-sm text-gray-400">Welcome to Sistem Akademik</p>
                </div>
                
                @if(session('error'))
                    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4 text-sm">
                        {{ session('error') }}
                    </div>
                @endif

                <form action="{{ route('login.proses') }}" method="POST" class="space-y-6">
                    @csrf
                    
                    <div>
                        <div class="flex items-center border border-gray-300 rounded px-3 py-2 hover:border-blue-400 transition">
                            <span class="text-gray-400 mr-2">👤</span>
                            <input type="email" name="email" id="email" 
                                   class="w-full outline-none text-gray-700 bg-white" 
                                   placeholder="Username or email" required>
                        </div>
                    </div>
                    
                    <div>
                        <div class="flex items-center border border-gray-300 rounded px-3 py-2 hover:border-blue-400 transition">
                            <span class="text-gray-400 mr-2">🔒</span>
                            <input type="password" name="password" id="password" 
                                   class="w-full outline-none text-gray-700 bg-white" 
                                   placeholder="password" required>
                        </div>
                    </div>
                    
                    <button type="submit" 
                            class="w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded transition duration-200 mt-6">
                        Login
                    </button>
                </form>
            </div>
        </div>

        <div class="hidden md:flex w-1/2 relative overflow-hidden">
            <div class="absolute top-20 bottom-20 left-0 right-0 flex items-center justify-center w-full">
                <img src="{{ asset('img/login.png') }}" alt="Sistem Akademik" class="w-4/5 h-4/5 object-contain">
            </div>
        </div>
    </div>

    <footer class="fixed bottom-0 left-0 right-0 text-center text-gray-500 text-xs py-3 bg-white border-t border-gray-200">
        &copy; {{ date('Y') }} Sistem Akademik. Lisa Ayu Aryanti
    </footer>

</body>
</html>