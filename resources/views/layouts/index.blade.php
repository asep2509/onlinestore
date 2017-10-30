<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    @include('meta_css')
        <style type="text/css">
        #imaginary_container{
            margin-top:20%; /* Don't copy this */
            display: inline;
        }
        .stylish-input-group .input-group-addon{
            background: #ffffff !important; 
            border:0!important;
        }
        .stylish-input-group .form-control{
            box-shadow:0 0 0; 
        }
        .stylish-input-group button{
            border:0!important;
            background:transparent;
        }      
        .tabbable-panel {
          border:1px solid #eee;
          padding: 10px;
        }

        /* Default mode */
        .tabbable-line > .nav-tabs {
          border: none;
          margin: 0px;
        }
        .tabbable-line > .nav-tabs > li {
          margin-right: 2px;
        }
        .tabbable-line > .nav-tabs > li > a {
          border: 0;
          margin-right: 0;
          color: #737373;
        }
        .tabbable-line > .nav-tabs > li > a > i {
          color: #a6a6a6;
        }
        .tabbable-line > .nav-tabs > li.open, .tabbable-line > .nav-tabs > li:hover {
          border-bottom: 4px solid #fbcdcf;
        }
        .tabbable-line > .nav-tabs > li.open > a, .tabbable-line > .nav-tabs > li:hover > a {
          border: 0;
          background: none !important;
          color: #333333;
        }
        .tabbable-line > .nav-tabs > li.open > a > i, .tabbable-line > .nav-tabs > li:hover > a > i {
          color: #a6a6a6;
        }
        .tabbable-line > .nav-tabs > li.open .dropdown-menu, .tabbable-line > .nav-tabs > li:hover .dropdown-menu {
          margin-top: 0px;
        }
        .tabbable-line > .nav-tabs > li.active {
          border-bottom: 4px solid #3498db;
          color: #fff!important;
          position: relative;
        }
        .tabbable-line > .nav-tabs > li.active > a {
          border: 0;
          color: #333333;
        }
        .tabbable-line > .nav-tabs > li.active > a > i {
          color: #404040;
        }
        .tabbable-line > .tab-content {
          margin-top: -3px;
          background-color: #fff;
          border: 0;
          border-top: 1px solid #eee;
          padding: 15px 0;
        }
        .portlet .tabbable-line > .tab-content {
          padding-bottom: 0;
        }

        /* Below tabs mode */

        .tabbable-line.tabs-below > .nav-tabs > li {
          border-top: 4px solid transparent;
        }
        .tabbable-line.tabs-below > .nav-tabs > li > a {
          margin-top: 0;
        }
        .tabbable-line.tabs-below > .nav-tabs > li:hover {
          border-bottom: 0;
          border-top: 4px solid #fbcdcf;
        }
        .tabbable-line.tabs-below > .nav-tabs > li.active {
          margin-bottom: -2px;
          border-bottom: 0;
          border-top: 4px solid #f3565d;
        }
        .tabbable-line.tabs-below > .tab-content {
          margin-top: -10px;
          border-top: 0;
          border-bottom: 1px solid #eee;
          padding-bottom: 15px;
        }      
        ul.kategori-digital {
          columns: 1;
          -webkit-columns: 1;
          -moz-columns: 1;
        }
        #desktop{
         display:none;
        }        
        #recently-reviewd{
         margin-top: 180px
        }
        #nav-mobile{
         display: block;
         margin-bottom: 0px
        }       
        #second-nav{
            display: none;
        }
        @media(min-width: 768px) and (max-width: 991px){
            #second-nav{
                margin-top: 160px;
            }            
        }        
        @media (min-width: 768px){
            ul.kategori-digital {
              columns: 4;
              -webkit-columns: 4;
              -moz-columns: 4;
            }    
            #desktop{
                display:block;
            }
            #nav-mobile{
                display: none;
            }
            #second-nav{
                display: block;
            }
        }        
        @media (min-width: 200px){
            #recently-reviewd{
                margin-top: 50px
            }                    
        }
        @media (min-width: 992px){ 
            #recently-reviewd{
                margin-top: -40px
            }                    
            #second-nav{
                margin-top: 60px;
            }
        }
        input.custom-search[type="text"]{
            background-color: #ffffff;
            border-radius: 2px!important;
            outline: none;
            box-shadow: none;
            border:none;
        }
        .no-border{
            border:0!important;
        }
        .two-border-radius{
            border-radius: 2px !important;
        }
        .inline-display{
            display: inline!important;
        }
        .margin-top-0{
            margin-top: 0px!important;
        }
        .margin-top-5{
            margin-top: 5px!important;
        } 
        .margin-top-10{
            margin-top: 10px!important;
        }
        .margin-top-15{
            margin-top: 15px!important;
        } 
        .margin-top-20{
            margin-top: 20px!important;
        }
        .margin-top-25{
            margin-top: 25px!important;
        } 
        .margin-top-30{
            margin-top: 30px!important;
        }
        .margin-top-35{
            margin-top: 35px!important;
        }                        
        </style>
