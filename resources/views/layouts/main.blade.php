<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel </title>
        <link href="{{asset('css/all.css')}}" rel="stylesheet" type="text/css">
        <link href="//fonts.googleapis.com/css?family=Poppins:100,300,400,500,500i,600,700&display=swap" rel="stylesheet">
        <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <title>Laravel</title>
            <!-- Fonts -->
            {{-- <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet"> --}}
         
            <!-- jQuery-Photo-filter-lightbox-portfolio-plugin -->
            <script src="{{asset('js/jquery-1.7.2.js')}}"></script>
            <script src="{{asset('js/jquery.quicksand.js')}}"></script>
            <script src="{{asset('js/script.js"></script')}}">
            <script src="{{asset('js/jquery.prettyPhoto.js')}}"></script>
            <!-- //jQuery-Photo-filter-lightbox-portfolio-plugin -->
            <!-- //jQuery-Photo-filter-lightbox-portfolio-plugin -->
            <script src="{{asset('js/bootstrap.min.js')}}"></script>
           
    </head>
    <body>
        <section class="w3l-top-header-content">
            <div class="hny-top-menu">
                <div class="top-hd">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="social-top col-lg-4">
                                <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                                <li><a href="#"><span class="fa fa-instagram"></span></a> </li>
                                <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                                <li><a href="#"><span class="fa fa-vimeo"></span></a> </li>
                                <li>
                                    <a href="#">
                                        <span class="fa fa-linkedin"></span>
                                    </a>
                                </li>
                            </div>
                            <div class="accounts col-lg-8">
                                <li class="top_li"><span class="fa fa-mobile"></span><a href="tel:+142 5897555">+234
                                        5897555</a>
                                </li>
        
                                <li class="top_li"><span class="fa fa-envelope-o"></span><a href="mailto:info@example.com">Need help? Contact us via email</a>
        
                                </li>
                                <li class="top_li1"><span class="fa fa-map-marker"></span> 158 Avenues Street Abuja Nigeria</li>
                            </div>
                        </div>
                    </div>
                </div>
                @yield('nav')
            </div>
        </section>
        @yield('content')

        <section class="w3l-footer-22-main">
    
            <div class="footer-hny py-5">
                <div class="container py-lg-4"> 
                            <div class="sub-columns row">
                                <div class="sub-one-left col-lg-4 col-md-6">
                                    <h6>About </h6>
                                    <p>
                                        International Halal Family Center (IHFC) is an independent,
                                        voluntary non-profit organization, registered under RC 1426832 as the
                                         commercial arm of the Islamic Family Foundation (IFF).  It is 
                                        focused on Halal Advocacy, Development and Training.
                                    </p>
                                </div>
                                <div class="sub-two-right col-lg-4 col-md-6 my-md-0 my-5">
                                    <h6>Quick links</h6>
                                    <div class="footer-hny-ul">
                                    <ul>
                                        <li><a href="index.html">Home</a></li>
                                        <li><a href="about.html">About</a></li>
                                        <li><a href="services.html">Services</a></li>
                                        <li><a href="contact.html">Contact</a></li>
                                    </ul>
                                    <ul>
                                            <li><a href="#">Careers</a></li>
                                            <li><a href="#">Privacy Policy</a></li>
                                            <li><a href="#">Terms and Conditions</a></li>
                                            <li><a href="contact.html">Support</a></li>
                                    </ul>
                                   </div>
                                </div>
        
                                <div class="sub-one-left col-lg-4 col-md-6 mt-lg-0 mt-md-5">
                                    <h6>Subscribe to our Newsletter </h6>
                                    <form action="#" method="post" class="footer-newsletter">
                                        <div class="">
                                            <input type="email" name="email" class="form-input" placeholder="Enter your email.." />
                                        </div>
                                        <button type="submit" class="btn">Subscribe</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                 </div>  
                <div class="below-section">
                    <div class="container">
                        <div class="copyright-footer row">
                        <div class="columns col-lg-6">
                            <ul class="social footer">
                                <li><a href="#"><span class="fa fa-facebook" aria-hidden="true"></span></a></li>
                                <li><a href="#"><span class="fa fa-linkedin" aria-hidden="true"></span></a></li>
                                <li><a href="#"><span class="fa fa-twitter" aria-hidden="true"></span></a></li>
                                <li><a href="#"><span class="fa fa-google" aria-hidden="true"></span></a></li>
                                <li><a href="#"><span class="fa fa-github" aria-hidden="true"></span></a></li>
                            </ul>
                        </div>
                        <div class="columns copy-right col-lg-6">
                            <p>© 2020 Handler. All rights reserved. Design by <a href="https://w3layouts.com/" target="_blank">
                                W3Layouts</a>
                        </p>
                        </div>
                    </div>
                    </div>
                </div>
                
            </section>
    </body>
</html>
