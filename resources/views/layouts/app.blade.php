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
           <a href="/"> 101 Musicals Academy of Music </a> 
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
                <li><a href="/">Video Lessons</a>
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
@yield('content')
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
                    <img src="{{ asset('images/classlogo3.png' ) }}" alt="logo">
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