@extends('layouts.main')

<!-- Ceo Banner section start -->
<section class="ceo_banner_section">
    <div class="container">
        <div class="row">
            <div class="col-12 d-flex justify-content-center">
                <h1 class="main_heading_content">Credit Cards</h1>
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
        	@foreach($credit_cards as $credit_card)
            <div class="col-md-6 mb-5 col-lg-4 col-sm-12 col-xs-12">
                <!-- <a href="" style="color: #000 !important;"> -->
                    <div class="card main_card border-0" style="height:500px;padding:20px;">
                        <img src="{{\App\Models\CreditCard::IMAGE_URL.$credit_card->image}}" class="card-img-top" alt="..." style="min-height:200px;max-height:200px;padding:20px">
                        <div class="card-body" style="height: 100%;">
                           <table class="table table-responsive">
                           		<thead>
                           			<tr>
                           				<th colspan="2">{{$credit_card->name}}</th>
                           			</tr>
                           		</thead>
                           		<tbody>
                           			<tr>
                           				<th>Type : </th>
                           				<td>{{$credit_card->creditCardType->name}}</td>
                           			</tr>
                           			<tr>
                           				<th>Joining Fee : </th>
                           				<td>{{$credit_card->joining_fee}}</td>
                           			</tr>
                           			<tr>
                           				<th>Annual Fee</th>
                           				<td>{{$credit_card->annual_fee}}</td>
                           			</tr>
                           		</tbody>
                           </table>
                             
                        </div>
                        
                        <div class="row">
                        	<div class="col-6">
                        		<button class="btn btn-primary-gradient_red rounded-pill animated slideInLeft details" data-href="{{route('credit-card.details',[base64_encode($credit_card->id)])}}" style="border:1px solid #acd2f1;white-space:nowrap;">More Details</button>
                        	</div>

                        	<div class="col-6">
                        		<button class="btn btn-primary-gradient_red rounded-pill animated slideInLeft" style="background:#ed1b32;color:white;white-space:nowrap;right:20px;position:absolute;">Apply Now
                        		</button>
                        	</div>
                        </div>

                    </div>
                <!-- </a> -->

            </div>
            @endforeach
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