</head>
<body>
    
<div class="wrapper">
@yield('content')
<!-- ========================================= RECENTLY VIEWED : END ========================================= -->
<section id="kategori-product">
<div class="container">
    <h4>Kategori Digital</h4>
    <div class="col-xs-12 col-md-12" style="border:1px solid #eee;margin-bottom: 20px;margin-top: 10px;padding: 10px">
        <ul class="kategori-digital">
            <li><a href="">Fashion</li></a>
            <li><a href="">Kecantikan</li></a>
            <li><a href="">Kesehatan</li></a>
            <li><a href="">Perawatan Tubuh</li></a>
            <li><a href="">Handphone & Tablet</li></a>
            <li><a href="">Laptop & Aksesoris</li></a>
            <li><a href="">Komputer & Aksesoris</li></a>
            <li><a href="">Elektronik</li></a>
            <li><a href="">Kamera</li></a>
            <li><a href="">Gaming</li></a>
            <li><a href="">Buku</li></a>
            <li><a href="">Otomotif</li></a>           
        </ul>
    </div>
</section>
<div class="container black-text">
<hr/>
<p><strong>Mukastore - Jual Beli Aman Cepat dan Terpercaya</strong></p>
<p>Mukastore merupakan marketplace / pasar online yang menyediakan banyak jenis produk, diantaranya produk digital dan produk fisik. Produk yang kami tawarkan merupakan produk terbaik yang akan memuaskan Anda.</p>
<p>
    <a href="" class="btn le-button">Mulai Usaha</a> 
    <a href=""><u>Pelajari tentang ini</u></a>
</p>
<hr/>
<h4>Apa kelebihannya?</h4>
<br/>
<div class="row">
    <div class="col-md-4">
        <p><strong>Mudah</strong></p>
        <p>Hadir dengan tampilan yang sederhana menjadi mudah digunakan.</p>
    </div>
    <div class="col-md-4">
        <p><strong>Cepat</strong></p>
        <p>Mukastore melakukan optimalisasi layanan, dengan dukungan layanan 24/7.</p>
    </div>
    <div class="col-md-4">
        <p><strong>Aman</strong></p>
        <p>Dana yang ditransfer akan masuk ke pihak Mukastore, setelah penjual melakukan verifikasi, dana akan diteruskan kepada penjual.</p>
    </div>        
</div>
</div>
<!-- ============================================================= FOOTER ============================================================= -->
<footer id="footer" class="color-bg">
    <div class="sub-form-row">
        <div class="container">
            <div class="col-xs-12 col-sm-8 col-sm-offset-2 no-padding">
                <form role="form">
                    <input placeholder="Berlangganan untuk mendapatkan Promo terbaru">
                    <button class="le-button">Subscribe</button>
                </form>
            </div>
        </div><!-- /.container -->
    </div><!-- /.sub-form-row -->

    <div class="link-list-row">
        <div class="container no-padding">
            <div class="col-xs-12 col-md-4 ">
                <!-- ============================================================= CONTACT INFO ============================================================= -->
