@extends('layouts.app') @section('content')


<style>
  #map {
    height: 400px;
  }
  
  @media (min-width: 992px) {
    .detalle .contenido {
      padding: 0px 0px 0px 100px;
    }
  }
  
  .contenido p {
    font-size: 18px;
  }
</style>

<h3>Nuestra ubicacion</h3>


<div id="map" class="col-xs-12 col-md-6"></div>

<div class="detalle col-xs-12 col-md-6">
  <div class="contenido">
    <h3>Empresa Tubo Norte S.A.C</h3>
    <p>
      Avenida America 4595
    </p>
    <p>
      Nos encontramos en la cuadra de la avenida america cerca del cruce con la avenida nicolas de pierola, puedes visitarnos de
      lunes a viernes de 09:00 am hasta las 10:00 pm.
    </p>
    <p>
      Telefono: 044 484999
    </p>
    <p>
      Celular: 989 374 495
    </p>
    <p>
      E-mail: tubonorte@mail.com
    </p>

  </div>
</div>


<script>
  function initMap() {
    var uluru = { lat: -12.064974, lng: -76.956364 };
    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 15,
      center: uluru
    });
    var marker = new google.maps.Marker({
      position: uluru,
      map: map
    });
  }

</script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCtpIo6pt6DYbWiscJp4jGznQ9POYVxlO4&callback=initMap">

</script>
<!--<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCtpIo6pt6DYbWiscJp4jGznQ9POYVxlO4&callback=initMap" async defer></script>-->

@endsection