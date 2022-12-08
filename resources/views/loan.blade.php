@extends('layouts.main')

<!-- Ceo Banner section start -->
<section class="ceo_banner_section">
    <div class="container">
        <div class="row">
            <div class="col-12 d-flex justify-content-center">
                <h1 class="main_heading_content">{{ucfirst($type)}} Loan</h1>
            </div>
        </div>
    </div>
</section>
<!-- Ceo Banner section end -->

<!-- Deit plan Start -->
<section class="deit_plan">
    <div class="container pt-lg-4">
        <div class="text-center wow fadeInUp mt-5" data-wow-delay="0.1s">
            
        </div>
        
        <div class="row">
        	@forelse($loans as $loan)
            <div class="col-md-6 mb-5 col-lg-4 col-sm-12 col-xs-12">
                <!-- <a href="" style="color: #000 !important;"> -->
                    <div class="card main_card border-0" style="height:450px;padding:20px;">
                        <img src="{{\App\Models\Bank::IMAGE_URL.$loan->bank->logo}}" class="card-img-top" alt="..." style="min-height:100px;max-height:100px;padding:20px">
                        <div class="card-body" style="height: 100%;">
                           <table class="table table-responsive">
                           		<thead>
                           			<tr>
                           				<th colspan="2">{{$loan->name}}</th>
                           			</tr>
                           		</thead>
                           		<tbody>
                           			<tr>
                           				<th>Interest Rate</th>
                           				<td>{{$loan->interest_rate}}</td>
                           			</tr>
                           			<tr>
                           				<th>Processing Fee : </th>
                           				<td>{{$loan->processing_fee}}</td>
                           			</tr>
                           			<tr>
                           				<th>Tenure Range : </th>
                           				<td>{{$loan->tenure_range}}</td>
                           			</tr>
                           		</tbody>
                           </table>
                             
                        </div>
                        
                        <div class="row">
                        	<div class="col-6">
                        		<button type="button" class="btn btn-primary-gradient_red rounded-pill animated slideInLeft details" data-href="{{route('loan.details',[$loan->type,base64_encode($loan->id)])}}" style="border:1px solid #acd2f1;white-space:nowrap;">More Details</button>
                        	</div>

                        	<div class="col-6">
                        		<button class="btn btn-primary-gradient_red rounded-pill animated slideInLeft" style="background:#ed1b32;color:white;white-space:nowrap;right:20px;position:absolute;">Apply Now
                        		</button>
                        	</div>
                        </div>

                    </div>
                <!-- </a> -->

            </div>
            @empty
              No results found!
            @endforelse
        </div>

    </div>
</section>
<!-- Deit plan End -->

@section('js')
<script type="text/javascript">
  $(document).on('click','.details',function(){
    window.location = $(this).attr('data-href');
  })
</script>
@endsection