@extends('layouts.app')  

@section('content')  
    <h2 class="text-2xl font-bold mb-4">Daftar Artikel</h2>  
    
    <table class="min-w-full bg-white border border-gray-300">  
        <thead>  
            <tr class="bg-gray-200">  
                <th class="py-2 px-4 border-b text-left">Judul Artikel</th>  
                <th class="py-2 px-4 border-b text-left">Kategori</th>  
                <th class="py-2 px-4 border-b text-left">Tag</th>  
            </tr>  
        </thead>  
        <tbody>  
            @foreach($articles as $article)  
                <tr>  
                    <td class="py-2 px-4 border-b">  
                        <a href="{{ route('articles.show', $article) }}" class="text-blue-600 hover:underline">{{ $article->title }}</a>  
                    </td>  
                    <td class="py-2 px-4 border-b">  
                        {{ $article->category->name }}  
                    </td>  
                    <td class="py-2 px-4 border-b">  
                        @foreach($article->tags as $tag)  
                            <span class="bg-gray-200 rounded px-2 py-1 text-sm">{{ $tag->name }}</span>  
                        @endforeach  
                    </td>  
                </tr>  
            @endforeach  
        </tbody>  
    </table>  
@endsection