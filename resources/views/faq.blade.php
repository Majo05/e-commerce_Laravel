@extends('layouts.master')
@section('contenido')
<div class="container">

        <h1 style="margin-top:65px;">Preguntas Frecuentes</h1>
        <div id="accordion">
          <div class="card">
            <div class="card-header" id="headingOne">
              <ul>
              <h5 class="mb-0">

                <li>
                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"
                  aria-controls="collapseOne">

                </button>
                </li>

              </h5>
            </div>
            @foreach ($questions as $key => $value)
            <div class="card">
                    <div class="card-header" id="headingTwo">
                      <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo"
                          aria-expanded="false" aria-controls="collapseTwo">
                          {{-- ¿Cómo creo una cuenta en Deco Home 860? --}}
                          {{$value->question}}
                        </button>
                      </h5>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                      <div class="card-body">
                       {{--  Para registrarte en Deco Home seguí los siguientes pasos: --}}
                       {{$value->answer}}
                      </div>
                    </div>
                  </div>

                  @endforeach


</div>

@endsection
