@extends('layouts.app')

@section('content')


    <div class="container">
        <div class="row">
            <div class="col-md-12 title_polla">
                Mitigation Plans
            </div>
        </div>

        {{-- MENU --}}
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header"><h4>{{ __('Menu') }}</h4></div>

                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <button type="" class="btn btn-primary" onclick="window.location='{{ route('login') }}'" style="width: 100%;">
                                        {{ __('Ver Matriz Boston') }}
                                    </button>
                                </div>    
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <button type="" class="btn btn-primary" onclick="window.location='{{ route('rules') }}'" style="width: 100%;">
                                        {{ __('Matriz Nivel Riesgo') }}
                                    </button>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <button type="" class="btn btn-primary" onclick="window.location='{{ route('login') }}'" style="width: 100%;">
                                        {{ __('Impacto Afectado') }}
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <br>

        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-4">
                                <h4>{{ __('Associated Mitigation Plans') }} </h4>
                            </div>
                        </div>
                    </div>
            
               
                        <div class="container-fluid">
                            <table id="myTable" class="display">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($mitigations as $mitigation)
                                    <tr>
                                        <td>{{$mitigation->name}}</td>
                                        <td>{{$mitigation->date}}</td>
                                        <td>{!! Form::open(['route' => ['employee.destroy', $mitigation->id_mitigation], 'method' => 'DELETE']) !!}
                                            {!!Form::submit('x', ['class' => 'btn btn-danger btn_remove', 'style' => 'margin-left:45%;']) !!}
                                            {!! Form::close() !!}
                                        </td>
                                    </td>
                                    </tr> 
                                    @endforeach
                                </tbody>
                            </table> 
                        </div>
                        </div>
                    </div>

                </div>
             </div>
        </div>                
    </div>


    <br>

   
@endsection

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.js"> </script>
<script src="{{URL::asset('js/app.js')}}"></script>
{{-- Solo Numeros --}}
<script type="text/javascript">
    // Solo permite ingresar numeros.
    function soloNumeros(e){
        var key = window.Event ? e.which : e.keyCode
        return (key >= 48 && key <= 57)
    }
</script>
<script>
    $(document).ready( function () {
        $('#myTable').DataTable();   
    });
</script>


