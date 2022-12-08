@extends('layouts.main')

<!-- Ceo Banner section start -->
<section class="ceo_banner_section">
    <div class="container">
        <div class="row">
            <div class="col-12 d-flex justify-content-center">
                <h1 class="main_heading_content">{{$loan->name}}</h1>
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

            <!-- <h5 class="text-center">{{$loan->name}}</h5> -->
            <div class="col-lg-10">
                <div class="row mt-4 flex-row-reverse">
                    <div class="col-lg-3 text-center p-1">
                        <h6 class="text-sm">Interest Rate</h6>
                        <p class="text-danger text-sm mt-1">{{$loan->interest_rate}}</p>
                    </div>
                    <div class="col-lg-3 text-center p-1">
                        <h6 class="text-sm">Processing Fee</h6>
                        <p class="text-danger text-sm mt-1">{{$loan->processing_fee}}</p>
                    </div>
                    <div class="col-lg-3 text-center p-1">
                        <h6 class="text-sm">Tenure Range</h6>
                        <p class="text-danger text-sm mt-1">{{$loan->tenure_range}}</p>
                    </div>
                    <div class="col-lg-3 text-center p-1">
                        <a href="#" target="_blank" class="btn btn-primary btn-block" style="background:#ed1b32;color:white;border:#ed1b32;border-radius:50px;">Apply Now</a>
                    </div>
                </div>
            </div>
             <div class="col-lg-2 mt-3 mt-md-0 text-center text-md-start">
                <img src="{{\App\Models\Bank::IMAGE_URL.$loan->bank->logo}}" class="img-fluid" width="160" height="58" alt="img">
            </div>
        </div>
    </div>


    <!-- details -->
    <div class="card-box rounded shadow-sm border py-4 px-4 mt-4" style="background:">
        <div class="row align-items-center" style="margin:20px;padding-right:50px;">

            {!! $loan->details !!}
        </div>
    </div>
    <!-- details -->

  </div>
</section>
<!-- Deit plan End -->