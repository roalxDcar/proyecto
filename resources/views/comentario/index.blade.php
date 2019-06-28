@extends('layouts.app1')
@section('content1')
<div class="row justify-content-center mt-5">
              <div class="col-md-8 text-center">

                  @if($centro->id == $id_centro)
                    <h1>Comentarios y Promociones "{{ $centro->nombre }}" </h1>
                  @endif

              </div>
            </div>
@endsection
@section('content2')

<div class="site-section bg-white">
      <div class="container">

        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center border-primary">
            <h2 class="font-weight-light text-primary">Promoción</h2>
          </div>
        </div>

        <div class="slide-one-item home-slider owl-carousel">

      @foreach($promo as $pro)

          <div>
            <div class="testimonial">
              @foreach($user as $u)
              @if($u->id == $pro->id_user)
               <figure class="mb-4">
                  <img src="images/person_2.jpg" alt="Image" class="img-fluid mb-3">
                  <p>{{ $u->name }}</p>
                </figure>
                <blockquote>
                  <p>{{ $pro->descripcion }}</p>
                </blockquote>
              @endif
              @endforeach
            </div>
          </div>

      @endforeach


        </div>
      </div>
    </div>

    <div class="site-section bg-light">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-8"  data-aos="fade">
            <form action="{{ route('comentario.update',$id_centro) }}" method="POST" class="p-5 bg-white">
              @csrf
              @method('PUT')
              <div class="row form-group">
                <div class="col-md-12">
                  <input type="text" name="id_user" value="{{ Auth::user()->id }}" style="width:1px;height:1px;visibility: hidden;">
                  <label class="text-black"><b>Comentario</b></label> 
                  <textarea name="comentario"  class="form-control" placeholder="Agregar un nuevo comentario público..."></textarea>
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12">
                  <input type="submit" value="Enviar" class="btn btn-primary py-2 px-4 text-white">
                </div>
              </div>  
            </form>
          </div>

          <label class="text-black" for="message"><b>Otros Comentarios </b></label>
          @php($con=0)
          @foreach($comentario as $com)
            @if($com->id_centro == $id_centro)
            @php($con++)
              <div class="col-md-12"  data-aos="fade" data-aos-delay="100">
                
                  <div class="p-4 mb-3 bg-white">
                    @foreach($user as $u)
                    @if($u->id == $com->id_user)
                    <p style="margin-left: 50px;" class="mb-0 font-weight-bold"><b>Nombre: </b>{{ $u->name }}</p>
                    <p style="margin-left: 50px;" class="mb-0 font-weight-bold"><b>Email: </b>{{ $u->email }}</p>
                    <p style="margin-left: 50px;" class="mb-4"><b>Comentario: </b>{{ $com->comentario }}</p>
                    @endif
                    @endforeach
                  </div>
               
              </div>
            @endif
          @endforeach

          @if($con==0)
            <div class="col-md-12"  data-aos="fade" data-aos-delay="100">
              <label class="text-black" for="message"><b><h4>Ningun Comentario...</h4> </b></label>     
            </div>
          @endif


        </div>
      </div>
    </div>

@endsection

