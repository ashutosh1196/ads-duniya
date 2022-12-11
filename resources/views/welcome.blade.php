@extends('layouts.main')

@section('section')

<div class="banner">
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <h3 class="display-4 fw-bold" style="font-size: 35px;">Your Customized Banking Partner</h3>
                <p>Plan your financial future. Compare, analyze & apply for various <b>Banking</b>, <b>Credit</b> and <b>Investment</b> solutions bases on your specific requirements.</p>
                <!-- <button class="btn btn-success">Learn More</button> -->

                <!-- testing  -->
                <!-- <div class="row" style="margin-top:50px;">

                    <a href="{{route('loan','home')}}" class="col-sm-3 mb-2">
                        <div class="feature-item_new text-center p-4">
                            <div class="d-inline-flex align-items-center justify-content-center bg-white rounded-circle mb-3"
                                style="width: 90px; height: 90px;">
                                <img src="{{asset('loan.png')}}" class="d-block w-75">
                            </div>
                            <h5 class="mb-2 service-heading">LOAN</h5>
                        </div>
                    </a>

                    <a href="{{route('saving-account')}}" class="col-sm-3 mb-2">
                        <div class="feature-item_new text-center p-4 first_item position-relative">
                            <div class="d-inline-flex align-items-center justify-content-center bg-white rounded-circle mb-3"
                                style="width: 90px; height: 90px;">

                                <img src="{{asset('saving-account.png')}}" class="d-block w-75">
                            </div>
                            <h5 class="mb-2 service-heading">SAVING ACCOUNT</h5>
                        </div>
                    </a>

                    <a href="{{route('credit-cards')}}" class="col-sm-3">
                        <div class="feature-item_new text-center p-4">
                            <div class="d-inline-flex align-items-center justify-content-center bg-white rounded-circle mb-3"
                                style="width: 90px; height: 90px;">
                                <img src="{{asset('credit-card.png')}}" class="d-block w-75">
                            </div>
                            <h5 class="mb-2 service-heading">CREDIT CARD</h5>
                        </div>
                    </a>

                    <a href="{{route('mutual-fund')}}" class="col-sm-3">
                        <div class="feature-item_new text-center p-4">
                            <div class="d-inline-flex align-items-center justify-content-center bg-white rounded-circle mb-3"
                                style="width: 90px; height: 90px;">
                                <img src="{{asset('investment.png')}}" class="d-block w-75">
                            </div>
                            <h5 class="mb-2 service-heading">INVESTMENT</h5>
                        </div>
                    </a>

                </div> -->
                <!-- testing  -->

            </div>
            <div class="col-sm-4">
                <!-- here goes the image -->
            </div>
        </div>
    </div>
</div>

<!-- Ceo Banner section start -->
<section class="ceo_banner_section" style="display:none">
    <div class="container">
        <div class="row">
            <div class="col-12 d-flex justify-content-center">
                <h1 class="main_heading_content">Your Customized Online Banking Partner</h1>
            </div>
        </div>
    </div>
</section>
<!-- Ceo Banner section end -->

