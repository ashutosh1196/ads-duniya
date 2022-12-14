@extends('layouts.main')

<!-- Ceo Banner section start -->
<section class="ceo_banner_section">
    <div class="container">
        <div class="row">
            <div class="col-12 d-flex justify-content-center">
                <h1 class="main_heading_content">Auto</h1>
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
        	@forelse($autos as $auto)
            <div class="col-md-6 mb-5 col-lg-4 col-sm-12 col-xs-12">
                <!-- <a href="" style="color: #000 !important;"> -->
                    <div class="card main_card border-0" style="height:380px;padding:20px;">
                        <img src="{{\App\Models\AutoSeller::IMAGE_URL.$auto->seller->logo}}" class="card-img-top" alt="..." style="min-height:100px;max-height:100px;padding:20px">
                        <div class="card-body" style="height: 100%;">
                           <table class="table table-responsive">
                           		<thead>
                           			<tr>
                           				<th colspan="2">{{$auto->title}}</th>
                           			</tr>
                           		</thead>

                           		<tbody>
                           			<tr class="mt-4">
                           				<th>Inspection Charge</th>
                           				<td>{{$auto->inspection_charge}}</td>
                           			</tr>
                           			<tr>
                           				<th>Time Duration : </th>
                           				<td>{{$auto->time_duration}}</td>
                           			</tr>

                           			
                           		</tbody>
                           </table>
                             
                        </div>
                        
                        <div class="row">
                        	<div class="col-6">
                        		<button type="button" class="btn btn-primary-gradient_red rounded-pill animated slideInLeft details" data-href="{{route('auto.details',base64_encode($auto->id))}}" style="border:1px solid #acd2f1;white-space:nowrap;">More Details</button>
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