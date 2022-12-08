<footer class="footer mt-5 pt-lg-4 wow fadeIn" data-wow-delay="0.1s">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-3">
                <img src="{{asset('img/ads_duniya.png')}}" />
                <p class="para-text mt-3">Plan your financial future. Compare, analyze & apply for various Banking, Credit and Investment solutions bases on your specific requirements. </p>
                <div class="d-flex">
                    <div class="form-floating">
                        <input type="text" class="form-control email-footer" id="Address"
                            placeholder="Email Address">
                        <label for="Address">Email Address</label>
                    </div>
                    <button class="ms-2 Email-submit">Subscribe</button>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 footer-colm">
                <div class="foot-col-2">
                    <h4>CATEGORIES</h4>
                    <ul class="ps-0 mt-4 footer_unorder">
                        <li><a href="{{route('credit-cards')}}">Credit Cards</a></li>
                        <li><a href="{{route('saving-account')}}">Saving Account</a></li>
                        <li><a href="{{route('loan','home')}}">Loan</a></li>
                        <li><a href="#">Investment</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 footer-colm">
                <div class="foot-col-2">
                    <h4>ADDRESS</h4>
                    <ul class="ps-0 mt-4 footer_unorder">
                        <li class="d-flex align-items-start"><img src="{{asset('img/India.svg')}}" class="d-block mt-2 me-2" />
                            <p class="mb-0">123 Street, New York,USA<br>
                                gena@gmail.com<br>
                                +012 345 67890<br></p>
                        </li>
                        <li class="d-flex mt-4 align-items-start"><img src="{{asset('img/Germany.svg')}}"
                                class="d-block mt-2 me-2" />
                            <p class="mb-0">123 Street, New York,USA<br>
                                gena@gmail.com<br>
                                +012 345 67890<br></p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 footer-colm">
                <div class="foot-col-2">
                    <h4>Follow Us</h4>
                    <ul class="ps-0 mt-4 footer_unorder">
                        <li><a href="#">Facebook</a></li>
                        <li><a href="#">Twitter</a></li>
                        <li><a href="#">Instagram</a></li>
                        <li><a href="#">Linkedin</a></li>
                        <li><a href="#">Youtube</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-sm-12 footer-bottom text-center p-4">
                <p class="m-0">Copyright © 2021 all rights reserved GenaHealthX</p>
            </div>
        </div>
    </div>
</footer>