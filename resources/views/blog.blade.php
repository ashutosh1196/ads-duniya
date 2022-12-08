@extends('layouts.main')

<!-- Ceo Banner section start -->
<section class="ceo_banner_section">
    <div class="container">
        <div class="row">
            <div class="col-12 d-flex justify-content-center">
                <h1 class="main_heading_content">{{$blog->title}}</h1>
            </div>
        </div>
    </div>
</section>
<!-- Ceo Banner section end -->

<!-- Deit plan Start -->
<section class="deit_plan">
  <div class="container pt-lg-4">
      <div class="card-box rounded shadow-sm border py-4 px-4">
        <div class="row align-items-center">
             <div class="col-lg-2 mt-3 mt-md-0 text-center text-md-start">
                <img src="{{\App\Models\Blog::IMAGE_URL.$blog->image}}" class="" alt="img" style="height:250px">
            </div>
        </div>
    </div>


    <!-- details -->
    <div class="card-box rounded shadow-sm border py-4 px-4 mt-4" style="background:">
        <div class="row align-items-center" style="margin:20px;padding-right:50px;">

            {!! $blog->description !!}
        </div>
    </div>
    <!-- details -->

  </div>
</section>
<!-- Deit plan End -->