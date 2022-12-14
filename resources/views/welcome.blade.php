@extends('layouts.main')

@section('section')

<div class="banner">
    <div class="container">
        <div class="row">

            <div class="col-sm-4">
                <img src="{{asset('saving-account.png')}}" class="banner_image">
            </div>

            <div class="col-sm-8">
                <h3 class="display-4 fw-bold" style="font-size: 35px;">Your Customized Banking Partner</h3>
                <p>Plan your financial future. Compare, analyze & apply for various <b>Banking</b>, <b>Credit</b> and <b>Investment</b> solutions bases on your specific requirements.</p>
                
                <!-- testing  -->
                <div class="row" style="margin-top:50px;">

                    <div class="col-md-3 col-6 mob-mb-4 top-options">
                        <div class="pricingTable" style="padding-bottom:0px;">
                            <a href="{{route('loan','home')}}">
                                <div class="p-4 pb-1">
                                    <div class="d-inline-flex align-items-center justify-content-center bg-white rounded-circle mb-1"
                                    style="width: 90px; height: 90px;">
                                        <img src="{{asset('loan.png')}}" class="d-block w-75">
                                    </div>      
                                </div>
                                
                                <h3 class="heading">LOAN</h3>
                                
                            </a>
                        </div>
                    </div>

                    <div class="col-md-3 col-6 mob-mb-4 top-options">
                        <div class="pricingTable" style="padding-bottom:0px;">
                            <a href="{{route('saving-account')}}">
                                <div class="p-4 pb-1">
                                    <div class="d-inline-flex align-items-center justify-content-center bg-white rounded-circle mb-1"
                                    style="width: 90px; height: 90px;">
                                        <img src="{{asset('saving-account.png')}}" class="d-block w-75">
                                    </div>      
                                </div>
                                
                                <h3 class="heading">SAVING ACCOUNT</h3>
                                
                            </a>
                        </div>
                    </div>

                    <div class="col-md-3 col-6 mob-mb-4 top-options">
                        <div class="pricingTable" style="padding-bottom:0px;">
                            <a href="{{route('credit-cards')}}">
                                <div class="p-4 pb-1">
                                    <div class="d-inline-flex align-items-center justify-content-center bg-white rounded-circle mb-1"
                                    style="width: 90px; height: 90px;">
                                        <img src="{{asset('credit-card.png')}}" class="d-block w-75">
                                    </div>      
                                </div>
                                
                                <h3 class="heading">CREDIT CARD</h3>
                                
                            </a>
                        </div>
                    </div>

                    <div class="col-md-3 col-6 mob-mb-4 top-options">
                        <div class="pricingTable" style="padding-bottom:0px;">
                            <a href="{{route('mutual-fund')}}">
                                <div class="p-4 pb-1">
                                    <div class="d-inline-flex align-items-center justify-content-center bg-white rounded-circle mb-1"
                                    style="width: 90px; height: 90px;">
                                        <img src="{{asset('investment.png')}}" class="d-block w-75">
                                    </div>      
                                </div>
                                
                                <h3 class="heading">INVESTMENT</h3>
                                
                            </a>
                        </div>
                    </div>

                </div>
                <!-- testing  -->    

            </div>
            
        </div>
    </div>
</div>


