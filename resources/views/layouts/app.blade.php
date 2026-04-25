<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIAKAD - Sistem Akademik</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-50">

    <div class="flex h-screen">
        <div class="w-64 bg-gradient-to-b from-blue-100 to-indigo-100 shadow-lg fixed h-screen overflow-y-auto">
            <div class="p-6">
                
                <div class="flex items-center gap-3 mb-12">
                    <span class="font-bold text-xl text-gray-800">Sistem Akademik</span>
                </div>

                <nav class="space-y-2">
                    <a href="{{ route('dashboard') }}" 
                       class="flex items-center gap-3 px-4 py-3 rounded-lg transition 
                              @if(request()->routeIs('dashboard')) 
                                  bg-white text-indigo-600 shadow-md border-r-4 border-indigo-600
                              @else 
                                  text-gray-600 hover:bg-white hover:text-indigo-600
                              @endif">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path>
                        </svg>
                        <span class="font-medium">Dashboard</span>
                    </a>

                    <a href="{{ route('jurusan.index') }}" 
                       class="flex items-center gap-3 px-4 py-3 rounded-lg transition 
                              @if(request()->routeIs('jurusan.*')) 
                                  bg-white text-indigo-600 shadow-md border-r-4 border-indigo-600
                              @else 
                                  text-gray-600 hover:bg-white hover:text-indigo-600
                              @endif">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M2 6a2 2 0 012-2h12a2 2 0 012 2v8a2 2 0 01-2 2H4a2 2 0 01-2-2V6zm14 1H4v6h12V7z"></path>
                        </svg>
                        <span class="font-medium">Jurusan</span>
                    </a>

                    <a href="{{ route('mahasiswa.index') }}" 
                       class="flex items-center gap-3 px-4 py-3 rounded-lg transition 
                              @if(request()->routeIs('mahasiswa.*')) 
                                  bg-white text-indigo-600 shadow-md border-r-4 border-indigo-600
                              @else 
                                  text-gray-600 hover:bg-white hover:text-indigo-600
                              @endif">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"></path>
                        </svg>
                        <span class="font-medium">Mahasiswa</span>
                    </a>

                    <a href="{{ route('matakuliah.index') }}" 
                       class="flex items-center gap-3 px-4 py-3 rounded-lg transition 
                              @if(request()->routeIs('matakuliah.*')) 
                                  bg-white text-indigo-600 shadow-md border-r-4 border-indigo-600
                              @else 
                                  text-gray-600 hover:bg-white hover:text-indigo-600
                              @endif">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M4 4a2 2 0 00-2 2v4a2 2 0 002 2V6h10a2 2 0 00-2-2H4zm2 6a2 2 0 012-2h8a2 2 0 012 2v4a2 2 0 01-2 2H8a2 2 0 01-2-2v-4zm6 4a2 2 0 100-4 2 2 0 000 4z"></path>
                        </svg>
                        <span class="font-medium">Matakuliah</span>
                    </a>
                </nav>

                <div class="absolute bottom-6 left-0 right-0 px-6">
                    <form action="{{ route('logout') }}" method="POST" class="w-full">
                        @csrf
                        <button type="submit" class="flex items-center gap-3 px-4 py-3 rounded-lg text-gray-600 hover:bg-red-50 hover:text-red-600 transition w-full border-0 bg-transparent cursor-pointer">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M3 3a1 1 0 00-1 1v12a1 1 0 102 0V4a1 1 0 00-1-1zm10.293 9.293a1 1 0 001.414 1.414l3-3a1 1 0 000-1.414l-3-3a1 1 0 10-1.414 1.414L14.586 9H7a1 1 0 100 2h7.586l-1.293 1.293z" clip-rule="evenodd"></path>
                            </svg>
                            <span class="font-medium">Logout</span>
                        </button>
                    </form>
                </div>
            </div>
        </div>

        <div class="ml-64 flex-1 flex flex-col">
            <main class="flex-1 flex items-center justify-center p-8">
                <div class="w-full max-w-5xl">
                    @yield('content')
                </div>
            </main>
        </div>
    </div>

</body>
</html>