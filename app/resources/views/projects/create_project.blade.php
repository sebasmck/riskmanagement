@extends('layouts.app')

@section('content')


    <div class="container">
        <div class="row">
            <div class="col-md-12 title_polla">
                <span><i class="fas fa-plus-square"></i> New Project</span>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-5">
                                 <a style="float: left; margin-right: 15px;" href="{{route('home')}}"><button class="btn btn-primary" id="close"> < </button></a>
                                <h4>{{ __('new Project') }} </h4>
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
                                                    <a class="nav-link active" data-toggle="tab" href="#general">Project info</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="tab" href="#recursos">
                                                        Resources
                                                    </a>
                                                </li>
                                            </ul>

                                            <form method="POST" action="{{route('project.store')}}">
                                                @csrf
                                            
                                            <div class="tab-content">
                                                <div class="tab-pane active container" id="general">
                                                    <br>
                                                    <div class="card">
                                                        <div class="card-body col-md-8">
                                                            <div class="form-group">
                                                                <label for="name">Project Name:</label>
                                                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="country">Country:</label>
                                                                <div class="select">
                                                                {{ Form::select('country_id', $countries->prepend('none')->pluck('name', 'id'), null, ['class' => 'form-control', 'id' => 'country']) }}</div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="date">Date: </label>
                                                                <br>
                                                                <input type="date" class="form-control" style="width: 50%;" name="date\
                                                                " step="1" min="<?php echo date("Y-m-d");?>" value="<?php echo date("Y-m-d");?>">
                                                            </div>
                                                        </div>
                                                        <div class="card-body col-md-12">
                                                            <div class="form-group">
                                                                <label for="description">Description</label>
                                                                <textarea name="description" class="form-control" id="description" cols="30" rows="10"></textarea>
                                                            </div>
                                                        </div>                                                   
                                                    </div>
                                                </div>

                                                <div class="tab-pane container" id="recursos">
                                                    <br>
                                                    <div class="card">
                                                        <h3>Workforce</h3>
                                                        <br>
                                                        <div class="card-body col-md-8 workforce">
                                                            <div class="form-group">
                                                                <label for="name">Users</label>
                                                                {{ Form::select('id_employee[]', $employees->prepend('none')->pluck('name', 'id_employee'), null, ['class' => 'form-control', 'id' => 'employee']) }}
                                                                {{-- <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus> --}}
                                                            </div>
                                                        </div>  
                                                        <table id="dynamic_field_employee">

                                                        </table>
                                                        <br>  
                                                            <div class="col-md-2">
                                                                <button type="button" name="addemployee" id="addemployee" class="btn btn-success"><span><i style="margin-right: 5px;" class="fas fa-plus-square"></i></span> New Field</button>
                                                            </div>
                                                        <br>
                                                        <div class="form-group row">
                                                            <div class="col-md-8 offset-md-9">
                                                                <button type="submit" class="btn btn-primary" style="width: 100%;">
                                                                    {{ __('Save') }}
                                                                </button>
                                                            </div>
                                                        </div>                                              
                                                    </div>
                                                </div>
                                            </div>


                                        </form>
                                            
                                        </div>  {{--  end card --}}
                                    </div>
                                </div>  {{--  end card --}}
                            </div>
                        </div>
                    </div>

                </div>
             </div>
        </div>                
    </div>


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
        
        var i = 0;
        var j = 0;

        $(document).on('click', '#addemployee', function(){  
        i++;
        j++;  
        $('<table>'+
          '<tbody>'+
          '<tr id="row'+i+'" class="dynamic-added-employee">'+ 
          '<td><div class="form-group">{{ Form::select('id_employee[]', $employees->prepend('none')->pluck('name', 'id_employee'), null, ['class' => 'form-control', 'id' => 'employee', 'style' => 'width:350px;']) }}</div></td>'+
          '</td><td><button style="margin-left:30px;" type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr></tbody></table>').appendTo('.workforce');  

       }); 

        $(document).on('click', '.btn_remove', function(){  
           var button_id = $(this).attr("id");   
           $('#row'+button_id+'').remove();  
       }); 
});


</script>


