@extends("layouts.layout")

@section("title", "Home")

@section("links")
{{-- En esta seccion se ponen las etiquetas para css y para js --}}
{{-- Por ejemplo <link rel="stylesheet" href="style.css"> --}}
{{-- Os podreis quejar populopers que lo teneis ya todo hecho --}}
@endsection

@php
    use App\Models\User;
@endphp

@section("content")
    <div class="container mt-5">
        <section>
            @foreach ($comments->reverse() as $comment)
                <div class="text-center">
                    <div class="">
                        <h4>{{User::find($comment->user_id)->name}}</h4>
                    </div>
                    <div>                    
                        <p>{{$comment->text}}</p>
                    </div>
                </div>
            @endforeach
            <div class="text-center">
                <form action="{{ route('save.comment')}}" method="POST">
                    @csrf
                    <textarea name="comment" rows="6" cols="50" placeholder="Participa en el foro"
                        required></textarea>
                        <input name="user_id" value="1" hidden>
                    <br>
                    <button class="btn-form badge mt-3 mb-3" type="submit">Enviar</button>
                </form> 
            </div>
        </section>
    </div>
@endsection
{{-- Este es el home una vez la sesión esté iniciada --}}

{{-- Recordad que es necesario "npm install", luego "npm install bootstrap", luego "npm run dev", y por último "composer update" --}}