@extends('layouts.app')

@section('content')
    <!-- Memanggil Partial Hero Banner -->
    @include('partials.hero')
    @include('partials.profil')
    @include('partials.jurusan')
    @include('partials.pengumuman')
    @include('partials.galeri')
    @include('partials.form-kontak')
    @include('partials.rating')
    @include('partials.footer')
@endsection