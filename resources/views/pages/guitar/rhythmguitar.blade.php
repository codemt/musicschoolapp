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
                                <h1> Rhythm Guitar </h1>
                            </div>

                            <!-- Post Share -->
                            <div class="post-share">
                                <ul>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                </ul>
                            </div>

                            <!-- Post Metas -->
                            <div class="post-metas">
                                <span class="post-cat"><a href="#">Rhythm Guitar</a></span>
                                <span class="post-author"><a href="#">Mithilesh Tarkar</a></span>
                                <span class="post-date"><time datetime="2018">03 Jun 2018</time></span>  
                            </div>

                        </div>

                        <!-- Post Thumbnail -->
                        <div class="post-thumbnail">
                            <img src="{{ asset('images/rhythmguitar.jpg') }}" alt="Post thumbnail">
                        </div>
                        
                        <!-- Post Text -->
                        <div class="post-text">
                          
                            <p>
                                Rhythm can be played on any guitar except
                                the bass guitar. Basically playing rhythm 
                                is playing chord to chord i.e playing 3 or 4 
                                notes together. This Style creates the tempo and 
                                gives The song a beat. The Rhythm patterns will 
                                vary from song to Song depending on the types of 
                                song and the mood of the Player.
                            </p>
                           
                            <blockquote>
                                <p>
                                   “Music is a necessity. After food, air, water and warmth<br/>music is the next necessity of life.”
                                </p>
                                <cite>Keith  Richards</cite>
                            </blockquote>
                           
                            <!--  ARTICLE 2 
                            <h5>The Most Important Skill Nobody</h5>
                            
                            <p>
                                One of the biggest allures, and criticisms, of cryptocurrencies is their
                                anonymity. Bitcoin transfers are publicly available, but only linked to an
                                account number and not a person.
                            </p>
                           
                            <img src="resources/images/posts/content-image-1.jpg" alt="content image">
                           
                            <p>
                               <span><strong>Clearly, we still don’t know whether praying for others works. But maybe there’s a less clinical benefit. He says that the house on the other.</strong></span>
                            </p>
                           
                            <p>
                               It’s about the remorse we feel while responding to all those after-dinner
                               emails — our eyes and thumbs locked into our smartphones, while we sit
                               with our children on the living room sofa. 
                            </p>
                           
                            -->
                       </div>

                        <!-- Post Footer -->
                        <div class="post-footer">
                            
                            <!-- Post Tags -->
                            <div class="post-tags">
                                <ul>
                                    <li><span><a href="#">Guitar</a></span></li>
                                    <li><span><a href="#">Notes</a></span></li>
                                    <li><span><a href="#">Guitar Notes</a></span></li>
                                    {{-- <li><span><a href="#">Daily</a></span></li>
                                    <li><span><a href="#">Callie</a></span></li> --}}
                                </ul>
                            </div>
                            <!-- Post Tags / End -->

                        </div>

                    </div>
                    <!-- Post Inner / End -->

                    <!-- Post Navigation -->
                    {{-- <div class="post-navigation">
                        <div class="row">
                            
                            <!-- Prev Post -->
                            <a href="#">
                                <div class="prev-post col6">
                                    <div class="post-navigation-inner">

                                        <div class="post-title">
                                            <h3>our eyes thumbs locked</h3>
                                        </div>
                                        <img src="resources/icons/prev.svg" alt="prev post">

                                    </div>
                                </div>
                            </a>
                          
                            <!-- Next Post -->
                            <a href="#">
                                <div class="next-post col6">
                                    <div class="post-navigation-inner">

                                        <div class="post-title">
                                            <h3>The Most Skill Nobody</h3>
                                        </div>
                                        <img src="resources/icons/next.svg" alt="next post">

                                    </div>
                                </div>
                            </a>

                        </div>      
                    </div> --}}
                    <!-- Post Navigation / End -->

                    <!-- Related Posts -->
                    <div class="related-posts">
                        <div class="related-posts-wrapper owl-carousel">
                            
                            <!-- Related Post 1 -->
                            <div class="related-post">
                                <a href="#"><img src="{{ asset('images/rhythmguitar.jpg') }}" alt="related post"></a>
                                <div class="related-post-content">
                                    <h4><a href="/leadguitar">What is Lead Guitar?</a></h4>
                                    <p>
                                        It’s about the remorse we feel while
                                       those after-dinner emails — our eyes
                                       thumbs locked into while responding.
                                    </p>
                                </div>
                            </div>
                            <!-- Related Post 1 / End -->

                            <!-- Related Post 2 -->
                            <div class="related-post">
                                <a href="#"><img src="{{ asset('images/rhythmguitar.jpg') }}" alt="related post"></a>
                                <div class="related-post-content">
                                    <h4><a href="#"> What is Rhythm Guitar?</a></h4>
                                    <p>
                                       It’s about the remorse we feel while
                                       those after-dinner emails — our eyes
                                       thumbs locked into while responding.
                                    </p>
                                </div>
                            </div>
                            <!-- Related Post 2 / End -->

                            <!-- Related Post 3 --> 
                            <div class="related-post">
                                <a href="#"><img src="{{ asset('images/bassguitar.jpg') }}" alt="related post"></a>
                                <div class="related-post-content">
                                   <h4><a href="#">Is Bass Guitar for you ? </a></h4>
                                    <p>
                                       It’s about the remorse we feel while
                                       those after-dinner emails — our eyes
                                       thumbs locked into while responding.
                                    </p>
                                </div>
                            </div>
                            <!-- Related Post 3 / End -->

                        </div>
                    </div>
                    <!-- Related Posts / End -->

                    <!-- Post Comments -->
                    {{-- <div class="post-comments">
                        
                        <!-- Comments Title -->
                        <div class="comment-title">
                            <h3>3 COMMENTS</h3>
                        </div>
                        <!-- Comments Title / End -->

                        <!-- Comments List -->
                        <ul class="comments-list">

                            <!-- Comment -->
                            <li class="comment">
                                
                                <!-- Comment List Item -->
                                <div class="comment-list-item">
                                    <img src="resources/images/comment-author-1.jpg" alt="comment author">
                                    <div class="comment-content">
                                        <span class="comment-author"><a href="#">Callie Jossie</a></span>
                                        <span class="comment-date"><time datetime="2018">03 Jun 2018</time></span>
                                        <div class="comment-text">
                                            <p>
                                               It’s about the remorse we feel while
                                               those after-dinner emails — our eyes
                                               thumbs locked into while responding.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Comment List Item / End -->

                            </li>
                            <!-- Comment / End -->

                            <!-- Comment -->
                            <li class="comment">
                                
                                <!-- Comment List Item -->
                                <div class="comment-list-item">
                                    <img src="resources/images/comment-author-2.jpg" alt="comment author">
                                    <div class="comment-content">
                                        <span class="comment-author"><a href="#">Freya Donse</a></span>
                                        <span class="comment-date"><time datetime="2018">10 Jun 2018</time></span>
                                        <div class="comment-text">
                                            <p>
                                                Clearly, we still don’t know 
                                                whether praying for others works. But
                                                maybe there’s a less clinical benefit.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Comment List Item / End -->

                                <!-- Comment Children -->
                                <ul class="children">

                                    <!-- Comment -->
                                    <li class="comment">

                                        <!-- Comment List Item -->
                                        <div class="comment-list-item">
                                            <img src="resources/images/comment-author-3.jpg" alt="comment author">
                                            <div class="comment-content">
                                                <span class="comment-author"><a href="#">Stella Funes</a></span>
                                                <span class="comment-date"><time datetime="2018">13 Jun 2018</time></span>
                                                <div class="comment-text">
                                                    <p>
                                                        For many people who choose to
                                                        stay on social media despite the
                                                        people do immersion becomes.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Comment List Item / End -->

                                    </li>
                                    <!-- Comment / End -->

                                </ul>
                                <!-- Comment Children / End -->

                            </li>
                            <!-- Comment / End -->
                            
                        </ul>
                        <!-- Comments List / End -->

                    </div> --}}
                    <!-- Post Comments / End -->

                </article>
                <!-- Post / End -->

            </main>
            <!-- Postbar / End -->

            <!-- Sidebar -->
            
            <aside class="sidebar pull-right">
                
                <!-- Twitter Widget -->
                <div class="widget twitter-widget">
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <ul class="tweet-slider owl-carousel">
                        <li>
                            <p>
                                “Without music, life would be a mistake” 
                            </p>
                        </li>
                        <li>
                            <p>
                                “Music gives a soul to the universe, wings to the mind, flight to the imagination and life to everything.”
                            </p>
                        </li>
                        <li>
                            <p>
                                “How is it that music can, without words, evoke our laughter, our fears, our highest aspirations?” ― Jane Swan
                            </p>
                        </li>
                    </ul>
                </div>
                <!-- Twitter Widget / End -->

                <!-- Post Widget -->
                <div class="widget post-widget">
                    <div class="post-title">
                        <h1><a href="standard-post.html">Top Guitar Tracks of all Time</a></h1>
                    </div>
                    <a class="read-more" href="standard-post.html"><img src="resources/icons/next.svg" alt="read more"></a>
                </div>
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
                <div class="widget post-widget">
                    <div class="post-title">
                        <h1><a href="standard-post.html">FingerStyle or Heavy Metal?</a></h1>
                    </div>
                    <div class="post-thumbnail">
                        <a href="standard-post.html"><img src="resources/images/home/standard-post-4.jpg" alt=""></a>
                    </div>
                </div>
                <!-- Post Widget / End -->

            </aside> 
            <!-- Sidebar / End -->

        </div>
    </div>
</div>



@endsection