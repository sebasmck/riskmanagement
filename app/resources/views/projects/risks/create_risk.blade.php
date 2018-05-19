@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row">
        <div class="col-md-12 title_polla">
            Add Risks
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-5">
                           <a style="float: left; margin-right: 15px;" href="{{route('home')}}"><button class="btn btn-primary" id="close"> < </button></a>
                           <h4>{{ __('Risks') }} </h4>
                       </div>
                   </div>
               </div>
               <div class="container-fluid">
                <div class="row">

                    <div class="col-lg-12">
                        <div class="card-body">                        
                            <div class="card">
                                <div class="card-header">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h4>{{ __('Project Details') }} </h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <ul class="nav nav-tabs">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-toggle="tab" href="#descripcion">Descripción</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#analisis">Analisis</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#evaluacion">Evaluación</a>
                                        </li>
                                    </ul>

                                    <div class="tab-content">
                                        <div class="tab-pane active container" id="descripcion">
                                            <br>
                                            <div class="card">
                                                <div class="card-body col-md-8">
                                                    <div class="form-group">
                                                        <label for="name">Name:</label>
                                                        <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="country">Owner:</label>
                                                        <br>
                                                        <div class="select">
                                                            {{ Form::select('employee', $employees->prepend('none')->pluck('name', 'id_employee'), null, ['class' => 'form-control', 'id' => 'employee']) }}
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="country">Category:</label>
                                                        <br>
                                                        <div class="select">
                                                            {{ Form::select('category', $categories->prepend('none')->pluck('name', 'id_category'), null, ['class' => 'form-control', 'id' => 'category']) }}
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="country">Group:</label>
                                                        <br>
                                                        <div class="select">
                                                            {{ Form::select('group', $groups->prepend('none')->pluck('name', 'id'), null, ['class' => 'form-control', 'id' => 'group']) }}
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="country">Stage:</label>
                                                        <br>
                                                        <div class="select">
                                                            {{ Form::select('stage', $stages->prepend('none')->pluck('name', 'id'), null, ['class' => 'form-control', 'id' => 'stage']) }}
                                                        </div>
                                                    </div>  
                                                </div>                                                   
                                            </div>
                                        </div>

                                        <div class="tab-pane container" id="analisis">
                                            <br>
                                            <div class="card-body">
                                                <h3>Analisis</h3>
                                                <br>

                                                <ul class="nav nav-tabs">
                                                    <li class="nav-item">
                                                        <a class="nav-link active" data-toggle="tab" href="#prevencion">Plan Prevención</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" data-toggle="tab" href="#mitigacion">Plan Mitigación</a>
                                                    </li>
                                                </ul>

                                                <div class="tab-content">
                                                    <div class="tab-pane active container" id="prevencion">
                                                        <div class="form-group">
                                                            <br>
                                                            <label for="name">Risk Name:</label>
                                                            <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="date">Date: </label>
                                                            <br>
                                                            <input type="date" class="form-control" style="width: 50%;" name="date\
                                                            " step="1" min="<?php echo date("Y-m-d");?>" value="<?php echo date("Y-m-d");?>">
                                                        </div>
                                                        <div class="card">
                                                            <div class="card-header">
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <h4>{{ __('Plan Prevención') }} </h4>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="card-body">
                                                                <table id="myTable" class="display">
                                                                    <thead>
                                                                        <tr>
                                                                            <th>Tarea</th>
                                                                            <th>Fecha</th>
                                                                            <th>X</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td><input style="margin-bottom: 10px;" id="name" type="text" class="form-control" name="name" required placeholder="Nombre Tarea"></td>
                                                                            <td>
                                                                                <div class="form-group">
                                                                                    <input type="date" class="form-control" style="margin-bottom: 10px; width: 120px;"  name="date" step="1" min="<?php echo date("Y-m-d");?>" value="<?php echo date("Y-m-d");?>">
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <br>
                                                                <button type="button" name="addtask" id="addtask" class="btn btn-success">New Field</button>
                                                            </div>  {{--  end card --}}
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane container" id="mitigacion">
                                                        <br>
                                                        <div class="form-group">
                                                            <label for="name">Name:</label>
                                                            <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="date">Date: </label>
                                                            <br>
                                                            <input type="date" class="form-control" style="width: 50%;" name="date\
                                                            " step="1" min="<?php echo date("Y-m-d");?>" value="<?php echo date("Y-m-d");?>">
                                                            <br>
                                                            <div class="card-header">
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <h4>{{ __('Plan Mitigación') }} </h4>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="card-body">
                                                                <table id="myTable2" class="display">
                                                                    <thead>
                                                                        <tr>
                                                                            <th>Tarea</th>
                                                                            <th>Fecha</th>
                                                                            <th>X</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td><input style="margin-bottom: 10px;" id="name" type="text" class="form-control" name="name" required placeholder="Nombre Tarea"></td>
                                                                            <td>
                                                                                <div class="form-group">
                                                                                    <input type="date" class="form-control" style="margin-bottom: 10px; width: 120px;"  name="date" step="1" min="<?php echo date("Y-m-d");?>" value="<?php echo date("Y-m-d");?>">
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <br>
                                                                <button type="button" name="addtask2" id="addtask2" class="btn btn-success">New Field</button>
                                                            </div>  {{--  end card --}}

                                                        </div>
                                                    </div>
                                                </div>
                                        
                                            </div>
                                        </div>
                                        <div class="tab-pane container" id="evaluacion">
                                            <br>
                                            <div class="form-group">
                                                <label for="name">Name:</label>
                                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>
                                            </div>
                                            <div class="form-group">
                                                <label for="country">probability:</label>
                                                <br>
                                                <div class="select">
                                                    {{-- {{ Form::select('stage', $stages->prepend('none')->pluck('name', 'id'), null, ['class' => 'form-control', 'id' => 'stage']) }} --}}
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="country">Impact:</label>
                                                <br>
                                                <div class="select">
                                                    {{-- {{ Form::select('stage', $stages->prepend('none')->pluck('name', 'id'), null, ['class' => 'form-control', 'id' => 'stage']) }} --}}
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="name">Risk Management:</label>
                                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>
                                            </div>
                                        </div>
                                        </div>   
                                        </div>  {{--  end card --}}
                                    </div>
                                </div>  {{--  end card --}}
                            </div> {{-- lg-12 --}}
                        </div> {{-- row --}}
                    </div> {{-- container fluid --}}
                </div> {{-- card  --}}
            </div> {{-- col-md-8 --}}
        </div>   {{-- justify-content-center --}}             
    </div> {{-- container --}}