<!-- Deit plan Start -->
<section class="deit_plan">
    <div class="container pt-lg-4">
        <!-- <div class="text-center wow fadeInUp mt-5" data-wow-delay="0.1s">
            <h1 class="mb-2 mt-2 text-header">We will make it easy for you!</h1>
            <p class="para-text">Plan your financial future. Compare, analyze & apply for various <b>Banking</b>, <b>Credit</b> and <b>Investment</b> solutions bases on your specific requirements.
            </p>
        </div> -->

        <!-- testing  -->
        <div class="row" style="margin-top:50px;">

            <div class="col-md-3 col-6 mob-mb-4 top-options">
                <div class="pricingTable" style="padding-bottom:0px;">
                    <a href="{{route('loan','home')}}">
                        <div class="p-4 pb-1">
                            <div class="d-inline-flex align-items-center justify-content-center bg-white rounded-circle mb-3"
                            style="width: 90px; height: 90px;">
                                <img src="{{asset('loan.png')}}" class="d-block w-75">
                            </div>      
                        </div>
                        <div class="pricingTable-header" style="border-radius:50% 50% 10px 10px;padding:5px 0px;">
                            <h3 class="heading mt-3" style="color:white">LOAN</h3>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-md-3 col-6 mob-mb-4 top-options">
                <div class="pricingTable" style="padding-bottom:0px;">
                    <a href="{{route('saving-account')}}">
                        <div class="p-4 pb-1">
                            <div class="d-inline-flex align-items-center justify-content-center bg-white rounded-circle mb-3"
                            style="width: 90px; height: 90px;">
                                <img src="{{asset('saving-account.png')}}" class="d-block w-75">
                            </div>      
                        </div>
                        <div class="pricingTable-header" style="border-radius:50% 50% 10px 10px;padding:5px 0px;">
                            <h3 class="heading mt-3" style="color:white">SAVING ACCOUNT</h3>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-md-3 col-6 mob-mb-4 top-options">
                <div class="pricingTable" style="padding-bottom:0px;">
                    <a href="{{route('credit-cards')}}">
                        <div class="p-4 pb-1">
                            <div class="d-inline-flex align-items-center justify-content-center bg-white rounded-circle mb-3"
                            style="width: 90px; height: 90px;">
                                <img src="{{asset('credit-card.png')}}" class="d-block w-75">
                            </div>      
                        </div>
                        <div class="pricingTable-header" style="border-radius:50% 50% 10px 10px;padding:5px 0px;">
                            <h3 class="heading mt-3" style="color:white">CREDIT CARD</h3>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-md-3 col-6 mob-mb-4 top-options">
                <div class="pricingTable" style="padding-bottom:0px;">
                    <a href="{{route('mutual-fund')}}">
                        <div class="p-4 pb-1">
                            <div class="d-inline-flex align-items-center justify-content-center bg-white rounded-circle mb-3"
                            style="width: 90px; height: 90px;">
                                <img src="{{asset('investment.png')}}" class="d-block w-75">
                            </div>      
                        </div>
                        <div class="pricingTable-header" style="border-radius:50% 50% 10px 10px;padding:5px 0px;">
                            <h3 class="heading mt-3" style="color:white">INVESTMENT</h3>
                        </div>
                    </a>
                </div>
            </div>

        </div>
        <!-- testing  -->

        <!-- <div class="row">

            <div class="col-12 col-md-6 col-lg-3 mt-3">
                <a href="{{route('loan','home')}}">
                    <div class="feature-item_new text-center p-4">
                        <div class="d-inline-flex align-items-center justify-content-center bg-white rounded-circle mb-3"
                            style="width: 90px; height: 90px;">
                            <img src="{{asset('loan.png')}}" class="d-block w-75">
                        </div>
                        <h5 class="mb-2 service-heading">LOAN</h5>
                    </div>
                </a>
            </div>

            <div class="col-12 col-md-6 col-lg-3 mt-3">
                <a href="{{route('saving-account')}}">
                    <div class="feature-item_new text-center p-4 first_item position-relative">
                        <div class="d-inline-flex align-items-center justify-content-center bg-white rounded-circle mb-3"
                            style="width: 90px; height: 90px;">

                            <img src="{{asset('saving-account.png')}}" class="d-block w-75">
                        </div>
                        <h5 class="mb-2 service-heading">SAVING ACCOUNT</h5>
                    </div>
                </a>
            </div> 

            <div class="col-12 col-md-6 col-lg-3 mt-3">
                <a href="{{route('credit-cards')}}">
                    <div class="feature-item_new text-center p-4">
                        <div class="d-inline-flex align-items-center justify-content-center bg-white rounded-circle mb-3"
                            style="width: 90px; height: 90px;">
                            <img src="{{asset('credit-card.png')}}" class="d-block w-75">
                        </div>
                        <h5 class="mb-2 service-heading">CREDIT CARD</h5>
                    </div>
                </a>
            </div> 
            
            <div class="col-12 col-md-6 col-lg-3 mt-3">
                <a href="{{route('mutual-fund')}}">
                    <div class="feature-item_new text-center p-4">
                        <div class="d-inline-flex align-items-center justify-content-center bg-white rounded-circle mb-3"
                            style="width: 90px; height: 90px;">
                            <img src="{{asset('investment.png')}}" class="d-block w-75">
                        </div>
                        <h5 class="mb-2 service-heading">INVESTMENT</h5>
                    </div>
                </a>
            </div> 

        </div> -->

    </div>
</section>
<!-- Deit plan End -->

