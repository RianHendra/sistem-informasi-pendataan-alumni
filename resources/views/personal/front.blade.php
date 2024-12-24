<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Personal Programmer | @if($kelompoks)
            {{ $kelompoks->nama_kelompok }}
        @else
            
        @endif</title>

        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
       
        
        <link rel="stylesheet" href="{{ asset('css/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/css/bootstrap-theme.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/css/fontAwesome.css') }}">
        <link rel="stylesheet" href="{{ asset('css/css/light-box.css') }}">
        <link rel="stylesheet" href="{{ asset('css/css/templatemo-main.css') }}">

        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">

        <script src="{{ asset('js/vendor/modernizr-2.8.3-respond-1.4.2.min.js') }}"></script>
    </head>

<body>
    
    <div class="sequence">
  
      <div class="seq-preloader">
        <svg width="39" height="16" viewBox="0 0 39 16" xmlns="http://www.w3.org/2000/svg" class="seq-preload-indicator"><g fill="#F96D38"><path class="seq-preload-circle seq-preload-circle-1" d="M3.999 12.012c2.209 0 3.999-1.791 3.999-3.999s-1.79-3.999-3.999-3.999-3.999 1.791-3.999 3.999 1.79 3.999 3.999 3.999z"/><path class="seq-preload-circle seq-preload-circle-2" d="M15.996 13.468c3.018 0 5.465-2.447 5.465-5.466 0-3.018-2.447-5.465-5.465-5.465-3.019 0-5.466 2.447-5.466 5.465 0 3.019 2.447 5.466 5.466 5.466z"/><path class="seq-preload-circle seq-preload-circle-3" d="M31.322 15.334c4.049 0 7.332-3.282 7.332-7.332 0-4.049-3.282-7.332-7.332-7.332s-7.332 3.283-7.332 7.332c0 4.05 3.283 7.332 7.332 7.332z"/></g></svg>
      </div>
      
    </div>
    
  
        <nav>
          </div>
          <div class="mini-logo">
              <img src="{{ asset('css/img/mini_logo.png') }}" alt="">
          </div>
          <ul>
            <li><a href="#1"><i class="fa fa-home"></i> <em>Home</em></a></li>
            <li><a href="#2"><i class="fa fa-user"></i> <em>About</em></a></li>
            <li><a href="#3"><i class="fa fa-pencil"></i> <em>Entries</em></a></li>
          </ul>
        </nav>
        
        <div class="slides">
          <div class="slide" id="1">
            <div class="content first-content">
              <div class="container-fluid">
                  <div class="col-md-3">
                    @if($kelompoks)
                      <div class="author-image"><img src="{{ asset('storage/' . $kelompoks->gambar_kelompok) }}" alt=""></div>
                      @else
                    <p>Tidak ada gambar kelompok</p>
                    @endif
                  </div>
                  <div class="col-md-9">
                    @if($kelompoks)
                      <h2>{{ $kelompoks->nama_kelompok }}</h2>
                      @else
                      <p>Tidak ada nama kelompok</p>
                      @endif
                      @foreach ( $personals as $personal )
                      <p>{{ $personal->nama }}  {{ $personal->nim }} Teknik Informatika 3D</p>
                      @endforeach
                  </div>
              </div>
            </div>
          </div>
          <div class="slide" id="2">
            <div class="content second-content">
                <div class="container-fluid">
                    <div class="col-md-6">
                        <div class="left-content">
                            <h2>About Us</h2>
                            <p>This is a big assignment for the final exam of Web Design semester.</p>
                          <div class="main-btn"><a href="#3">Read More</a></div>
                      </div>
                    </div>
                    <div class="col-md-6">
                        <div class="right-image">
                          <img src="{{ asset('css/img/about_image.jpg') }}" alt="">
                      </div>
                    </div>
                </div>
            </div>
          </div>
          <div class="slide" id="3">
            <div class="content third-content">
                <div class="container-fluid">
                    <div class="col-md-12">
                        <div class="row">
                            @foreach($personals as $index => $personal)
                                @if($index % 2 == 0)
                                    <!-- First Section for even indices -->
                                    <div class="first-section">
                                        <div class="container-fluid">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="left-content">
                                                        <h2>{{ $personal->nama }}</h2>
                                                        <p>{{ $personal->role }}</p>
                                                        <p><strong>NIM:</strong> {{ $personal->nim }}</p>
                                                        <p>{{ $personal->deskripsi_singkat }}</p>
                                                        <div class="main-btn"><a href="#4">Lebih Detail</a></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="right-image">
                                                        <img src="{{ asset('storage/' . $personal->gambar) }}" alt="first service">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @else
                                    <!-- Second Section for odd indices -->
                                    <div class="second-section">
                                        <div class="container-fluid">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="left-image">
                                                        <img src="{{ asset('storage/' . $personal->gambar) }}" alt="second service">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="right-content">
                                                        <h2>{{ $personal->nama }}</h2>
                                                        <p>{{ $personal->role }}</p>
                                                        <p><strong>NIM:</strong> {{ $personal->nim }}</p>
                                                        <p>{{ $personal->deskripsi_singkat }}</p>
                                                        <div class="main-btn"><a href="#4">Lebih Detail</a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
          </div>
          

    
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="{{ asset('css/js/vendor/jquery-1.11.2.min.js') }}"><\/script>')</script>

    <script src="{{ asset('css/js/vendor/bootstrap.min.js') }}"></script>
    
    <script src="{{ asset('css/js/datepicker.js') }}"></script>
    <script src="{{ asset('css/js/plugins.js') }}"></script>
    <script src="{{ asset('css/js/main.js') }}"></script>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript"></script>
    <script type="text/javascript">
    $(document).ready(function() {

        

        // navigation click actions 
        $('.scroll-link').on('click', function(event){
            event.preventDefault();
            var sectionID = $(this).attr("data-id");
            scrollToID('#' + sectionID, 750);
        });
        // scroll to top action
        $('.scroll-top').on('click', function(event) {
            event.preventDefault();
            $('html, body').animate({scrollTop:0}, 'slow');         
        });
        // mobile nav toggle
        $('#nav-toggle').on('click', function (event) {
            event.preventDefault();
            $('#main-nav').toggleClass("open");
        });
    });
    // scroll function
    function scrollToID(id, speed){
        var offSet = 0;
        var targetOffset = $(id).offset().top - offSet;
        var mainNav = $('#main-nav');
        $('html,body').animate({scrollTop:targetOffset}, speed);
        if (mainNav.hasClass("open")) {
            mainNav.css("height", "1px").removeClass("in").addClass("collapse");
            mainNav.removeClass("open");
        }
    }
    if (typeof console === "undefined") {
        console = {
            log: function() { }
        };
    }
    </script>
</body>
</html>