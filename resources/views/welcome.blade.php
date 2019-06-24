@extends('layouts.app1')
@section('content1')  
            <div class="row justify-content-center mb-4">
              <div class="col-md-8 text-center">
                <h1 class="" data-aos="fade-up">Realiza tu reserva!!</h1>
                <p data-aos="fade-up" data-aos-delay="100">Escoje tu horario</p>
              </div>
            </div>

            <div class="form-search-wrap" data-aos="fade-up" data-aos-delay="200">
              <form method="post">
                <div class="row align-items-center">

                  <div class="col-lg-12 mb-4 mb-xl-0 col-xl-3">
                    <div class="select-wrap">
                      <span class="icon"><span class="icon-keyboard_arrow_down"></span></span>
                      <select class="form-control rounded" name="deporte" id="">
                        {{-- @foreach()
                        @endforeach --}}
                        <option value="">Centro Deportivo</option>
                        <option value="">Voley</option>
                      </select>
                    </div>
                  </div>

                  <div class="col-lg-12 mb-4 mb-xl-0 col-xl-3">
                    <div class="wrap-icon">
                      <span class="icon icon-room"></span>
                      <input type="text" class="form-control rounded" placeholder="Ubicacion">
                    </div>
                    
                  </div>
                  <div class="col-lg-12 mb-4 mb-xl-0 col-xl-3">
                    <div class="select-wrap">
                      <span class="icon"><span class="icon-keyboard_arrow_down"></span></span>
                      <select class="form-control rounded" name="" id="">
                        {{-- @foreach()
                        @endforeach --}}
                        <option value="">Todos</option>
                        <option value="">Voley</option>
                        <option value="">Wally</option>
                        <option value="">Futbol</option>
                        <option value="">Futsal</option>
                        <option value="">Tennis</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-lg-12 col-xl-2 ml-auto text-right">
                    <input type="submit" class="btn btn-primary btn-block rounded" value="Buscar">
                  </div>
                  
                </div>
              </form>
            </div>
            </div>
        </div>
      </div>
    </div>
  </div> 
@endsection