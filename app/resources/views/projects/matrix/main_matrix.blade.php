@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 title_polla">
                Matriz Nivel de Riesgo
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

                    <div style="height:850px;" class="card-body">

                        <div class="verticalImpacto">
                            <b style="letter-spacing: 30px; margin-top: 180px;">Impacto</b>
                        </div>            
        
                        {{-- matrix goes here --}}
                     <div class="grid">
                        
                        <div style="height: 45px; background-color: navy;" class="row">
                            <div style="background-color: navy;" class="box"><center>Nivel de Riesgo</center></div>
                        </div>

                        <div class="row">
                            <div class="verticalLine">
                                Very High
                            </div>
                            <div class="box"><div class="inner">
                                @foreach ($risks as $risk)
                                    @if ($risk->probability == 1 && $risk->impact == 5)
                                        {{$risk->id_risk}}
                                    @endif
                                @endforeach
                            </div></div>
                            <div class="box"><div class="inner">
                                @foreach ($risks as $risk)
                                    @if ($risk->probability == 2 && $risk->impact == 5)
                                        {{$risk->id_risk}}
                                    @endif
                                @endforeach
                            </div></div>
                            <div class="box"><div class="inner">
                                @foreach ($risks as $risk)
                                    @if ($risk->probability == 3 && $risk->impact == 5)
                                        {{$risk->id_risk}}
                                    @endif
                                @endforeach
                            </div></div>
                            <div class="box"><div class="inner">
                                @foreach ($risks as $risk)
                                    @if ($risk->probability == 4 && $risk->impact == 5)
                                        {{$risk->id_risk}}
                                    @endif
                                @endforeach
                            </div></div>
                            <div class="box"><div class="inner">
                                @foreach ($risks as $risk)
                                    @if ($risk->probability == 5 && $risk->impact == 5)
                                        {{$risk->id_risk}}
                                    @endif
                                @endforeach
                            </div></div>
                        </div>

                        <div class="row">
                            <div class="verticalLineYellow">
                                High
                            </div>
                            <div style="background-color: #ffff14;" class="box"><div class="inner">
                                @foreach ($risks as $risk)
                                    @if ($risk->probability == 1 && $risk->impact == 4)
                                        {{$risk->id_risk}}
                                    @endif
                                @endforeach
                            </div></div>
                            <div style="background-color: #ffff14;" class="box"><div class="inner">
                                @foreach ($risks as $risk)
                                    @if ($risk->probability == 2 && $risk->impact == 4)
                                        {{$risk->id_risk}}
                                    @endif
                                @endforeach
                            </div></div>
                            <div class="box"><div class="inner">
                                @foreach ($risks as $risk)
                                    @if ($risk->probability == 3 && $risk->impact == 4)
                                        {{$risk->id_risk}}
                                    @endif
                                @endforeach
                            </div></div>
                            <div class="box"><div class="inner">
                                @foreach ($risks as $risk)
                                    @if ($risk->probability == 4 && $risk->impact == 4)
                                        {{$risk->id_risk}}
                                    @endif
                                @endforeach
                            </div></div>
                            <div class="box"><div class="inner">
                                @foreach ($risks as $risk)
                                    @if ($risk->probability == 5 && $risk->impact == 4)
                                        {{$risk->id_risk}}
                                    @endif
                                @endforeach
                            </div></div>
                        </div>
                        <div class="row">
                            <div class="verticalLineYellow">
                                Medium
                            </div>
                            <div style="background-color: #ffff14;" class="box"><div class="inner">
                                @foreach ($risks as $risk)
                                    @if ($risk->probability == 1 && $risk->impact == 3)
                                        {{$risk->id_risk}}
                                    @endif
                                @endforeach
                            </div></div>
                            <div style="background-color: #ffff14;" class="box"><div class="inner">
                                @foreach ($risks as $risk)
                                    @if ($risk->probability == 2 && $risk->impact == 3)
                                        {{$risk->id_risk}}
                                    @endif
                                @endforeach
                            </div></div>
                            <div style="background-color: #ffff14;" class="box"><div class="inner">
                                @foreach ($risks as $risk)
                                    @if ($risk->probability == 3 && $risk->impact == 3)
                                        {{$risk->id_risk}}
                                    @endif
                                @endforeach
                            </div></div>
                            <div class="box"><div class="inner">
                                @foreach ($risks as $risk)
                                    @if ($risk->probability == 4 && $risk->impact == 3)
                                        {{$risk->id_risk}}
                                    @endif
                                @endforeach
                            </div></div>
                            <div class="box"><div class="inner">
                                @foreach ($risks as $risk)
                                    @if ($risk->probability == 5 && $risk->impact == 3)
                                        {{$risk->id_risk}}
                                    @endif
                                @endforeach
                            </div></div>
                        </div>
                        <div class="row">
                            <div class="verticalLineGreen">
                                Low
                            </div>
                            <div style="background-color: #16d613;" class="box"><div class="inner">
                                @foreach ($risks as $risk)
                                    @if ($risk->probability == 1 && $risk->impact == 2)
                                        {{$risk->id_risk}}
                                    @endif
                                @endforeach
                            </div></div>
                            <div style="background-color: #16d613;" class="box"><div class="inner">
                                @foreach ($risks as $risk)
                                    @if ($risk->probability == 2 && $risk->impact == 2)
                                        {{$risk->id_risk}}
                                    @endif
                                @endforeach
                            </div></div>
                            <div style="background-color: #ffff14;" class="box"><div class="inner">
                                @foreach ($risks as $risk)
                                    @if ($risk->probability == 3 && $risk->impact == 2)
                                        {{$risk->id_risk}}
                                    @endif
                                @endforeach
                            </div></div>
                            <div style="background-color: #ffff14;" class="box"><div class="inner">
                                @foreach ($risks as $risk)
                                    @if ($risk->probability == 4 && $risk->impact == 2)
                                        {{$risk->id_risk}}
                                    @endif
                                @endforeach
                            </div></div>
                            <div style="background-color: #ffff14;" class="box"><div class="inner">
                                @foreach ($risks as $risk)
                                    @if ($risk->probability == 5 && $risk->impact == 2)
                                        {{$risk->id_risk}}
                                    @endif
                                @endforeach
                            </div></div>
                        </div>
                        <div class="row">
                            <div class="verticalLineGreen">
                                Ver Low
                            </div>
                            <div style="background-color: #16d613;" class="box"><div class="inner">
                                @foreach ($risks as $risk)
                                    @if ($risk->probability == 1 && $risk->impact == 1)
                                        {{$risk->id_risk}}
                                    @endif
                                @endforeach
                            </div></div>
                            <div style="background-color: #16d613;" class="box"><div class="inner">
                                @foreach ($risks as $risk)
                                    @if ($risk->probability == 2 && $risk->impact == 1)
                                        {{$risk->id_risk}}
                                    @endif
                                @endforeach
                            </div></div>
                            <div style="background-color: #16d613;" class="box"><div class="inner">
                                @foreach ($risks as $risk)
                                    @if ($risk->probability == 3 && $risk->impact == 1)
                                        {{$risk->id_risk}}
                                    @endif
                                @endforeach
                            </div></div>
                            <div style="background-color: #16d613;" class="box"><div class="inner">
                                @foreach ($risks as $risk)
                                    @if ($risk->probability == 4 && $risk->impact == 1)
                                        {{$risk->id_risk}}
                                    @endif
                                @endforeach
                            </div></div>
                            <div style="background-color: #16d613;" class="box"><div class="inner">
                                @foreach ($risks as $risk)
                                    @if ($risk->probability == 5 && $risk->impact == 1)
                                        {{$risk->id_risk}}
                                    @endif
                                @endforeach
                            </div></div>
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




