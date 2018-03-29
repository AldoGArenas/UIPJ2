@extends('template.main2')
@

@section('content')
<div class="row">
<section class="content-header">
        <h1>
          @yield('tittle')
          <small>Optional description</small>
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
          <li class="active">Here</li>
        </ol>
</section>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">Listado de Carpetas</div>

            <div class="card-body">
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
                <div class="table">
                    <table class="table table-striped">
                        <thead>
                            <th>Núm. Carpeta</th>
                            <th>Unidad</th>
                            <th>Fiscal</th>
                            <th>Fecha inicio</th>
                            <th>Estado Carpeta</th>
                            <th>Opciones</th>
                        </thead>
                        <tbody>
                            @if(count($carpetas)==0)
                                <tr><td colspan="6" class="text-center">Sin registros</td></tr>
                            @else
                                @foreach($carpetas as $carpeta)
                                <tr>
                                    <td>{{ $carpeta->numCarpeta }}</td>
                                    <td>{{ $carpeta->nombre }}</td>
                                    <td>{{ $carpeta->nombres." ".$carpeta->primerAp." ".$carpeta->segundoAp }}</td>
                                    <td>{{ $carpeta->fechaInicio }}</td>
                                    <td>{{ $carpeta->estadoCarpeta }}</td>
                                    <td><a href="{{ route('view.carpeta', $carpeta->id) }}" class="btn btn-secondary"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>Ver</a></td>
                                </tr>
                                @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>


                <div class="text-center">
                    {{ $carpetas->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
