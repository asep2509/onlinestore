<section id="recently-reviewd">
    <div class="container">
        <div class="carousel-holder hover">
            
            <div class="title-nav">
                <h2 class="h1">Terlaris</h2>
                <div class="nav-holder">
                    <a href="#prev" data-target="#owl-recently-viewed" class="slider-prev btn-prev fa fa-angle-left"></a>
                    <a href="#next" data-target="#owl-recently-viewed" class="slider-next btn-next fa fa-angle-right"></a>
                </div>
            </div><!-- /.title-nav -->

            <div id="owl-recently-viewed" class="owl-carousel product-grid-holder">
                @foreach($DataProduct as $product)
                <div class="no-margin carousel-item product-item-holder size-small hover">
                    <div class="product-item">
                        <div class="ribbon blue"><span>best seller</span></div> 
                        <div class="image">
                            <img alt="" src="{{ asset('assets/images/ajax.gif') }}" data-echo="{{ asset('assets/images/apple-macbook-pro-15-inch-2017-14.jpg') }}" />
                        </div>
                        <div class="body">
                            <div class="title small text-left text-muted">
                                <a class="grey-text text-darken-4" href="{{ $product->slug }}">{{ $product->name }}</a>
                            </div>
                            <div class="brand">
                            <?php
                            $categories = explode(',', $product->categories);
                            ?>  
                            @if($product->categories)
                            @foreach($categories as $cat)
                            @foreach($DataCategory as $cats)
                                @if($cat == $cats->id)
                                <label class="label grey lighten-3 grey-text text-darken-4">{{$cats->cat_name}}</label>
                                @endif
                            @endforeach
                            @endforeach
                            @endif
                            </div>
                        </div>
                        <div class="prices">
                            <div class="price-current black-text text-right">Rp.  {{number_format($product->price,2,',','.')}}</div>
                        </div>
                        <div class="hover-area">
                            <div class="add-cart-button">
                                <a href="single-product.html" class="le-button">Add to Cart</a>
                            </div>
                            <div class="wish-compare">
                                <a class="btn-add-to-wishlist" href="#">Add to Wishlist</a>
                                <a class="btn-add-to-compare" href="#">Compare</a>
                            </div>
                        </div>
                    </div><!-- /.product-item -->
                </div><!-- /.product-item-holder -->
                @endforeach 
            </div><!-- /#recently-carousel -->

        </div><!-- /.carousel-holder -->
    </div><!-- /.container -->
</section><!-- /#recently-reviewd -->