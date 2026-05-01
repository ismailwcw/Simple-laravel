@extends('frontend.layout.frontend_master')
@section('content')
@section('title', 'Blog Details')
@section('breadcurmb', true)

<!-- contant start here -->


<!-- blog-details area start  -->
      <div class="postbox-area pt-120 pb-120">
         <div class="container">
            <div class="row">
               <div class="col-xl-8 col-lg-8 mb-40">
                  <div class="postbox-details-wrapper">
                     <div class="postbox-thumb-box">
                        <div class="postbox-main-thumb wow img-custom-anim-top" data-wow-duration="1.5s" data-wow-delay=".3s mb-25">
                           <img src="{{ asset('frontend/assets/img/inner/blog-details/thumb-1.jpg') }}" alt="">
                        </div>
                        <div class="postbox-content-box">
                           <div class="postbox-meta mb-20">
                              <span>
                                 <svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8.09705 6.73828H6.92383V7.91016H8.09705V6.73828Z" fill="#E20935" />
                                    <path d="M13.2615 1.17188H12.5574V0H11.3838V1.17188H3.63812V0H2.46453V1.17188H1.76038C0.789707 1.17188 0 1.96043 0 2.92969V13.2422C0 14.2114 0.789707 15 1.76038 15H5.66256H5.75058H7.79737C7.39166 14.6656 7.0383 14.2702 6.75103 13.8281H5.75058H5.66256H1.76038C1.43682 13.8281 1.17359 13.5653 1.17359 13.2422V5.50781H13.8483V6.67969V6.73828V6.74118C14.291 7.02803 14.687 7.38091 15.0219 7.786V6.73828V6.67969V2.92969C15.0219 1.96043 14.2322 1.17188 13.2615 1.17188ZM13.8483 4.33594H1.17359V2.92969C1.17359 2.6066 1.43682 2.34375 1.76038 2.34375H2.46453V3.51562H3.63812V2.34375H11.3838V3.51562H12.5574V2.34375H13.2615C13.5851 2.34375 13.8483 2.6066 13.8483 2.92969V4.33594Z" fill="#E20935" />
                                    <path d="M11.0605 7.08984C8.87645 7.08984 7.09961 8.86409 7.09961 11.0449C7.09961 13.2258 8.87645 15 11.0605 15C13.2445 15 15.0213 13.2258 15.0213 11.0449C15.0213 8.86409 13.2445 7.08984 11.0605 7.08984ZM11.0605 13.8281C9.52357 13.8281 8.2732 12.5796 8.2732 11.0449C8.2732 9.51026 9.52357 8.26172 11.0605 8.26172C12.5974 8.26172 13.8477 9.51026 13.8477 11.0449C13.8477 12.5796 12.5974 13.8281 11.0605 13.8281Z" fill="#E20935" />
                                    <path d="M11.6194 9.08203H10.4453V11.6309H12.6174V10.459H11.6194V9.08203Z" fill="#E20935" />
                                    <path d="M5.74939 9.08203H4.57617V10.2539H5.74939V9.08203Z" fill="#E20935" />
                                    <path d="M3.40369 9.08203H2.23047V10.2539H3.40369V9.08203Z" fill="#E20935" />
                                    <path d="M3.40369 6.73828H2.23047V7.91016H3.40369V6.73828Z" fill="#E20935" />
                                    <path d="M3.40369 11.4258H2.23047V12.5977H3.40369V11.4258Z" fill="#E20935" />
                                    <path d="M5.74939 6.73828H4.57617V7.91016H5.74939V6.73828Z" fill="#E20935" />
                                    <path d="M5.74939 11.4258H4.57617V12.5977H5.74939V11.4258Z" fill="#E20935" />
                                 </svg>
                                  Jun 29 2024
                              </span>
                              <span>
                                 <svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M7.41075 7.22557C8.40341 7.22557 9.26286 6.86954 9.9653 6.16711C10.6675 5.46478 11.0237 4.60545 11.0237 3.61267C11.0237 2.62024 10.6676 1.76079 9.96519 1.05824C9.26275 0.356026 8.4033 0 7.41075 0C6.41798 0 5.55864 0.356026 4.85632 1.05835C4.15399 1.76067 3.79785 2.62012 3.79785 3.61267C3.79785 4.60545 4.15399 5.4649 4.85632 6.16722C5.55887 6.86943 6.41832 7.22557 7.41075 7.22557ZM5.47796 1.67988C6.01686 1.14098 6.64903 0.879021 7.41075 0.879021C8.17236 0.879021 8.80464 1.14098 9.34366 1.67988C9.88256 2.21889 10.1446 2.85118 10.1446 3.61267C10.1446 4.37439 9.88256 5.00656 9.34366 5.54558C8.80464 6.08459 8.17236 6.34655 7.41075 6.34655C6.64926 6.34655 6.01709 6.08448 5.47796 5.54558C4.93894 5.00668 4.67687 4.37439 4.67687 3.61267C4.67687 2.85118 4.93894 2.21889 5.47796 1.67988Z" fill="#E20935" />
                                    <path d="M13.7323 11.5338C13.712 11.2415 13.6711 10.9227 13.6108 10.586C13.5499 10.2468 13.4715 9.92612 13.3776 9.63304C13.2806 9.33012 13.1489 9.03097 12.9858 8.74429C12.8168 8.44675 12.6181 8.18765 12.3952 7.97445C12.162 7.7514 11.8766 7.57207 11.5466 7.44127C11.2177 7.31115 10.8532 7.24523 10.4633 7.24523C10.3102 7.24523 10.1621 7.30806 9.87609 7.49426C9.70008 7.60904 9.4942 7.74179 9.2644 7.88862C9.06791 8.01382 8.80172 8.13112 8.47293 8.23732C8.15215 8.34112 7.82645 8.39376 7.50488 8.39376C7.18353 8.39376 6.85783 8.34112 6.53682 8.23732C6.20837 8.13123 5.94207 8.01393 5.74592 7.88873C5.5183 7.74328 5.3123 7.61053 5.13366 7.49414C4.8479 7.30795 4.69981 7.24512 4.54669 7.24512C4.15668 7.24512 3.7923 7.31115 3.46351 7.44138C3.13369 7.57196 2.84816 7.75129 2.61481 7.97456C2.39188 8.18788 2.19321 8.44686 2.0243 8.74429C1.86145 9.03097 1.72961 9.33 1.63257 9.63316C1.53884 9.92624 1.46045 10.2468 1.39957 10.586C1.33914 10.9222 1.29829 11.2412 1.27803 11.5341C1.25812 11.8206 1.24805 12.1187 1.24805 12.4199C1.24805 13.2029 1.49696 13.8368 1.98779 14.3043C2.47256 14.7656 3.11389 14.9995 3.89404 14.9995H11.1166C11.8965 14.9995 12.5379 14.7656 13.0228 14.3043C13.5137 13.8371 13.7626 13.203 13.7626 12.4198C13.7625 12.1176 13.7523 11.8194 13.7323 11.5338ZM12.4167 13.6674C12.0964 13.9723 11.6711 14.1205 11.1165 14.1205H3.89404C3.33934 14.1205 2.91408 13.9723 2.59387 13.6675C2.27973 13.3685 2.12707 12.9603 2.12707 12.4199C2.12707 12.1388 2.13634 11.8613 2.15488 11.5949C2.17296 11.3335 2.20992 11.0464 2.26474 10.7413C2.31887 10.44 2.38776 10.1572 2.4697 9.90118C2.54832 9.6557 2.65556 9.41263 2.78854 9.17848C2.91545 8.95532 3.06148 8.76386 3.22261 8.6096C3.37333 8.46529 3.5633 8.34718 3.78715 8.25861C3.99417 8.17667 4.22683 8.13181 4.4794 8.12505C4.51019 8.14142 4.565 8.17266 4.65381 8.23057C4.83451 8.34833 5.04279 8.48268 5.27305 8.62974C5.5326 8.79522 5.867 8.94468 6.26651 9.07365C6.67495 9.20572 7.09151 9.27278 7.50499 9.27278C7.91846 9.27278 8.33514 9.20572 8.74335 9.07377C9.14321 8.94456 9.47749 8.79522 9.73739 8.62951C9.97302 8.4789 10.1755 8.34844 10.3562 8.23057C10.445 8.17278 10.4998 8.14142 10.5306 8.12505C10.7833 8.13181 11.0159 8.17667 11.2231 8.25861C11.4468 8.34718 11.6368 8.4654 11.7875 8.6096C11.9486 8.76375 12.0946 8.95521 12.2216 9.1786C12.3547 9.41263 12.462 9.65582 12.5405 9.90106C12.6226 10.1574 12.6916 10.4401 12.7456 10.7412C12.8003 11.0468 12.8374 11.3341 12.8554 11.595V11.5952C12.8741 11.8606 12.8835 12.138 12.8836 12.4199C12.8835 12.9604 12.7308 13.3685 12.4167 13.6674Z" fill="#E20935" />
                                  </svg>
                                  By admin
                              </span>
                              <span>
                                 <svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_1_5885)">
                                      <path d="M12.6253 1.01074H2.42943C1.36341 1.01074 0.496094 1.87789 0.496094 2.94408V9.18371C0.496094 10.2475 1.35964 11.1133 2.42256 11.117V13.9485L6.49171 11.117H12.6253C13.6913 11.117 14.5586 10.2497 14.5586 9.18371V2.94408C14.5586 1.87789 13.6913 1.01074 12.6253 1.01074ZM13.7346 9.18371C13.7346 9.79534 13.237 10.2931 12.6253 10.2931H6.23319L3.24654 12.3714V10.2931H2.42943C1.81771 10.2931 1.32007 9.79534 1.32007 9.18371V2.94408C1.32007 2.33228 1.81771 1.83472 2.42943 1.83472H12.6253C13.237 1.83472 13.7346 2.33228 13.7346 2.94408V9.18371Z" fill="#E20935" />
                                      <path d="M4.25977 3.92188H10.7947V4.74585H4.25977V3.92188Z" fill="#E20935" />
                                      <path d="M4.25977 5.67969H10.7947V6.50366H4.25977V5.67969Z" fill="#E20935" />
                                      <path d="M4.25977 7.4375H10.7947V8.26147H4.25977V7.4375Z" fill="#E20935" />
                                    </g>
                                    <defs>
                                      <clipPath id="clip0_1_5885">
                                        <rect width="15" height="15" fill="white" transform="translate(0.0351562)" />
                                      </clipPath>
                                    </defs>
                                  </svg>
                                  Comments (02)
                              </span>
                           </div>
                           <h4 class="postbox-title mb-20">
                              Your Pathway to New Beginnings Simplifying
                           </h4>
                           <p>
                              A residence visa stands as a gateway to building a new life in a foreign land. It’s more than just a permit; it’s an opportunity to immerse yourself in a new culture, embrace fresh opportunities, and become an integral part of a different community In the realm of global communication, a strong command.
                           </p>
                           <p class="mb-35">
                              A comprehensive evaluation of the client’s immigration needs and eligibility for various visa options Personalized consultation, initial assessment report, eligibility check, and tailored advice
                           </p>
                        </div>
                        <blockquote>
                           <div class="postbox-blookquote p-relative mb-30">
                              <p>“Our professional maids are trustworthy and can Visa while you’re away. Just provide us with access instructions.”</p>
                              <span class="quote">
                                 <svg width="31" height="25" viewBox="0 0 31 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M17.3008 22.1752L22.4563 12.4999L25.6343 11.6524C25.3047 12.3116 24.9045 12.8766 24.4337 13.3474C23.9629 13.8182 23.4214 14.0536 22.8094 14.0536C21.444 14.0536 20.1963 13.4886 19.0664 12.3587C17.9364 11.2287 17.3714 9.79269 17.3714 8.05066C17.3714 6.21446 17.9835 4.66076 19.2076 3.38955C20.4788 2.07126 22.0325 1.41211 23.8687 1.41211C25.6107 1.41211 27.1174 2.07126 28.3886 3.38955C29.7069 4.66076 30.366 6.21446 30.366 8.05066C30.366 8.80397 30.2248 9.69853 29.9423 10.7343C29.6598 11.723 29.0948 12.9943 28.2473 14.548L22.5269 25.0001L17.3008 22.1752Z" fill="white" />
                                    <path d="M13.1359 2.89554L7.98039 12.5003L4.73173 13.4184C5.10839 12.7121 5.53213 12.1471 6.00295 11.7234C6.47377 11.2526 7.01521 11.0172 7.62727 11.0172C8.99265 11.0172 10.2168 11.5822 11.2997 12.7121C12.4296 13.795 12.9946 15.2075 12.9946 16.9495C12.9946 18.7857 12.359 20.3629 11.0878 21.6812C9.86366 22.9995 8.3335 23.6587 6.49731 23.6587C4.75527 23.6587 3.22511 23.0231 1.90682 21.7518C0.635606 20.4336 0 18.8328 0 16.9495C0 16.1962 0.141246 15.3252 0.423737 14.3364C0.753311 13.3477 1.34184 12.053 2.18931 10.4522L7.83914 0L13.1359 2.89554Z" fill="white" />
                                  </svg>
                              </span>
                           </div>
                        </blockquote>
                        <h4 class="postbox-title mb-15">
                           Gateway to Global Opportunities Our Mission
                        </h4>
                        <p class="mb-15">
                           A residence visa stands as a gateway to building a new life in a foreign land. It’s more than just a permit; it’s an opportunity to immerse yourself in a new culture, embrace fresh opportunities, and become an integral part of a different community In the realm of global communication, a strong command.
                        </p>
                        <p class="mb-30">A comprehensive evaluation of the client’s immigration needs and eligibility for various visa options Personalized consultation, initial assessment report, eligibility check, and tailored advice</p>
                        <div class="row mb-35">
                           <div class="col-sm-6">
                              <div class="postbox-details-thumb-sm">
                                 <img class="w-100" src="{{ asset('frontend/assets/img/inner/blog-details/thumb-2.jpg') }}" alt="">
                              </div>
                           </div>
                           <div class="col-sm-6">
                              <div class="postbox-details-thumb-sm">
                                 <img class="w-100" src="{{ asset('frontend/assets/img/inner/blog-details/thumb-3.jpg') }}" alt="">
                              </div>
                           </div>
                        </div>
                        <p class="mb-55">A residence visa stands as a gateway to building a new life in a foreign land. It’s more than just a permit; it’s an  opportunity to immerse yourself in a new culture, embrace fresh opportunities, and become an integral part of a different community In the realm of global communication, a strong command.</p>
                        <div class="postbox-tag-box mb-55">
                           <div class="row align-items-center">
                              <div class="col-xl-7">
                                 <div class="postbox-tag d-flex align-items-center">
                                    <h3 class="postbox-tag-title">Tag:</h3>
                                    <div class="postbox-tag-content tagcloud">
                                       <a href="#">Visa Consulting</a>
                                       <a href="#">Immigration </a>
                                       <a href="#">Visa</a>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-xl-5">
                                 <div class="postbox-share d-flex align-items-center justify-content-xl-end">
                                    <h3 class="postbox-tag-title">Share:</h3>
                                    <div class="postbox-share-content">
                                       <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                       <a href="#"><i class="fa-brands fa-twitter"></i></a>
                                       <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                                       <a href="#"><i class="fa-brands fa-behance"></i></a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="postbox-comment">
                           <h3 class="postbox-comment-title mb-30">04 Comments</h3>
                           <div class="postbox-comment-item">
                              <div class="postbox-comment-content d-sm-flex align-items-start justify-content-between">
                                <ul>
                                 <li>
                                    <div class="postbox-comment-user p-relative d-flex align-items-start">
                                       <span class="postbox-user-reply">
                                          <button>Reply</button>
                                       </span>
                                       <div class="postbox-user-thumb">
                                          <img src="{{ asset('frontend/assets/img/inner/blog-details/avatar-1.jpg') }}" alt="">
                                       </div>
                                       <div class="postbox-user-info">
                                          <h4 class="user-title">Leslie Alexander</h4>
                                          <span>
                                             <svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M8.09705 6.73828H6.92383V7.91016H8.09705V6.73828Z" fill="#E20935" />
                                                <path d="M13.2615 1.17188H12.5574V0H11.3838V1.17188H3.63812V0H2.46453V1.17188H1.76038C0.789707 1.17188 0 1.96043 0 2.92969V13.2422C0 14.2114 0.789707 15 1.76038 15H5.66256H5.75058H7.79737C7.39166 14.6656 7.0383 14.2702 6.75103 13.8281H5.75058H5.66256H1.76038C1.43682 13.8281 1.17359 13.5653 1.17359 13.2422V5.50781H13.8483V6.67969V6.73828V6.74118C14.291 7.02803 14.687 7.38091 15.0219 7.786V6.73828V6.67969V2.92969C15.0219 1.96043 14.2322 1.17188 13.2615 1.17188ZM13.8483 4.33594H1.17359V2.92969C1.17359 2.6066 1.43682 2.34375 1.76038 2.34375H2.46453V3.51562H3.63812V2.34375H11.3838V3.51562H12.5574V2.34375H13.2615C13.5851 2.34375 13.8483 2.6066 13.8483 2.92969V4.33594Z" fill="#E20935" />
                                                <path d="M11.0605 7.08984C8.87645 7.08984 7.09961 8.86409 7.09961 11.0449C7.09961 13.2258 8.87645 15 11.0605 15C13.2445 15 15.0213 13.2258 15.0213 11.0449C15.0213 8.86409 13.2445 7.08984 11.0605 7.08984ZM11.0605 13.8281C9.52357 13.8281 8.2732 12.5796 8.2732 11.0449C8.2732 9.51026 9.52357 8.26172 11.0605 8.26172C12.5974 8.26172 13.8477 9.51026 13.8477 11.0449C13.8477 12.5796 12.5974 13.8281 11.0605 13.8281Z" fill="#E20935" />
                                                <path d="M11.6194 9.08203H10.4453V11.6309H12.6174V10.459H11.6194V9.08203Z" fill="#E20935" />
                                                <path d="M5.74939 9.08203H4.57617V10.2539H5.74939V9.08203Z" fill="#E20935" />
                                                <path d="M3.40369 9.08203H2.23047V10.2539H3.40369V9.08203Z" fill="#E20935" />
                                                <path d="M3.40369 6.73828H2.23047V7.91016H3.40369V6.73828Z" fill="#E20935" />
                                                <path d="M3.40369 11.4258H2.23047V12.5977H3.40369V11.4258Z" fill="#E20935" />
                                                <path d="M5.74939 6.73828H4.57617V7.91016H5.74939V6.73828Z" fill="#E20935" />
                                                <path d="M5.74939 11.4258H4.57617V12.5977H5.74939V11.4258Z" fill="#E20935" />
                                              </svg>
                                             Jun 29 2024
                                          </span>
                                          <p>Document preparation, form filling, application submission, and follow-up with immigration authorities Personalized consultation, initial assessment report</p>                                   
                                       </div>
                                    </div>
                                 </li>
                                 <li class="children">
                                    <div class="postbox-comment-user p-relative d-flex align-items-start">
                                       <div class="postbox-user-thumb">
                                          <img src="{{ asset('frontend/assets/img/inner/blog-details/avatar-2.jpg') }}" alt="">
                                       </div>
                                       <div class="postbox-user-info">
                                          <h4 class="user-title">Esther Howard</h4>
                                          <span>
                                             <svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M8.09705 6.73828H6.92383V7.91016H8.09705V6.73828Z" fill="#E20935" />
                                                <path d="M13.2615 1.17188H12.5574V0H11.3838V1.17188H3.63812V0H2.46453V1.17188H1.76038C0.789707 1.17188 0 1.96043 0 2.92969V13.2422C0 14.2114 0.789707 15 1.76038 15H5.66256H5.75058H7.79737C7.39166 14.6656 7.0383 14.2702 6.75103 13.8281H5.75058H5.66256H1.76038C1.43682 13.8281 1.17359 13.5653 1.17359 13.2422V5.50781H13.8483V6.67969V6.73828V6.74118C14.291 7.02803 14.687 7.38091 15.0219 7.786V6.73828V6.67969V2.92969C15.0219 1.96043 14.2322 1.17188 13.2615 1.17188ZM13.8483 4.33594H1.17359V2.92969C1.17359 2.6066 1.43682 2.34375 1.76038 2.34375H2.46453V3.51562H3.63812V2.34375H11.3838V3.51562H12.5574V2.34375H13.2615C13.5851 2.34375 13.8483 2.6066 13.8483 2.92969V4.33594Z" fill="#E20935" />
                                                <path d="M11.0605 7.08984C8.87645 7.08984 7.09961 8.86409 7.09961 11.0449C7.09961 13.2258 8.87645 15 11.0605 15C13.2445 15 15.0213 13.2258 15.0213 11.0449C15.0213 8.86409 13.2445 7.08984 11.0605 7.08984ZM11.0605 13.8281C9.52357 13.8281 8.2732 12.5796 8.2732 11.0449C8.2732 9.51026 9.52357 8.26172 11.0605 8.26172C12.5974 8.26172 13.8477 9.51026 13.8477 11.0449C13.8477 12.5796 12.5974 13.8281 11.0605 13.8281Z" fill="#E20935" />
                                                <path d="M11.6194 9.08203H10.4453V11.6309H12.6174V10.459H11.6194V9.08203Z" fill="#E20935" />
                                                <path d="M5.74939 9.08203H4.57617V10.2539H5.74939V9.08203Z" fill="#E20935" />
                                                <path d="M3.40369 9.08203H2.23047V10.2539H3.40369V9.08203Z" fill="#E20935" />
                                                <path d="M3.40369 6.73828H2.23047V7.91016H3.40369V6.73828Z" fill="#E20935" />
                                                <path d="M3.40369 11.4258H2.23047V12.5977H3.40369V11.4258Z" fill="#E20935" />
                                                <path d="M5.74939 6.73828H4.57617V7.91016H5.74939V6.73828Z" fill="#E20935" />
                                                <path d="M5.74939 11.4258H4.57617V12.5977H5.74939V11.4258Z" fill="#E20935" />
                                              </svg>
                                             Jun 29 2024
                                          </span>
                                          <p>Document preparation, form filling, application submission, and follow-up with immigration authorities Personalized consultation, initial assessment report</p>
                                          <span class="postbox-user-reply">
                                             <button>Reply</button>
                                          </span>
                                       </div>
                                    </div>
                                 </li>
                                 <li>
                                    <div class="postbox-comment-user p-relative d-flex align-items-start">
                                       <span class="postbox-user-reply">
                                          <button>Reply</button>
                                       </span>
                                       <div class="postbox-user-thumb">
                                          <img src="{{ asset('frontend/assets/img/inner/blog-details/avatar-3.jpg') }}" alt="">
                                       </div>
                                       <div class="postbox-user-info">
                                          <h4 class="user-title">Marvin McKinney</h4>
                                          <span>
                                             <svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M8.09705 6.73828H6.92383V7.91016H8.09705V6.73828Z" fill="#E20935" />
                                                <path d="M13.2615 1.17188H12.5574V0H11.3838V1.17188H3.63812V0H2.46453V1.17188H1.76038C0.789707 1.17188 0 1.96043 0 2.92969V13.2422C0 14.2114 0.789707 15 1.76038 15H5.66256H5.75058H7.79737C7.39166 14.6656 7.0383 14.2702 6.75103 13.8281H5.75058H5.66256H1.76038C1.43682 13.8281 1.17359 13.5653 1.17359 13.2422V5.50781H13.8483V6.67969V6.73828V6.74118C14.291 7.02803 14.687 7.38091 15.0219 7.786V6.73828V6.67969V2.92969C15.0219 1.96043 14.2322 1.17188 13.2615 1.17188ZM13.8483 4.33594H1.17359V2.92969C1.17359 2.6066 1.43682 2.34375 1.76038 2.34375H2.46453V3.51562H3.63812V2.34375H11.3838V3.51562H12.5574V2.34375H13.2615C13.5851 2.34375 13.8483 2.6066 13.8483 2.92969V4.33594Z" fill="#E20935" />
                                                <path d="M11.0605 7.08984C8.87645 7.08984 7.09961 8.86409 7.09961 11.0449C7.09961 13.2258 8.87645 15 11.0605 15C13.2445 15 15.0213 13.2258 15.0213 11.0449C15.0213 8.86409 13.2445 7.08984 11.0605 7.08984ZM11.0605 13.8281C9.52357 13.8281 8.2732 12.5796 8.2732 11.0449C8.2732 9.51026 9.52357 8.26172 11.0605 8.26172C12.5974 8.26172 13.8477 9.51026 13.8477 11.0449C13.8477 12.5796 12.5974 13.8281 11.0605 13.8281Z" fill="#E20935" />
                                                <path d="M11.6194 9.08203H10.4453V11.6309H12.6174V10.459H11.6194V9.08203Z" fill="#E20935" />
                                                <path d="M5.74939 9.08203H4.57617V10.2539H5.74939V9.08203Z" fill="#E20935" />
                                                <path d="M3.40369 9.08203H2.23047V10.2539H3.40369V9.08203Z" fill="#E20935" />
                                                <path d="M3.40369 6.73828H2.23047V7.91016H3.40369V6.73828Z" fill="#E20935" />
                                                <path d="M3.40369 11.4258H2.23047V12.5977H3.40369V11.4258Z" fill="#E20935" />
                                                <path d="M5.74939 6.73828H4.57617V7.91016H5.74939V6.73828Z" fill="#E20935" />
                                                <path d="M5.74939 11.4258H4.57617V12.5977H5.74939V11.4258Z" fill="#E20935" />
                                              </svg>
                                             Jun 29 2024
                                          </span>
                                          <p>Document preparation, form filling, application submission, and follow-up with immigration authorities Personalized consultation, initial assessment report</p>                                   
                                       </div>
                                    </div>
                                 </li>
                                </ul>
                              </div>
                           </div>
                        </div>
                        <div class="postbox-review-form">
                           <h4 class="postbox-review-title mb-15">Leave A Comment</h4>
                           <p class="pb-10">Your email Address Not Be Published. Requied Fields are Marked</p>
                           <form action="#">
                              <div class="row">
                                 <div class="col-xl-6 col-md-6 col-sm-6 mb-30">
                                    <div class="postbox-review-input">
                                       <input type="text" placeholder="first name:">
                                    </div>
                                 </div>
                                 <div class="col-xl-6 col-md-6 col-sm-6 mb-30">
                                    <div class="postbox-review-input">
                                       <input type="email" placeholder="Email address:">
                                    </div>
                                 </div>
                                 <div class="col-12 mb-30">
                                    <div class="postbox-review-input">
                                       <input type="text" placeholder="Enter  Website">
                                    </div>
                                 </div>
                                 <div class="col-xl-12 mb-50">
                                    <div class="postbox-review-textarea">
                                       <textarea placeholder="Enter Your Comments"></textarea>
                                    </div>
                                 </div>
                              </div>
                              <div class="postbox-review-button">
                                 <button type="submit" class="tr-btn w-100">Submit Now</button>
                              </div>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-xl-4 col-lg-4 order-lg-0 order-md-1">
                  <div class="sidebar-right">
                     <div class="sidebar-search-box mb-40 p-relative">
                        <div class="sidebar-search-input">
                           <input type="text" placeholder="Search...">
                        </div>
                        <div class="sidebar-search-button">
                           <button type="submit">
                              <i class="fa-sharp fa-light fa-magnifying-glass"></i>
                           </button>
                        </div>
                     </div>
                     <div class="sidebar-widget mb-40">
                        <h4 class="sidebar-widget-title mb-45">All Services</h4>
                        <div class="sidebar-widget-list">
                           <a class="active" href="blog-details.html">Work Visa Solutions
                              <i class="fa-regular fa-arrow-right-long"></i>
                           </a>
                           <a href="blog-details.html">Flight booking
                              <i class="fa-regular fa-arrow-right-long"></i>
                           </a>
                           <a href="blog-details.html">Residency Pathways
                              <i class="fa-regular fa-arrow-right-long"></i>
                           </a>
                           <a href="blog-details.html">Student Visa Services
                              <i class="fa-regular fa-arrow-right-long"></i>
                           </a>
                           <a href="blog-details.html">Family Reunification
                              <i class="fa-regular fa-arrow-right-long"></i>
                           </a>
                           <a href="blog-details.html">Visa Assessment
                              <i class="fa-regular fa-arrow-right-long"></i>
                           </a>
                        </div>
                     </div>
                     <div class="sidebar-widget mb-40">
                        <h4 class="sidebar-widget-title mb-45">Recent post:</h4>
                        <div class="sidebar-widget-content">
                           <div class="sidebar-widget-post">
                              <div class="rc-post mb-25 d-flex align-items-center">
                                 <div class="rc-post-thumb mr-20">
                                    <a href="blog-details.html">
                                       <img src="{{ asset('frontend/assets/img/inner/blog-details/rc-1.jpg') }}" alt="">
                                    </a>
                                 </div>
                                 <div class="rc-post-content">
                                    <div class="rc-meta d-flex mb-10">
                                       <svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M8.09705 6.73828H6.92383V7.91016H8.09705V6.73828Z" fill="#E20935" />
                                          <path d="M13.2615 1.17188H12.5574V0H11.3838V1.17188H3.63812V0H2.46453V1.17188H1.76038C0.789707 1.17188 0 1.96043 0 2.92969V13.2422C0 14.2114 0.789707 15 1.76038 15H5.66256H5.75058H7.79737C7.39166 14.6656 7.0383 14.2702 6.75103 13.8281H5.75058H5.66256H1.76038C1.43682 13.8281 1.17359 13.5653 1.17359 13.2422V5.50781H13.8483V6.67969V6.73828V6.74118C14.291 7.02803 14.687 7.38091 15.0219 7.786V6.73828V6.67969V2.92969C15.0219 1.96043 14.2322 1.17188 13.2615 1.17188ZM13.8483 4.33594H1.17359V2.92969C1.17359 2.6066 1.43682 2.34375 1.76038 2.34375H2.46453V3.51562H3.63812V2.34375H11.3838V3.51562H12.5574V2.34375H13.2615C13.5851 2.34375 13.8483 2.6066 13.8483 2.92969V4.33594Z" fill="#E20935" />
                                          <path d="M11.0605 7.08984C8.87645 7.08984 7.09961 8.86409 7.09961 11.0449C7.09961 13.2258 8.87645 15 11.0605 15C13.2445 15 15.0213 13.2258 15.0213 11.0449C15.0213 8.86409 13.2445 7.08984 11.0605 7.08984ZM11.0605 13.8281C9.52357 13.8281 8.2732 12.5796 8.2732 11.0449C8.2732 9.51026 9.52357 8.26172 11.0605 8.26172C12.5974 8.26172 13.8477 9.51026 13.8477 11.0449C13.8477 12.5796 12.5974 13.8281 11.0605 13.8281Z" fill="#E20935" />
                                          <path d="M11.6194 9.08203H10.4453V11.6309H12.6174V10.459H11.6194V9.08203Z" fill="#E20935" />
                                          <path d="M5.74939 9.08203H4.57617V10.2539H5.74939V9.08203Z" fill="#E20935" />
                                          <path d="M3.40369 9.08203H2.23047V10.2539H3.40369V9.08203Z" fill="#E20935" />
                                          <path d="M3.40369 6.73828H2.23047V7.91016H3.40369V6.73828Z" fill="#E20935" />
                                          <path d="M3.40369 11.4258H2.23047V12.5977H3.40369V11.4258Z" fill="#E20935" />
                                          <path d="M5.74939 6.73828H4.57617V7.91016H5.74939V6.73828Z" fill="#E20935" />
                                          <path d="M5.74939 11.4258H4.57617V12.5977H5.74939V11.4258Z" fill="#E20935" />
                                        </svg>
                                       <span>Jun 29 2024</span>
                                    </div>
                                    <h3 class="rc-post-title">
                                       <a href="blog-details.html">Unlocking International an     Doors</a>
                                    </h3>                                 
                                 </div>
                              </div>
                              <div class="rc-post mb-25 d-flex align-items-center">
                                 <div class="rc-post-thumb mr-20">
                                    <a href="blog-details.html">
                                       <img src="{{ asset('frontend/assets/img/inner/blog-details/rc-2.jpg') }}" alt="">
                                    </a>
                                 </div>
                                 <div class="rc-post-content">
                                    <div class="rc-meta d-flex mb-10">
                                       <svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M8.09705 6.73828H6.92383V7.91016H8.09705V6.73828Z" fill="#E20935" />
                                          <path d="M13.2615 1.17188H12.5574V0H11.3838V1.17188H3.63812V0H2.46453V1.17188H1.76038C0.789707 1.17188 0 1.96043 0 2.92969V13.2422C0 14.2114 0.789707 15 1.76038 15H5.66256H5.75058H7.79737C7.39166 14.6656 7.0383 14.2702 6.75103 13.8281H5.75058H5.66256H1.76038C1.43682 13.8281 1.17359 13.5653 1.17359 13.2422V5.50781H13.8483V6.67969V6.73828V6.74118C14.291 7.02803 14.687 7.38091 15.0219 7.786V6.73828V6.67969V2.92969C15.0219 1.96043 14.2322 1.17188 13.2615 1.17188ZM13.8483 4.33594H1.17359V2.92969C1.17359 2.6066 1.43682 2.34375 1.76038 2.34375H2.46453V3.51562H3.63812V2.34375H11.3838V3.51562H12.5574V2.34375H13.2615C13.5851 2.34375 13.8483 2.6066 13.8483 2.92969V4.33594Z" fill="#E20935" />
                                          <path d="M11.0605 7.08984C8.87645 7.08984 7.09961 8.86409 7.09961 11.0449C7.09961 13.2258 8.87645 15 11.0605 15C13.2445 15 15.0213 13.2258 15.0213 11.0449C15.0213 8.86409 13.2445 7.08984 11.0605 7.08984ZM11.0605 13.8281C9.52357 13.8281 8.2732 12.5796 8.2732 11.0449C8.2732 9.51026 9.52357 8.26172 11.0605 8.26172C12.5974 8.26172 13.8477 9.51026 13.8477 11.0449C13.8477 12.5796 12.5974 13.8281 11.0605 13.8281Z" fill="#E20935" />
                                          <path d="M11.6194 9.08203H10.4453V11.6309H12.6174V10.459H11.6194V9.08203Z" fill="#E20935" />
                                          <path d="M5.74939 9.08203H4.57617V10.2539H5.74939V9.08203Z" fill="#E20935" />
                                          <path d="M3.40369 9.08203H2.23047V10.2539H3.40369V9.08203Z" fill="#E20935" />
                                          <path d="M3.40369 6.73828H2.23047V7.91016H3.40369V6.73828Z" fill="#E20935" />
                                          <path d="M3.40369 11.4258H2.23047V12.5977H3.40369V11.4258Z" fill="#E20935" />
                                          <path d="M5.74939 6.73828H4.57617V7.91016H5.74939V6.73828Z" fill="#E20935" />
                                          <path d="M5.74939 11.4258H4.57617V12.5977H5.74939V11.4258Z" fill="#E20935" />
                                        </svg>
                                       <span>Jun 29 2024</span>
                                    </div>
                                    <h3 class="rc-post-title">
                                       <a href="blog-details.html">Bridging Borders, Building Futures</a>
                                    </h3>                             
                                 </div>
                              </div>
                              <div class="rc-post d-flex align-items-center">
                                 <div class="rc-post-thumb mr-20">
                                    <a href="blog-details.html">
                                       <img src="{{ asset('frontend/assets/img/inner/blog-details/rc-3.jpg') }}" alt="">
                                    </a>
                                 </div>
                                 <div class="rc-post-content">
                                    <div class="rc-meta d-flex mb-10">
                                       <svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M8.09705 6.73828H6.92383V7.91016H8.09705V6.73828Z" fill="#E20935" />
                                          <path d="M13.2615 1.17188H12.5574V0H11.3838V1.17188H3.63812V0H2.46453V1.17188H1.76038C0.789707 1.17188 0 1.96043 0 2.92969V13.2422C0 14.2114 0.789707 15 1.76038 15H5.66256H5.75058H7.79737C7.39166 14.6656 7.0383 14.2702 6.75103 13.8281H5.75058H5.66256H1.76038C1.43682 13.8281 1.17359 13.5653 1.17359 13.2422V5.50781H13.8483V6.67969V6.73828V6.74118C14.291 7.02803 14.687 7.38091 15.0219 7.786V6.73828V6.67969V2.92969C15.0219 1.96043 14.2322 1.17188 13.2615 1.17188ZM13.8483 4.33594H1.17359V2.92969C1.17359 2.6066 1.43682 2.34375 1.76038 2.34375H2.46453V3.51562H3.63812V2.34375H11.3838V3.51562H12.5574V2.34375H13.2615C13.5851 2.34375 13.8483 2.6066 13.8483 2.92969V4.33594Z" fill="#E20935" />
                                          <path d="M11.0605 7.08984C8.87645 7.08984 7.09961 8.86409 7.09961 11.0449C7.09961 13.2258 8.87645 15 11.0605 15C13.2445 15 15.0213 13.2258 15.0213 11.0449C15.0213 8.86409 13.2445 7.08984 11.0605 7.08984ZM11.0605 13.8281C9.52357 13.8281 8.2732 12.5796 8.2732 11.0449C8.2732 9.51026 9.52357 8.26172 11.0605 8.26172C12.5974 8.26172 13.8477 9.51026 13.8477 11.0449C13.8477 12.5796 12.5974 13.8281 11.0605 13.8281Z" fill="#E20935" />
                                          <path d="M11.6194 9.08203H10.4453V11.6309H12.6174V10.459H11.6194V9.08203Z" fill="#E20935" />
                                          <path d="M5.74939 9.08203H4.57617V10.2539H5.74939V9.08203Z" fill="#E20935" />
                                          <path d="M3.40369 9.08203H2.23047V10.2539H3.40369V9.08203Z" fill="#E20935" />
                                          <path d="M3.40369 6.73828H2.23047V7.91016H3.40369V6.73828Z" fill="#E20935" />
                                          <path d="M3.40369 11.4258H2.23047V12.5977H3.40369V11.4258Z" fill="#E20935" />
                                          <path d="M5.74939 6.73828H4.57617V7.91016H5.74939V6.73828Z" fill="#E20935" />
                                          <path d="M5.74939 11.4258H4.57617V12.5977H5.74939V11.4258Z" fill="#E20935" />
                                        </svg>
                                       <span>Jun 29 2024</span>
                                    </div>
                                    <h3 class="rc-post-title">
                                       <a href="blog-details.html">Streamlining Your  Visa Need      Transition</a>
                                    </h3>                                  
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="sidebar-widget">
                        <div class="sideba-widge-title-box">
                           <h3 class="sidebar-widget-title sm-border mb-45">Popular Tag</h3>
                        </div>
                        <div class="sidebar-widget-content">
                           <div class="tagcloud">
                              <a href="#">Business</a>
                              <a href="#">Visa</a>
                              <a href="#">Immigration</a>
                              <a href="#">Visa Consulting</a>
                              <a href="#">Consulting</a>
                              <a class="mb-0" href="#">Services</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- blog-details area end  -->







@endsection