 

 <div id="myCarousel" class="carousel slide" data-ride="carousel" style="z-index: -1;">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="images/slide1.jpg" alt="Los Angeles" style="width:100%;margin-top: 5%;">
        </div>

      <div class="item">
        <img src="images/slide4.jpg" alt="Chicago" style="width:100%;margin-top: 5%;">
      </div>
    
      <div class="item">
        <img src="images/final1.jpg" alt="New york" style="width:100%;margin-top: 5%;">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

  <div class="message">
   <h1 class="text-center">Book the Ticket</h1>
    @guest
   <a href="{{ route('customer.login') }}"><button class="btn btn-default btn1">Login</button></a>
   <a href="{{ route('customer.register') }}"><button class="btn btn-default btn1" href="">SignUp</button></a>
    @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                  <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest

  </div>