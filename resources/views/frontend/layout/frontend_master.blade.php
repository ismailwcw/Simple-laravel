<!doctype html>
<html class="no-js" lang="zxx">


<!-- Mirrored from techsometimes.com/products/html/vivab-html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 16 Jan 2025 06:35:36 GMT -->
@include('frontend.layout.head')

<body class="grey-bg">

   <!-- preloader -->
   @include('frontend.layout.preloader')
   <!-- preloader end  -->

   <!-- back-to-top-start  -->
   @include('frontend.layout.back-to-top')
   <!-- back-to-top-end  -->

   <!-- search popup start -->
   <!-- <div class="search__popup">
      <div class="container">
         <div class="row">
            <div class="col-xxl-12">
               <div class="search__wrapper">
                  <div class="search__top d-flex justify-content-between align-items-center">
                     <div class="search__logo">
                        <a href="index.html">
                           <img src="assets/img/logo/logo.png" alt="">
                        </a>
                     </div>
                     <div class="search__close">
                        <button type="button" class="search__close-btn search-close-btn">
                           <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                              xmlns="http://www.w3.org/2000/svg">
                              <path d="M17 1L1 17" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                 stroke-linejoin="round" />
                              <path d="M1 1L17 17" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                 stroke-linejoin="round" />
                           </svg>
                        </button>
                     </div>
                  </div>
                  <div class="search__form">
                     <form action="#">
                        <div class="search__input">
                           <input class="search-input-field" type="text" placeholder="Type here to search...">
                           <span class="search-focus-border"></span>
                           <button type="submit">
                              <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                 <path
                                    d="M9.55 18.1C14.272 18.1 18.1 14.272 18.1 9.55C18.1 4.82797 14.272 1 9.55 1C4.82797 1 1 4.82797 1 9.55C1 14.272 4.82797 18.1 9.55 18.1Z"
                                    stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                 <path d="M19.0002 19.0002L17.2002 17.2002" stroke="currentColor" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round" />
                              </svg>
                           </button>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div> -->
   <!-- search popup end -->

   <!-- tr-offcanvus-area-start -->
   <!-- <div class="tr-offcanvas-area">
      <div class="tr-offcanvas">
         <div class="tr-offcanvas__close-btn">
            <button class="close-btn"><i class="fal fa-times"></i></button>
         </div>
         <div class="tr-offcanvas__logo">
            <a href="index.html">
               <img src="assets/img/logo/logo.png" alt="">
            </a>
         </div>
         <div class="tr-offcanvas__text">
            <p>Suspendisse interdum consectetur libero id. Fermentum leo vel orci porta non. Euismod viverra nibh
               cras pulvinar suspen.</p>
         </div>
         <div class="tr-menu-mobile"></div>
         <div class="tr-offcanvas__info">
            <h3 class="tr-offcanvas-title">Get In Touch</h3>
            <div class="tr-info-wrapper mb-20 d-flex align-items-center">
               <div class="tr-offcanvas__info-icon">
                  <a href="#"><i class="fal fa-envelope"></i></a>
               </div>
               <div class="tr-offcanvas__info-address">
                  <span>Email</span>
                  <a href="maito:hello@yourmail.com">hello@yourmail.com</a>
               </div>
            </div>
            <div class="tr-info-wrapper mb-20 d-flex align-items-center">
               <div class="tr-offcanvas__info-icon">
                  <a href="#"><i class="fal fa-phone-alt"></i></a>
               </div>
               <div class="tr-offcanvas__info-address">
                  <span>Phone</span>
                  <a href="tel:(00)45611227890">(00) 456 1122 7890</a>
               </div>
            </div>
            <div class="tr-info-wrapper mb-20 d-flex align-items-center">
               <div class="tr-offcanvas__info-icon">
                  <a href="#"><i class="fas fa-map-marker-alt"></i></a>
               </div>
               <div class="tr-offcanvas__info-address">
                  <span>Location</span>
                  <a href="htits://www.google.com/maps/@37.4801311,22.8928877,3z" target="_blank">Riverside 255,
                     San Francisco, USA </a>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="body-overlay"></div> -->
   <!-- tr-offcanvus-area-end -->

   <!-- header area start -->
   @include('frontend.layout.header')

   <main>

      <!-- hero-area-start -->
       @hasSection('show_hero')
                
                @include('frontend.layout.hero')
            @endif
      <!-- hero-area-end -->
      <!-- breadcurmb-area-start -->
       @hasSection('breadcurmb')
                
                @include('frontend.layout.breadcurmb')
            @endif
      <!-- breadcurmb-area-end -->

      @yield('content')

   </main>

   <!-- footer-area-start -->
@include('frontend.layout.footer')
   <!-- footer-area-end -->
   <!-- JS here -->
@include('frontend.layout.script')

</body>


<!-- Mirrored from techsometimes.com/products/html/vivab-html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 16 Jan 2025 06:36:04 GMT -->
</html>