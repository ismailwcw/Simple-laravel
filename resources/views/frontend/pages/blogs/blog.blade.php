@extends('frontend.layout.frontend_master')
@section('content')
@section('title', 'Blog')
@section('breadcurmb', true)


      <!-- blog-area-start -->
      <div class="tr-blog-area tr-blog-style-2 pt-135 pb-90">
         <div class="container">
            <div class="row">
               <div class="col-xl-4 col-lg-6 col-md-6 mb-30 wow itfadeUp" data-wow-duration=".9s" data-wow-delay=".7s">
                  <div class="tr-blog-item mb-30 zoom ">
                     <div class="tr-blog-thumb p-relative img-zoom">
                        <img src="{{ asset('frontend/assets/img/home-02/blog/blog-1.jpg') }}" alt="">
                        <div class="tr-blog-date d-flex justify-content-center align-items-center">
                           <div>
                              <span>25</span>
                              <i>Jun</i>
                           </div>
                        </div>
                     </div>                     
                     <div class="tr-blog-content">
                        <div class="tr-blog-shape-1">
                           <img src="{{ asset('frontend/assets/img/home-02/blog/shape-1.png') }}" alt="">
                        </div>
                        <div class="tr-blog-meta p-relative">
                           <span><i class="fa-light fa-comments"></i>02 Comments</span>
                           <span><i class="fa-light fa-user"></i>Admin</span>                          
                        </div>
                        <h4 class="tr-blog-title mb-15"><a class="border-line-theme title-hover" href="blog-details.html">Permanent residency allows you to live and work</a></h4>
                        <p class="mb-35">Generally, you need a valid passport, recent a photographs, completed application</p>                       
                        <a class="tr-btn-radius" href="#">
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
               <div class="col-xl-8 col-lg-6 col-md-6 wow itfadeUp" data-wow-duration=".9s" data-wow-delay=".9s">
                  <div class="tr-blog-item-wrap">
                     <div class="tr-blog-item item-style-2 d-flex mb-30 style-2 zoom">
                        <div class="tr-blog-content">
                           <div class="tr-blog-shape-1">
                              <img src="{{ asset('frontend/assets/img/home-02/blog/shape-1.png') }}" alt="">
                           </div>
                           <div class="tr-blog-meta p-relative">
                              <span><i class="fa-light fa-comments"></i>02 Comments</span>
                              <span><i class="fa-light fa-user"></i>Admin</span>                          
                           </div>
                           <h4 class="tr-blog-title mb-15"><a class="border-line-theme title-hover" href="blog-details.html">The processing time varies by visa type and few weeks</a></h4>
                           <p class="mb-25">Generally, you need a valid passport, recent a photographs, completed application</p>                       
                           <a class="tr-btn-radius" href="#">
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
                        <div class="tr-blog-thumb p-relative img-zoom">
                           <img src="{{ asset('frontend/assets/img/home-02/blog/blog-2.jpg') }}" alt="">
                           <div class="tr-blog-date d-flex justify-content-center align-items-center">
                              <div>
                                 <span>25</span>
                                 <i>Jun</i>
                              </div>
                           </div>
                        </div>   
                     </div>
                     <div class="tr-blog-item item-style-2 d-flex mb-30 style-2 zoom">
                        <div class="tr-blog-content">
                           <div class="tr-blog-shape-1">
                              <img src="{{ asset('frontend/assets/img/home-02/blog/shape-1.png') }}" alt="">
                           </div>
                           <div class="tr-blog-meta p-relative">
                              <span><i class="fa-light fa-comments"></i>02 Comments</span>
                              <span><i class="fa-light fa-user"></i>Admin</span>                          
                           </div>
                           <h4 class="tr-blog-title mb-15"><a class="border-line-theme title-hover" href="blog-details.html">Many countries offer online visa application services</a></h4>
                           <p class="mb-25">Generally, you need a valid passport, recent a photographs, completed application</p>                       
                           <a class="tr-btn-radius" href="#">
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
                        <div class="tr-blog-thumb p-relative img-zoom">
                           <img src="{{ asset('frontend/assets/img/home-02/blog/blog-3.jpg') }}" alt="">
                           <div class="tr-blog-date d-flex justify-content-center align-items-center">
                              <div>
                                 <span>25</span>
                                 <i>Jun</i>
                              </div>
                           </div>
                        </div>   
                     </div>
                  </div>
               </div>   
            </div>
         </div>
      </div>
      <!-- blog-area-end -->
@endsection