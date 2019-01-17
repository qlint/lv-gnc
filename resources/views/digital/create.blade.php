@extends('main')
@section('stylesheets')
   <link href="{{ URL::asset('css/parsley.css') }}" rel="stylesheet">
@endsection
@section('title','Upload')
@section('content')
      <div class="app-template" data-reactid=".d2bbq4hekg.1.2">
         <main class="wrapperMain" role="main" data-reactid=".d2bbq4hekg.1.2.0">
            <div class="" data-reactid=".d2bbq4hekg.1.2.0.0">
               <aside class="navSidebar" data-reactid=".d2bbq4hekg.1.2.0.0.0">
                  <nav class="navProperty" data-reactid=".d2bbq4hekg.1.2.0.0.0.0">
                     <h1 class="navProperty-title" data-reactid=".d2bbq4hekg.1.2.0.0.0.0.0"><a href="#" class="" data-reactid=".d2bbq4hekg.1.2.0.0.0.0.0.0">Sitemap</a></h1>
                     <div class="navProperty-toggle" data-reactid=".d2bbq4hekg.1.2.0.0.0.0.2">
                        <div class="navProperty-toggleIcon iconCss-dropdown" data-reactid=".d2bbq4hekg.1.2.0.0.0.0.2.0"></div>
                     </div>
                     <ul class="navProperty-list" data-reactid=".d2bbq4hekg.1.2.0.0.0.0.3">
                        <li class="navProperty-link" data-reactid=".d2bbq4hekg.1.2.0.0.0.0.3.$Contact Us"><a href="#" class="" data-reactid=".d2bbq4hekg.1.2.0.0.0.0.3.$Contact Us.0">Contact Us</a></li>
                        <li class="navProperty-link" data-reactid=".d2bbq4hekg.1.2.0.0.0.0.3.$Careers"><a href="#" class="" data-reactid=".d2bbq4hekg.1.2.0.0.0.0.3.$Careers.0">About Us</a></li>
                        <li class="navProperty-link" data-reactid=".d2bbq4hekg.1.2.0.0.0.0.3.$Newsletters"><a href="#" class="" data-reactid=".d2bbq4hekg.1.2.0.0.0.0.3.$Newsletters.0">Coming Soon</a></li>
                        <li class="navProperty-link" data-reactid=".d2bbq4hekg.1.2.0.0.0.0.3.$FAQs"><a href="#" class="" data-reactid=".d2bbq4hekg.1.2.0.0.0.0.3.$FAQs.0">FAQs</a></li>
                        <li class="navProperty-link" data-reactid=".d2bbq4hekg.1.2.0.0.0.0.3.$Explore HBO"><a href="#" class="" data-reactid=".d2bbq4hekg.1.2.0.0.0.0.3.$Explore HBO.0">Explore</a></li>
                        <li class="navProperty-link" data-reactid=".d2bbq4hekg.1.2.0.0.0.0.3.$Order HBO"><a href="#" class="" data-reactid=".d2bbq4hekg.1.2.0.0.0.0.3.$Order HBO.0">Portals</a></li>
                     </ul>
                  </nav>
               </aside>
            </div>
            <div class="content content--withSidebar content--twoColumns" data-reactid=".d2bbq4hekg.1.2.0.1">
               <div class="pageTitle pageTitle--sub pageTitle--divider" data-reactid=".d2bbq4hekg.1.2.0.1.0">
                  <h2 class="pageTitle-title" data-reactid=".d2bbq4hekg.1.2.0.1.0.0">Upload Content</h2>
               </div>
               <div class="content-primary content-primary--contact" data-reactid=".d2bbq4hekg.1.2.0.1.1">
                  <p data-reactid=".d2bbq4hekg.1.2.0.1.1.0">Content data upload page. This is stored in a database and accessed via other pages where necessary. All fields are required.</p>
                  <form class="contactUs-form" novalidate method="POST" action="{{ route('digital.store') }}" data-parsley-validate enctype="multipart/form-data" data-reactid=".d2bbq4hekg.1.2.0.1.1.1">
                     {{ csrf_field() }}

                        {{--
                        @if ($_POST['content'] === 'music'){

                        }

                        @elseif ($_POST['content'] === 'tv' ){

                        }

                        @elseif ($_POST['content'] === 'movie' ){

                        }

                        @elseif ($_POST['content'] === 'game' ){

                        }

                        @endif
                        --}}

                     <div class="form-group" data-reactid=".d2bbq4hekg.1.2.0.1.1.1.0">
                        <label data-reactid=".d2bbq4hekg.1.2.0.1.1.1.0.0" style="color: #ffcc00;">Content Type</label>
                        <div class="select " data-reactid=".d2bbq4hekg.1.2.0.1.1.1.0.1">
                           <select class="form-control " name="content" required data-reactid=".d2bbq4hekg.1.2.0.1.1.1.0.1.0">
                              <optgroup label="Select One" data-reactid=".d2bbq4hekg.1.2.0.1.1.1.0.1.0.$0">
                                 <option value="music" data-selected="false" data-reactid=".d2bbq4hekg.1.2.0.1.1.1.0.1.0.$0.$0">Music</option>
                                 <option value="tv" data-selected="false" data-reactid=".d2bbq4hekg.1.2.0.1.1.1.0.1.0.$0.$1">TV Show</option>
                                 <option value="movie" data-selected="false" data-reactid=".d2bbq4hekg.1.2.0.1.1.1.0.1.0.$0.$2">Movie</option>
                                 <option value="game" data-selected="false" data-reactid=".d2bbq4hekg.1.2.0.1.1.1.0.1.0.$0.$3">Game</option>
                              </optgroup>
                           </select>
                        </div>
                     </div>
                     <div class="form-group" data-reactid=".d2bbq4hekg.1.2.0.1.1.1.0">
                        <label data-reactid=".d2bbq4hekg.1.2.0.1.1.1.0.0" style="color: #ffcc00;">Content Type Tags</label>
                        <div class="select " data-reactid=".d2bbq4hekg.1.2.0.1.1.1.0.1">
                           <select class="form-control " name="tags" required data-reactid=".d2bbq4hekg.1.2.0.1.1.1.0.1.0">
                              <optgroup label="Select One" data-reactid=".d2bbq4hekg.1.2.0.1.1.1.0.1.0.$0">
                                 <option value="series" data-selected="false" data-reactid=".d2bbq4hekg.1.2.0.1.1.1.0.1.0.$0.$0">Series</option>
                                 <option value="documentaries" data-selected="false" data-reactid=".d2bbq4hekg.1.2.0.1.1.1.0.1.0.$0.$1">Documentaries</option>
                                 <option value="reality" data-selected="false" data-reactid=".d2bbq4hekg.1.2.0.1.1.1.0.1.0.$0.$2">Reality</option>
                                 <option value="talk" data-selected="false" data-reactid=".d2bbq4hekg.1.2.0.1.1.1.0.1.0.$0.$3">Talk</option>
                              </optgroup>
                           </select>
                        </div>
                     </div>
                     <div class="form-group" data-reactid=".d2bbq4hekg.1.2.0.1.1.1.1">
                        <label data-reactid=".d2bbq4hekg.1.2.0.1.1.1.0.0" style="color: #ffcc00;">Name/ URL Slug (No space - Use underscores)</label>
                        <div class="input" data-reactid=".d2bbq4hekg.1.2.0.1.1.1.1.0">
                           <input class="form-control" placeholder="Keep it short, no spaces or special characters" type="text" name="name" required data-reactid=".d2bbq4hekg.1.2.0.1.1.1.1.0.0">
                        </div>
                     </div>
                     <div class="form-group" data-reactid=".d2bbq4hekg.1.2.0.1.1.1.1">
                        <label data-reactid=".d2bbq4hekg.1.2.0.1.1.1.0.0" style="color: #ffcc00;">Images</label>
                        <div class="input" data-reactid=".d2bbq4hekg.1.2.0.1.1.1.1.0">
                           <script type="text/javascript">

                           </script>
                           <div class="row">
                              <div class="col-sm-4">
                                 <input type="file" required onchange="document.getElementById('upld1').src = window.URL.createObjectURL(this.files[0])" name="img1920">
                                 <img id="upld1" alt="1920" style="max-width: 200px;" src="{{ URL::asset('img/placehold/1920.jpg') }}" />
                              </div>
                              <div class="col-sm-4">
                                 <input type="file" required onchange="document.getElementById('upld2').src = window.URL.createObjectURL(this.files[0])" name="img1280">
                                 <img id="upld2" alt="1280" style="max-width: 200px;" src="{{ URL::asset('img/placehold/1280.jpg') }}" />
                              </div>
                              <div class="col-sm-4">
                                 <input type="file" required onchange="document.getElementById('upld3').src = window.URL.createObjectURL(this.files[0])" name="img1024">
                                 <img id="upld3" alt="1024" style="max-width: 200px;" src="{{ URL::asset('img/placehold/1024.jpg') }}" />
                              </div>
                           </div>
                           <div class="row">
                              <div class="col-sm-4">
                                 <input type="file" required onchange="document.getElementById('upld4').src = window.URL.createObjectURL(this.files[0])" name="img512">
                                 <img id="upld4" alt="512" style="max-width: 200px;" src="{{ URL::asset('img/placehold/512.jpg') }}" />
                              </div>
                              <div class="col-sm-4">
                                 <input type="file" required onchange="document.getElementById('upld5').src = window.URL.createObjectURL(this.files[0])" name="img300">
                                 <img id="upld5" alt="300" style="max-width: 200px;" src="{{ URL::asset('img/placehold/300.jpg') }}" />
                              </div>
                              <div class="col-sm-4">
                                 <input type="file" required onchange="document.getElementById('upld6').src = window.URL.createObjectURL(this.files[0])" name="img1030x288">
                                 <img id="upld6" alt="1030" style="max-width: 200px;" src="{{ URL::asset('img/placehold/1030.jpg') }}" />
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="form-group" data-reactid=".d2bbq4hekg.1.2.0.1.1.1.2">
                        <label data-reactid=".d2bbq4hekg.1.2.0.1.1.1.0.0" style="color: #ffcc00;">Big Heading Title</label>
                        <div class="input" data-reactid=".d2bbq4hekg.1.2.0.1.1.1.2.0">
                           <input class="form-control" placeholder="Big Title" name="h1Ttle" type="text" required data-reactid=".d2bbq4hekg.1.2.0.1.1.1.2.0.0">
                        </div>
                     </div>
                     <div class="form-group" data-reactid=".d2bbq4hekg.1.2.0.1.1.1.3">
                        <label data-reactid=".d2bbq4hekg.1.2.0.1.1.1.0.0" style="color: #ffcc00;">Small Heading Title</label>
                        <div class="input" data-reactid=".d2bbq4hekg.1.2.0.1.1.1.3.0">
                           <input class="form-control" placeholder="Small Title" type="text" name="h4Ttle" data-parsley-maxlength="40" required data-reactid=".d2bbq4hekg.1.2.0.1.1.1.3.0.0">
                        </div>
                     </div>
                     <div class="form-group" data-reactid=".d2bbq4hekg.1.2.0.1.1.1.3">
                        <label data-reactid=".d2bbq4hekg.1.2.0.1.1.1.0.0" style="color: #ffcc00;">Long Description</label>
                        <div class="input" data-reactid=".d2bbq4hekg.1.2.0.1.1.1.3.0">
                           <textarea rows="5" placeholder="Description" name="desc1" required class="form-control" data-parsley-maxlength="480" data-reactid=".d2bbq4hekg.1.2.0.1.1.1.4.0.0"></textarea>
                        </div>
                     </div>
                     <div class="form-group" data-reactid=".d2bbq4hekg.1.2.0.1.1.1.3">
                        <label data-reactid=".d2bbq4hekg.1.2.0.1.1.1.0.0" style="color: #ffcc00;">Short Description</label>
                        <div class="input" data-reactid=".d2bbq4hekg.1.2.0.1.1.1.3.0">
                           <textarea rows="3" placeholder="Summary" name="desc2" required class="form-control" data-parsley-maxlength="240" data-reactid=".d2bbq4hekg.1.2.0.1.1.1.4.0.0"></textarea>
                        </div>
                     </div>
                     <div class="form-group" data-reactid=".d2bbq4hekg.1.2.0.1.1.1.3">
                        <label data-reactid=".d2bbq4hekg.1.2.0.1.1.1.0.0" style="color: #ffcc00;">Trailer URL</label>
                        <div class="input" data-reactid=".d2bbq4hekg.1.2.0.1.1.1.3.0">
                           <input class="form-control" placeholder="URL to trailer video" type="text" name="trailerURL" data-parsley-maxlength="40" required data-reactid=".d2bbq4hekg.1.2.0.1.1.1.3.0.0">
                        </div>
                     </div>
                     <div class="form-group" data-reactid=".d2bbq4hekg.1.2.0.1.1.1.3">
                        <label data-reactid=".d2bbq4hekg.1.2.0.1.1.1.0.0" style="color: #ffcc00;">Portal URL</label>
                        <div class="input" data-reactid=".d2bbq4hekg.1.2.0.1.1.1.3.0">
                           <input class="form-control" placeholder="URL to store portal" type="text" name="portalURL" data-parsley-maxlength="40" required data-reactid=".d2bbq4hekg.1.2.0.1.1.1.3.0.0">
                        </div>
                     </div>
                     <div class="form-group form-actions" data-reactid=".d2bbq4hekg.1.2.0.1.1.1.6">
                        <button type="submit" name="submit" class="button button--small" data-reactid=".d2bbq4hekg.1.2.0.1.1.1.6.0">Submit</button>
                     </div>
                  </form>
               </div>
            </div>
         </main>
@endsection
@section('scripts')
   <script src="{{ URL::asset('js/parsley.min.js') }}"></script>
@endsection
