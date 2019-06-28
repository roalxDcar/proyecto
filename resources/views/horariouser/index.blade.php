@extends('layouts1.app')
@section('contenido')
						<div class="row-center">
                            <div class="col-md-6">
                                <!-- DATA TABLE -->
                                
                                <div class="table-data__tool">
                                    <div class="table-data__tool-left">
                                      @foreach( $centros as $c )
                                          @if( $c->id == Auth::user()->id_centro )
                                        <h3 class="title-5 m-b-35"><b>Horario de Atención " {{ $c->nombre }} "</b></h3>

                                          @endif
                                      @endforeach
                                    </div>
                                </div>
                                <div class="table-responsive table-responsive-data2">
                                    <table class="table table-data2">
                                        <thead>
                                            <tr>
                                              <th>N°</th>
                                              <th>Dias</th>
                                              <th>Turno</th>
                                              <td>Actualizar</td>
                                            </tr>
                                        </thead>
                                        @php ($cont=0)
                                        <tbody>
                                            @foreach($horario as $h)
                                                @foreach($centros as $c)
                                                @if($c->id == $h->id_centro)

                                                <tr class="tr-shadow">
                                                        @php ($cont++)
                                                        {{-- id_usuario hecho con un contador -> c --}}
                                                        <td> {{ $cont }}</td>  

                                                         @foreach($detalledia as $d)
                                                             @if($d->id == $h->id_detalle_dia)
                                                             <td>{{ $d->descripcion }}</td>
                                                             @endif
                                                         @endforeach

                                                         @foreach($turno as $t)
                                                             @if($t->id == $h->id_turno)
                                                             <td>{{ $t->descripcion }}</td>
                                                             @endif
                                                         @endforeach

                                                         <td>
                                                           <div style="align-content: center;" class="table-data-feature">
                                                               <a type="" class="item" data-toggle="tooltip" data-placement="top" title="Edit" style=" text-decoration:  none;"  href="{{ route('horario.edit',$h->id) }}"><i class="zmdi zmdi-edit"></i></a>
                                                            </div>
                                                         </td>                                                  
                                                 </tr> 

                                                @endif
                                                @endforeach
                                            @endforeach   
                                        </tbody>
                                    </table>
                                </div>
                                <!-- END DATA TABLE -->
                            </div>
                        </div>
                        <br>
                        <br>

{{-- Contenido --}}
<div class="container">
    <div class="row">  
        <div class="col-md-10 col-md-offset-1">

            <div class="panel panel-default panel-table">
              <div class="panel-heading">
                <div class="row">
                  <div class="col col-xs-6">
                    @php($contador=0)
                    @foreach($centros as $c)
                      @foreach($horario as $horarios)
                        @if($c->id == Auth::user()->id_centro && $horarios->id_centro == Auth::user()->id_centro && $contador == 0)
                        @php($contador++)
                          <h3 class="panel-title" style="color:black;">Horario Centro Deportivo "{{ $c->nombre }}"</h3> 
                        @endif 
                      @endforeach                   
                    @endforeach
                    @if($contador == 0)
                      <h1 class="panel-title" style="color:black;">Horario</h1>
                    @endif 
                  </div>
                </div>
              </div>
              <div class="panel-body">
                <table class="table table-striped table-bordered table-list">
                  <thead>
                    @if($contador > 0)
                      <tr >
                        <th style="text-align: center;">Hora</th>
                        {{-- DIAS DE LA SEMANA JALAR DE LA TABLA "DIAS"--}}
                        @foreach($horario as $horarios )
                          @if($horarios->id_centro == Auth::user()->id_centro)
                            @foreach($detalledia as $d)
                              @if($horarios->id_detalle_dia == $d->id)
                                @foreach($dia as $dias)
                                  @if($d->id == $dias->id_detalle_dia)
                                    <th style="text-align: center;">{{ $dias->dia }}</th>
                                  @endif
                                @endforeach
                              @endif
                            @endforeach
                          @endif
                        @endforeach
                        {{-- DIAS DE LA SEMANA JALAR DE LA TABLA "DIAS"--}}
                      </tr>
                      @else
                      <tr>
                        <th style="text-align: center;">...</th>
                      </tr>

                    @endif 
                  </thead>
                  <tbody>
                      @if($contador > 0)

                          @foreach($horario as $h)
                            @if($h->id_centro == Auth::user()->id_centro)
                              @foreach($turno as $t)
                                @if($h->id_turno == $t->id)
                                {{-- HORA --}}
                                  @foreach($hora as $horas)
                                    @if($horas->id_turno == $t->id)
                                      <tr>
                                        {{-- Para mostrar las horas --}}
                                        <td class="hidden-xs">{{ $horas->hora }}</td>
                                        {{-- Boton para solicitar reserva --}}

                                        @foreach($horario as $horarios )
                                          @if($horarios->id_centro == Auth::user()->id_centro)

                                            @foreach($detalledia as $d)
                                              @if($horarios->id_detalle_dia == $d->id)
                                              {{-- DIA --}}
                                                @foreach($dia as $dias)
                                                  @if($d->id == $dias->id_detalle_dia)
                                                  @php($paso=0)
                                                    @foreach($reserva as $res)
          @if($res->id_estado == 1 && $res->id_hora == $horas->id && $res->id_dia == $dias->id && Auth::user()->id_centro == $res->id_centro)

                                                    <td style="text-align: center;">
                                                          <button disabled="" class="btn btn-default" type="submit">Ocupado</button>
                                                    </td>

                                                    @php($paso++)

                                                    @endif
                                                    @endforeach
                                                    @if($paso == 0)
                                                    <td style="text-align: center;">
                                                      <form action="{{ route('horario_admin.update',Auth::user()->id_centro) }}" enctype="multipart/form-data" method="POST">
                                                        @csrf                              
                                                        @method('PUT')
                                                        {{-- Primer Input hora id--}}
                                                        <input type="text" name="id_hora" value="{{ $horas->id }}" style="width:1px;height:1px;visibility: hidden;">
                                                         {{-- boton para guardar la reserva --}}
                                                        <button class="btn btn-default" type="submit">Libre</button>
                                                        {{-- segundo input dia id--}}
                                                        <input type="text" name="id_dia" value="{{ $dias->id }}" style="width:1px;height:1px;visibility:hidden;">  
                                                      </form>
                                                    </td>
                                                    @endif

                                                  @endif
                                                @endforeach
                                              @endif
                                            @endforeach

                                          @endif
                                        @endforeach

                                      </tr>
                                    @endif
                                  @endforeach
                                @endif
                              @endforeach
                            @endif
                          @endforeach

                          @else
                          <tr>
                            <td style="text-align: center;"><h3 class="panel-title" style="color:black;">No Disponible...</h3></td>
                          </tr>
                      @endif
                  </tbody>
                </table>
              </div>
            </div>
        </div>
    </div>
</div>
{{-- Calendario --}} 
@endsection