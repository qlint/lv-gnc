@extends('sub')
@section('title','Movies')
@section('content')
      <div class="app-template" data-reactid=".14zwviuot8g.1.2">
         <main class="wrapperMain" role="main" data-reactid=".14zwviuot8g.1.2.0">
            <div class="" data-reactid=".14zwviuot8g.1.2.0.0">
               <aside class="navSidebar" data-reactid=".14zwviuot8g.1.2.0.0.0">
                  <nav class="navProperty" data-reactid=".14zwviuot8g.1.2.0.0.0.0">
                     <h1 class="navProperty-title" data-reactid=".14zwviuot8g.1.2.0.0.0.0.0"><a href="{{ route('movies') }}" class="" data-reactid=".14zwviuot8g.1.2.0.0.0.0.0.0">Movies</a></h1>
                     <div class="navProperty-toggle" data-reactid=".14zwviuot8g.1.2.0.0.0.0.2">
                        <div class="navProperty-toggleIcon iconCss-dropdown" data-reactid=".14zwviuot8g.1.2.0.0.0.0.2.0"></div>
                     </div>
                     <ul class="navProperty-list" data-reactid=".14zwviuot8g.1.2.0.0.0.0.3">
                        <li class="navProperty-link" data-reactid=".14zwviuot8g.1.2.0.0.0.0.3.$Fights"><a href="" class="" data-reactid=".14zwviuot8g.1.2.0.0.0.0.3.$Fights.0">Drama</a></li>
                        <li class="navProperty-link" data-reactid=".14zwviuot8g.1.2.0.0.0.0.3.$People"><a href="" class="" data-reactid=".14zwviuot8g.1.2.0.0.0.0.3.$People.0">Thriller</a></li>
                        <li class="navProperty-link" data-reactid=".14zwviuot8g.1.2.0.0.0.0.3.$Inside"><a href="" class="" data-reactid=".14zwviuot8g.1.2.0.0.0.0.3.$Inside.0">Adventure</a></li>
                        <li class="navProperty-link" data-reactid=".14zwviuot8g.1.2.0.0.0.0.3.$Shop"><a href="" class="" data-reactid=".14zwviuot8g.1.2.0.0.0.0.3.$Shop.0">Action</a></li>
                     </ul>
                  </nav>
               </aside>
            </div>
            <div class="content content--withSidebar" data-reactid=".14zwviuot8g.1.2.0.1">
               <header class="headerGrid headerGrid--fights" data-reactid=".14zwviuot8g.1.2.0.1.0">
                  <div class="headerGrid-block headerGrid-tabs" data-reactid=".14zwviuot8g.1.2.0.1.0.0">
                     <div class="navTabs " data-reactid=".14zwviuot8g.1.2.0.1.0.0.0">
                        <ul class="navTabs-categories" data-reactid=".14zwviuot8g.1.2.0.1.0.0.0.0">
                           <li class="navTabs-category navTabs-category--selected" data-reactid=".14zwviuot8g.1.2.0.1.0.0.0.0.$Upcoming Fights"><a href="" class="" data-reactid=".14zwviuot8g.1.2.0.1.0.0.0.0.$Upcoming Fights.0">Catalog</a></li>
                           <li class="navTabs-category" data-reactid=".14zwviuot8g.1.2.0.1.0.0.0.0.$past"><a href="" class="" data-reactid=".14zwviuot8g.1.2.0.1.0.0.0.0.$past.0">Coming Soon</a></li>
                        </ul>
                        <div class="navTabs-toggle" data-reactid=".14zwviuot8g.1.2.0.1.0.0.0.1">
                           <div class="navTabs-toggleIcon iconCss-dropdown" data-reactid=".14zwviuot8g.1.2.0.1.0.0.0.1.0"></div>
                        </div>
                     </div>
                  </div>
               </header>
               <div class="fight" data-reactid=".14zwviuot8g.1.2.0.1.1:$1">
                  <header class="fight-header" data-reactid=".14zwviuot8g.1.2.0.1.1:$1.0">
                     <h3 class="fight-branding" style="color:#cdb375;" data-reactid=".14zwviuot8g.1.2.0.1.1:$1.0.0">Drama</h3>
                     <h2 class="fight-title" data-reactid=".14zwviuot8g.1.2.0.1.1:$1.0.1">Zebra Productions</h2>
                  </header>
                  <div class="fight-headliner" data-reactid=".14zwviuot8g.1.2.0.1.1:$1.1:$0">
                     <div class="fight-images fight-image--count-1" data-reactid=".14zwviuot8g.1.2.0.1.1:$1.1:$0.0"><img src="{{ URL::asset('img/tvpg/changes1-1030x288.jpg') }}" data-reactid=".14zwviuot8g.1.2.0.1.1:$1.1:$0.0.$http=2//i=1lv3=1hbo=1com/assets/images/sports/boxing/fights/2017-05-06-canelo-vs-chavez-jr/event/canelo-512x288=1jpg"></div>
                     <div class="fight-headlinerContent" data-reactid=".14zwviuot8g.1.2.0.1.1:$1.1:$0.1">
                        <h4 class="fight-subtitle" data-reactid=".14zwviuot8g.1.2.0.1.1:$1.1:$0.1.0">Featured on KTN, MNet</h4>
                        <div class="fight-headlinerFighters" data-reactid=".14zwviuot8g.1.2.0.1.1:$1.1:$0.1.1">
                           <div class="fight-headlinerFighter" style="text-align: center;" data-reactid=".14zwviuot8g.1.2.0.1.1:$1.1:$0.1.1.0">Changes, Season I - II</div>
                        </div>
                     </div>
                  </div>
                  <div class="fight-link" data-reactid=".14zwviuot8g.1.2.0.1.1:$1.3"><a href="" class="button button--small button--primary button--light button--arrow" data-reactid=".14zwviuot8g.1.2.0.1.1:$1.3.0">Check It Out</a></div>
               </div>
               <div class="fight" data-reactid=".14zwviuot8g.1.2.0.1.1:$2">
                  <header class="fight-header" data-reactid=".14zwviuot8g.1.2.0.1.1:$2.0">
                     <h3 class="fight-branding" style="color:#cdb375;" data-reactid=".14zwviuot8g.1.2.0.1.1:$2.0.0">Drama/ Soap Opera</h3>
                     <h2 class="fight-title" data-reactid=".14zwviuot8g.1.2.0.1.1:$2.0.1">Spielworks Media</h2>
                  </header>
                  <div class="fight-headliner" data-reactid=".14zwviuot8g.1.2.0.1.1:$2.1:$0">
                     <div class="fight-images fight-image--count-1" data-reactid=".14zwviuot8g.1.2.0.1.1:$2.1:$0.0"><img src="{{ URL::asset('img/tvpg/ltb-1030x288.jpg') }}" data-reactid=".14zwviuot8g.1.2.0.1.1:$2.1:$0.0.$http=2//i=1lv3=1hbo=1com/assets/images/sports/boxing/fights/2017-05-20-crawford-vs-diaz/event/crawford-vs-diaz-1030x288=1jpg"></div>
                     <div class="fight-headlinerContent" data-reactid=".14zwviuot8g.1.2.0.1.1:$2.1:$0.1">
                        <h4 class="fight-subtitle" data-reactid=".14zwviuot8g.1.2.0.1.1:$2.1:$0.1.0">Featured on KTN, MNet</h4>
                        <div class="fight-headlinerFighters" data-reactid=".14zwviuot8g.1.2.0.1.1:$2.1:$0.1.1">
                           <div class="fight-headlinerFighter" style="text-align: center;" data-reactid=".14zwviuot8g.1.2.0.1.1:$2.1:$0.1.1.0">Lies That Bind</div>
                        </div>
                     </div>
                  </div>
                  <div class="fight-link" data-reactid=".14zwviuot8g.1.2.0.1.1:$2.344"><a href="" class="button button--small button--primary button--light button--arrow" data-reactid=".14zwviuot8g.1.2.0.1.1:$2.3.044">Check It Out</a></div>
               </div>
               <div class="fight" data-reactid=".14zwviuot8g.1.2.0.1.1:$3">
                  <header class="fight-header" data-reactid=".14zwviuot8g.1.2.0.1.1:$3.0">
                     <h3 class="fight-branding" style="color:#cdb375;" data-reactid=".14zwviuot8g.1.2.0.1.1:$3.0.0">Drama / Comedy</h3>
                     <h2 class="fight-title" data-reactid=".14zwviuot8g.1.2.0.1.1:$3.0.1">Insignia Productions</h2>
                  </header>
                  <div class="fight-headliner" data-reactid=".14zwviuot8g.1.2.0.1.1:$3.1:$0">
                     <div class="fight-images fight-image--count-1" data-reactid=".14zwviuot8g.1.2.0.1.1:$3.1:$0.0"><img src="{{ URL::asset('img/tvpg/prem-1030x288.jpg') }}" data-reactid=".14zwviuot8g.1.2.0.1.1:$3.1:$0.0.$http=2//i=1lv3=1hbo=1com/assets/images/sports/boxing/fights/2017-06-17-ward-vs-kovalev/event/ward-vs-kovalev-1030x288=1jpg"></div>
                     <div class="fight-headlinerContent" data-reactid=".14zwviuot8g.1.2.0.1.1:$3.1:$0.1">
                        <h4 class="fight-subtitle" data-reactid=".14zwviuot8g.1.2.0.1.1:$3.1:$0.1.0">Featured on KTN, Fox Life</h4>
                        <div class="fight-headlinerFighters" data-reactid=".14zwviuot8g.1.2.0.1.1:$3.1:$0.1.1">
                           <div class="fight-headlinerFighter" style="text-align: center;" data-reactid=".14zwviuot8g.1.2.0.1.1:$3.1:$0.1.1.0">Prem</div>
                        </div>
                     </div>
                  </div>
                  <div class="fight-link" data-reactid=".14zwviuot8g.1.2.0.1.1:$3.3"><a href="" class="button button--small button--primary button--light button--arrow" data-reactid=".14zwviuot8g.1.2.0.1.1:$3.3.0">Check It Out</a></div>
               </div>
            </div>
         </main>
@endsection
