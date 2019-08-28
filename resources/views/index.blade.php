@extends('layouts.master')
@section('contenido')
<div class="container">


      <!-- carousel -->
    <section class="carousel1">

    <div id="carouselPrincipal" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
      <div class="carousel-item active">
      <img src="css/images/carrousel1.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
      <img src="css/images/carrousel2.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
      <img src="css/images/carrousel3.jpg" class="d-block w-100" alt="...">
      </div>
      </div>
      <a class="carousel-control-prev" href="#carouselPrincipal" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselPrincipal" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
      </a>
  </div>
</section>
<!-- carousel -->

<section>

<h4>Oferta del Mes</h4>

<div class="seccion-centrada row d-flex align-items-center">

  <article class="col-xs-12 col-md-5 col-lg-5">

    <!-- carousel -->
    <div id="carouselSecundario" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
    <div class="carousel-item active">
    <img src="css/images/carrousel-sillon-1.jpeg" class="d-block w-100" alt="...">
    </div>

    <div class="carousel-item">
    <img src="css/images/carrousel-sillon-2.jpeg" class="d-block w-100" alt="...">
    </div>

    <div class="carousel-item">
    <img src="css/images/carrousel-sillon-3.jpeg" class="d-block w-100" alt="...">
    </div>
</div>
  <a class="carousel-control-prev" href="#carouselSecundario" role="button" data-slide="prev">
  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
  <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselSecundario" role="button" data-slide="next">
  <span class="carousel-control-next-icon" aria-hidden="true"></span>
  <span class="sr-only">Next</span>
</a>
</div>
</article>

  <article class="col-xs-12 col-md-7 col-lg-7">
  <div class="descripcion-carousel">
        <h5>AMORE MIO</h5>
        <p>Sillon tapizado en tela chenille color gris. Posee una estructura interna de madera maciza Saligna encolada, clavada y recubierta por espuma de alta densidad.</p>
        <h6><strong>Medidas:</strong> 65x65.</h6>
        <h6><strong>Tapizado:</strong> Pana Importada.</h6>
        <button type="button" class="btn btn-light">Comprar</button>
  </div>
  </article>
</div>
    </section>

    <h4>Nuestros Productos</h4>

    <section class="row seccion-productos">

      <article class="col-xs-12 col-md-6 col-lg-6">
        <div class="img-productos">
          <img src="css/images/seccion3-sillones.jpg" class="img-fluid" alt="pdto 01">
          <a class="ver-producto" href="/viewAllProducts/1">SILLONES</a>
        </div>
      </article>

      <article class="col-xs-12 col-md-6 col-lg-6">
        <div class="img-productos">
          <img src="css/images/seccion3-sillas.jpg" class="img-fluid" alt="pdto 01">
          <a class="ver-producto" href="/viewAllProducts/2">SILLAS</a>
        </div>
      </article>

      <article class="col-xs-12 col-md-6 col-lg-6">
        <div class="img-productos">
          <img src="css/images/seccion3-almohadones.jpg" class="img-fluid" alt="pdto 01">
          <a class="ver-producto" href="/viewAllProducts/3">ALMOHADONES</a>
        </div>
      </article>

      <article class="col-xs-12 col-md-6 col-lg-6">
        <div class="img-productos">
          <img src="css/images/seccion3-acolchados.jpg"  class="img-fluid" alt="pdto 01">
          <a class="ver-producto" href="/viewAllProducts/4">ACOLCHADOS</a>
        </div>
      </article>

      <article class="col-xs-12 col-md-6 col-lg-6">
        <div class="img-productos">
          <img src="css/images/seccion3-alfombras.jpg"  class="img-fluid"  alt="pdto 01">
          <a class="ver-producto" href="/viewAllProducts/5">ALFOMBRAS</a>
        </div>
      </article>

      <article class="col-xs-12 col-md-6 col-lg-6">
        <div class="img-productos">
          <img src="css/images/seccion3-cortinas.jpg"  class="img-fluid" alt="pdto 01">
          <a class="ver-producto" href="/viewAllProducts/6">CORTINAS</a>
        </div>
      </article>

    </section>
    <div class="text-center mt-3">
    <a href="/viewAllProducts"><button type="button" class="btn btn-outline-secondary btn-default">Ver Todos</button></a>
    </div>
  </div>
  

  <br>
  <br>
  <br>



@endsection
