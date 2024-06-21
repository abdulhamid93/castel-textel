<!-- footer area start-->
<div class="footer-area ptb-50">
    <div class="container">
        <div class="row">
            <div class="col-xl-3 col-lg-3 col-md-4">
                <div class="single-footer contact-us">
                    <img width="120"
                        src="{{ RvMedia::getImageUrl(theme_option('logo_footer') ? theme_option('logo_footer') : theme_option('logo')) }}"
                        alt="{{ theme_option('site_title') }}" loading="lazy" />

                    <div class="footer-title uppercase">
                        <br>
                        <h5>{{ __('Contact US') }}</h5>
                    </div>
                    <ul>
                        <li>
                            <div class="contact-icon"> <i class="zmdi zmdi-pin-drop"></i> </div>
                            <div class="contact-text">
                                <p>{{ theme_option('address') }}</p>
                            </div>
                        </li>
                        <li>
                            <div class="contact-icon"> <i class="zmdi zmdi-email-open"></i> </div>
                            <div class="contact-text">
                                <p><span><a
                                            href="mailto:{{ theme_option('email') }}">{{ theme_option('email') }}</a></span>
                                    <span><a
                                            href="mailto:{{ theme_option('email') }}">{{ theme_option('email') }}</a></span>
                                </p>
                            </div>
                        </li>
                        <li>
                            <div class="contact-icon"> <i class="zmdi zmdi-phone-paused"></i> </div>
                            <div class="contact-text">
                                <p><a href="tel://{{ theme_option('hotline') }}">{{ theme_option('hotline') }}</a> <a
                                        href="tel://{{ theme_option('hotline') }}">
                                        {{ theme_option('hotline') }}</a></p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-2 col-lg-2 col-md-4">
                <div class="single-footer informaton-area">
                    <div class="footer-title uppercase">
                        <h5>{{ __('Information') }}</h5>
                    </div>
                    <div class="informatoin">
                        <ul>
                            <li><a href="#">{{ __('My Account') }}</a></li>
                            <li><a href="#">{{ __('Order History') }}</a></li>
                            <li><a href="#">{{ __('Wishlist') }}</a></li>
                            <li><a href="#">{{ __('Returnes') }}</a></li>
                            <li><a href="#">{{ __('Private Policy') }}</a></li>
                            <li><a href="#">{{ __('Site Map') }}</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 d-md-none d-block d-lg-block">
                <div class="single-footer instagrm-area">
                    <div class="footer-title uppercase">
                        <h5>InstaGram</h5>
                    </div>
                    <div class="instagrm">
                        <ul>
                            {{-- <li><a href="#"><img src="themes/shopwise/clothe/images/gallery/01.jpg" alt=""></a></li>
                            <li><a href="#"><img src="themes/shopwise/clothe/images/gallery/02.jpg" alt=""></a></li>
                            <li><a href="#"><img src="themes/shopwise/clothe/images/gallery/03.jpg" alt=""></a></li>
                            <li><a href="#"><img src="themes/shopwise/clothe/images/gallery/04.jpg" alt=""></a></li>
                            <li><a href="#"><img src="themes/shopwise/clothe/images/gallery/05.jpg" alt=""></a></li>
                            <li><a href="#"><img src="themes/shopwise/clothe/images/gallery/06.jpg" alt=""></a></li> --}}
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-4 offset-xl-1">
                <div class="single-footer newslatter-area">
                    <div class="footer-title uppercase">
                        <h5>Get Newsletters</h5>
                    </div>
                    <div class="newslatter">
                        <form action="#" method="post">
                            <div class="input-box pos-rltv">
                                <input placeholder="Type Your Email hear" type="text">
                                <a href="#">
                                    <i class="zmdi zmdi-arrow-right"></i>
                                </a>
                            </div>
                        </form>
                        <div class="social-icon socile-icon-style-3 mt-40">
                            <div class="footer-title uppercase">
                                <h5>Social Network</h5>
                            </div>
                            <ul>
                                <li><a href="#"><i class="zmdi zmdi-facebook"></i></a></li>
                                <li><a href="#"><i class="zmdi zmdi-linkedin"></i></a></li>
                                <li><a href="#"><i class="zmdi zmdi-pinterest"></i></a></li>
                                <li><a href="#"><i class="zmdi zmdi-google"></i></a></li>
                                <li><a href="#"><i class="zmdi zmdi-twitter"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--footer area start-->

<!--footer bottom area start-->
<div class="footer-bottom global-table">
    <div class="global-row">
        <div class="global-cell">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="copyrigth"> Copyright @
                            <a href="https://devcreative.tech">DevCreative</a> {{ __('All right reserved') }}
                        </div>
                    </div>
                    <div class="col-md-6">
                        <ul class="payment-support text-right">
                            {{-- <li>
                                <a href="#"><img src="themes/shopwise/clothe/images/icons/pay1.png" alt="" /></a>
                            </li>
                            <li>
                                <a href="#"><img src="themes/shopwise/clothe/images/icons/pay2.png" alt="" /></a>
                            </li>
                            <li>
                                <a href="#"><img src="themes/shopwise/clothe/images/icons/pay3.png" alt="" /></a>
                            </li>
                            <li>
                                <a href="#"><img src="themes/shopwise/clothe/images/icons/pay4.png" alt="" /></a>
                            </li>
                            <li>
                                <a href="#"><img src="themes/shopwise/clothe/images/icons/pay5.png" alt="" /></a>
                            </li> --}}
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--footer bottom area end-->

