<div class="navbar-fixed-top" id="pembatas">
<nav class="navbar navbar-default blue" id="nav-mobile" style="border:none!important">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
      <a class="navbar-brand white-text" href="#">
          <img src="{{asset('assets/images/untitled-02.png')}}" alt="" style="width: 150px;">
      </a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="#">Page 1</a></li>
        <li><a href="#">Page 2</a></li> 
        <li><a href="#">Page 3</a></li> 
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>
<header style="padding: 10px;padding-bottom: 0px;border:none!important" class="blue darken-1" id="desktop">
    <div class="container-fluid">
        <div class="col-md-2">
            <p>
                <div style="margin-top: -5px">
                   <p align="center">
                    <img src="{{asset('assets/images/untitled-02.png')}}" alt="">
                   </p>
                </div>
            </p>
        </div>
        @guest
        <div class="col-md-8">
        @else
        <div class="col-md-5">
        @endguest
            <form>
            <div id="imaginary_container2" class="hidden"> 
                <div class="input-group stylish-input-group">
                    <input type="text" class="form-control custom-search"  placeholder="Saya mau beli..." id="qsearch">
                    <span class="input-group-addon">
                        <button type="submit">
                            <span class="fa fa-search"></span>
                        </button>  
                    </span>
                </div>
            </div>            
        </form>
        </div>
        @guest
        <div class="col-md-2">
            <p align="center" style="margin-top: 5px">
            <span class="btn white-text"><strong>Daftar</strong></span>
            <span class="btn btn-default no-border two-border-radius"><strong>Masuk</strong></span>   
            </p>
        </div>
        @else
        <div class="col-md-5">
            <p align="center" style="margin-top: 5px">
            <span class="btn white-text"><strong><i class="fa fa-shopping-cart"></i> Keranjang</strong></span>
            <span class="btn white-text"><strong><i class="fa fa-list-alt"></i> Produk Saya</strong></span>
            <span class="btn btn-default no-border two-border-radius"><strong>+ Produk</strong></span>  
            <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();"><span class="btn white-text red no-border two-border-radius"><strong><i class="fa fa-sign-out"></i> Keluar</strong></span></a> 
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>            
            </p>
        </div>
        @endguest        
    </div>
</header>
</div>