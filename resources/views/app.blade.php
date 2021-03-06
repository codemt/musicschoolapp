<!DOCTYPE html>
<html lang="en">
    
<head>

<!-- Basic Page Needs
================================================== -->
<title>101 Musicals Academy of Music</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- CSS
================================================== -->
<link rel="stylesheet" href="{{ asset('css/animate.css') }}">
<link rel="stylesheet" href="{{ asset('css/callie-story.css') }}">
<link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<link rel="stylesheet" href="{{ asset('css/responsive.css') }}">


<!-- GA -->
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-131374356-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-131374356-1');
</script>

</head>

<body>

<!-- Wrapper -->
<div class="wrapper home">

<!-- Header
================================================== -->
<header class="header">
    <div class="container">
        
        <!-- Logo -->
        <div class="logo">
            101 Musicals Academy of Music
            {{-- <a href="index.html"><img src="{{ asset('resources/images/logo.png') }}" alt="Callie"></a> --}}
        </div>
        <!-- Logo / End -->

        <!-- Mobile Navigation Toggle -->
        <span class="mobile-toggle"><i class="fa fa-bars"></i></span>
        <!-- Mobile Navigation Toggle / End -->

        <!-- Navigation -->
        <nav class="navigation">

            <!-- Main Menu -->
            <ul class="main-menu">
                <li><a href="index.html">Home</a></li>
                <li><a href="/about">About</a></li>
                <li><a href="#">Video Lessons</a>
                    <ul>
                            <li><a href="/">Guitar Basics </a></li>
                            <li><a href="/"> Bollywood Songs</a></li>
                            <li><a href="/"> Hollywood Songs</a></li>
                            <li><a href="/">Piano Songs</a></li>
                    </ul>
                </li>
                {{-- <li><a href="/photos">Photo's</a></li> --}}
                <li><a href="/contact">Contact</a></li>
            </ul>
            <!-- Main Menu / End -->

            <!-- Navigation Socials -->
            <ul class="navigation-socials">
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
            </ul>
            <!-- Navigation Socials / End -->

        </nav>
        <!-- Navigation / End -->

    </div>
</header>
<!-- Header / End -->

<!-- Mobile Menu
================================================== -->
<div class="mobile-menu">

    <!-- Mobile Menu Header -->
    <div class="mobile-menu-header">
        
        <!-- Mobile Logo -->
        <div class="mobile-logo">
            <a href="index.html"><img src="{{ asset('resources/images/logo.png') }}" alt="Callie"></a>
        </div>

        <!-- Mobile Navigation Toggle -->
        <span class="mobile-toggle"><i class="fa fa-close"></i></span>

    </div>
    <!-- Mobile Menu Header / End -->

    <!-- Mobile Navigation -->
    <ul class="mobile-navigation">
        <li><a href="index.html">Home</a></li>
        <li><a href="about.html">About</a></li>
        <li><a href="#">Posts</a>
            <ul>
                <li><a href="standard-post.html">Standard Post</a></li>
                <li><a href="video-post.html">Video Post</a></li>
                <li><a href="gallery-post.html">Gallery Post</a></li>
                <li><a href="fullwidth-post.html">Full Width Post</a></li>
            </ul>
        </li>
        <li><a href="about.html">Photo's</a></li>
        <li><a href="contact.html">Contact</a></li>
    </ul>
    <!-- Mobile Navigation / End -->

</div>
<!-- Mobile Menu / End -->

<!-- Stories
================================================== -->
<div class="stories">
    <div class="container">
            
        <ul class="story-bg">
            <li><img src="resources/images/story/story-bg-1.jpg" alt="story background"></li>
            <li><img src="resources/images/story/story-bg-2.jpg" alt="story background"></li>
            <li><img src="resources/images/story/story-bg-3.jpg" alt="story background"></li>
            <li><img src="resources/images/story/story-bg-4.jpg" alt="story background"></li>
            <li><img src="resources/images/story/story-bg-5.jpg" alt="story background"></li>
        </ul>

        <div class="story-inner">

            <!-- Story -->
            <div class="story-view-item" style="background-image: url( resources/images/story/story-thumb-1.jpg )">
                <ul class="media">
                    <li data-duration="3"><img src="{{ asset('images/guitarchart.jpg') }}" alt="story image"></li>
                    <li data-duration="3"><img src="{{ asset('images/guitarparts.jpg') }}" alt="story image"></li>
                    <li data-duration="12"><img src="{{ asset('images/structure.jpg') }}"alt="story image"></li>
                    <li data-duration="3"><img src="{{ asset('images/structure2.jpg') }}" alt="story image"></li>
                </ul>
            </div>
            <!-- Story / End -->

            <!-- Story -->
            <div class="story-view-item" style="background-image: url( resources/images/story/story-thumb-2.jpg )">
                <ul class="media">
                    <li data-duration="3"><video src="{{ asset('videos/teresangyaara.mp4') }}" controls></video></li>
                    <li data-duration="3"><video src="{{ asset('videos/banjaara.mp4') }}" controls></video></li>
                    <li data-duration="12"><video src="{{ asset('videos/ludovico.mp4') }}" controls></video></li>
                    <li data-duration="3"><video src="{{ asset('videos/palcover.mp4') }}" controls></video></li>
                </ul>
            </div>
            <!-- Story / End -->

            <!-- Story -->
            <div class="story-view-item" style="background-image: url( resources/images/story/story-thumb-3.jpg )">
                <ul class="media">
                    <li data-duration="3"><video src="{{ asset('videos/ajeebdastan.mp4') }}" controls></video></li>
                    <li data-duration="3"><video src="{{ asset('videos/faded.mp4') }}" controls></video></li>
                    <li data-duration="12"><video src="{{ asset('videos/lastmohicans.mp4') }}" controls></video></li>
                    <li data-duration="3"><video src="{{ asset('videos/judaai.mp4') }}" controls></video></li>
                </ul>
            </div>
            <!-- Story / End -->

            <!-- Story -->
            <div class="story-view-item" style="background-image: url( resources/images/story/story-thumb-4.jpg )">
                <ul class="media">
                    <li data-duration="3"><video src="{{ asset('videos/houseofcards.mp4') }}" controls></video></li>
                    <li data-duration="3"><video src="{{ asset('videos/yirumacover.mp4') }}" controls></video></li>
                    <li data-duration="12"><video src="{{ asset('videos/gamethrones.mp4') }}" controls></video></li>
                    <li data-duration="3"><video src="{{ asset('videos/souravdrum.mp4') }}" controls></video></li>
                </ul>
            </div>
            <!-- Story / End -->

            <!-- Story -->
            {{-- <div class="story-view-item" style="background-image: url( resources/images/story/story-thumb-5.jpg )">
                <ul class="media">
                    <li data-duration="3"><img src="resources/images/story/story-1.jpg" alt="story image"></li>
                    <li data-duration="3"><img src="resources/images/story/story-2.jpg" alt="story image"></li>
                    <li data-duration="12"><video src="resources/images/story/story-3.mp4" controls></video></li>
                    <li data-duration="3"><img src="resources/images/story/story-4.jpg" alt="story image"></li>
                </ul>
            </div> --}}
            <!-- Story / End -->

        </div>

    </div>
</div>
<!-- Stories / End -->

<!-- Content
================================================== -->
<div class="content masonry-layout">
    <div class="container">
        <div class="content-row">
            
            <!-- Postbar -->
            <main class="postbar pull-left">

                <!-- Masonry -->
                <div class="masonry">
                    
                    <!-- Post -->
                    <article class="post sticky">
                        <div class="post-title">
                            <h1><a href="/">Top Guitar Tracks to Play on the Guitar </a></h1>
                        </div>
                        <a class="read-more" href="/"><img src="resources/icons/next.svg" alt="read more"></a>
                    </article>
                    <!-- Post / End -->

                    <!-- Post -->
                    <article class="post">
                        <a class="post-thumbnail video" href="//www.youtube.com/watch?v=OxsFfF0e1Iw">
                            <img src="resources/images/home/standard-post-1.jpg" alt="Post thumbnail">
                            <span class="play-icon">
                                <img src="resources/icons/play.png" alt="play icon">
                            </span>
                        </a>
                        <div class="post-title">
                            <h1><a href="/">Learning Path to becoming a Music Composer?</a></h1>
                        </div>
                        <a class="read-more" href="/"><img src="resources/icons/next.svg" alt="read more"></a>
                    </article>
                    <!-- Post / End -->

                    <!-- Post -->
                    <article class="post">
                        <div class="post-thumbnail">
                            <a href="{{ route('guitarnotes') }}"><img src="{{ asset('images/guitarchart.jpg') }}" alt="Post thumbnail"></a>
                        </div>
                        <div class="post-title">
                            <h1><a href="{{ route('guitarnotes') }}">Guitar Notes</a></h1>
                        </div>
                        <div class="post-text">
                            <p>
                                    Guitar Notes are similar to the notes on the keyboard.
                                    A person can easily relate his keyboard with the guitar.
                                    Using Tabulated Music , one can easily get used to reading 
                                    and writing guitar notes.
                            </p>
                        </div>
                        <a class="read-more" href="{{ route('guitarnotes') }}"><img src="resources/icons/next.svg" alt="read more"></a>
                    </article>
                    <!-- Post / End -->

                    <!-- Post -->
                    <article class="post">
                        <div class="post-thumbnail">
                            <a href="/pianonotes"><img src="{{asset('images/pianonotes2.jpg') }}" alt="Post thumbnail"></a>
                        </div>
                        <div class="post-title">
                            <h1><a href="/pianonotes">Piano Notes</a></h1>
                        </div>
                        <div class="post-text">
                            <p>
                                Piano is much easier to begin , but its not easy to master. The Learning Curve
                                is Deep and the more deeper you go the more Difficulties one will face , and one will
                                have to tackle those challenges.
                            </p>
                        </div>
                        <a class="read-more" href="/pianonotes"><img src="resources/icons/next.svg" alt="read more"></a>
                    </article>
                    <!-- Post / End -->

                    <!-- Post -->
                    <article class="post">
                        <a class="post-thumbnail video" href="//www.youtube.com/watch?v=4tDZeDQQmxg">
                            <img src="resources/images/home/standard-post-4.jpg" alt="Post thumbnail">
                            <span class="play-icon">
                                <img src="resources/icons/play.png" alt="play icon">
                            </span>
                        </a>
                        <div class="post-title">
                            <h1><a href="standard-post.html">Why Practicing Scales is Important?</a></h1>
                        </div>
                        <a class="read-more" href="standard-post.html"><img src="resources/icons/next.svg" alt="read more"></a>
                    </article>
                    <!-- Post / End -->

                    <!-- Post -->
                    <article class="post">
                        <div class="post-thumbnail">
                            <a href="/piano-octaves"><img src="{{ asset('images/octavespiano.png') }}" alt="Post thumbnail"></a>
                        </div>
                        <div class="post-title">
                            <h1><a href="/piano-octaves">Octaves on the Piano</a></h1>
                        </div>
                        <a class="read-more" href="/piano-octaves"><img src="resources/icons/next.svg" alt="read more"></a>
                    </article>
                    <!-- Post / End -->

                </div>
                <!-- Masonry / End -->

            </main>
            <!-- Postbar / End -->

            <!-- Sidebar -->
            <aside class="sidebar pull-right">

                <!-- Image Widget -->
                <div class="widget image-widget">
                    <img src="{{ asset('images/classlogo3.png') }}" alt="logo">
                </div>
                <!-- Image Widget / End -->
                
                <!-- Twitter Widget -->
                <div class="widget twitter-widget">
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <ul class="tweet-slider owl-carousel">
                        <li>
                            <p>
                                The utility of an object defined 
                                its perceived abilities satisfy
                                need or desire please.
                            </p>
                        </li>
                        <li>
                            <p>
                                The utility of an object defined 
                                its perceived abilities satisfy
                                need or desire please.
                            </p>
                        </li>
                        <li>
                            <p>
                                The utility of an object defined 
                                its perceived abilities satisfy
                                need or desire please.
                            </p>
                        </li>
                    </ul>
                </div>
                <!-- Twitter Widget / End -->

                <!-- Post Widget -->
                <div class="widget post-widget">
                    <div class="post-title">
                        <h1><a href="/">Benefits of Learning Music</a></h1>
                    </div>
                    <a class="read-more" href="/"><img src="resources/icons/next.svg" alt="read more"></a>
                </div>
                <!-- Post Widget / End -->

                <!-- Story Widget -->
                {{-- <div class="widget story-widget">
                    
                    <!-- Stories -->
                    <div class="stories-inwidget">

                        <div class="story-inner story-widget-carousel owl-carousel">

                            <!-- Story -->
                            <div class="story-view-item" style="background-image: url( resources/images/story/story-thumb-1.jpg )">
                                <ul class="media">
                                    <li data-duration="3"><img src="resources/images/story/story-1.jpg" alt="story image"></li>
                                    <li data-duration="3"><img src="resources/images/story/story-2.jpg" alt="story image"></li>
                                    <li data-duration="12"><video src="resources/images/story/story-3.mp4" controls></video></li>
                                    <li data-duration="3"><img src="resources/images/story/story-4.jpg" alt="story image"></li>
                                </ul>
                            </div>
                            <!-- Story / End -->

                            <!-- Story -->
                            <div class="story-view-item" style="background-image: url( resources/images/story/story-thumb-2.jpg )">
                                <ul class="media">
                                    <li data-duration="3"><img src="resources/images/story/story-1.jpg" alt="story image"></li>
                                    <li data-duration="3"><img src="resources/images/story/story-2.jpg" alt="story image"></li>
                                    <li data-duration="12"><video src="resources/images/story/story-3.mp4" controls></video></li>
                                    <li data-duration="3"><img src="resources/images/story/story-4.jpg" alt="story image"></li>
                                </ul>
                            </div>
                            <!-- Story / End -->

                            <!-- Story -->
                            <div class="story-view-item" style="background-image: url( resources/images/story/story-thumb-3.jpg )">
                                <ul class="media">
                                    <li data-duration="3"><img src="resources/images/story/story-1.jpg" alt="story image"></li>
                                    <li data-duration="3"><img src="resources/images/story/story-2.jpg" alt="story image"></li>
                                    <li data-duration="12"><video src="resources/images/story/story-3.mp4" controls></video></li>
                                    <li data-duration="3"><img src="resources/images/story/story-4.jpg" alt="story image"></li>
                                </ul>
                            </div>
                            <!-- Story / End -->

                            <!-- Story -->
                            <div class="story-view-item" style="background-image: url( resources/images/story/story-thumb-1.jpg )">
                                <ul class="media">
                                    <li data-duration="3"><img src="resources/images/story/story-1.jpg" alt="story image"></li>
                                    <li data-duration="3"><img src="resources/images/story/story-2.jpg" alt="story image"></li>
                                    <li data-duration="12"><video src="resources/images/story/story-3.mp4" controls></video></li>
                                    <li data-duration="3"><img src="resources/images/story/story-4.jpg" alt="story image"></li>
                                </ul>
                            </div>
                            <!-- Story / End -->

                            <!-- Story -->
                            <div class="story-view-item" style="background-image: url( resources/images/story/story-thumb-2.jpg )">
                                <ul class="media">
                                    <li data-duration="3"><img src="resources/images/story/story-1.jpg" alt="story image"></li>
                                    <li data-duration="3"><img src="resources/images/story/story-2.jpg" alt="story image"></li>
                                    <li data-duration="12"><video src="resources/images/story/story-3.mp4" controls></video></li>
                                    <li data-duration="3"><img src="resources/images/story/story-4.jpg" alt="story image"></li>
                                </ul>
                            </div>
                            <!-- Story / End -->

                            <!-- Story -->
                            <div class="story-view-item" style="background-image: url( resources/images/story/story-thumb-3.jpg )">
                                <ul class="media">
                                    <li data-duration="3"><img src="resources/images/story/story-1.jpg" alt="story image"></li>
                                    <li data-duration="3"><img src="resources/images/story/story-2.jpg" alt="story image"></li>
                                    <li data-duration="12"><video src="resources/images/story/story-3.mp4" controls></video></li>
                                    <li data-duration="3"><img src="resources/images/story/story-4.jpg" alt="story image"></li>
                                </ul>
                            </div>
                            <!-- Story / End -->

                            <!-- Story -->
                            <div class="story-view-item" style="background-image: url( resources/images/story/story-thumb-1.jpg )">
                                <ul class="media">
                                    <li data-duration="3"><img src="resources/images/story/story-1.jpg" alt="story image"></li>
                                    <li data-duration="3"><img src="resources/images/story/story-2.jpg" alt="story image"></li>
                                    <li data-duration="12"><video src="resources/images/story/story-3.mp4" controls></video></li>
                                    <li data-duration="3"><img src="resources/images/story/story-4.jpg" alt="story image"></li>
                                </ul>
                            </div>
                            <!-- Story / End -->

                            <!-- Story -->
                            <div class="story-view-item" style="background-image: url( resources/images/story/story-thumb-2.jpg )">
                                <ul class="media">
                                    <li data-duration="3"><img src="resources/images/story/story-1.jpg" alt="story image"></li>
                                    <li data-duration="3"><img src="resources/images/story/story-2.jpg" alt="story image"></li>
                                    <li data-duration="12"><video src="resources/images/story/story-3.mp4" controls></video></li>
                                    <li data-duration="3"><img src="resources/images/story/story-4.jpg" alt="story image"></li>
                                </ul>
                            </div>
                            <!-- Story / End -->

                            <!-- Story -->
                            <div class="story-view-item" style="background-image: url( resources/images/story/story-thumb-3.jpg )">
                                <ul class="media">
                                    <li data-duration="3"><img src="resources/images/story/story-1.jpg" alt="story image"></li>
                                    <li data-duration="3"><img src="resources/images/story/story-2.jpg" alt="story image"></li>
                                    <li data-duration="12"><video src="resources/images/story/story-3.mp4" controls></video></li>
                                    <li data-duration="3"><img src="resources/images/story/story-4.jpg" alt="story image"></li>
                                </ul>
                            </div>
                            <!-- Story / End -->

                        </div>

                    </div>
                    <!-- Stories / End -->
                    
                </div> --}}
                <!-- Story Widget / End -->

                <!-- Post Widget -->
                <div class="widget post-widget">
                    <div class="post-title">
                        <h1><a href="/">Music Theory </a></h1>
                    </div>
                    <div class="post-thumbnail">
                        <a href="/"><img src="resources/images/home/standard-post-4.jpg" alt="Post thumbnail"></a>
                    </div>
                </div>
                <!-- Post Widget / End -->

                <!-- Mailchimp Widget -->
                {{-- <div class="widget widget_mc4wp_form_widget">
                    <form class="mc4wp-form">
                        <input type="text" placeholder="SUBSCRIBE STORIES">
                        <button type="submit"><img src="resources/icons/next.svg" alt="submit"></button>
                    </form>
                </div> --}}
                <!-- Mailchimp Widget / End -->

            </aside>
            <!-- Sidebar / End -->

        </div>
    </div>
</div>
<!-- Content / End -->

<!-- Footer
================================================== -->
<footer class="footer">
    <div class="container">
        <div class="row">
            
            <!-- Footer Column 1 -->
            <div class="footer-column footer-column-1">

                <!-- Image Widget -->
                <div class="widget image-widget">
                        <img src="{{ asset('images/logo4.png' ) }}" alt="logo">
                    {{-- <img src="resources/images/logo-2.png" alt="logo"> --}}
                </div>
                <!-- Image Widget / End -->

            </div>
            <!-- Footer Column 1 / End -->

            <!-- Footer Column 2 -->
            <div class="footer-column footer-column-2">

            </div>
            <!-- Footer Column 2 / End -->

            <!-- Footer Column 3 -->
            <div class="footer-column footer-column-3">

            </div>
            <!-- Footer Column 3 / End -->

            <!-- Footer Column 4 -->
            <div class="footer-column footer-column-4">

                <!-- Socials Widget -->
                <div class="widget widget-socials">
                    <ul class="social-media">
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                    </ul>
                </div>
                <!-- Socials Widget / End -->

            </div>
            <!-- Footer Column 4 / End -->

        </div>
    </div>
</footer>
<!-- Footer / End -->

</div>
<!-- Wrapper / End -->

<!-- Scripts
================================================== -->
<script src="js/libs/jquery-3.3.1.min.js"></script>
<script src="js/libs/masonry.pkgd.min.js"></script>
<script src="js/libs/callie-story.js"></script>
<script src="js/libs/owl.carousel.min.js"></script>
<script src="js/libs/magnific-popup.min.js"></script>
<script src="js/callie.js"></script>

</body>

</html>