<!-- Genetic test Start -->
<section class="genetic_test">
    <div class="container pt-lg-4">
        <div class="text-center wow fadeInUp mt-5" data-wow-delay="0.1s">
            <h1 class="mb-4 mt-2 text-header">Trending Products!</h1>
        </div>
        <div class="row">
            @foreach($trending_accounts as $trending_account)
            <div class="col-12 col-md-6 col-lg-4 mt-3">
                <a href="{{route('saving-account.details',base64_encode($trending_account->id))}}">
                    <div class="feature-item_new feature_dna text-center p-4 first_item">
                        <div class="d-inline-flex align-items-center justify-content-center bg-white rounded-circle mb-3"
                            style="height: 100px;">
                            <img src="{{\App\Models\Bank::IMAGE_URL.$trending_account->bank->logo}}" class="d-block w-100" style="max-height:100px">
                        </div>
                        <h5 class="mb-2 service-heading" style="color:#000;white-space:normal;">{{$trending_account->name}}</h5>
                    </div>
                </a>
            </div>
            @endforeach

            @foreach($trending_loans as $trending_loan)
            <div class="col-12 col-md-6 col-lg-4 mt-3">
                <a href="{{route('loan.details',[$trending_loan->type,base64_encode($trending_loan->id)])}}">
                    <div class="feature-item_new feature_dna text-center p-4 first_item">
                        <div class="d-inline-flex align-items-center justify-content-center bg-white rounded-circle mb-3"
                            style="height: 100px;">
                            <img src="{{\App\Models\Bank::IMAGE_URL.$trending_loan->bank->logo}}" class="d-block w-100" style="max-height:100px">
                        </div>
                        <h5 class="mb-2 service-heading" style="color:#000;white-space:normal;">{{$trending_loan->name}}</h5>
                    </div>
                </a>
            </div>
            @endforeach

            @foreach($trending_cards as $trending_card)
            <div class="col-12 col-md-6 col-lg-4 mt-3">
                <a href="{{route('credit-card.details',base64_encode($trending_card->id))}}">
                    <div class="feature-item_new feature_dna text-center p-4 first_item">
                        <div class="d-inline-flex align-items-center justify-content-center bg-white rounded-circle mb-3"
                            style="height: 100px;">
                            <img src="{{\App\Models\CreditCard::IMAGE_URL.$trending_card->image}}" class="d-block w-100" style="max-height:100px">
                        </div>
                        <h5 class="mb-2 service-heading" style="color:#000;white-space:normal;">{{$trending_card->name}}</h5>
                    </div>
                </a>
            </div>
            @endforeach
        </div>

    </div>
</section>

<div class="pt-lg-4">
    <section class="Consultation_section mt-5">
        <div class="container py-5">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h1 class="mb-4 mt-2 text-header">Why Choose Us!</h1>
            </div>

            <!-- adding new items -->
            <div class="accordion" id="accordionExample2">
                @foreach($choose_us as $item)
                    <div class="accordion-item" style="margin:5px 0px;box-shadow:0px 0px 5px #ccc;">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse_{{$item->id}}" aria-expanded="false" aria-controls="collapseOne">
                                {{$item->title}}
                            </button>
                        </h2>
                        <div id="collapse_{{$item->id}}" class="accordion-collapse collapse " aria-labelledby="headingOne" data-bs-parent="#accordionExample2">
                            <div class="accordion-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        {!! $item->description !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <!-- adding new items -->

        </div>
    </section>
</div>
<!-- Consultation End -->

<!-- finance calculator -->
<section class="genetic_test" style="background-color:#acd2f1;padding-bottom:60px;">
    <div class="container pt-lg-4">
        <div class="text-center wow fadeInUp mt-5" data-wow-delay="0.1s">
            <h1 class="mb-4 mt-2 text-header">Finance Calculator!</h1>
            
        </div>
        <div class="row">
            <div class="col-6 form-wrapper">
                <form action="" class="contact-form">
                    <div class="col-sm-12">
                        <div class="input-block">
                            <label>Loan Amount</label>
                            <input class="form-control" id="loan_amount" type="number" placeholder="1000" value="1000">
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="input-block">
                            <label>Interest rate</label>
                            <input class="form-control" id="interest_rate" type="number" placeholder="20" value="20">
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="input-block">
                            <label>Tenure</label>
                            <input class="form-control" id="tenure" type="number" placeholder="1" value="1">
                        </div>
                    </div>
                    
                    
                    <div class="col-sm-12 text-center">
                        <a href="Javascript:void(0)" id="calculate_emi" class="btn btn-primary" style="border-radius:20px;width:100px;">Calculate</a>
                    </div>                        
                </form>
            </div>

            <div class="col-6 form-wrapper">
                <table class="table table-responsive" style="height: 220px">
                    <tr>
                        <th colspan="2">Results</th>
                    </tr>
                    <tr>
                        <td>EMI</td>
                        <td id="emi">100.00</td>
                    </tr>
                    <tr>
                        <td>Interest Payable</td>
                        <td id="interest_payable">200.00</td>
                    </tr>
                    <tr>
                        <td>Total amount Payable</td>
                        <td id="total_amount">1200.00</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</section>

<!-- blogs -->
<section class="genetic_test">
    <div class="container pt-lg-4">
        <div class="text-center wow fadeInUp mt-5" data-wow-delay="0.1s">
            <h1 class="mb-4 mt-2 text-header">Our Blogs!</h1>
        </div>
        <div class="row">
            @foreach($blogs as $blog)
            <div class="col-md-6 mb-5 col-lg-4">
                <a href="{{route('blog',base64_encode($blog->id))}}" style="color: #000 !important;">
                    <div class="card main_card border-0">
                        <img src="{{\App\Models\Blog::IMAGE_URL.'/'.$blog->image}}" class="card-img-top" alt="..." style="max-height:230px;min-height:230px;">
                        <div class="card-body">
                            <h5 class="card-title service-heading">{{$blog->title}}</h5>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
            
        </div>
    </div>