</div>
</div>
</div>
</div>
</div> 
</div>
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
        $('#myTable2').DataTable();

        var i = 0;
        var j = 0;

        $(document).on('click', '#addtask', function(){  
            i++;
            j++;  
            $('<tr id="row'+i+'" class="dynamic-added-task">'+ 
              '<td><div class="form-group"><input id="name" type="text" name="name" class="form-control" style ="width:224px;" required placeholder="Nombre Tarea"></div></td>'+
              '<td><div class="form-group"><input type="date" style="width: 120px;" class="form-control" name="date" step="1" min="<?php echo date("Y-m-d");?>" value="<?php echo date("Y-m-d");?>"></div></td>'+
              '</td><td><button style="margin-left:30px;" type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>').appendTo('#myTable');  

        }); 

        $(document).on('click', '.btn_remove', function(){  
           var button_id = $(this).attr("id");   
           $('#row'+button_id+'').remove();  
       });

        $(document).on('click', '#addtask2', function(){  
            i++;
            j++;  
            $('<tr id="row'+i+'" class="dynamic-added-task2">'+ 
              '<td><div class="form-group"><input id="name" type="text" name="name" class="form-control" style ="width:224px;" required placeholder="Nombre Tarea"></div></td>'+
              '<td><div class="form-group"><input type="date" style="width: 120px;" class="form-control" name="date" step="1" min="<?php echo date("Y-m-d");?>" value="<?php echo date("Y-m-d");?>"></div></td>'+
              '</td><td><button style="margin-left:30px;" type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove2">X</button></td></tr>').appendTo('#myTable2');  

        }); 

        $(document).on('click', '.btn_remove2', function(){  
           var button_id = $(this).attr("id");   
           $('#row'+button_id+'').remove();  
       });

         
    });




</script>


