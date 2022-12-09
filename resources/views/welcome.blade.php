@extends('layouts.main')

@section('section')

<!-- Ceo Banner section start -->
<section class="ceo_banner_section">
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
        <div class="text-center wow fadeInUp mt-5" data-wow-delay="0.1s">
            <h1 class="mb-2 mt-2 text-header">We will make it easy for you!</h1>
            <p class="para-text">Plan your financial future. Compare, analyze & apply for various <b>Banking</b>, <b>Credit</b> and <b>Investment</b> solutions bases on your specific requirements.
            </p>
        </div>
        <div class="row">

            <div class="col-12 col-md-6 col-lg-3 mt-3">
                <a href="{{route('loan','home')}}">
                    <div class="feature-item_new text-center p-4">
                        <div class="d-inline-flex align-items-center justify-content-center bg-white rounded-circle mb-3"
                            style="width: 90px; height: 90px;">
                            <img src="./img/loan.png" class="d-block w-75">
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

                            <img src="./img/saving-account.png" class="d-block w-75">
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
                            <img src="./img/credit-card.png" class="d-block w-75">
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
                            <img src="./img/investing.png" class="d-block w-75">
                        </div>
                        <h5 class="mb-2 service-heading">INVESTMENT</h5>
                    </div>
                </a>
            </div>
        </div>

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
                            <img src="./img/loan.png" class="d-block w-100">
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
                        <img src="./img/home-loan.png" class="d-block w-100">
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
            <!-- test -->
            <div class="row">
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
            </div>
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
                        <a href="Javascript:void(0)" id="calculate_emi" class="btn btn-primary">Calculate</a>
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
        /*border: 1px solid #0B9D58 !important;*/
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
        /*color: #0b9d58;*/
        font-weight: 600;
    }
    .card-body{
        height: auto !important;
    }
    .service-heading{
        color: black !important;
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