<!-- Genetic test Start -->
<section class="genetic_test">
    <div class="container pt-lg-4">
        <div class="text-center wow fadeInUp mt-5" data-wow-delay="0.1s">
            <h1 class="mb-4 mt-2 text-header">Trending Products!</h1>
        </div>
        <div class="row">

            <div class="col-12 col-md-6 col-lg-4 mt-3">
                <a href="{{route('saving-account')}}">
                    <div class="feature-item_new feature_dna text-center p-4 first_item">
                        <div class="d-inline-flex align-items-center justify-content-center bg-white rounded-circle mb-3"
                            style="height: 100px;">
                            <img src="./img/saving-account.png" class="d-block w-100">
                        </div>
                        <h5 class="mb-2 service-heading" style="color:#000;white-space:normal;">Zero Balance Saving Account</h5>
                    </div>
                </a>
            </div>

            <div class="col-12 col-md-6 col-lg-4 mt-3">
                <a href="{{route('loan','personal')}}">
                    <div class="feature-item_new feature_dna text-center p-4">
                        <div class="d-inline-flex align-items-center justify-content-center bg-white rounded-circle mb-3"
                            style="height: 100px;">
                            <img src="{{asset('loan.png')}}" class="d-block w-100">
                        </div>
                        <h5 class="mb-2 service-heading" style="color:#000;white-space:normal;">Apply For Personal Loan</h5>
                    </div>
                </a>
            </div>

            <div class="col-12 col-md-6 col-lg-4 mt-3">
                <a href="{{route('loan','home')}}">
                <div class="feature-item_new feature_dna text-center p-4">
                    <div class="d-inline-flex align-items-center justify-content-center bg-white rounded-circle mb-3"
                        style="height: 100px;">
                        <img src="{{asset('loan.png')}}" class="d-block w-100">
                    </div>
                    <h5 class="mb-2 service-heading" style="color:#000;white-space:normal;">Plan Your Own Home With Home Loan</h5>
                </div>
            </a>
            </div>

            <div class="col-12 col-md-6 col-lg-4 mt-3">
                <a href="{{route('mutual-fund')}}">
                <div class="feature-item_new feature_dna text-center p-4">
                    <div class="d-inline-flex align-items-center justify-content-center bg-white rounded-circle mb-3"
                        style="height: 100px;">
                        <img src="./img/investment.png" class="d-block w-100">
                    </div>
                    <h5 class="mb-2 service-heading" style="color:#000;white-space:normal;">Fixed Deposit Investment Option</h5>
                </div>
            </a>
            </div>
            
            <div class="col-12 col-md-6 col-lg-4 mt-3">
                <a href="{{route('demat')}}">
                <div class="feature-item_new feature_dna text-center p-4">
                    <div class="d-inline-flex align-items-center justify-content-center bg-white rounded-circle mb-3"
                        style="height: 100px;">
                        <img src="./img/trade-demat.png" class="d-block w-100">
                    </div>
                    <h5 class="mb-2 service-heading" style="color:#000;white-space:normal;">Trade With Demat Account</h5>
                </div>
            </a>
            </div>

            <div class="col-12 col-md-6 col-lg-4 mt-3">
                <a href="{{route('credit-cards')}}">
                <div class="feature-item_new feature_dna text-center p-4">
                    <div class="d-inline-flex align-items-center justify-content-center bg-white rounded-circle mb-3"
                        style="height: 100px;">
                        <img src="./img/credit-card.png" class="d-block w-100">
                    </div>
                    <h5 class="mb-2 service-heading" style="color:#000;white-space:normal;">Life Time Free Credit Cards</h5>
                </div>
                </a>
            </div>
            
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

            <!-- test -->
            <!-- <div class="row">
                @foreach($choose_us as $item)
                <div class="col-md-6 col-sm-12 mb-4">
                    <div class="career_bg">
                        <div class="career_opening_text">
                            <h4>{{$item->title}}</h4>
                            <p>{{$item->description}}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div> -->
            <!-- test -->
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

    .pricingTable{
        box-shadow:0 0 10px #ababab33;
        background:aliceblue;
    }



    .banner {
      background-color: #2293ef;
      color:white;
      width: 100%;
      padding: 2em 0;
      clip-path: polygon(0 0, 100% 0, 100% 75%, 0 100%);
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
        .heading{
            font-size:10px !important;
        }
        .top-options{
            height:auto;
        }
    }
    @media screen and (min-width: 401px) {
        .heading{
            font-size:20px !important;
        }
        .top-options{
            height:auto;
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