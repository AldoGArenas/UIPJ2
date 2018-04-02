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



<div id="tabscarpeta">
    <ul class="nav nav-tabs">
        <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#tdenunciante">Denunciante o Agraviado</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#tdenunciado">Denunciado o Imputado</a>
        </li>
        <li class="nav-item" id="tabfisica">
            <a class="nav-link" data-toggle="tab" href="#tabogado">Abogados</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#tdefensa">Defensas</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#tfamiliar">Familiares</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#tdelito">Delitos</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#tacusacion">Acusaciones</a>
        </li>
         <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#tvehiculo">Vehículos</a>
        </li>
    </ul>
</div>

<!-- Contenido en Pestañas -->
<div class="tab-content" id="contenidotabs">
    <div class="tab-pane active container" id="tdenunciante">
                   <div class="boxtwo">
                    @include('tables.denunciantes')
                    <div class="text-right"> 
                        <a href="{{ route('new.denunciante', $carpetaNueva[0]->id) }}" class="btn btn-primary">Agregar persona</a><hr>
                    </div>
                </div>
            </div>

<div class="tab-pane container" id="tdenunciado">
     <div class="boxtwo">
                    @include('tables.denunciados')
                    <div class="text-right"> 
                        <a href="{{ route('new.denunciado', $carpetaNueva[0]->id) }}" class="btn btn-primary">Agregar persona</a><hr>
                    </div>
                </div>
                </div> 


 <div class="tab-pane container" id="tautoridad">
  @if(($carpetaNueva[0]->conDetenido)==1)
                <div class="boxtwo">
                @include('tables.autoridades')
                    <div class="text-right"> 
                        <a href="{{ route('new.autoridad', $carpetaNueva[0]->id) }}" class="btn btn-primary">Agregar Autoridad</a><hr>
                    </div>
                </div>
                @endif
 </div>

<div class="tab-pane container" id="tabogado">
      <div class="boxtwo">
                    @include('tables.abogados')
                    <div class="text-right"> 
                        <a href="{{ route('new.abogado', $carpetaNueva[0]->id) }}" class="btn btn-secondary">Agregar persona</a><hr>
                    </div>
                </div>          
 </div>

<div class="tab-pane container" id="tdefensa">
         @if((count($denunciantes)>0 || count($denunciados)>0) && count($abogados)>0)
                <div class="boxtwo">
                    @include('tables.defensas')
                    <div class="text-right"> 
                        <a href="{{ route('new.defensa', $carpetaNueva[0]->id) }}" class="btn btn-secondary">Asignar defensa</a><hr>
                    </div>
                </div>
                @endif      
 </div>
<div class="tab-pane container" id="tfamiliar">
     @if(count($denunciantes)>0 || count($denunciados)>0)
                <div class="boxtwo">
                    @include('tables.familiares')
                    <div class="text-right"> 
                        <a href="{{ route('new.familiar', $carpetaNueva[0]->id) }}" class="btn btn-secondary">Agregar persona</a><hr>
                    </div>
                </div>
                @endif            
 </div>
 <div class="tab-pane container" id="tdelito">
     <div class="boxtwo">
                    @include('tables.delitos')
                    <div class="text-right"> 
                        <a href="{{ route('new.delito', $carpetaNueva[0]->id) }}" class="btn btn-secondary">Agregar delito</a><hr>
                    </div>
                </div>          
 </div>
<div class="tab-pane container" id="tacusacion">
   @if(count($delitos)>0 && count($denunciantes)>0 && count($denunciados)>0)
                <div class="boxtwo">
                    @include('tables.acusaciones')
                    <div class="text-right">
                        @if(count($acusaciones)>0)
                            <a href="{{ route('new.colaboracionpm', $carpetaNueva[0]->id) }}" class="btn btn-secondary">Colaboración PM</a>
                            <a href="{{ route('new.colaboracionsp', $carpetaNueva[0]->id) }}" class="btn btn-secondary">Colaboración SP</a>
                        @endif
                        <a href="{{ route('new.acusacion', $carpetaNueva[0]->id) }}" class="btn btn-secondary">Agregar Acusación</a><hr>
                    </div>
                </div>
                @endif             
 </div>
<div class="tab-pane container" id="tvehiculo">
      <div class="boxtwo">
                    @include('tables.vehiculos')
                    <div class="text-right"> 
                        <a href="{{ route('new.vehiculo', $carpetaNueva[0]->id) }}" class="btn btn-secondary">Agregar Vehículo</a><hr>
                    </div>
                </div>           
 </div>

  
        </div>  <!-- Fin Contenido en Pestañas -->
            
@endsection

@section('scripts')
@endsection