<!DOCTYPE html>  
<html lang="en">  
<head>  
    <meta charset="UTF-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <title>Blog-Group-13</title>  
    @vite('resources/js/app.js')  
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">  
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}"> <!-- Pastikan ini ada -->  
</head>  
<body class="bg-gray-100">  
    <div class="container mx-auto p-4">  
        <header class="mb-4 bg-white shadow-md rounded-lg p-4">  
            <h1 class="text-3xl font-bold text-gray-800 text-center">Blog-group-13</h1>  
        </header>  

        <div class="flex">  
            <!-- Navigasi Kiri -->  
            <nav class="w-1/4 bg-white shadow-md rounded-lg p-4 mr-4">   
                <ul>  
                    <li class="mb-2">  
                        <a href="{{ route('home') }}" class="text-blue-500 hover:text-blue-700 transition">Beranda</a>  
                    </li>   
                    <li class="mb-2">  
                        <a href="{{ route('articles.index') }}" class="text-blue-500 hover:text-blue-700 transition">Articles</a>  
                    </li>  
                    <li class="mb-2">  
                        <a href="{{ route('categories.index') }}" class="text-blue-500 hover:text-blue-700 transition">Categories</a>  
                    </li>  
                    <li class="mb-2">  
                        <a href="{{ route('tags.index') }}" class="text-blue-500 hover:text-blue-700 transition">Tags</a>  
                    </li>
                    <li class="mb-2">  
                        <a href="{{ route('about') }}" class="text-blue-500 hover:text-blue-700 transition">About Me</a>  
                    </li>   
                </ul>  
            </nav>  

            <!-- Konten Utama -->  
            <main class="flex-1 bg-white shadow-md rounded-lg p-4">  
                @if(session('success'))  
                    <div class="bg-green-500 text-white p-2 rounded-lg mb-4">  
                        {{ session('success') }}  
                    </div>  
                @endif  

                @yield('content')  
            </main>  
        </div>  
    </div>  
</body>  
</html>