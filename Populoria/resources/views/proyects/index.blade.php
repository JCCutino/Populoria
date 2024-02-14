@extends('layouts.layout')

@section('title', 'Proyectos')

@section('links')
    {{-- En esta seccion se ponen las etiquetas para css y para js --}}
    <link href="{{ asset('styles/luis.css') }}" rel="stylesheet">
@endsection

@section('content')
    <div class="d-block m-5 justify-content-center text-center">
        <section id="proyecto1" class="mt-5">
            <div class="proyectos d-block d-xxl-inline-flex">
                <div class="col-12 col-xxl-2">
                    <a href="proyect.php"><img src="{{asset("images/Yo.jpg")}}" width="200"></a>
                </div>
                <div class=" d-block ms-xxl-5 col-12 col-xxl-6 texto">
                    <h1>Titulo proyecto</h1>
                    <p class="text-justify">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eius consequuntur
                        adipisci quisquam ipsa, est perspiciatis? Mollitia nam vero, nostrum id aspernatur ducimus, suscipit
                        natus laboriosam doloremque atque necessitatibus eligendi temporibus?
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque quod dicta consequuntur minima
                        odio. Minima reprehenderit quasi, non minus quibusdam, ipsa nesciunt, maiores consequatur sunt
                        architecto similique. Accusantium, qui tempora?
                    </p>
                    <div class="d-inline-flex mt-auto">
                        <h5><span class="badge bg-success">Backend</span></h5>
                        <h5><span class="badge bg-success">Diseño</span></h5>
                        <h5><span class="badge bg-success">Otra</span></h5>
                    </div>
                </div>
                <div class="ms-xxl-5 col-12 col-xxl-3" id="colaboradores">
                    <img src="{{asset("images/Yo.jpg")}}" class="img-fluid" width="100">
                    <img src="{{asset("images/Yo.jpg")}}" class="img-fluid" width="100">
                </div>
            </div>
        </section>
        <section id="proyecto1" class="mt-5">
            <div class="proyectos d-block d-xxl-inline-flex">
                <div class="col-12 col-xxl-2">
                    <a href="proyect.php"><img src="{{asset("images/Yo.jpg")}}" width="200"></a>
                </div>
                <div class=" d-block ms-xxl-5 col-12 col-xxl-6 texto">
                    <h1>Titulo proyecto</h1>
                    <p class="text-justify">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eius consequuntur
                        adipisci quisquam ipsa, est perspiciatis? Mollitia nam vero, nostrum id aspernatur ducimus, suscipit
                        natus laboriosam doloremque atque necessitatibus eligendi temporibus?
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque quod dicta consequuntur minima
                        odio. Minima reprehenderit quasi, non minus quibusdam, ipsa nesciunt, maiores consequatur sunt
                        architecto similique. Accusantium, qui tempora?
                    </p>
                    <div class="d-inline-flex mt-auto">
                        <h5><span class="badge bg-success">Backend</span></h5>
                        <h5><span class="badge bg-success">Diseño</span></h5>
                        <h5><span class="badge bg-success">Otra</span></h5>
                    </div>
                </div>
                <div class="ms-xxl-5 col-12 col-xxl-3" id="colaboradores">
                    <img src="{{asset("images/Yo.jpg")}}" class="img-fluid" width="100">
                    <img src="{{asset("images/Yo.jpg")}}" class="img-fluid" width="100">
                </div>
            </div>
        </section>
    </div>
@endsection
