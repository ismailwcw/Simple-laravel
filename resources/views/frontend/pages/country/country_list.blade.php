
@extends('frontend.layout.frontend_master')
@section('content')
@section('title', 'Country List')
@section('breadcurmb', true)

<!-- contant start here -->


  <!-- mission-area-start -->
      <div class="tr-mission-area pt-120 pb-90">
         <div class="container">
            <div class="row">
               <div class="col-xl-3 col-lg-4 col-md-6 mb-30">
                  <div class="tr-mission-item zoom text-center  wow itfadeUp" data-wow-duration=".9s" data-wow-delay=".3s">
                     <div class="tr-mission-thumb img-zoom">
                        <img src="{{ asset('frontend/assets/img/home-01/mission/thumb-1.jpg') }}" alt="">
                     </div>
                     <div class="tr-mission-content pt-55 p-relative">
                        <img class="tr-mission-flag" src="{{ asset('frontend/assets/img/home-01/mission/flag-1.png') }}" alt="">
                        <h4 class="mb-10 tr-mission-title"><a class="border-line-theme title-hover" href="{{ route('country.details', ['country' => 'bangladesh']) }}">Bangladesh</a></h4>
                        <p class="mb-20">The required documents vary by visa type but generally include a  photos, and supporting </p>
                        <a class="tr-btn-radius" href="{{ route('country.details', ['country' => 'bangladesh']) }}">
                           Read More
                           <i>
                              <svg width="13" height="13" viewBox="0 0 13 13" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                 <path
                                    d="M12.75 1C12.75 0.585787 12.4142 0.250001 12 0.25L5.25 0.25C4.83579 0.25 4.5 0.585787 4.5 1C4.5 1.41421 4.83579 1.75 5.25 1.75H11.25V7.75C11.25 8.16421 11.5858 8.5 12 8.5C12.4142 8.5 12.75 8.16421 12.75 7.75L12.75 1ZM1.53033 12.5303L12.5303 1.53033L11.4697 0.46967L0.46967 11.4697L1.53033 12.5303Z"
                                    fill="currentcolor" />
                              </svg>
                           </i>
                        </a>
                     </div>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-4 col-md-6 mb-30">
                  <div class="tr-mission-item zoom text-center  wow itfadeUp" data-wow-duration=".9s" data-wow-delay=".5s">
                     <div class="tr-mission-thumb img-zoom">
                        <img src="{{ asset('frontend/assets/img/home-01/mission/thumb-2.jpg') }}" alt="">
                     </div>
                     <div class="tr-mission-content pt-55 p-relative">
                        <img class="tr-mission-flag" src="{{ asset('frontend/assets/img/home-01/mission/flag-2.png') }}" alt="">
                        <h4 class="mb-10 tr-mission-title"><a class="border-line-theme title-hover" href="{{ route('country.details', ['country' => 'germany']) }}">Germany</a></h4>
                        <p class="mb-20">Processing times vary by visa type and country, ranging from a few weeks to several months.</p>
                        <a class="tr-btn-radius" href="{{ route('country.details', ['country' => 'germany']) }}">
                           Read More
                           <i>
                              <svg width="13" height="13" viewBox="0 0 13 13" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                 <path
                                    d="M12.75 1C12.75 0.585787 12.4142 0.250001 12 0.25L5.25 0.25C4.83579 0.25 4.5 0.585787 4.5 1C4.5 1.41421 4.83579 1.75 5.25 1.75H11.25V7.75C11.25 8.16421 11.5858 8.5 12 8.5C12.4142 8.5 12.75 8.16421 12.75 7.75L12.75 1ZM1.53033 12.5303L12.5303 1.53033L11.4697 0.46967L0.46967 11.4697L1.53033 12.5303Z"
                                    fill="currentcolor" />
                              </svg>
                           </i>
                        </a>
                     </div>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-4 col-md-6 mb-30">
                  <div class="tr-mission-item zoom text-center  wow itfadeUp" data-wow-duration=".9s" data-wow-delay=".7s">
                     <div class="tr-mission-thumb img-zoom">
                        <img src="{{ asset('frontend/assets/img/home-01/mission/thumb-3.jpg') }}" alt="">
                     </div>
                     <div class="tr-mission-content pt-55 p-relative">
                        <img class="tr-mission-flag" src="{{ asset('frontend/assets/img/home-01/mission/flag-3.png') }}" alt="">
                        <h4 class="mb-10 tr-mission-title"><a class="border-line-theme title-hover" href="{{ route('country.details', ['country' => 'australia']) }}">Australia</a></h4>
                        <p class="mb-20">Our consultants can assess your situation and goals recommend the most suitable </p>
                        <a class="tr-btn-radius" href="{{ route('country.details', ['country' => 'australia']) }}">
                           Read More
                           <i>
                              <svg width="13" height="13" viewBox="0 0 13 13" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                 <path
                                    d="M12.75 1C12.75 0.585787 12.4142 0.250001 12 0.25L5.25 0.25C4.83579 0.25 4.5 0.585787 4.5 1C4.5 1.41421 4.83579 1.75 5.25 1.75H11.25V7.75C11.25 8.16421 11.5858 8.5 12 8.5C12.4142 8.5 12.75 8.16421 12.75 7.75L12.75 1ZM1.53033 12.5303L12.5303 1.53033L11.4697 0.46967L0.46967 11.4697L1.53033 12.5303Z"
                                    fill="currentcolor" />
                              </svg>
                           </i>
                        </a>
                     </div>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-4 col-md-6 mb-30">
                  <div class="tr-mission-item zoom text-center  wow itfadeUp" data-wow-duration=".9s" data-wow-delay=".9s">
                     <div class="tr-mission-thumb img-zoom">
                        <img src="{{ asset('frontend/assets/img/home-01/mission/thumb-4.jpg') }}" alt="">
                     </div>
                     <div class="tr-mission-content pt-55 p-relative">
                        <img class="tr-mission-flag" src="{{ asset('frontend/assets/img/home-01/mission/flag-4.png') }}" alt="">
                        <h4 class="mb-10 tr-mission-title"><a class="border-line-theme title-hover" href="{{ route('country.details', ['country' => 'england']) }}">England</a></h4>
                        <p class="mb-20">we provide consultation services to help you understand the kinds reasons for rejection </p>
                        <a class="tr-btn-radius" href="{{ route('country.details', ['country' => 'england']) }}">
                           Read More
                           <i>
                              <svg width="13" height="13" viewBox="0 0 13 13" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                 <path
                                    d="M12.75 1C12.75 0.585787 12.4142 0.250001 12 0.25L5.25 0.25C4.83579 0.25 4.5 0.585787 4.5 1C4.5 1.41421 4.83579 1.75 5.25 1.75H11.25V7.75C11.25 8.16421 11.5858 8.5 12 8.5C12.4142 8.5 12.75 8.16421 12.75 7.75L12.75 1ZM1.53033 12.5303L12.5303 1.53033L11.4697 0.46967L0.46967 11.4697L1.53033 12.5303Z"
                                    fill="currentcolor" />
                              </svg>
                           </i>
                        </a>
                     </div>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-4 col-md-6 mb-30">
                  <div class="tr-mission-item zoom text-center  wow itfadeUp" data-wow-duration=".9s" data-wow-delay="1s">
                     <div class="tr-mission-thumb img-zoom">
                        <img src="{{ asset('frontend/assets/img/home-01/mission/thumb-5.jpg') }}" alt="">
                     </div>
                     <div class="tr-mission-content pt-55 p-relative">
                        <img class="tr-mission-flag" src="{{ asset('frontend/assets/img/home-01/mission/flag-5.png') }}" alt="">
                        <h4 class="mb-10 tr-mission-title"><a class="border-line-theme title-hover" href="{{ route('country.details', ['country' => 'canada']) }}">Canada</a></h4>
                        <p class="mb-20">If your visa application is denied we can help you understand the reasons for the denial </p>
                        <a class="tr-btn-radius" href="{{ route('country.details', ['country' => 'canada']) }}">
                           Read More
                           <i>
                              <svg width="13" height="13" viewBox="0 0 13 13" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                 <path
                                    d="M12.75 1C12.75 0.585787 12.4142 0.250001 12 0.25L5.25 0.25C4.83579 0.25 4.5 0.585787 4.5 1C4.5 1.41421 4.83579 1.75 5.25 1.75H11.25V7.75C11.25 8.16421 11.5858 8.5 12 8.5C12.4142 8.5 12.75 8.16421 12.75 7.75L12.75 1ZM1.53033 12.5303L12.5303 1.53033L11.4697 0.46967L0.46967 11.4697L1.53033 12.5303Z"
                                    fill="currentcolor" />
                              </svg>
                           </i>
                        </a>
                     </div>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-4 col-md-6 mb-30">
                  <div class="tr-mission-item zoom text-center  wow itfadeUp" data-wow-duration=".9s" data-wow-delay="1.2s">
                     <div class="tr-mission-thumb img-zoom">
                        <img src="{{ asset('frontend/assets/img/home-01/mission/thumb-6.jpg') }}" alt="">
                     </div>
                     <div class="tr-mission-content pt-55 p-relative">
                        <img class="tr-mission-flag" src="{{ asset('frontend/assets/img/home-01/mission/flag-6.png') }}" alt="">
                        <h4 class="mb-10 tr-mission-title"><a class="border-line-theme title-hover" href="{{ route('country.details', ['country' => 'russia']) }}">Russia</a></h4>
                        <p class="mb-20">Our consulting fees vary and depending on the complexity of the case of service required</p>
                        <a class="tr-btn-radius" href="{{ route('country.details', ['country' => 'russia']) }}">
                           Read More
                           <i>
                              <svg width="13" height="13" viewBox="0 0 13 13" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                 <path
                                    d="M12.75 1C12.75 0.585787 12.4142 0.250001 12 0.25L5.25 0.25C4.83579 0.25 4.5 0.585787 4.5 1C4.5 1.41421 4.83579 1.75 5.25 1.75H11.25V7.75C11.25 8.16421 11.5858 8.5 12 8.5C12.4142 8.5 12.75 8.16421 12.75 7.75L12.75 1ZM1.53033 12.5303L12.5303 1.53033L11.4697 0.46967L0.46967 11.4697L1.53033 12.5303Z"
                                    fill="currentcolor" />
                              </svg>
                           </i>
                        </a>
                     </div>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-4 col-md-6 mb-30">
                  <div class="tr-mission-item zoom text-center  wow itfadeUp" data-wow-duration=".9s" data-wow-delay="1.3s">
                     <div class="tr-mission-thumb img-zoom">
                        <img src="{{ asset('frontend/assets/img/home-01/mission/thumb-7.jpg') }}" alt="">
                     </div>
                     <div class="tr-mission-content pt-55 p-relative">
                        <img class="tr-mission-flag" src="{{ asset('frontend/assets/img/home-01/mission/flag-7.png') }}" alt="">
                        <h4 class="mb-10 tr-mission-title"><a class="border-line-theme title-hover" href="{{ route('country.details', ['country' => 'brazil']) }}">Brazil</a></h4>
                        <p class="mb-20">we offer comprehensive support for family immigration including spousal visas dependent</p>
                        <a class="tr-btn-radius" href="{{ route('country.details', ['country' => 'brazil']) }}">
                           Read More
                           <i>
                              <svg width="13" height="13" viewBox="0 0 13 13" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                 <path
                                    d="M12.75 1C12.75 0.585787 12.4142 0.250001 12 0.25L5.25 0.25C4.83579 0.25 4.5 0.585787 4.5 1C4.5 1.41421 4.83579 1.75 5.25 1.75H11.25V7.75C11.25 8.16421 11.5858 8.5 12 8.5C12.4142 8.5 12.75 8.16421 12.75 7.75L12.75 1ZM1.53033 12.5303L12.5303 1.53033L11.4697 0.46967L0.46967 11.4697L1.53033 12.5303Z"
                                    fill="currentcolor" />
                              </svg>
                           </i>
                        </a>
                     </div>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-4 col-md-6 mb-30">
                  <div class="tr-mission-item zoom text-center  wow itfadeUp" data-wow-duration=".9s" data-wow-delay="1.5s">
                     <div class="tr-mission-thumb img-zoom">
                        <img src="{{ asset('frontend/assets/img/home-01/mission/thumb-8.jpg') }}" alt="">
                     </div>
                     <div class="tr-mission-content pt-55 p-relative">
                        <img class="tr-mission-flag" src="{{ asset('frontend/assets/img/home-01/mission/flag-8.png') }}" alt="">
                        <h4 class="mb-10 tr-mission-title"><a class="border-line-theme title-hover" href="{{ route('country.details', ['country' => 'portugal']) }}">Portugal</a></h4>
                        <p class="mb-20">Processing times vary depending on the visa type and the for visa destination country</p>
                        <a class="tr-btn-radius" href="{{ route('country.details', ['country' => 'portugal']) }}">
                           Read More
                           <i>
                              <svg width="13" height="13" viewBox="0 0 13 13" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                 <path
                                    d="M12.75 1C12.75 0.585787 12.4142 0.250001 12 0.25L5.25 0.25C4.83579 0.25 4.5 0.585787 4.5 1C4.5 1.41421 4.83579 1.75 5.25 1.75H11.25V7.75C11.25 8.16421 11.5858 8.5 12 8.5C12.4142 8.5 12.75 8.16421 12.75 7.75L12.75 1ZM1.53033 12.5303L12.5303 1.53033L11.4697 0.46967L0.46967 11.4697L1.53033 12.5303Z"
                                    fill="currentcolor" />
                              </svg>
                           </i>
                        </a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- mission-area-end --> 







@endsection