<div class="contact-info">
    <div class="footer-logo">
    <img src="{{asset('assets/images/logo-footer-02.png')}}" alt="">
    </div><!-- /.footer-logo -->
    
    <p class="regular-bold"> Hubungi Kami atau kirimi Kami email.</p>
    
    <p>
        Ciapus, Kabandungan 2, Kab. Bogor, 16610, Indonesia
        (+62) 8151 7667 046
    </p>
    
    <div class="social-icons">
        <h3>Temui kami</h3>
        <ul>
            <li><a href="http://facebook.com/transvelo" class="fa fa-facebook"></a></li>
            <li><a href="#" class="fa fa-twitter"></a></li>
            <li><a href="#" class="fa fa-pinterest"></a></li>
            <li><a href="#" class="fa fa-linkedin"></a></li>
            <li><a href="#" class="fa fa-stumbleupon"></a></li>
            <li><a href="#" class="fa fa-dribbble"></a></li>
            <li><a href="#" class="fa fa-vk"></a></li>
        </ul>
    </div><!-- /.social-icons -->

</div>
<!-- ============================================================= CONTACT INFO : END ============================================================= -->            </div>

            <div class="col-xs-12 col-md-8 no-margin">
                <!-- ============================================================= LINKS FOOTER ============================================================= -->
<div class="link-widget">
    <div class="widget">
        <h3>Mukatoko</h3>
        <ul>
            <li><a href="category-grid.html">Tentang</a></li>
            <li><a href="category-grid.html">Bantuan</a></li>
            <li><a href="category-grid.html">Peraturan</a></li>
            <li><a href="category-grid.html">Kebijakan Privasi</a></li>
        </ul>
    </div><!-- /.widget -->
</div><!-- /.link-widget -->

<div class="link-widget">
    <div class="widget">
        <h3>Penjual</h3>
        <ul>
            <li><a href="category-grid.html">Cara Berjualan</a></li>
            <li><a href="category-grid.html">Tips Berjualan</a></li>
            <li><a href="category-grid.html">Keuntungan</a></li>

        </ul>
    </div><!-- /.widget -->
</div><!-- /.link-widget -->

<div class="link-widget">
    <div class="widget">
        <h3>Pembeli</h3>
        <ul>
            <li><a href="category-grid.html">Cara Belanja</a></li>
            <li><a href="category-grid.html">Prosedur Pembayaran</a></li>
            <li><a href="category-grid.html">Jaminan Keamanan</a></li>
            <li><a href="category-grid.html">Tips Aman Berbelanja</a></li>
            <li><a href="category-grid.html">Promo</a></li>
        </ul>
    </div><!-- /.widget -->
</div><!-- /.link-widget -->
<!-- ============================================================= LINKS FOOTER : END ============================================================= -->            </div>
        </div><!-- /.container -->
    </div><!-- /.link-list-row -->

    <div class="copyright-bar">
        <div class="container">
            <div class="col-xs-12 col-sm-6 no-margin">
                <div class="copyright">
                    &copy; <a href="home">Hak Cipta Terpelihara PT. Mukatoko.com</a>
                </div><!-- /.copyright -->
            </div>
            <div class="col-xs-12 col-sm-6 no-margin">
                <div class="payment-methods ">
                    <ul>
                        <li><img alt="" src="{{ asset('assets/images/payments/payment-visa.png') }}"></li>
                        <li><img alt="" src="{{ asset('assets/images/payments/payment-master.png') }}"></li>
                        <li><img alt="" src="{{ asset('assets/images/payments/payment-paypal.png') }}"></li>
                        <li><img alt="" src="{{ asset('assets/images/payments/payment-skrill.png') }}"></li>
                    </ul>
                </div><!-- /.payment-methods -->
            </div>
        </div><!-- /.container -->
    </div><!-- /.copyright-bar -->

</footer><!-- /#footer -->
<!-- ============================================================= FOOTER : END ============================================================= -->   
</div><!-- /.wrapper -->


    <!-- JavaScripts placed at the end of the document so the pages load faster -->
    <script src="{{ asset('assets/js/jquery-1.10.2.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery-migrate-1.2.1.js') }}"></script>
    <script src="{{ asset('assets/js/frontend.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="http://maps.google.com/maps/api/js?sensor=false&amp;language=en"></script>
    <script src="{{ asset('assets/js/gmap3.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap-hover-dropdown.min.js') }}"></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/css_browser_selector.min.js') }}"></script>
    <script src="{{ asset('assets/js/echo.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.easing-1.3.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap-slider.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.raty.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.prettyPhoto.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.customSelect.min.js') }}"></script>
    <script src="{{ asset('assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('assets/js/scripts.js') }}"></script>
</body>
</html>