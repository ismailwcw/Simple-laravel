@extends('frontend.layout.frontend_master')
@section('content')
@section('title', 'Team Details')
@section('breadcurmb', true)

<!-- contant start here -->


<!-- team-details-area-start -->
      <div class="tr-team-details-area pt-120 pb-120">
         <div class="container">
            <div class="row align-items-center">
               <div class="col-xl-6 col-lg-6">
                  <div class="tr-team-inner-thumb  wow img-custom-anim-left" data-wow-duration="1.5s" data-wow-delay=".3s">
                     <img src="{{ asset('frontend/assets/img/inner/team/inner-thumb.jpg') }}" alt="">
                  </div>
               </div>
               <div class="col-xl-6 col-lg-6">
                  <div class="tr-team-inner-info">
                     <h4 class="tr-team-inner-title">Ralph Edwards</h4>
                     <span>Business</span>
                     <p class="mb-25">Our maids are thoroughly vetted, trained professionals who prioritize the safety and security of your home. Application preparation, document verification, and liaison with immigration authorities.</p>
                     <div class="tr-team-inner-list-box d-flex flex-wrap align-items-center mb-30">
                        <div class="tr-team-inner-list">
                           <ul>
                              <li>Best Quality Services</li>
                              <li>Time Saving</li>
                           </ul>
                        </div>
                        <div class="tr-team-inner-list style-2">
                           <ul>
                              <li>Meet the Dad-lines</li>
                              <li>24/7 Customer Support</li>
                           </ul>
                        </div>
                     </div>
                     <div class="tr-team-inner-contact-wrap flex-wrap d-flex align-items-center mb-35">
                        <div class="tr-team-inner-contact-box d-flex align-items-center">
                           <span class="tr-team-inner-contact-icon">
                              <svg width="20" height="15" viewBox="0 0 20 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M11.6775 9.42402C11.2105 9.73362 10.668 9.89728 10.1087 9.89728C9.54942 9.89728 9.00694 9.73362 8.53991 9.42402L0.847645 4.32448C0.804967 4.29619 0.76339 4.2667 0.722656 4.23636V12.5925C0.722656 13.5506 1.50452 14.3109 2.45075 14.3109H17.7666C18.7301 14.3109 19.4947 13.5334 19.4947 12.5925V4.23633C19.4539 4.26673 19.4122 4.2963 19.3695 4.32463L11.6775 9.42402Z" fill="#E20935" />
                                 <path d="M1.45777 3.41416L9.15004 8.51374C9.44123 8.70678 9.77495 8.80329 10.1087 8.80329C10.4424 8.80329 10.7762 8.70675 11.0674 8.51374L18.7596 3.41416C19.2199 3.10919 19.4947 2.59877 19.4947 2.04789C19.4947 1.10066 18.7198 0.330078 17.7672 0.330078H2.45017C1.49763 0.330115 0.722656 1.1007 0.722656 2.0488C0.722656 2.59877 0.997491 3.10919 1.45777 3.41416Z" fill="#E20935" />
                               </svg>
                           </span>
                           <div class="tr-team-inner-contact-info">
                              <span>Email Address</span>
                              <a class="border-line-black" href="mailto:helpvisa@gmail.com">helpvisa @gmail.com</a>
                           </div>
                        </div>
                        <div class="tr-team-inner-contact-box style-2 d-flex align-items-center">
                           <span class="tr-team-inner-contact-icon">
                              <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M14.9981 13.0152C14.3848 12.4131 13.6192 12.4131 13.0098 13.0152C12.545 13.4736 12.0801 13.9319 11.6231 14.398C11.4981 14.5262 11.3926 14.5534 11.2403 14.4679C10.9395 14.3048 10.6192 14.1727 10.3301 13.9941C8.98244 13.1512 7.85352 12.0674 6.85351 10.8477C6.35741 10.2418 5.916 9.59309 5.60741 8.86283C5.54491 8.71522 5.55662 8.61811 5.67772 8.4977C6.14257 8.051 6.5957 7.59264 7.05273 7.13429C7.68946 6.49726 7.68946 5.75146 7.04883 5.11054C6.68554 4.74541 6.32226 4.38805 5.95897 4.02292C5.58397 3.65003 5.21287 3.27324 4.83396 2.90423C4.22067 2.30992 3.45504 2.30992 2.84566 2.90811C2.3769 3.36647 1.92768 3.83647 1.45111 4.28706C1.0097 4.70269 0.787042 5.21154 0.740167 5.80584C0.665947 6.77305 0.904231 7.68587 1.24017 8.57539C1.92768 10.4166 2.97457 12.0519 4.24411 13.5512C5.95897 15.5789 8.00587 17.1831 10.4004 18.3406C11.4786 18.8612 12.5958 19.2612 13.8106 19.3273C14.6466 19.3739 15.3731 19.1641 15.9552 18.5154C16.3536 18.0726 16.8028 17.6687 17.2247 17.2453C17.8497 16.616 17.8536 15.8547 17.2325 15.2332C16.4903 14.4913 15.7442 13.7532 14.9981 13.0152Z" fill="#E20935" />
                                 <path d="M14.25 9.92003L15.6915 9.67532C15.4649 8.35852 14.8399 7.16603 13.8907 6.21825C12.8867 5.21997 11.6172 4.5907 10.2188 4.39648L10.0156 5.83758C11.0977 5.98907 12.0821 6.47461 12.8594 7.2476C13.5938 7.97786 14.0743 8.90233 14.25 9.92003Z" fill="#E20935" />
                                 <path d="M16.5079 3.68902C14.8438 2.03428 12.7383 0.989394 10.4141 0.666992L10.2109 2.10809C12.2188 2.38776 14.0391 3.29282 15.4766 4.71837C16.8399 6.07401 17.7345 7.78701 18.0587 9.67092L19.5001 9.42621C19.1212 7.2432 18.086 5.26218 16.5079 3.68902Z" fill="#E20935" />
                               </svg>
                           </span>
                           <div class="tr-team-inner-contact-info">
                              <span>Phone Number</span>
                              <a class="border-line-black" href="tel:+00123456789">+ 00 123 456 789</a>
                           </div>
                        </div>
                     </div>
                     <div class="tr-team-inner-social mb-35">
                        <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="#"><i class="fa-brands fa-twitter"></i></a>
                        <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                        <a href="#"><i class="fa-brands fa-behance"></i></a>
                     </div>
                     <div class="tr-progress-bar-wrap inner-style">
                        <h4 class="tr-progress-title mb-30">Professional Skills</h4>
                        <div class="tr-progress-bar-item mb-25">
                           <label>Visa Services</label>
                           <div class="tr-progress-bar">
                              <div class="progress">
                                 <div class="progress-bar wow slideInLeft" data-wow-delay=".1s"
                                    data-wow-duration="2s" role="progressbar" data-width="90%"
                                    aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"
                                    style="width: 90%; visibility: visible; animation-duration: 2s; animation-delay: 0.1s; animation-name: slideInLeft;">
                                    <span>90%</span>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="tr-progress-bar-item">
                           <label>Work Permit Visa</label>
                           <div class="tr-progress-bar">
                              <div class="progress">
                                 <div class="progress-bar wow slideInLeft" data-wow-delay=".1s"
                                    data-wow-duration="2s" role="progressbar" data-width="80%"
                                    aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"
                                    style="width: 80%; visibility: visible; animation-duration: 2s; animation-delay: 0.1s; animation-name: slideInLeft;">
                                    <span>80%</span>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>                     
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- team-details-area-end -->

      <!-- team-area-start -->
      <div class="tr-team-area pb-90">
         <div class="container">
            <div class="col-12">
               <div class="tr-team-section-title mb-50 text-center">              
                  <h3 class="tr-section-title pb-25">Professional Immigration Team</h3>
                  <p>Our standard cleaning service typically includes dusting, vacuuming, mopping, bathroom and kitchen cleaning, <br> surface wiping, and trash removal. However, we can tailor our services to meet your specific needs.</p>
               </div>
            </div>
            <div class="row">
               <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 mb-30">
                  <div class="tr-team-item fix zoom p-relative  wow img-custom-anim-top" data-wow-duration="1.5s" data-wow-delay=".3s">
                     <div class="d-flex justify-content-between align-items-center">
                        <div class="tr-team-author-box mb-20">
                           <span class="d-block mb-5">RR Officer</span>
                           <h4 class="tr-team-title"><a class="border-line-white" href="#">Leslie Alexander</a></h4>
                        </div>
                        <div class="tr-team-icon p-relative">
                           <button>
                              <i class="fa-light fa-share-nodes"></i>
                           </button>
                           <div class="tr-team-social">
                              <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                              <a href="#"><i class="fa-brands fa-twitter"></i></a>
                              <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                              <a href="#"><i class="fa-brands fa-vimeo-v"></i></a>
                           </div>
                        </div>
                     </div>
                     <div class="tr-team-thumb img-zoom">
                        <img src="{{ asset('frontend/assets/img/home-02/team/thumb-1.jpg') }}" alt="">
                     </div>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 mb-30">
                  <div class="tr-team-item fix zoom p-relative  wow img-custom-anim-top" data-wow-duration="1.5s" data-wow-delay=".5s">
                     <div class="d-flex justify-content-between align-items-center">
                        <div class="tr-team-author-box mb-20">
                           <span class="d-block mb-5">Dog Trainer</span>
                           <h4 class="tr-team-title"><a class="border-line-white" href="#">Kristin Watson</a></h4>
                        </div>
                        <div class="tr-team-icon p-relative">
                           <button>
                              <i class="fa-light fa-share-nodes"></i>
                           </button>
                           <div class="tr-team-social">
                              <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                              <a href="#"><i class="fa-brands fa-twitter"></i></a>
                              <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                              <a href="#"><i class="fa-brands fa-vimeo-v"></i></a>
                           </div>
                        </div>
                     </div>
                     <div class="tr-team-thumb img-zoom">
                        <img src="{{ asset('frontend/assets/img/home-02/team/thumb-2.jpg') }}" alt="">
                     </div>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 mb-30">
                  <div class="tr-team-item fix zoom p-relative  wow img-custom-anim-top" data-wow-duration="1.5s" data-wow-delay=".7s">
                     <div class="d-flex justify-content-between align-items-center">
                        <div class="tr-team-author-box mb-20">
                           <span class="d-block mb-5">President of Sales</span>
                           <h4 class="tr-team-title"><a class="border-line-white" href="#">Bessie Cooper</a></h4>
                        </div>
                        <div class="tr-team-icon p-relative">
                           <button>
                              <i class="fa-light fa-share-nodes"></i>
                           </button>
                           <div class="tr-team-social">
                              <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                              <a href="#"><i class="fa-brands fa-twitter"></i></a>
                              <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                              <a href="#"><i class="fa-brands fa-vimeo-v"></i></a>
                           </div>
                        </div>
                     </div>
                     <div class="tr-team-thumb img-zoom">
                        <img src="{{ asset('frontend/assets/img/home-02/team/thumb-3.jpg') }}" alt="">
                     </div>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 mb-30">
                  <div class="tr-team-item fix zoom p-relative  wow img-custom-anim-top" data-wow-duration="1.5s" data-wow-delay=".9s">
                     <div class="d-flex justify-content-between align-items-center">
                        <div class="tr-team-author-box mb-20">
                           <span class="d-block mb-5">Nursing Assistant</span>
                           <h4 class="tr-team-title"><a class="border-line-white" href="#">Ronald Richards</a></h4>
                        </div>
                        <div class="tr-team-icon p-relative">
                           <button>
                              <i class="fa-light fa-share-nodes"></i>
                           </button>
                           <div class="tr-team-social">
                              <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                              <a href="#"><i class="fa-brands fa-twitter"></i></a>
                              <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                              <a href="#"><i class="fa-brands fa-vimeo-v"></i></a>
                           </div>
                        </div>
                     </div>
                     <div class="tr-team-thumb img-zoom">
                        <img src="{{ asset('frontend/assets/img/home-02/team/thumb-4.jpg') }}" alt="">
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div> 
      <!-- team-area-end -->







@endsection