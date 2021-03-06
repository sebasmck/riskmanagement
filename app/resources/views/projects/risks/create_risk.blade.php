@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row">
        <div class="col-md-12 title_polla">
            <span><i class="fas fa-chart-line"></i> Add Risks</span>
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
                                            <a class="nav-link active" data-toggle="tab" href="#descripcion">Description</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#analisis">Analisis</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#evaluacion">Evaluation</a>
                                        </li>
                                    </ul>
                                    <form action="{{route('risk.store')}}" method="POST">
                                        @csrf()
                                        <input type="hidden" value="{{$id_project}}" name="id_project">
                                     <div class="tab-content">
                                        <div class="tab-pane active container" id="descripcion">
                                            <br>
                                            <div class="card">
                                                <div class="card-body col-md-8">
                                                    <div class="form-group">
                                                        <label for="name">Risk Name:</label>
                                                        <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="country">Owner:</label>
                                                        <br>
                                                        <div class="select">
                                                            {{ Form::select('id_employee', $employees->prepend('none')->pluck('name', 'id'), null, ['class' => 'form-control', 'id' => 'id_employee']) }}
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="country">Category:</label>
                                                        <br>
                                                        <div class="select">
                                                            {{ Form::select('id_category', $categories->prepend('none')->pluck('name', 'id_category'), null, ['class' => 'form-control', 'id' => 'category']) }}
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="country">Group:</label>
                                                        <br>
                                                        <div class="select">
                                                            {{ Form::select('id_group', $groups->prepend('none')->pluck('name', 'id'), null, ['class' => 'form-control', 'id' => 'group']) }}
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="country">Stage:</label>
                                                        <br>
                                                        <div class="select">
                                                            {{ Form::select('id_stage', $stages->prepend('none')->pluck('name', 'id'), null, ['class' => 'form-control', 'id' => 'stage']) }}
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
                                                        <a class="nav-link active" data-toggle="tab" href="#prevencion">Prevention</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" data-toggle="tab" href="#mitigacion">Mitigation</a>
                                                    </li>
                                                </ul>

                                                <div class="tab-content">
                                                    <div class="tab-pane active container" id="prevencion">
                                                        <div class="form-group">
                                                            <br>
                                                            <label for="name">Risk Name:</label>
                                                            <input id="nameplanprevencion" type="text" class="form-control">
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
                                                                            <td><input style="margin-bottom: 10px;" id="name" type="text" class="form-control" name="nameprevention[]" required placeholder="Task Name"></td>
                                                                            <td>
                                                                                <div class="form-group">
                                                                                    <input type="date" class="form-control" style="margin-bottom: 10px; width: 120px;"  name="dateprevention[]" step="1" min="<?php echo date("Y-m-d");?>" value="<?php echo date("Y-m-d");?>">
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
                                                            <label for="name">Risk Name:</label>
                                                            <input id="nameplanmitigacion" type="text" class="form-control">
                                                        </div>
                                                        <div class="form-group">
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
                                                                            <td><input style="margin-bottom: 10px;" id="name4" type="text" class="form-control" name="namemitigation[]" placeholder="Task Name"></td>
                                                                            <td>
                                                                                <div class="form-group">
                                                                                    <input type="date" class="form-control" style="margin-bottom: 10px; width: 120px;"  name="datemitigation[]" step="1" min="<?php echo date("Y-m-d");?>" value="<?php echo date("Y-m-d");?>">
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
                                                <label for="name">Risk name:</label>
                                                <input id="nameevaluacion" type="text" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="country">probability:</label>
                                                <br>
                                                <div class="select">
                                                    <select class="form-control" id="probability" name="probability" aria-required="true">
                                                        <option value="">Select an Option</option>
                                                        <option value="1">Very Low</option>
                                                        <option value="2">Low</option>
                                                        <option value="3">medium</option>
                                                        <option value="4">High</option>
                                                        <option value="5">Very High</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="country">Impact:</label>
                                                <br>
                                                <div class="select">
                                                    <select class="form-control" id="impact" name="impact" aria-required="true">
                                                        <option value="">Select an Option</option>
                                                        <option value="1">Very Low</option>
                                                        <option value="2">Low</option>
                                                        <option value="3">medium</option>
                                                        <option value="4">High</option>
                                                        <option value="5">Very High</option>
                                                    </select>
                                                </div>
                                            </div>

                                             <br><br>

                                        <div class="form-group row">
                                            <div class="col-md-8 offset-md-7">
                                                <button type="submit" class="btn btn-primary" style="width: 50%;">
                                                    {{ __('Save') }}
                                                </button>
                                            </div>
                                        </div> 

                                        </div>
                                        </div>

                                    </form>


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

        $('.btnNext').click(function(){
          $('.nav-tabs > .active').next('li').find('a').trigger('click');
      });

        $('.btnPrevious').click(function(){
          $('.nav-tabs > .active').prev('li').find('a').trigger('click');
      });



        $('#name').change(function() {
            $('#name2').val($(this).val());
            $('#name2').prop('disabled', true);

            $('#nameplanprevencion').val($(this).val());
            $('#nameplanprevencion').prop('disabled', true);

            $('#nameplanmitigacion').val($(this).val());
            $('#nameplanmitigacion').prop('disabled', true);
            
            $('#nameevaluacion').val($(this).val());
            $('#nameevaluacion').prop('disabled', true);
        });


        $('#myTable').DataTable();
        $('#myTable2').DataTable();

        var i = 0;
        var j = 0;

        $(document).on('click', '#addtask', function(){  
            i++;
            j++;  
            $('<tr id="row'+i+'" class="dynamic-added-task">'+ 
              '<td><div class="form-group"><input id="name" type="text" name="nameprevention[]" class="form-control" style ="width:224px;" required placeholder="Task Name"></div></td>'+
              '<td><div class="form-group"><input type="date" style="width: 120px;" class="form-control" name="dateprevention[]" step="1" min="<?php echo date("Y-m-d");?>" value="<?php echo date("Y-m-d");?>"></div></td>'+
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
              '<td><div class="form-group"><input id="name" type="text" name="namemitigation[]" class="form-control" style ="width:224px;" required placeholder="Task Name  "></div></td>'+
              '<td><div class="form-group"><input type="date" style="width: 120px;" class="form-control" name="datemitigation[]" step="1" min="<?php echo date("Y-m-d");?>" value="<?php echo date("Y-m-d");?>"></div></td>'+
              '</td><td><button style="margin-left:30px;" type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove2">X</button></td></tr>').appendTo('#myTable2');  

        }); 

        $(document).on('click', '.btn_remove2', function(){  
           var button_id = $(this).attr("id");   
           $('#row'+button_id+'').remove();  
       });

         
    });




</script>


