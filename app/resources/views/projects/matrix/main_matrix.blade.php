@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 title_polla">
                Matriz Boston
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-4">
                                <h4>{{ __('Matrix') }} </h4>
                            </div>
                        </div>
                        
                    </div>

                    <div style="height:650px;" class="card-body">
                    

                        {{-- matrix goes here --}}
                     <div class="grid">
                        <div style="height: 45px; background-color: navy;" class="row">
                            <div style="background-color: navy;" class="box"><center>Nivel de Riesgo</center></div>
                        </div>
                        

                        <div class="row">
                            <div class="box"><div class="inner">1</div></div>
                            <div class="box"><div class="inner">2</div></div>
                            <div class="box"><div class="inner">3</div></div>
                            <div class="box"><div class="inner">4</div></div>
                            <div class="box"><div class="inner">5</div></div>
                        </div>
                        <div class="row">
                            <div style="background-color: #ffff14;" class="box"><div class="inner">6</div></div>
                            <div style="background-color: #ffff14;" class="box"><div class="inner">7</div></div>
                            <div class="box"><div class="inner">8</div></div>
                            <div class="box"><div class="inner">9</div></div>
                            <div class="box"><div class="inner">10</div></div>
                        </div>
                        <div class="row">
                            <div style="background-color: #ffff14;" class="box"><div class="inner">11</div></div>
                            <div style="background-color: #ffff14;" class="box"><div class="inner">12</div></div>
                            <div style="background-color: #ffff14;" class="box"><div class="inner">13</div></div>
                            <div class="box"><div class="inner">14</div></div>
                            <div class="box"><div class="inner">15</div></div>
                        </div>
                        <div class="row">
                            <div style="background-color: #16d613;" class="box"><div class="inner">16</div></div>
                            <div style="background-color: #16d613;" class="box"><div class="inner">17</div></div>
                            <div style="background-color: #ffff14;" class="box"><div class="inner">18</div></div>
                            <div style="background-color: #ffff14;" class="box"><div class="inner">19</div></div>
                            <div style="background-color: #ffff14;" class="box"><div class="inner">20</div></div>
                        </div>
                        <div class="row">
                            <div style="background-color: #16d613;" class="box"><div class="inner">21</div></div>
                            <div style="background-color: #16d613;" class="box"><div class="inner">22</div></div>
                            <div style="background-color: #16d613;" class="box"><div class="inner">23</div></div>
                            <div style="background-color: #16d613;" class="box"><div class="inner">24</div></div>
                            <div style="background-color: #16d613;" class="box"><div class="inner">25</div></div>
                        </div>

                        <div class="row">
                            <div style="background-color: #255096; height:15px; font-size: 0.5em;" class="box"><div class="inner">Muy Baja</div></div>
                            <div style="background-color: #255096; height:15px; font-size: 0.5em;" class="box"><div class="inner">Baja</div></div>
                            <div style="background-color: #255096; height:15px; font-size: 0.5em;" class="box"><div class="inner">Media</div></div>
                            <div style="background-color: #255096; height:15px; font-size: 0.5em;" class="box"><div class="inner">Alta</div></div>
                            <div style="background-color: #255096; height:15px; font-size: 0.5em;" class="box"><div class="inner">Muy Alta</div></div>
                        </div>

                        <div class="row">
                            <div style="background-color: #255096; height:15px; font-size: 0.5em;" class="box"><div class="inner">1-20%</div></div>
                            <div style="background-color: #255096; height:15px; font-size: 0.5em;" class="box"><div class="inner">21-40%</div></div>
                            <div style="background-color: #255096; height:15px; font-size: 0.5em;" class="box"><div class="inner">41-60%</div></div>
                            <div style="background-color: #255096; height:15px; font-size: 0.5em;" class="box"><div class="inner">61-80%</div></div>
                            <div style="background-color: #255096; height:15px; font-size: 0.5em;" class="box"><div class="inner">81-100%</div></div>
                        </div>


                        <div style="height: 45px; background-color: navy;" class="row">
                            <div style="background-color: navy;" class="box"><center>Probabilidad</center></div>
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
              <h4 class="modal-title">Crear Nuevo Proyecto</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            
            
          </div>
        </div>
      </div>

{{-- END CREATEMODAL --}}
@endsection


    
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.js"> </script>
<script src="{{URL::asset('js/app.js')}}"></script>




