@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 title_polla">
                <span><i class="fas fa-home"></i> Home</span>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-4">
                                <h4>{{ __('My Projects') }} </h4>
                            </div>
                            <div class="col-md-8">                                
                                <div class="mainmenu">
                                    <a href="{{route('management_menu')}}"><button type="button" class="btn btn-primary">Management</button></a>
                                   
                                    <a href="{{route('project.create')}}"><button type="button" class="btn btn-primary"><span class="fa fa-plus"></span></button></a>
                                </div>
                            </div>

                        </div>
                        
                        
                    </div>

                    <div class="card-body">
                        <div class="columns">
                            <div class="column is-two-thirds">
                            
                                    <table id="myTable" class="display">
                                            <thead>
                                                <tr>
                                                    <th>Project</th>
                                                    <th>Progress</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($projects as $project)
                                                <tr>
                                                    <td>{{$project->name}}</td>
                                                    <td>{{$project->status}}</td>
                                                    <td></td>
                                                    <td><div class="form-group row mb-0">
                                                        <div class="col-md-8 offset-md-4">
                                                            <div class="control">
                                                                <button class="btn btn-primary" onclick="window.location='{{ route('project.show', $project->id_project) }}'">Edit Project</button>
                                                            </div>
                                                        </div>
                                                    </div></td>
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

        {{-- MENU --}}
        {{-- <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header"><h4>{{ __('Menu') }}</h4></div>

                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-10 offset-md-1">
                                <div class="form-group">
                                    <button type="" class="btn btn-primary" onclick="window.location='{{ route('login') }}'" style="width: 100%;">
                                        {{ __('') }}
                                    </button>
                                </div>    
                            </div>
                            <div class="col-md-10 offset-md-1 ">
                                <div class="form-group">
                                    <button type="" class="btn btn-primary" onclick="window.location='{{ route('rules') }}'" style="width: 100%;">
                                        {{ __('Read the Rules') }}
                                    </button>
                                </div>
                            </div>
                            <div class="col-md-10 offset-md-1 ">
                                <div class="form-group">
                                    <button type="" class="btn btn-primary" onclick="window.location='{{ route('login') }}'" style="width: 100%;">
                                        {{ __('Worldcup Results') }}
                                    </button>
                                </div>
                            </div>
                            <div class="col-md-10 offset-md-1 ">
                                 <div class="form-group">
                                    <button type="" class="btn btn-primary" onclick="window.location='{{ route('login') }}'" style="width: 100%;">
                                        {{ __('Ranking and Poolwide picks') }}
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}

     </div>

     {{-- BEGIN CREATE MODAL --}}

      <div class="modal fade" id="myModal">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
          
            <!-- Modal Header -->
            <div class="modal-header">
              <h4 class="modal-title">Crear Nuevo Proyecto</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            
            <!-- Modal body -->
            {{-- <div class="modal-body">
            <form  action="{{route('pollregistration')}}" method="POST">
                    @csrf
            <input type="hidden" value="{{Auth::user()->id}}" name="user_id">
                    <div class="form-group row">
                        <div class="col-md-12">
                            <input id="poll_name" type="text" class="form-control{{ $errors->has('poll_name') ? ' is-invalid' : '' }}" name="poll_name" value="{{ old('poll_name') }}" required>

                                @if ($errors->has('poll_name'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('poll_name') }}</strong>
                                    </span>
                                @endif
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-8 offset-md-2">
                            <button type="submit" class="btn btn-primary" style="width: 100%;">
                                {{ __('Guardar') }}
                            </button>
                        </div>
                    </div>
                </form>
            </div> --}}
          </div>
        </div>
      </div>

{{-- END CREATEMODAL --}}
@endsection


    
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.js"> </script>
<script src="{{URL::asset('js/app.js')}}"></script>

<script>
    $(document).ready( function () {
        $('#myTable').DataTable();
    });
</script>