</section>   

<!-- Testimonial Start -->
<section id="review" style="background-color:#e9f6f0;padding-bottom:50px;">
    <div class="container pt-lg-4">
        <div class="text-center wow fadeInUp mt-5" data-wow-delay="0.1s">
            <h1 class="mb-4 mt-2 text-header">Our Banking Partners</h1>
        </div>
        <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
            @foreach($banks as $bank)
            <div class="testimonial-item p-4">
                <div class="feature-item_new feature_dna text-center p-4 first_item" style="cursor:initial;">
                    <div class="d-inline-flex align-items-center justify-content-center bg-white rounded-circle mb-3" style="height: 100px;">

                        <img src="{{\App\Models\Bank::IMAGE_URL.$bank->logo}}" class="d-block w-100">
                    </div>
                    <h5 class="mb-2 service-heading" style="color:#000;white-space:normal;">{{$bank->name}}</h5>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- Testimonial End -->

@endsection

@section('style')
<style type="text/css">
    .career_bg{
        width: 100%;
        padding:15px;
        background-color: #2293ef;
    }
    input{
        margin-bottom: 10px !important;
    }
    .btn-primary,.btn-primary:hover,.btn-primary:active{
        color: #fff !important;
        background-color: #d3090a !important;
        border-color: #d4090a !important;
        outline: none !important;
        margin-top: 10px;
    }
    .contact-form{
        font-weight: 600;
    }
    .card-body{
        height: auto !important;
    }
    .service-heading{
        color: black !important;
    }

    .accordion-button:not(.collapsed){
        background:#2293ef;
        color:white;
    }

    .pricingTable .pricingTable-header{
        background-color: #2293ef;
    }

    .banner {
      background-color: #2293ef;
      color:white;
      width: 100%;
      padding: 2em 0;
      clip-path: polygon(0 0, 100% 0, 100% 100%, 0 100%);
      margin-top: 80px;
    }
    .row {
      align-items: center;
    }
    h1 {
      text-shadow: 1px 1px 2px #7c7c7c;
    }
    .btn {
      padding: 0.5em 1.5em;
      border-radius: 2em;
      box-shadow: 5px 5px 5px rgba(105, 73, 73, 0.15);
    }
    @media screen and (max-width: 567px) {
      .banner {
        text-align: center;
      }
    }

    @media screen and (max-width: 400px) {
        .banner_image{
            height: 100px !important;
        }
        .heading{
            font-size:12px !important;
            padding-bottom:15px;
            color: #363636 !important;
        }
        .top-options{
            height:auto;
        }
        .pricingTable{
            background:aliceblue;
            border:1px solid #ccc;
            height: 100px;
        }
        .pricingTable .heading{
            margin-top: -5px !important;
        }
        .pricingTable .rounded-circle{
            width: 50px !important;
            height: 50px !important;
        }
        .pricingTable img{
            height: 35px !important;
        }
        .pricingTable .rounded-circle{
            margin-top: -10px !important;
        }
    }
    @media screen and (min-width: 401px) {
        .heading{
            font-size:18px !important;
            padding-bottom:15px;
            color: #363636 !important;
        }
        .top-options{
            height:auto;
        }
        .pricingTable{
            background:aliceblue;
            border:1px solid #ccc;
            height: 180px;
        }
        .pricingTable .heading{
            margin-top: 5px !important;
        }
    }

    
</style>
@endsection

@section('js')

<script type="text/javascript">
    $(document).on('click','#calculate_emi',function(){

        var loan_amount = parseFloat($('#loan_amount').val());
        var interest_rate = parseFloat($('#interest_rate').val());
        var tenure = parseFloat($('#tenure').val());

        var interest = (loan_amount * interest_rate * tenure)/100;
        var total_amount = loan_amount + interest;
        var emi = total_amount / (tenure*12);

        $('#emi').text(emi.toFixed(2));
        $('#interest_payable').text(interest.toFixed(2));
        $('#total_amount').text(total_amount.toFixed(2));
    })
</script>

@endsection