  <!-- ======= Footer ======= -->
  {{-- <footer id="footer" class="footer"> --}}
    @php $contact = App\Models\Contact::get()->first() @endphp
    <div class="clear"></div>

    <footer>
      <div class="footer-top">
          <div class="container">
              <div class="row">
                  <div class="col-md-3">
                      <center>
                          <a href="{{url('/')}}"><img src="frontend/assets/images/logo.png" class="footer-logo" /></a>
                      </center>
                     {{--  <p class="description">
                        "SUNNAH MONEY TRANSFER, a company incorporated in England with registered number 09786866 whose registered address is at 282 Bethnal Green, London, United Kingdom E2 0AG. is authorised by the Financial Conduct Authority (“FCA”) under Worldwide west 2 east services limited, trading as WORLDWIDE SERVICES (The Principal), with registered number 07684314 whose address is at 92a Plumstead High Street, London, England, SE18 1SL, FRN 563795, the Payment Services Regulations 2009 (SI 2009 No. 209) (the “Regulations”) for the provision of payment services, with FCA register number 935306 as a PSD agent."
                      </p> --}}
                  </div>
                  <div class="col-md-2">
                      <h1 style="color:#0a6b53;">Useful Links</h1>
                      <p><a href="{{url('/')}}">HOME</a></p>
                      <p><a href="{{url('/about/')}}">ABOUT US</a></p>
                      <p><a href="{{url('/money/')}}">MONEY TRANSFER</a></p>
                      <p><a href="{{url('/terms')}}">TERMS & CONDITIONS</a></p>
                      <p><a href="{{url('/privacy')}}">PRIVACY</a></p>
                      <p><a href="{{url('/cookies')}}">COOKIE POLICY</a></p>
                      <p><a href="{{url('/contact/')}}">CONTACT</a></p>
                      
                  </div>
                  <div class="col-md-4">
                      <h1 style="color:#0a6b53;">Contact us</h1>
                      <p><span class="icon_box"><i class="fas fa-phone-volume" style="color:#fff" aria-hidden="true"></i></span> <a
                              href="tel:02077298100" style="color:#1D1E2C;">02077 298 100</a> </p>
                      <p><span class="icon_box"><i class="fas fa-envelope" style="color:#fff" aria-hidden="true"></i></span><a
                              href="mailto:support@sunnahmoney.com" style="color: #1D1E2C;"> support@sunnahmoney.com</a>
                      </p>
                      <p><span class="icon_box"><i class="fas fa-map-marker-alt" style="color:#fff" aria-hidden="true"></i></span> 282 Benthal Green
                          Road London E2 OAG </p>
                       
                  </div>
                  <div class="col-md-3 text-center ">
                    <h1>Powered By</h1> 
                        <div>
                            <p ><img src="frontend/assets/images/power.png" alt="" class="img-fluid my-3" width="200" alt="Worldwide"></p>
                          </div>
                    {{--   <iframe
                          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9931.114816105151!2d-0.09280568540000553!3d51.51727581553688!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48761cc61018fe23%3A0x1a7eb7e958e3ff36!2sSannah%20Group%20London!5e0!3m2!1sen!2sbd!4v1649919850212!5m2!1sen!2sbd"
                          width="100%" height="200" style="border-radius:20px; border:none;" allowfullscreen="" loading="lazy"
                          referrerpolicy="no-referrer-when-downgrade"></iframe> --}}
                  </div> 
                 <!-- <div class="col-md-2">
                      <h1>Powered By</h1>
                      <img src="https://www.sunnahmoneytransfer.com/frontend/images/worldwide.svg" alt="Worldwide" class="img-fluid my-3" width="200">
                  </div> -->
              </div>
              <div class="row justify-content-center">
                <div class="col-12 mt-4 pe-md-5 pe-0">
                  <P>SUNNAH EXPRESS LIMITED, a company incorporated in England with registered number 09786866 at 282 Bethnal Green Road, London, United Kingdom E20AG. The Sunnah Express Limited is registered with FCA as PSD agent, FRN 935306 under Worldwide West 2 East services Limited, trading as WORLDWIDE SERVICES (The Principal). Worldwide Services FRN in FCA register is 563795 with company registration no 07684314 at address, 92A Plumstead High Street London SE18 1SL, United Kingdom.</p>
                </div>
              </div>
          </div>
      </div>
  
      <div class="copywrite">
          <div class="container">
              <div class="row">
                  <div class="col-md-6">
                      <p>Copyright Sunnahmoney@All Rights Reserved</p>
                  </div>
                  <div class="col-md-6">
                      <ul class="icons-social">
                          <li><a href="https://www.facebook.com/" target="_blank"><img src="frontend/assets/images/icons/facebook.png" /></a></li>
                          <li><a href="https://twitter.com/" target="_blank"><img src="frontend/assets/images/icons/twitter.png" /></a></li>
                          <li><a href="https://www.linkedin.com/" target="_blank"><img src="frontend/assets/images/icons/linkedin.png" /></a></li>
                          <li><a href="https://www.youtube.com/" target="_blank"><img src="frontend/assets/images/icons/youtube.png" /></a></li>
                      </ul>
                  </div>
              </div>
          </div>
      </div>
  </footer>
   
  
      
  
  
      <button onclick="topFunction()" id="scrollToTop" title="Go to top"><i class="fa fa-caret-up fa-lg"></i></button>
      <!-- jquery-->
      <script src="frontend/assets/js/jquery-1.12.4.js"></script>
      <!-- jquery-min from googleapis ajax -->
      <script src="frontend/assets/js/jquery.min.js"></script>
      <!-- Bootstrap js -->
      <script src="frontend/assets/js/bootstrap.min.js"></script>
      <!-- jquery-ui-->
      <script src="frontend/assets/js/jquery-ui.js"></script>
      <!-- slicknav js -->
      <script src="frontend/assets/js/jquery.slicknav.min.js"></script>
      <!-- bxslider js -->
      <script src="frontend/assets/js/jquery.bxslider.min.js"></script>
      <!-- owl-carousel js -->
      <script src="frontend/assets/js/owl.carousel.min.js"></script>
      <!-- Custom js -->
      <script src="frontend/assets/js/custom.js"></script>
  
      <!-- toastr -->
      <script src="backend/assets/toastr.min.js"></script>
      <script type="text/javascript"></script>
  
        <script>
        </script>
  
  </html>
  
