@extends("layouts.layout")

@section("title", "Proyecto")

@section("links")
{{-- En esta seccion se ponen las etiquetas para css y para js --}}
<link href="{{ asset('styles/style.css') }}" rel="stylesheet">
@endsection

@section("content")
<article class="d-flex flex-column proyect-article h-75">
    <section class="d-flex justify-content-between align-content-center mt-5 h-50">
        <div class="gallery d-flex flex-column justify-content-center align-content-center w-25 mx-5 bg-color-gray">
            <img src="{{asset("images/Populoria.svg")}}" alt="" class="s-main-display">
            <div class="d-flex images">
                <img src="{{asset("images/Populoria.svg")}}" alt="" class="s-other-display">
                <img src="{{asset("images/Populoria.svg")}}" alt="" class="s-other-display">
                <img src="{{asset("images/Populoria.svg")}}" alt="" class="s-other-display">
            </div>
        </div>
        <div class="title w-75 mx-5 bg-color-gray">
            <div>
                <h1>Título del proyecto</h1>
                <p>Descripción del proyecto...</p>
            </div>
            <a href=""><button class="badge rounded-pill bg-success">Solicitar</button></a>
        </div>
    </section>
    <section class="d-flex justify-content-between mt-2 h-50">
        <div class="lookingfor w-75 mx-5 bg-color-gray">
            <h1>Estamos buscando...</h1>
            <div>
                <span class="badge rounded-pill bg-success">Don kamarón</span>
                <span class="badge rounded-pill bg-success">Ingeniero</span>
                <span class="badge rounded-pill bg-success">Diseñador</span>
                <span class="badge rounded-pill bg-success">Luis Verga</span>
            </div>
        </div>
        <div class="collab w-25 mx-5 bg-color-gray">
            <h1>Colaboradores</h1>
            <div>
                <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false">
                    <title>Placeholder</title>
                    <rect width="100%" height="100%" fill="#777"></rect><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text>
                </svg>
                <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false">
                    <title>Placeholder</title>
                    <rect width="100%" height="100%" fill="#777"></rect><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text>
                </svg>
                <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false">
                    <title>Placeholder</title>
                    <rect width="100%" height="100%" fill="#777"></rect><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text>
                </svg>
            </div>
        </div>
    </section>
</article>

@endsection