<!-- QUICKVIEW PRODUCT -->
<div id="quickview-wrapper">
    <!-- Modal -->
    <div class="modal fade" id="productModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <div class="modal-product">
                        <div class="product-images">
                            <!--modal tab start-->
                            <div class="portfolio-thumbnil-area-2">
                                <div class="tab-content active-portfolio-area-2">
                                    <div role="tabpanel" class="tab-pane active" id="view1">
                                        <div class="product-img">
                                            {{-- <a href="#"><img src="themes/shopwise/clothe/images/product/01.jpg" alt="Single portfolio" /></a> --}}
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="view2">
                                        <div class="product-img">
                                            {{-- <a href="#"><img src="themes/shopwise/clothe/images/product/02.jpg" alt="Single portfolio" /></a> --}}
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="view3">
                                        <div class="product-img">
                                            {{-- <a href="#"><img src="themes/shopwise/clothe/images/product/03.jpg" alt="Single portfolio" /></a> --}}
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="view4">
                                        <div class="product-img">
                                            {{-- <a href="#"><img src="themes/shopwise/clothe/images/product/04.jpg" alt="Single portfolio" /></a> --}}
                                        </div>
                                    </div>
                                </div>
                                <div class="product-more-views-2">
                                    <div class="thumbnail-carousel-modal-2" data-tabs="tabs">
                                        {{-- <a href="#view1" aria-controls="view1" data-toggle="tab"><img src="themes/shopwise/clothe/images/product/01.jpg" alt="" /></a>
                                        <a href="#view2" aria-controls="view2" data-toggle="tab"><img src="themes/shopwise/clothe/images/product/02.jpg" alt="" /></a>
                                        <a href="#view3" aria-controls="view3" data-toggle="tab"><img src="themes/shopwise/clothe/images/product/03.jpg" alt="" /></a>
                                        <a href="#view4" aria-controls="view4" data-toggle="tab"><img src="themes/shopwise/clothe/images/product/04.jpg" alt="" /></a> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--modal tab end-->
                        <!-- .product-images -->
                        <!-- Footer with the modal structure -->
                        <!-- Footer with the modal structure -->
                        <div class="modal fade" id="productModal" tabindex="-1" role="dialog"
                            aria-labelledby="productModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="productModalLabel">Product Name</h5>
                                        <button type="button" class="close" data-dismiss="modal"
                                            aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="product-info">
                                            <h1 id="modal-product-name"></h1>
                                            <div id="modal-images"></div>
                                            <div class="price-box-3">
                                                <div class="s-price-box">
                                                    <span class="new-price" id="modal-new-price"></span>
                                                </div>
                                            </div>
                                            <div class="quick-desc" id="modal-description"></div>
                                            <div class="social-sharing-modal">
                                                <div class="widget widget_socialsharing_widget">
                                                    <h3 class="widget-title-modal">{{ __('Share this product') }}</h3>
                                                    <ul class="social-icons-modal">
                                                        <li><a target="_blank" title="Facebook" href="#"
                                                                class="facebook m-single-icon"><i
                                                                    class="fa fa-facebook"></i></a></li>
                                                        <li><a target="_blank" title="Twitter" href="#"
                                                                class="twitter m-single-icon"><i
                                                                    class="fa fa-twitter"></i></a></li>
                                                        <li><a target="_blank" title="Pinterest" href="#"
                                                                class="pinterest m-single-icon"><i
                                                                    class="fa fa-pinterest"></i></a></li>
                                                        <li><a target="_blank" title="LinkedIn" href="#"
                                                                class="linkedin m-single-icon"><i
                                                                    class="fa fa-linkedin"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- .product-info -->
                    </div>
                    <!-- .modal-product -->
                </div>
                <!-- .modal-body -->
            </div>
            <!-- .modal-content -->
        </div>
        <!-- .modal-dialog -->
    </div>
    <!-- END Modal -->
</div>
<!-- END QUICKVIEW PRODUCT -->

</div>

{!! Theme::footer() !!}

<script type="text/javascript">
    $(document).ready(function() {
        $('.q-view').on('click', function(e) {
            e.preventDefault();

            // Get the product data from the data attribute
            var productData = $(this).data('product');

            // Parse the product data
            var product = JSON.parse(decodeURIComponent(productData));

            // Populate the modal with the product details
            $('#productModalLabel').text(product.name);
            $('#modal-product-name').text(product.name);
            $('#modal-new-price').text('$' + product.price);
            $('#modal-description').html(product.description);

            // Optionally handle images if you have them
            var imagesHtml = '';
            if (product.images) {
                product.images.forEach(function(image) {
                    imagesHtml += '<img src="' + image + '" alt="' + product.name + '">';
                });
                $('#modal-images').html(imagesHtml);
            }

            // Show the modal
            $('#productModal').modal('show');
        });
    });
</script>

</body>

</html>
