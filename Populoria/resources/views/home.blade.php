@extends("layouts.layout")

@section("title", "Home")

@section("links")
{{-- En esta seccion se ponen las etiquetas para css y para js --}}
{{-- Por ejemplo <link rel="stylesheet" href="style.css"> --}}
{{-- Os podreis quejar populopers que lo teneis ya todo hecho --}}
@endsection

@section("content")
    <h1>Casa</h1>
@endsection
{{-- Este es el home una vez la sesión esté iniciada --}}

{{-- Recordad que es necesario "npm install", luego "npm install bootstrap", luego "npm run dev", y por último "composer update" --}}