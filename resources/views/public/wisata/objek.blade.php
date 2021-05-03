@extends('public.layout.app', ['title' => 'Objek Wisata'])

@section('meta')
  <meta name="description" content="Objek Wisata" />
  <meta name="keywords" content="Objek Wisata" />
  <meta property="og:title" content="Objek Wisata"/>
  <meta property="og:type" content="Objek Wisata"/>
  <meta property="og:image" content="{{asset('fontend/images/grid/1.jpg')}}"/>
@endsection

@section('content')
<!-- === Page Title === -->
<section id="page-title" class="page-title page-title-layout1 bg-overlay bg-overlay-3 text-center">
  <div class="bg-img"><img src="{{asset('frontend/images/page-titles/09.jpg')}}" alt="background"></div>
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12">
          <h1 class="pagetitle__heading">Objek Wisata</h1>
        </div><!-- /.col-lg-12 -->
      </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.page-title -->

<section id="blogGridRightSidebar" class="blog blog-grid pb-60">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-12 col-lg-8">
        <div class="">
          <!-- <h1 class="heading__title">Objek Wisata</h1> -->
          <p>
          <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126814.05332920709!2d107.54581596829941!3d-6.654462559701624!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69191c0bc706c5%3A0xa98656ae2e127eeb!2sSerangpanjang%2C%20Kabupaten%20Subang%2C%20Jawa%20Barat!5e0!3m2!1sid!2sid!4v1618981027535!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe> -->
            <iframe frameborder="0" height="500" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126814.05332920709!2d107.54581596829941!3d-6.654462559701624!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69191c0bc706c5%3A0xa98656ae2e127eeb!2sSerangpanjang%2C%20Kabupaten%20Subang%2C%20Jawa%20Barat!5e0!3m2!1sid!2sid!4v1618981027535!5m2!1sid!2sid" style="border:0" width="100%"></iframe>
          </p>
        </div>
      </div>

    </div><!-- /.row -->
  </div><!-- /.row -->
</section>
@endsection


@section('top-resource')
@endsection
@section('bottom-resource')
@endsection