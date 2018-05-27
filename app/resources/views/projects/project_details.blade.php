@extends('layouts.app')

@section('content')


    <div class="container">


        {{-- MENU --}}
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header"><h4>{{ __('Menu') }}</h4></div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <button type="" class="btn btn-primary" onclick="window.location='{{ route('project.edit', $project->id_project) }}'" style="width: 100%;">
                                        {{ __('Ver Matriz Nivel de Riesgo') }}
                                    </button>
                                </div>    
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <button type="" class="btn btn-primary" onclick="window.location='{{ route('rules') }}'" style="width: 100%;">
                                        {{ __('Matriz Prueba') }}
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
                    <div class="card-header"><h4>{{ __('Project Information') }}</h4></div>
                        
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <ul style="list-style: none;">
                                    <li><b>Project Name: </b>{{$project->name}}</li>
                                    <li><b>Status: </b> @if ($project->status = 1)
                                        Active
                                        @else
                                        Pending
                                    @endif </li>
                                    <li><b>Date: </b> {{$project->date}} </li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <b>Description: </b><p>
                                    {{$project->description}}
                                </p>
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
                                <h4>{{ __('Associated Risks') }} </h4>
                            </div>
                            <div class="col-md-8">                                
                                <div class="mainmenu">
                                <a href="{{route('risk.edit', $project->id_project)}}"><button type="button" class="btn btn-primary"><span class="fa fa-plus"></span></button></a>
                                </div>
                            </div>
                        </div>
                    </div>
            
               
                    <div class="container-fluid">
                            <table id="myTable" class="display">
                                <thead>
                                    <tr>
                                        <th>id</th>
                                        <th>Risk Name</th>
                                        <th>Owner</th>
                                        <th>Mitigation</th>
                                        <th>Prevention</th>
                                        <th>Details</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($risks as $risk)
                                    <tr>
                                        <td>{{$risk->id_risk}}</td>
                                        <td>{{$risk->name}}</td>
                                        <td>{{$risk->employee->name}}</td>
                                        <td><a  style="margin-left: 35%;" class="btn btn-primary" href="{{route('mitigation.show', $risk->id_risk)}}"> <span><i class="fas fa-check-square"></i></span>  </a> </td>
                                        <td><a style="margin-left: 35%;" class="btn btn-primary" href="{{route('prevention.show', $risk->id_risk)}}"> <span><i class="fas fa-exclamation-triangle"></i></span></a></td>
                                        <td>
                                            <div class="control">
                                                <button class="btn btn-primary" onclick="window.location='{{ route('project.show', $project->id_project) }}'">View Risk details</button>
                                            </div>
                                        </td>
                                        <td></td>
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
       
    } );
</script>


