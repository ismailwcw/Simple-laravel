 <!-- breadcurmb-area-start -->
      <div class="tr-breadcurmb-area p-relative tr-breadcurmb-bg" data-background="{{asset('frontend/assets/img/breadcurmb/breadcurmb.jpg')}}">
         <div class="tr-breadcurmb-shape-1">
            <img src="{{asset('frontend/assets/img/breadcurmb/shape-1.png')}}" alt="">
         </div>
         <div class="container">
            <div class="row justify-content-center">
               <div class="col-xl-8">
                  <div class="tr-breadcurmb-content text-center z-index-2">
                     <div class="tr-breadcurmb-title-box">
                        <h3 class="tr-breadcurmb-title">@yield('title')</h3>
                     </div>
                     <div class="tr-breadcurmb-list-wrap">
                        <div class="tr-breadcurmb-list">
                           <span><a href="{{route('home')}}">Home</a></span> 
                           <span class="dvdr"><i class="fa-regular fa-angles-right"></i></span>
                           <i>@yield('title')</i>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- breadcurmb-area-end -->