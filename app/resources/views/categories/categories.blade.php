@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 title_polla">
                 Categories
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-4">
                                 <a style="float: left; margin-right: 15px;" href="{{route('home')}}"><button class="btn btn-primary" id="close"> < </button></a>
                                <h4>{{ __('Categories') }} </h4>
                            </div>
                            <div class="col-md-8">                                
                                <div class="mainmenu">
                                    <button type="button" data-toggle="modal" data-target="#myModal" class="btn btn-primary" id="myBtn" style="width: 100%; padding-top: 0;"> + <span style="font-size: 19px;     font-weight: 700;"></span></button>
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
                                                    <th>Name</th>
                                                    <th>Edit</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($categories as $category)
                                                <tr>
                                                    <td>{{$category->name}}</td>
                                                    <td>
                                                        
                                                        {!! Form::open(['route' => ['category.destroy', $category->id_category], 'method' => 'DELETE']) !!}

                                                        {!!Form::submit('x', ['class' => 'btn btn-danger btn_remove', 'style' => 'margin-left:45%;']) !!}

                                                        {!! Form::close() !!}

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
        <br>


     </div>

     {{-- BEGIN CREATE MODAL --}}

      <div class="modal fade" id="myModal">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
          
            <!-- Modal Header -->
            <div class="modal-header">
              <h4 class="modal-title">New Category</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            
            <!-- Modal body -->
            <div class="modal-body">
            <form  action="{{route('category.store')}}" method="POST">
                    @csrf
                    <div class="form-group row">
                        <div class="col-md-12">
                            <label for="position">Name</label>
                            <input id="name" type="text" class="form-control" name="name" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-8 offset-md-2">
                            <button type="submit" class="btn btn-primary" style="width: 100%;">
                                {{ __('Save') }}
                            </button>
                        </div>
                    </div>
                </form>
            </div>
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


