@extends('layouts.app')

@section('content')

<div class="content">

        <div class="container">
            <div class="content-row">
                
                <!-- Postbar -->
                <main class="postbar pull-left">
    
                    <!-- Post -->
                    <article class="post">
                        
                        <!-- Post Inner -->
                        <div class="post-inner">
    
                            <!-- Post Header -->
                            <div class="post-header">
    
                                <!-- Post Title -->
                                <div class="post-title">
                                    <h1>Leave us a Message , and we will get in Touch!</h1>
                                </div>
    
                            </div>
    
                            <!-- Post Thumbnail -->
                            {{-- <div class="post-thumbnail">
                                <img src="resources/images/single-page-1.jpg" alt="Post thumbnail">
                            </div> --}}
                            
                            <!-- Post Text -->
                            <div class="post-text">
    
                                <!-- Contact Form -->
                                <div class="contact">
                                    <form class="contact-form">
                                            
                                        <input type="text" placeholder="Name">
                                        <input type="text" placeholder="Email">
                                        <textarea rows="4" placeholder="Your Message"></textarea>
                                        <button type="submit">Send Message</button>
    
                                    </form>
                                </div>
                               
                            </div>
    
                        </div>
                        <!-- Post Inner / End -->
    
                    </article>
                    <!-- Post / End -->
    
                </main>
                <!-- Postbar / End -->
    
                <!-- Sidebar -->
                <aside class="sidebar pull-right">
                    
                    <!-- Twitter Widget -->
                    {{-- <div class="widget twitter-widget">
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
                    </div> --}}
                    <!-- Twitter Widget / End -->
    
                    <!-- Post Widget -->
                    {{-- <div class="widget post-widget">
                        <div class="post-title">
                            <h1><a href="standard-post.html">Just for a moment and also result of depression</a></h1>
                        </div>
                        <a class="read-more" href="standard-post.html"><img src="resources/icons/next.svg" alt="read more"></a>
                    </div> --}}
                    <!-- Post Widget / End -->
    
                    <!-- Story Widget -->
                    <div class="widget story-widget">
                        
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
                            
                    </div>
                    <!-- Story Widget / End -->
                    
                    <!-- Post Widget -->
                    {{-- <div class="widget post-widget">
                        <div class="post-title">
                            <h1><a href="standard-post.html">Just for a moment and also result of depression</a></h1>
                        </div>
                        <div class="post-thumbnail">
                            <a href="standard-post.html"><img src="resources/images/home/standard-post-4.jpg" alt=""></a>
                        </div>
                    </div> --}}
                    <!-- Post Widget / End -->
    
                </aside>
                <!-- Sidebar / End -->
    
            </div>
        </div>
    </div>




@endsection