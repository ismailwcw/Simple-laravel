@extends('frontend.layout.frontend_master')
@section('content')
@section('title', 'Team')
@section('breadcurmb', true)

<!-- contant start here -->



<!-- team-area-start -->
      <div class="tr-team-area pt-120 pb-90">
         <div class="container">
            <div class="row">
               <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 mb-30">
                  <div class="tr-team-item fix zoom p-relative  wow img-custom-anim-top" data-wow-duration="1.5s" data-wow-delay=".3s">
                     <div class="d-flex justify-content-between align-items-center">
                        <div class="tr-team-author-box mb-20">
                           <span class="d-block mb-5">RR Officer</span>
                           <h4 class="tr-team-title"><a class="border-line-white" href="team-details.html">Leslie Alexander</a></h4>
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
                  <div class="tr-team-item fix zoom p-relative  wow img-custom-anim-top" data-wow-duration="1.5s" data-wow-delay=".3s">
                     <div class="d-flex justify-content-between align-items-center">
                        <div class="tr-team-author-box mb-20">
                           <span class="d-block mb-5">Dog Trainer</span>
                           <h4 class="tr-team-title"><a class="border-line-white" href="{{ route('team.details', ['team' => 'kristin-watson']) }}">Kristin Watson</a></h4>
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
                  <div class="tr-team-item fix zoom p-relative  wow img-custom-anim-top" data-wow-duration="1.5s" data-wow-delay=".3s">
                     <div class="d-flex justify-content-between align-items-center">
                        <div class="tr-team-author-box mb-20">
                           <span class="d-block mb-5">President of Sales</span>
                           <h4 class="tr-team-title"><a class="border-line-white" href="{{ route('team.details', ['team' => 'bessie-cooper']) }}">Bessie Cooper</a></h4>
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
                  <div class="tr-team-item fix zoom p-relative  wow img-custom-anim-top" data-wow-duration="1.5s" data-wow-delay=".3s">
                     <div class="d-flex justify-content-between align-items-center">
                        <div class="tr-team-author-box mb-20">
                           <span class="d-block mb-5">Nursing Assistant</span>
                           <h4 class="tr-team-title"><a class="border-line-white" href="{{ route('team.details', ['team' => 'ronald-richards']) }}">Ronald Richards</a></h4>
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
               <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 mb-30">
                  <div class="tr-team-item fix zoom p-relative  wow img-custom-anim-top" data-wow-duration="1.5s" data-wow-delay=".5s">
                     <div class="d-flex justify-content-between align-items-center">
                        <div class="tr-team-author-box mb-20">
                           <span class="d-block mb-5">Medical Assistant</span>
                           <h4 class="tr-team-title"><a class="border-line-white" href="{{ route('team.details', ['team' => 'jacob-jones']) }}">Jacob Jones</a></h4>
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
                        <img src="{{ asset('frontend/assets/img/home-02/team/thumb-5.jpg') }}" alt="">
                     </div>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 mb-30">
                  <div class="tr-team-item fix zoom p-relative  wow img-custom-anim-top" data-wow-duration="1.5s" data-wow-delay=".5s">
                     <div class="d-flex justify-content-between align-items-center">
                        <div class="tr-team-author-box mb-20">
                           <span class="d-block mb-5">Marketing Coordinator</span>
                           <h4 class="tr-team-title"><a class="border-line-white" href="{{ route('team.details', ['team' => 'robert-fox']) }}">Robert Fox</a></h4>
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
                        <img src="{{ asset('frontend/assets/img/home-02/team/thumb-6.jpg') }}" alt="">
                     </div>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 mb-30">
                  <div class="tr-team-item fix zoom p-relative  wow img-custom-anim-top" data-wow-duration="1.5s" data-wow-delay=".5s">
                     <div class="d-flex justify-content-between align-items-center">
                        <div class="tr-team-author-box mb-20">
                           <span class="d-block mb-5">Web Designer</span>
                           <h4 class="tr-team-title"><a class="border-line-white" href="{{ route('team.details', ['team' => 'wade-warren']) }}">Wade Warren</a></h4>
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
                        <img src="{{ asset('frontend/assets/img/home-02/team/thumb-7.jpg') }}" alt="">
                     </div>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 mb-30">
                  <div class="tr-team-item fix zoom p-relative  wow img-custom-anim-top" data-wow-duration="1.5s" data-wow-delay=".5s">
                     <div class="d-flex justify-content-between align-items-center">
                        <div class="tr-team-author-box mb-20">
                           <span class="d-block mb-5">Medical Assistant</span>
                           <h4 class="tr-team-title"><a class="border-line-white" href="{{ route('team.details', ['team' => 'kathryn-murphy']) }}">Kathryn Murphy</a></h4>
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
                        <img src="{{ asset('frontend/assets/img/home-02/team/thumb-8.jpg') }}   " alt="">
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div> 
      <!-- team-area-end -->






@endsection