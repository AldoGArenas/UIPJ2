 @extends('template.main')

@section('content')
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
                            <th>Estado carpeta</th>
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
                                    <td>{{ $carpeta->nombres." ".$carpeta->apellidos }}</td>
                                    <td>{{ $carpeta->fechaInicio }}</td>
                                    <td>{{ $carpeta->estadoCarpeta }}</td>
                                    <td><a href="{{ route('view.carpeta', $carpeta->id) }}" class="btn btn-secondary"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>Ver</a></td>
                                </tr>
                                @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>
                
                {!! Form::button('Mamalon', ['id'=>'mamalon','class'=>'boton-mamalon']) !!}
                <select id="selector" class="col-4">
                    <option value="red">red</option>
                    <option value="orange">orange</option>
                    <option value="green">green</option>
                    <option value="blue">blue</option>
                 </select>                


                <div class="text-center">
                    {{ $carpetas->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section ('scripts')
    <script src="{{ asset('js/moment.min.js') }}"></script>
    <script src="{{ asset('js/es.js') }}"></script>
    <script src="{{ asset('js/tempusdominus-bootstrap-4.min.js') }}"></script>
    <script src="{{ asset('js/sisyphus.js')}}" ></script>
    <script src="{{ asset('js/validations.js') }}"></script>
    <script src="{{ asset('js/selects.js') }}"></script>
    <script src="{{ asset('js/scripts.js') }}"></script>
     <script> $(document).ready(function(){
         $('#selector').change(function(){
         var chingon = $(this).val()
         console.log(chingon);
         less.modifyVars({
             '@nice-blue':$(this).val()
         });
     });
    });</script>
@endsection
@push ('docready-js')

@endpush
