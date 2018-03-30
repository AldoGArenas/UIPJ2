@extends('template.main2')

@section('css')
@endsection
@section ('cabinterna')
<div class="row ">
        <section class="content-header">
                <h1>
                        Carpeta de Investigación: {{ $carpetaNueva[0]->numCarpeta }}
                  {{--<small>Optional description</small>--}}
                </h1>
                {{--<ol class="breadcrumb">
                  <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
                  <li class="active">Here</li>
                </ol>--}}
        </section>
</div>
@endsection

@section('content')
<div class="box box-default "> 
    <div class="box-body"> 
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header"></div>
            <div class="card-body boxone">
                <div class="boxtwo">
                    @include('tables.denunciantes')
                    <div class="text-right"> 
                        <a href="{{ route('new.denunciante', $carpetaNueva[0]->id) }}" class="btn btn-primary">Agregar persona</a><hr>
                    </div>
                </div>

                <div class="boxtwo">
                    @include('tables.denunciados')
                    <div class="text-right"> 
                        <a href="{{ route('new.denunciado', $carpetaNueva[0]->id) }}" class="btn btn-primary">Agregar persona</a><hr>
                    </div>
                </div>
                
                @if(($carpetaNueva[0]->conDetenido)==1)
                <div class="boxtwo">
                    @include('tables.autoridades')
                    <div class="text-right"> 
                        <a href="{{ route('new.autoridad', $carpetaNueva[0]->id) }}" class="btn btn-primary">Agregar Autoridad</a><hr>
                    </div>
                </div>
                @endif

                <div class="boxtwo">
                    @include('tables.abogados')
                    <div class="text-right"> 
                        <a href="{{ route('new.abogado', $carpetaNueva[0]->id) }}" class="btn btn-primary">Agregar persona</a><hr>
                    </div>
                </div>

                @if((count($denunciantes)>0 || count($denunciados)>0) && count($abogados)>0)
                <div class="boxtwo">
                    @include('tables.defensas')
                    <div class="text-right"> 
                        <a href="{{ route('new.defensa', $carpetaNueva[0]->id) }}" class="btn btn-primary">Asignar defensa</a><hr>
                    </div>
                </div>
                @endif

                @if(count($denunciantes)>0 || count($denunciados)>0)
                <div class="boxtwo">
                    @include('tables.familiares')
                    <div class="text-right"> 
                        <a href="{{ route('new.familiar', $carpetaNueva[0]->id) }}" class="btn btn-primary">Agregar persona</a><hr>
                    </div>
                </div>
                @endif

                <div class="boxtwo">
                    @include('tables.delitos')
                    <div class="text-right"> 
                        <a href="{{ route('new.delito', $carpetaNueva[0]->id) }}" class="btn btn-primary">Agregar delito</a><hr>
                    </div>
                </div>

                @if(count($delitos)>0 && count($denunciantes)>0 && count($denunciados)>0)
                <div class="boxtwo">
                    @include('tables.acusaciones')
                    <div class="text-right">
                        @if(count($acusaciones)>0)
                            <a href="{{ route('new.colaboracionpm', $carpetaNueva[0]->id) }}" class="btn btn-primary">Colaboración PM</a>
                            <a href="{{ route('new.colaboracionsp', $carpetaNueva[0]->id) }}" class="btn btn-primary">Colaboración SP</a>
                        @endif
                        <a href="{{ route('new.acusacion', $carpetaNueva[0]->id) }}" class="btn btn-primary">Agregar Acusación</a><hr>
                    </div>
                </div>
                @endif

                <div class="boxtwo">
                    @include('tables.vehiculos')
                    <div class="text-right"> 
                        <a href="{{ route('new.vehiculo', $carpetaNueva[0]->id) }}" class="btn btn-primary">Agregar Vehículo</a><hr>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
    </div>
</div>
@endsection

@section('scripts')
@endsection