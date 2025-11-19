@extends('layouts.master')

@section('content')

    <div class="row m-4">

        <div class="col-sm-4">

            <img src="/images/mp-logo.png" style="height:200px" />

        </div>
        <div class="col-sm-8">

            {{ $proyecto['docente_id'] }}
            {{ $proyecto['nombre'] }}
            <a href="http://github.com/2DAW-CarlosIII/{{ $proyecto['dominio'] }}">
                http://github.com/2DAW-CarlosIII/{{ $proyecto['dominio'] }}
            </a>

            @foreach ($proyecto['metadatos'] as $key => $proyector)
                <div>
                    {{ $key }} : {{ $proyector }}
                </div>
            @endforeach

            @if ($proyecto['metadatos']['calificacion'] < 5)
                <div>
                    <strong>“Proyecto suspenso”</strong>
                    <button type="button" class="btn btn-danger">Aprobar proyecto</button>
                </div>
            @elseif ($proyecto['metadatos']['calificacion'] >= 5)
                <div>
                    <strong>“Proyecto aprobado”</strong>
                    <button type="button" class="btn btn-primary">Suspender poyecto</button>
                </div>
            @endif

            <div>
                <a href="" class="button alt">Editar Proyecto</a>
                <a href="" class="button alt">volver al listado de proyectos</a>


            <div>



        </div>
    </div>

@stop
