@extends('layouts.master')
@section('contenido')
<div class="container">


        <div id="accordion">
          <div class="card">
            <div class="card-header" id="headingOne">
<div class="card-body">
              <ul>
              <h5 class="mb-0">
Preguntas Frecuentes</div>
</h5>
</div>

                <li>
                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"
                  aria-controls="collapseOne">

                </button>
                </li>


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
