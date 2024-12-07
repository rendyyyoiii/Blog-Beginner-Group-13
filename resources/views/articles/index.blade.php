@extends('layouts.app')  

@section('content')  
    <div class="container">  
        <h2 class="font-bold text-xl mb-4">Daftar Artikel</h2>  

        <table class="min-w-full bg-white shadow-md rounded-lg">  
            <thead>  
                <tr class="bg-gray-200">  
                    <th class="py-2 px-4 text-left">Judul Artikel</th>  
                    <th class="py-2 px-4 text-left">Kategori</th>  
                    <th class="py-2 px-4 text-left">Tag</th>  
                    <th class="py-2 px-4 text-right"></th>  
                </tr>  
            </thead>  
            <tbody>  
                @foreach($articles as $article)  
                    <tr class="border-b">  
                        <td class="py-2 px-4">  
                            <a href="{{ route('articles.show', $article) }}" class="text-blue-600 hover:text-blue-800 font-semibold">{{ $article->title }}</a>  
                        </td>  
                        <td class="py-2 px-4 text-gray-500">{{ $article->category->name }}</td>  
                        <td class="py-2 px-4 text-gray-500">  
                            @foreach($article->tags as $tag)  
                                <span class="inline-block bg-gray-200 rounded-full px-2 py-1 text-sm font-semibold text-gray-700 mr-1">{{ $tag->name }}</span>  
                            @endforeach  
                        </td>  
                        <td class="py-2 px-4 text-right">  
                            <a href="{{ route('articles.edit', $article) }}" class="text-blue-500 hover:text-blue-700 transition" title="Edit">  
                                <!-- Ikon Edit -->  
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline" fill="none" viewBox="0 0 24 24" stroke="currentColor">  
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.121 4.379l5.5 5.5-1.415 1.415-5.5-5.5 1.415-1.415zM2 16.5V22h5.5l11-11-5.5-5.5L2 16.5z" />  
                                </svg>  
                                <span class="text-sm">Edit</span>  
                            </a>  
                            <form action="{{ route('articles.destroy', $article) }}" method="POST" style="display:inline;">  
                                @csrf  
                                @method('DELETE')  
                                <button type="submit" class="text-red-500 hover:text-red-700 transition ml-2" title="Hapus">  
                                    <!-- Ikon Hapus -->  
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline" fill="none" viewBox="0 0 24 24" stroke="currentColor">  
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6h18M9 6v12m6-12v12m-9 0h12a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />  
                                    </svg>  
                                    <span class="text-sm">Hapus</span>  
                                </button>  
                            </form>  
                        </td>  
                    </tr>  
                @endforeach  
                <tr>  
                    <td class="py-2 px-4 text-left" colspan="4">  
                        <a href="{{ route('articles.create') }}" class="text-green-500 text-xl hover:text-green-700 transition" title="Buat Artikel Baru">  
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline" fill="none" viewBox="0 0 24 24" stroke="currentColor">  
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />  
                            </svg>   
                        </a>  
                    </td>  
                </tr>  
            </tbody>  
        </table>  
    </div>  
@endsection