<header class="p-0 header_section" id="home">
    <nav class="navbar navbar-expand-lg navbar-light bg-white px-4 py-2 w-100 navbar-height position-fixed">
        <div class="container">
            <a href="" class="navbar-brand p-0">
                <img src="{{asset('img/ads_duniya.png')}}" style="width: auto;" />
                <!-- <img src="img/logo.png" alt="Logo"> -->
            </a>
            <button class="navbar-toggler" onclick="navbarCollapse()" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
       

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <div class="navbar-nav ms-auto py-0" id="ExampleMyNav">

                    <a href="{{route('welcome')}}" class="nav-item nav_anchor_main nav-link {{ Request::routeIs('welcome') ? 'active' : '' }}">Home</a>

                    <a href="{{route('credit-cards')}}" class="nav-item nav_anchor_main nav-link {{ Request::routeIs('credit-cards') ? 'active' : '' }}">Credit Card</a>

                    <a href="{{route('saving-account')}}" class="nav-item nav_anchor_main nav-link {{ Request::routeIs('saving-account') ? 'active' : '' }}">Saving Account</a>

                    <div class="dropdown">
                      <a class="nav-item nav_anchor_main nav-link dropdown-toggle {{ Request::routeIs('loan') ? 'active' : '' }}" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                        Loan
                      </a>

                      <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        @foreach(\App\Models\Loan::LOANS as $item)
                        <li><a class="dropdown-item" href="{{route('loan',$item)}}">{{ucfirst($item)}} Loan</a></li>
                        @endforeach
                      </ul>
                    </div>

                    <!-- <a href="https://server3.rvtechnologies.in/Gena-HealthX/web/designs/Our-recipes.html" class="nav-item nav_anchor_main nav-link">Instant Loan</a> -->


                    <div class="dropdown">
                      <a class="nav-item nav_anchor_main nav-link dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                        Investment 
                      </a>

                      <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <li><a class="dropdown-item" href="#">Demat</a></li>
                        <li><a class="dropdown-item" href="#">Mutual Funds</a></li>
                      </ul>
                    </div>
                    
                </div>
            </div>
        </div>
    </nav>
</header>