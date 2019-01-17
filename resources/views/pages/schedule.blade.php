@extends('sub')
@section('title','Schedule')
@section('stylesheets')
   <link href="{{ URL::asset('css/clientlib-all-2018-09-20_19-35-49.min.css') }}" rel="stylesheet">
@endsection
@section('content')
      <div class="app-template" data-reactid=".1nzj8u7a0hs.1.2">
        <main class="wrapperMain">
            <div class="scheduleband basecomponent">
             <div class='render bandjson' data-band-json="{&#34;data&#34;:{&#34;links&#34;:{&#34;helpModal&#34;:{&#34;title&#34;:&#34;Schedule Help&#34;,&#34;content&#34;:[{&#34;title&#34;:&#34;We&#39;ve made the schedule faster and easier to use, with the following features:&#34;,&#34;paragraphs&#34;:[&#34;* Easier navigation through days and weeks&#34;,&#34;* Program information previews, available by hovering over any program tile on the schedule&#34;,&#34;* Additional grid highlight states like \&#34;airing now\&#34; to help you see what programs are currently showing&#34;,&#34;* Access to streaming and on-demand programs directly from the schedule&#34;,&#34;* Faster display of all schedule information&#34;,&#34;For more information on each of these features, please review the related FAQS from this list.&#34;]},{&#34;title&#34;:&#34;How do I access the schedule?&#34;,&#34;paragraphs&#34;:[&#34;In the upper right corner of every page on the site, click Schedule.&#34;]},{&#34;title&#34;:&#34;What schedule information is available?&#34;,&#34;paragraphs&#34;:[&#34;You can see what&#39;s showing on all HBO channels for the next 6 weeks, starting from yesterday.&#34;,&#34;For each day, you can see the programming schedule starting from midnight through 1 am on the following day&#34;]},{&#34;title&#34;:&#34;How do I move forward and back within the schedule?&#34;,&#34;paragraphs&#34;:[&#34;To see a different time of day, click the forward and back arrows on the side of the schedule grid. You can also use the scroll bar at the bottom of the grid to go to the beginning and end of each day.&#34;,&#34;To go to a different day, click on any of the 8 days shown at the top of the schedule. You can see the schedule for today, yesterday, and tomorrow along with the next 5 days of the week.&#34;,&#34;To go to a different week, click Next week at the upper right of the schedule grid. The schedule advances exactly one week: for example, if you are looking at schedule for Monday, October 9th, click Next week to see the schedule for Monday, October 16th. To get back to the current week, click Prev week..&#34;]},{&#34;title&#34;:&#34;How can I download or print the schedule?&#34;,&#34;paragraphs&#34;:[&#34;You can download a PDF version of the schedule for the current month or the following month. In the lower right corner of the schedule grid, click Schedule PDF. Then, select the month and time zone that you want to see.&#34;,&#34;After you download a month&#39;s schedule, you can print it from any PDF reader.&#34;]},{&#34;title&#34;:&#34;What are the east/west coast options?&#34;,&#34;paragraphs&#34;:[&#34;To support different time zones, we offer all HBO programming on two different feeds. The east feed supports the Eastern and Central time zones. The west feed supports the Mountain, Pacific, Alaska and Hawaii time zones.&#34;,&#34;The schedule chooses the correct feed based on your time zone, but if you want to see the schedule for the other feed, click East or West in the upper left corner of the schedule grid.&#34;]},{&#34;title&#34;:&#34;How do I get more detail on a particular program?&#34;,&#34;paragraphs&#34;:[&#34;Hover over a program tile for quick information about a program, such as the rating, length, category, etc.&#34;,&#34;Click any program tile to see more details, such as a summary, cast information, and all the upcoming showings of that program for the next 6 weeks.&#34;]},{&#34;title&#34;:&#34;How do I find all showings for a particular program?&#34;,&#34;paragraphs&#34;:[&#34;In the schedule grid, click on any program tile. A pop-up window shows the next three showings of the program. Click See more to see all the upcoming showings of that program for the next 6 weeks.&#34;]},{&#34;title&#34;:&#34;How do I watch a program on demand or streaming?&#34;,&#34;paragraphs&#34;:[&#34;In the schedule grid, click on any program tile, and then scroll down to the bottom of the pop-up window. Click Stream on HBO NOW or Stream on HBO GO, depending on which streaming service you use.&#34;]}]},&#34;pdfModal&#34;:{&#34;title&#34;:&#34;HBO Schedule PDF Guide&#34;,&#34;helpText&#34;:&#34;To view the PDF Guide, select your local time zone. Check back each month for schedule updates.&#34;,&#34;leftColumn&#34;:{&#34;title&#34;:&#34;December&#39;s Schedule&#34;,&#34;links&#34;:[{&#34;title&#34;:&#34;Eastern&#34;,&#34;url&#34;:&#34;/content/dam/schedule/pdfs/1484625_DP_DEC18_EST.pdf&#34;},{&#34;title&#34;:&#34;Central&#34;,&#34;url&#34;:&#34;/content/dam/schedule/pdfs/1484625_DP_DEC18_CT.pdf&#34;},{&#34;title&#34;:&#34;Mountain East&#34;,&#34;url&#34;:&#34;/content/dam/schedule/pdfs/1484625_DP_DEC18_MT.pdf&#34;},{&#34;title&#34;:&#34;Mountain West&#34;,&#34;url&#34;:&#34;/content/dam/schedule/pdfs/1484625_DP_DEC18_MW.pdf&#34;},{&#34;title&#34;:&#34;Pacific&#34;,&#34;url&#34;:&#34;/content/dam/schedule/pdfs/1484625_DP_DEC18_EST.pdf&#34;}]},&#34;rightColumn&#34;:{&#34;title&#34;:&#34;January&#39;s Schedule&#34;,&#34;links&#34;:[{&#34;title&#34;:&#34;Eastern&#34;,&#34;url&#34;:&#34;/content/dam/schedule/pdfs/1489375_DP_JAN19_EST.pdf&#34;},{&#34;title&#34;:&#34;Central&#34;,&#34;url&#34;:&#34;/content/dam/schedule/pdfs/1489375_DP_JAN19_CT.pdf&#34;},{&#34;title&#34;:&#34;Mountain East&#34;,&#34;url&#34;:&#34;/content/dam/schedule/pdfs/1489375_DP_JAN19_MT.pdf&#34;},{&#34;title&#34;:&#34;Mountain West&#34;,&#34;url&#34;:&#34;/content/dam/schedule/pdfs/1489375_DP_JAN19_MW.pdf&#34;},{&#34;title&#34;:&#34;Pacific&#34;,&#34;url&#34;:&#34;/content/dam/schedule/pdfs/1489375_DP_JAN19_EST.pdf&#34;}]}}}},&#34;band&#34;:&#34;Schedule&#34;}">
               <div class="cf w-100 components/Band--band" data-bi-context="{&quot;band&quot;:&quot;Schedule&quot;}" data-reactroot="">
                 <div class="components/Band--maxWidth">
                   <div>
                     <div class="bands/schedule/DaySelector--daySelectorWrapper">
                       <ul class="bands/schedule/DaySelector--daySelector">
                         <li class="bands/schedule/DaySelector--prevWeekLink bands/schedule/DaySelector--disabled" data-bi-interactive="schedule / tab / prev week">
                           <span class="components/Arrow--gray components/Arrow--withMarginRight">
                             <svg viewBox="0 0 10 17" class="components/Arrow--small components/Arrow--reversed">
                               <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g transform="translate(-947.000000, -1545.000000)" class="components/Arrow--gray"><g transform="translate(934.000000, 1402.000000)"><polygon points="14.5570175 159.885965 13 158.350877 19.9078947 151.442982 13 144.535088 14.5570175 143 23 151.442982"></polygon></g></g></g>
                             </svg>
                           </span>
                           <span>PREV WEEK</span>
                         </li>
                         <li class="bands/schedule/DaySelector--scheduleDay" data-bi-interactive="schedule / tab / YESTERDAY">
                           <span>YESTERDAY</span>
                         </li>
                         <li class="bands/schedule/DaySelector--scheduleDay bands/schedule/DaySelector--selected undefined" data-bi-interactive="schedule / tab / TODAY">
                           <span>TODAY</span>
                         </li>
                         <li class="bands/schedule/DaySelector--scheduleDay" data-bi-interactive="schedule / tab / TOMORROW">
                           <span>TOMORROW</span>
                         </li>
                         <li class="bands/schedule/DaySelector--scheduleDay" data-bi-interactive="schedule / tab / Fri 12/21">
                           <span>Fri 12/21</span>
                         </li>
                         <li class="bands/schedule/DaySelector--scheduleDay" data-bi-interactive="schedule / tab / Sat 12/22">
                           <span>Sat 12/22</span>
                         </li>
                         <li class="bands/schedule/DaySelector--scheduleDay" data-bi-interactive="schedule / tab / Sun 12/23">
                           <span>Sun 12/23</span>
                         </li>
                         <li class="bands/schedule/DaySelector--scheduleDay" data-bi-interactive="schedule / tab / Mon 12/24">
                           <span>Mon 12/24</span>
                         </li>
                         <li class="bands/schedule/DaySelector--scheduleDay" data-bi-interactive="schedule / tab / Tue 12/25">
                           <span>Tue 12/25</span>
                         </li>
                         <li class="bands/schedule/DaySelector--nextWeekLink" data-bi-interactive="schedule / tab / next week">
                           <span>NEXT WEEK</span>
                           <span class="components/Arrow--blue components/Arrow--withMarginLeft">
                             <svg viewBox="0 0 10 17" class="components/Arrow--small">
                               <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g transform="translate(-947.000000, -1545.000000)" class="components/Arrow--blue"><g transform="translate(934.000000, 1402.000000)"><polygon points="14.5570175 159.885965 13 158.350877 19.9078947 151.442982 13 144.535088 14.5570175 143 23 151.442982"></polygon></g></g></g>
                             </svg>
                           </span>
                         </li>
                       </ul>
                     </div>
                     <div class="bands/LinearSchedule--negativeMargin">
                       <div class="bands/LinearSchedule--scheduleGrid">
                         <div class="bands/LinearSchedule--arrowContainer">
                           <div class="bands/LinearSchedule--fullHeight">
                             <button class="components/CarouselButton--container components/CarouselButton--previous" style="background-color:white" data-bi-interactive="schedule / carousel / prev">
                               <div class="components/CarouselButton--shadowWrapper components/CarouselButton--previous">
                                 <span class="components/CarouselButton--alignMiddle">
                                   <span class="components/Arrow--blue">
                                     <svg viewBox="0 0 10 17" class="components/Arrow--large components/Arrow--reversed">
                                       <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g transform="translate(-947.000000, -1545.000000)" class="components/Arrow--blue"><g transform="translate(934.000000, 1402.000000)"><polygon points="14.5570175 159.885965 13 158.350877 19.9078947 151.442982 13 144.535088 14.5570175 143 23 151.442982"></polygon></g></g></g>
                                     </svg>
                                   </span>
                                 </span>
                               </div>
                             </button>
                           </div>
                         </div>
                         <div class="bands/LinearSchedule--scheduleLaneWrapper">
                           <ul class="bands/LinearSchedule--channelNames">
                             <li class="bands/LinearSchedule--topRow">
                               <span class="bands/LinearSchedule--regionName" data-bi-interactive="select region / WEST">WEST</span>
                               <span class="bands/LinearSchedule--regionName bands/LinearSchedule--activeRegion" data-bi-interactive="select region / EAST">EAST</span>
                             </li>
                             <li class="bands/LinearSchedule--channelName">
                               <div>HBO</div>
                             </li>
                             <li class="bands/LinearSchedule--channelName">
                               <div>HBO2</div>
                             </li>
                             <li class="bands/LinearSchedule--channelName">
                               <div>HBO SIGNATURE</div>
                             </li>
                             <li class="bands/LinearSchedule--channelName">
                               <div>HBO FAMILY</div>
                             </li>
                             <li class="bands/LinearSchedule--channelName">
                               <div>HBO COMEDY</div>
                             </li>
                             <li class="bands/LinearSchedule--channelName">
                               <div>HBO ZONE</div>
                             </li>
                             <li class="bands/LinearSchedule--channelName">
                               <div>HBO LATINO</div>
                             </li>
                           </ul>
                           <div class="bands/LinearSchedule--scheduleLaneContainer">
                             <div class="bands/LinearSchedule--centered">
                               <div class="components/Loading--loading components/Loading--gray"></div>
                             </div>
                             <ul class="bands/LinearSchedule--lanes">
                               <ul class="bands/LinearSchedule--topRow">
                                 <li class="bands/LinearSchedule--timeItem" style="width:150px;left:0px">12:00 AM ET</li>
                                 <li class="bands/LinearSchedule--timeItem" style="width:150px;left:150px">12:30 AM ET</li>
                                 <li class="bands/LinearSchedule--timeItem" style="width:150px;left:300px">1:00 AM ET</li>
                                 <li class="bands/LinearSchedule--timeItem" style="width:150px;left:450px">1:30 AM ET</li>
                                 <li class="bands/LinearSchedule--timeItem" style="width:150px;left:600px">2:00 AM ET</li>
                                 <li class="bands/LinearSchedule--timeItem" style="width:150px;left:750px">2:30 AM ET</li>
                                 <li class="bands/LinearSchedule--timeItem" style="width:150px;left:900px">3:00 AM ET</li>
                                 <li class="bands/LinearSchedule--timeItem" style="width:150px;left:1050px">3:30 AM ET</li
                                   ><li class="bands/LinearSchedule--timeItem" style="width:150px;left:1200px">4:00 AM ET</li>
                                   <li class="bands/LinearSchedule--timeItem" style="width:150px;left:1350px">4:30 AM ET</li>
                                   <li class="bands/LinearSchedule--timeItem" style="width:150px;left:1500px">5:00 AM ET</li>
                                   <li class="bands/LinearSchedule--timeItem" style="width:150px;left:1650px">5:30 AM ET</li>
                                   <li class="bands/LinearSchedule--timeItem" style="width:150px;left:1800px">6:00 AM ET</li>
                                   <li class="bands/LinearSchedule--timeItem" style="width:150px;left:1950px">6:30 AM ET</li>
                                   <li class="bands/LinearSchedule--timeItem" style="width:150px;left:2100px">7:00 AM ET</li>
                                   <li class="bands/LinearSchedule--timeItem" style="width:150px;left:2250px">7:30 AM ET</li>
                                   <li class="bands/LinearSchedule--timeItem" style="width:150px;left:2400px">8:00 AM ET</li>
                                   <li class="bands/LinearSchedule--timeItem" style="width:150px;left:2550px">8:30 AM ET</li>
                                   <li class="bands/LinearSchedule--timeItem" style="width:150px;left:2700px">9:00 AM ET</li>
                                   <li class="bands/LinearSchedule--timeItem" style="width:150px;left:2850px">9:30 AM ET</li>
                                   <li class="bands/LinearSchedule--timeItem" style="width:150px;left:3000px">10:00 AM ET</li>
                                   <li class="bands/LinearSchedule--timeItem" style="width:150px;left:3150px">10:30 AM ET</li>
                                   <li class="bands/LinearSchedule--timeItem" style="width:150px;left:3300px">11:00 AM ET</li>
                                   <li class="bands/LinearSchedule--timeItem" style="width:150px;left:3450px">11:30 AM ET</li>
                                   <li class="bands/LinearSchedule--timeItem bands/LinearSchedule--activeTime" style="width:150px;left:3600px"><svg viewBox="0 0 10 10" class="bands/LinearSchedule--timeDot"><circle cx="5" cy="5" r="5"></circle></svg>12:00 PM ET</li>
                                   <li class="bands/LinearSchedule--timeItem" style="width:150px;left:3750px">12:30 PM ET</li>
                                   <li class="bands/LinearSchedule--timeItem" style="width:150px;left:3900px">1:00 PM ET</li>
                                   <li class="bands/LinearSchedule--timeItem" style="width:150px;left:4050px">1:30 PM ET</li>
                                   <li class="bands/LinearSchedule--timeItem" style="width:150px;left:4200px">2:00 PM ET</li>
                                   <li class="bands/LinearSchedule--timeItem" style="width:150px;left:4350px">2:30 PM ET</li>
                                   <li class="bands/LinearSchedule--timeItem" style="width:150px;left:4500px">3:00 PM ET</li>
                                   <li class="bands/LinearSchedule--timeItem" style="width:150px;left:4650px">3:30 PM ET</li>
                                   <li class="bands/LinearSchedule--timeItem" style="width:150px;left:4800px">4:00 PM ET</li>
                                   <li class="bands/LinearSchedule--timeItem" style="width:150px;left:4950px">4:30 PM ET</li>
                                   <li class="bands/LinearSchedule--timeItem" style="width:150px;left:5100px">5:00 PM ET</li>
                                   <li class="bands/LinearSchedule--timeItem" style="width:150px;left:5250px">5:30 PM ET</li>
                                   <li class="bands/LinearSchedule--timeItem" style="width:150px;left:5400px">6:00 PM ET</li>
                                   <li class="bands/LinearSchedule--timeItem" style="width:150px;left:5550px">6:30 PM ET</li>
                                   <li class="bands/LinearSchedule--timeItem" style="width:150px;left:5700px">7:00 PM ET</li>
                                   <li class="bands/LinearSchedule--timeItem" style="width:150px;left:5850px">7:30 PM ET</li>
                                   <li class="bands/LinearSchedule--timeItem" style="width:150px;left:6000px">8:00 PM ET</li>
                                   <li class="bands/LinearSchedule--timeItem" style="width:150px;left:6150px">8:30 PM ET</li>
                                   <li class="bands/LinearSchedule--timeItem" style="width:150px;left:6300px">9:00 PM ET</li>
                                   <li class="bands/LinearSchedule--timeItem" style="width:150px;left:6450px">9:30 PM ET</li>
                                   <li class="bands/LinearSchedule--timeItem" style="width:150px;left:6600px">10:00 PM ET</li>
                                   <li class="bands/LinearSchedule--timeItem" style="width:150px;left:6750px">10:30 PM ET</li>
                                   <li class="bands/LinearSchedule--timeItem" style="width:150px;left:6900px">11:00 PM ET</li>
                                   <li class="bands/LinearSchedule--timeItem" style="width:150px;left:7050px">11:30 PM ET</li>
                                   <li class="bands/LinearSchedule--timeItem" style="width:150px;left:7200px">12:00 AM ET</li>
                                   <li class="bands/LinearSchedule--timeItem" style="width:150px;left:7350px">12:30 AM ET</li>
                                   <li class="bands/LinearSchedule--timeItem" style="width:150px;left:7500px">1:00 AM ET</li>
                                 </ul>
                               </ul>
                             </div>
                           </div>
                           <div class="bands/LinearSchedule--arrowContainer">
                             <div class="bands/LinearSchedule--fullHeight">
                               <button class="components/CarouselButton--container components/CarouselButton--next" style="background-color:white" data-bi-interactive="schedule / carousel / next">
                                 <div class="components/CarouselButton--shadowWrapper components/CarouselButton--next">
                                   <span class="components/CarouselButton--alignMiddle">
                                     <span class="components/Arrow--blue">
                                       <svg viewBox="0 0 10 17" class="components/Arrow--large">
                                         <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g transform="translate(-947.000000, -1545.000000)" class="components/Arrow--blue"><g transform="translate(934.000000, 1402.000000)"><polygon points="14.5570175 159.885965 13 158.350877 19.9078947 151.442982 13 144.535088 14.5570175 143 23 151.442982"></polygon></g></g></g>
                                       </svg>
                                     </span>
                                   </span>
                                 </div>
                               </button>
                             </div>
                           </div>
                         </div>
                       </div>
                     </div>
                     <ul class="bands/ScheduleLinks--bottomLinks">
                       <li class="bands/ScheduleLinks--bottomLink">
                         <span class="components/BasicButton--btn components/BasicButton--small components/BasicButton--pointer" styles="small pointer" data-bi-interactive="Help">
                           <span class="components/BasicButton--children">Help</span>
                         </span>
                       </li>
                       <li class="bands/ScheduleLinks--bottomLink">
                         <span class="components/BasicButton--btn components/BasicButton--small components/BasicButton--pointer" styles="small pointer" data-bi-interactive="Schedule PDF">
                           <span class="components/BasicButton--children">Schedule PDF</span>
                         </span>
                       </li>
                     </ul>
                   </div>
                   <div data-bi-context="{}"></div>
                 </div>
             </div>
        </div>
        <div class="browseallband basecomponent">
          <div class='render bandjson' data-band-json="{&#34;data&#34;:{&#34;categories&#34;:[{&#34;name&#34;:&#34;series&#34;,&#34;url&#34;:&#34;/series/all-series&#34;},{&#34;name&#34;:&#34;movies&#34;,&#34;url&#34;:&#34;/movies/catalog&#34;},{&#34;name&#34;:&#34;specials&#34;,&#34;url&#34;:&#34;/specials/all-specials&#34;},{&#34;name&#34;:&#34;documentaries&#34;,&#34;url&#34;:&#34;/documentaries&#34;},{&#34;name&#34;:&#34;boxing&#34;,&#34;url&#34;:&#34;/boxing&#34;}]},&#34;band&#34;:&#34;ScheduleBrowseAll&#34;}">
               <div class="cf w-100 components/Band--band" data-bi-context="{&quot;band&quot;:&quot;ScheduleBrowseAll&quot;}" data-reactroot="">
                 <div class="components/Band--maxWidth">
                   <div class="bands/ScheduleBrowseAll--container">
                     <div class="components/Header--container components/Header--center"></div>
                     <div class="bands/ScheduleBrowseAll--blockContainer">
                       <a href="series/all-series.html" data-bi-interactive="series" target="_self" rel="noopener" class="bands/ScheduleBrowseAll--blockLink">
                         <div class="bands/ScheduleBrowseAll--block">
                           <span class="bands/ScheduleBrowseAll--blockSubtitle">ALL</span>
                           <h2 class="bands/ScheduleBrowseAll--blockTitle">series</h2>
                         </div>
                       </a>
                       <a href="movies/catalog.html" data-bi-interactive="movies" target="_self" rel="noopener" class="bands/ScheduleBrowseAll--blockLink">
                         <div class="bands/ScheduleBrowseAll--block">
                           <span class="bands/ScheduleBrowseAll--blockSubtitle">ALL</span>
                           <h2 class="bands/ScheduleBrowseAll--blockTitle">movies</h2>
                         </div>
                       </a>
                       <a href="specials/all-specials.html" data-bi-interactive="specials" target="_self" rel="noopener" class="bands/ScheduleBrowseAll--blockLink">
                         <div class="bands/ScheduleBrowseAll--block">
                           <span class="bands/ScheduleBrowseAll--blockSubtitle">ALL</span>
                           <h2 class="bands/ScheduleBrowseAll--blockTitle">specials</h2>
                         </div>
                       </a>
                       <a href="documentaries.html" data-bi-interactive="documentaries" target="_self" rel="noopener" class="bands/ScheduleBrowseAll--blockLink">
                         <div class="bands/ScheduleBrowseAll--block">
                           <span class="bands/ScheduleBrowseAll--blockSubtitle">ALL</span>
                           <h2 class="bands/ScheduleBrowseAll--blockTitle">documentaries</h2>
                         </div>
                       </a>
                       <a href="boxing.html" data-bi-interactive="boxing" target="_self" rel="noopener" class="bands/ScheduleBrowseAll--blockLink">
                         <div class="bands/ScheduleBrowseAll--block">
                           <span class="bands/ScheduleBrowseAll--blockSubtitle">ALL</span>
                           <h2 class="bands/ScheduleBrowseAll--blockTitle">boxing</h2>
                         </div>
                       </a>
                     </div>
                   </div>
                 </div>
                 <div data-bi-context="{}"></div>
               </div>
          </div>
        </div>

      </main>

      <script type="text/javascript" src="{{ URL::asset('js/clientlib-all-2018-09-20_19-35-49.min.js') }}"></script>
@endsection
