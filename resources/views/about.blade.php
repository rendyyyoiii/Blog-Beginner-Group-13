@extends('layouts.app')  

@section('content')  
    <h2 class="text-2xl font-bold mb-4">About Me</h2>  
    <div class="flex items-center mb-4">  
        <img src="{{ asset('images/me.jpg') }}" alt="Foto Saya" class="w-32 h-32 rounded-full mr-4">  
        <div>  
            <p class="mb-4">Rendy Ardiyanto - 235150600111027</p>  
            <p class="mb-4">Selamat datang di blog sederhana yang saya buat. saya membuat blog ini untuk menyelesaikan salah satu prasyarat kelulusan pada mata kuliah pemrograman web.</p>  
            <p class="mb-4">Mohon maaf apabila blog ini masih terbilang sangat kurang dan dari segi tampilan maupun struktur nya. saya berharap blog ini sudah bisa dijadikan dalam penyelesaian tugas.</p>  
            <p class="mb-4">Terima kasih telah mengunjungi blog saya!</p>  
        </div>  
    </div>  
@endsection