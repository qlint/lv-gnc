@extends('main')
@section('title','Showing Upload')
@section('content')
      <div class="app-template" data-reactid=".pdvob9mj9c.1.2">
         <main class="wrapperMain" role="main" data-reactid=".pdvob9mj9c.1.2.0">
            <div class="" data-reactid=".pdvob9mj9c.1.2.0.0">
               <aside class="navSidebar" data-reactid=".pdvob9mj9c.1.2.0.0.0">
                  <nav class="navProperty" data-reactid=".pdvob9mj9c.1.2.0.0.0.0">
                     <h1 class="navProperty-title" data-reactid=".pdvob9mj9c.1.2.0.0.0.0.0"><a href="#" class="" data-reactid=".pdvob9mj9c.1.2.0.0.0.0.0.0">{{ $data4page->content }}</a></h1>
                     <div class="navProperty-toggle" data-reactid=".pdvob9mj9c.1.2.0.0.0.0.2">
                        <div class="navProperty-toggleIcon iconCss-dropdown" data-reactid=".pdvob9mj9c.1.2.0.0.0.0.2.0"></div>
                     </div>
                     <ul class="navProperty-list" data-reactid=".pdvob9mj9c.1.2.0.0.0.0.3">
                        <li class="navProperty-link" data-reactid=".pdvob9mj9c.1.2.0.0.0.0.3.$Shop">
                           {{ date( 'M j, Y', strtotime($data4page->updated_at)) }}
                        </li>
                        <li class="navProperty-link" data-reactid=".pdvob9mj9c.1.2.0.0.0.0.3.$Shop">
                           <button href="#" class="button button--primary" data-reactid=".pdvob9mj9c.1.2.0.1.3.1.0">Shop</button>
                        </li>
                        <li class="navProperty-link" data-reactid=".pdvob9mj9c.1.2.0.0.0.0.3.$Shop">
                           <div class="navTertiary-watchLink" style="margin-top: 10px;" data-reactid=".pdvob9mj9c.1.2.0.1.3.1">
                              <button href="#" class="button button--primary" data-reactid=".pdvob9mj9c.1.2.0.1.3.1.0">Edit</button>
                           </div>
                           <div class="navTertiary-watchLink" style="margin-top: 10px;" data-reactid=".pdvob9mj9c.1.2.0.1.3.1">
                              <button href="#" class="button button--primary" data-reactid=".pdvob9mj9c.1.2.0.1.3.1.0">Delete</button>
                           </div>
                        </li>
                     </ul>
                  </nav>
                  <footer class="footerProperty" data-reactid=".pdvob9mj9c.1.2.0.0.0.1">
                     <div class="upcomingSchedule" data-reactid=".pdvob9mj9c.1.2.0.0.0.1.1">
                        <h4 class="upcomingSchedule-heading" data-reactid=".pdvob9mj9c.1.2.0.0.0.1.1.0">Watch "{{ $data4page->h1Ttle }}"</h4>
                        <ol class="upcomingSchedule-list upcomingSchedule-list--someUnavailable" data-reactid=".pdvob9mj9c.1.2.0.0.0.1.1.1">
                           <li class="upcomingSchedule-listItem--go upcomingSchedule-listItem upcomingSchedule-listItem--available" data-reactid=".pdvob9mj9c.1.2.0.0.0.1.1.1.$NOW &amp; GO">
                              <span class="upcomingSchedule-type" data-reactid=".pdvob9mj9c.1.2.0.0.0.1.1.1.$NOW &amp; GO.0">STORE</span>
                              <span class="upcomingSchedule-availability" data-reactid=".pdvob9mj9c.1.2.0.0.0.1.1.1.$NOW &amp; GO.1">
                                 <a href="#" class="" data-reactid=".pdvob9mj9c.1.2.0.0.0.1.1.1.$NOW &amp; GO.1.0">
                                    <span data-reactid=".pdvob9mj9c.1.2.0.0.0.1.1.1.$NOW &amp; GO.1.0.0">
                                       <i class="iconCss-checkMedium" data-reactid=".pdvob9mj9c.1.2.0.0.0.1.1.1.$NOW &amp; GO.1.0.0.0"></i>
                                       <span class="upcomingSchedule-availabilityData" data-reactid=".pdvob9mj9c.1.2.0.0.0.1.1.1.$NOW &amp; GO.1.0.0.1">
                                          <span data-reactid=".pdvob9mj9c.1.2.0.0.0.1.1.1.$NOW &amp; GO.1.0.0.1.0">Available</span>
                                       </span>
                                    </span>
                                 </a>
                              </span>
                           </li>
                        </ol>
                        <div class="upcomingSchedule-link" data-reactid=".pdvob9mj9c.1.2.0.0.0.1.1.2">
                           <a href="#" class="button button--small button--primary button--light button--arrow" data-reactid=".pdvob9mj9c.1.2.0.0.0.1.1.2.0">Buy This Now</a>
                           <a href="#" class="button button--small button--primary button--light button--arrow upcomingSchedule-scheduleLink" data-reactid=".pdvob9mj9c.1.2.0.0.0.1.1.2.1">See More In Store</a>
                        </div>
                     </div>
                  </footer>
               </aside>
            </div>
            <div class="content content--withSidebar" data-reactid=".pdvob9mj9c.1.2.0.1">
               <div class="hero hero--episodeHome " data-reactid=".pdvob9mj9c.1.2.0.1.1">
                  <div class="hero-background" data-reactid=".pdvob9mj9c.1.2.0.1.1.0">
                     <img sizes="(min-width: 1180px) 950px, 100vw" src="../../{{ $data4page->img1920 }}" class=" picture picture--loading" srcset="../../{{ $data4page->img1920 }} 1920w, ../../{{ $data4page->img1280 }} 1280w, ../../{{ $data4page->img1024 }} 1024w" data-reactid=".pdvob9mj9c.1.2.0.1.1.0.0:$heroPicture:0">
                  </div>
                  <div class="hero-content" data-reactid=".pdvob9mj9c.1.2.0.1.1.1">
                     <div class="pageTitle " data-reactid=".pdvob9mj9c.1.2.0.1.1.1.0">
                        <h4 class="pageTitle-preTitle" data-reactid=".pdvob9mj9c.1.2.0.1.1.1.0.0">{{ $data4page->h4Ttle }}</h4>
                        <h2 class="pageTitle-title" data-reactid=".pdvob9mj9c.1.2.0.1.1.1.0.1">{{ $data4page->h1Ttle }}</h2>
                     </div>
                  </div>
               </div>
               <div class="lead--episodeHome" data-reactid=".pdvob9mj9c.1.2.0.1.2">
                  <p>{{ $data4page->desc1 }}</p>
               </div>
               <nav class="navTertiary navTertiary--oneColumn navTertiary--episodeHome" data-reactid=".pdvob9mj9c.1.2.0.1.3">
                  <ul class="navTertiary-list" data-reactid=".pdvob9mj9c.1.2.0.1.3.0:$0">
                     <li class="navTertiary-link" data-reactid=".pdvob9mj9c.1.2.0.1.3.0:$0.$About0">
                        <a href="#" class="" data-reactid=".pdvob9mj9c.1.2.0.1.3.0:$0.$About0.0">About</a>
                     </li>
                  </ul>
                  <div class="navTertiary-watchLink" data-reactid=".pdvob9mj9c.1.2.0.1.3.1">
                     <a href="#" class="button button--primary" data-reactid=".pdvob9mj9c.1.2.0.1.3.1.0">Buy This</a>
                  </div>
               </nav>
               <div class="upcomingSchedule" data-reactid=".pdvob9mj9c.1.2.0.1.4">
                  <h4 class="upcomingSchedule-heading" data-reactid=".pdvob9mj9c.1.2.0.1.4.0">Buy {{ $data4page->h1Ttle }}</h4>
                  <ol class="upcomingSchedule-list upcomingSchedule-list--someUnavailable" data-reactid=".pdvob9mj9c.1.2.0.1.4.1">
                     <li class="upcomingSchedule-listItem--go upcomingSchedule-listItem upcomingSchedule-listItem--available" data-reactid=".pdvob9mj9c.1.2.0.1.4.1.$NOW &amp; GO">
                        <span class="upcomingSchedule-type" data-reactid=".pdvob9mj9c.1.2.0.1.4.1.$NOW &amp; GO.0">STORE</span>
                        <span class="upcomingSchedule-availability" data-reactid=".pdvob9mj9c.1.2.0.1.4.1.$NOW &amp; GO.1">
                           <a href="#" class="" data-reactid=".pdvob9mj9c.1.2.0.1.4.1.$NOW &amp; GO.1.0">
                              <span data-reactid=".pdvob9mj9c.1.2.0.1.4.1.$NOW &amp; GO.1.0.0">
                                 <i class="iconCss-checkMedium" data-reactid=".pdvob9mj9c.1.2.0.1.4.1.$NOW &amp; GO.1.0.0.0"></i>
                                 <span class="upcomingSchedule-availabilityData" data-reactid=".pdvob9mj9c.1.2.0.1.4.1.$NOW &amp; GO.1.0.0.1">
                                    <span data-reactid=".pdvob9mj9c.1.2.0.1.4.1.$NOW &amp; GO.1.0.0.1.0">Available</span>
                                 </span>
                              </span>
                           </a>
                        </span>
                     </li>
                  </ol>
                  <div class="upcomingSchedule-link" data-reactid=".pdvob9mj9c.1.2.0.1.4.2">
                     <a href="#" class="button button--small button--primary button--light button--arrow" data-reactid=".pdvob9mj9c.1.2.0.1.4.2.0">Buy This Now</a>
                     <a href="#" class="button button--small button--primary button--light button--arrow upcomingSchedule-scheduleLink" data-reactid=".pdvob9mj9c.1.2.0.1.4.2.1">See More In Store</a>
                  </div>
               </div>
               <div class="content-primary content-primary--episodeHome" data-reactid=".pdvob9mj9c.1.2.0.1.5">
                  <div class="mediaGrid mediaGrid--single mediaGrid--episodeHome" data-reactid=".pdvob9mj9c.1.2.0.1.5.0">
                     <div class=" mediaGrid-item" data-reactid=".pdvob9mj9c.1.2.0.1.5.0.0:$comedy/jerrod-carmichael-8/video/promo=1html?autoplay=0true">
                        <div class="videoItem videoItem--video" data-reactid=".pdvob9mj9c.1.2.0.1.5.0.0:$comedy/jerrod-carmichael-8/video/promo=1html?autoplay=0true.0">
                           <div class="videoItem-content" data-reactid=".pdvob9mj9c.1.2.0.1.5.0.0:$comedy/jerrod-carmichael-8/video/promo=1html?autoplay=0true.0.0">
                              <a href="#" class="videoItem-imageContainer" data-reactid=".pdvob9mj9c.1.2.0.1.5.0.0:$comedy/jerrod-carmichael-8/video/promo=1html?autoplay=0true.0.0.0">
                                 <img sizes="(min-width: 1180px) 500px, (min-width: 768px) 50vw, 100vw" title="{{ $data4page->h4Ttle }}" src="http://i.lv3.hbo.com/assets/images/comedy/jerrod-carmichael-8/video-stills/promo-49996101_PRO35_10-100.jpg" class="videoItem-image picture picture--loading" srcset="http://i.lv3.hbo.com/assets/images/comedy/jerrod-carmichael-8/video-stills/promo-49996101_PRO35_10-200.jpg 200w, ../../{{ $data4page->img300 }} 300w, ../../{{ $data4page->img512 }} 512w, ../../{{ $data4page->img1024 }} 1024w" data-reactid=".pdvob9mj9c.1.2.0.1.5.0.0:$comedy/jerrod-carmichael-8/video/promo=1html?autoplay=0true.0.0.0.0">
                                 <div class="videoItem-control videoItem-control--play" data-reactid=".pdvob9mj9c.1.2.0.1.5.0.0:$comedy/jerrod-carmichael-8/video/promo=1html?autoplay=0true.0.0.0.1"></div>
                              </a>
                           </div>
                           <a href="#" class="" data-reactid=".pdvob9mj9c.1.2.0.1.5.0.0:$comedy/jerrod-carmichael-8/video/promo=1html?autoplay=0true.0.1">
                              <span class="videoItem-title" title="{{ $data4page->h4Ttle }}" data-reactid=".pdvob9mj9c.1.2.0.1.5.0.0:$comedy/jerrod-carmichael-8/video/promo=1html?autoplay=0true.0.1.0">Trailer</span>
                              <span class="videoItem-duration" data-reactid=".pdvob9mj9c.1.2.0.1.5.0.0:$comedy/jerrod-carmichael-8/video/promo=1html?autoplay=0true.0.1.2">(1:13)</span>
                           </a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </main>
@endsection
