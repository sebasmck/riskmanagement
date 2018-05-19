@extends('layouts.app')

@section('content')
    <div class="container">


        <div class="row">
            <div class="col-md-12 title_polla">
                Management
            </div>
        </div>

        <div class="row justify-content-center allicons">
            <div class="col-md-4">
                <a style="text-decoration: none;" href="{{route('employee.index')}}">
                    <div style="text-align: center;" class="card menucards">
                      <i style='font-size: 200px;' class="fas fa-users"></i>
                      <br>
                      <h2>Employees</h2>
                  </div>
              </a>
            </div>

            <div class="col-md-4">
                <a style="text-decoration: none;" href="{{route('country.index')}}">
                    <div style="text-align: center;" class="card menucards">
                      <i style='font-size: 200px;' class="fas fa-globe"></i>
                      <br>
                      <h2>Countries</h2>
                  </div>
              </a>
            </div>

            <div class="col-md-4">
                <a style="text-decoration: none;" href="{{route('category.index')}}">
                    <div style="text-align: center;" class="card menucards">
                          <i style='font-size: 200px;' class="fab fa-buromobelexperte"></i>
                          <br>
                          <h2>Categories</h2>
                    </div>
                </a>
            </div>

            <div class="col-md-4">
                <a style="text-decoration: none;" href="{{route('stage.index')}}">
                    <div style="text-align: center;" class="card menucards">
                          <i style='font-size: 200px;' class="fas fa-list-ol"></i>
                          <br>
                          <h2>Stage</h2>
                    </div>
                </a>
            </div>

            <div class="col-md-4">
                <a style="text-decoration: none;" href="{{route('group.index')}}">
                    <div style="text-align: center;" class="card menucards">
                          <i style='font-size: 200px;' class="fas fa-people-carry"></i>
                          <br>
                          <h2>Groups</h2>
                    </div>
                </a>
            </div>

            <div class="col-md-4">
                <a style="text-decoration: none;" href="">
                    <div style="text-align: center;" class="card menucards">
                          <i style='font-size: 200px;' class="far fa-user-circle"></i>
                          <br>
                          <h2>Admins</h2>
                    </div>
                </a>
            </div>

            
        </div>
        <br>
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