<footer id="footer" class="dark">
    <div class="container">

        <!-- Footer Widgets
        ============================================= -->
        <div class="footer-widgets-wrap">

            <div class="row col-mb-50">
               

				<div class="col-md-3 d-flex justify-content-center justify-content-md-start"> <!-- Center on mobile, left-align on desktop -->
					<div class="widget " style="list-style: none">
						{{-- <h4 class="text-center">Pages</h4> --}}
						<h4 class="text-center text-md-start">Pages</h4>
						<ul class=" text-center text-md-start" style="list-style: none"> <!-- Center on mobile, left-align on desktop -->
							<li><a href="/">Home</a></li>
							<li><a href="/news">News</a></li>
							<li><a href="/colleges">Colleges</a></li>
							<li><a href="/exam">Exam</a></li>
							<li><a href="/admission">Admission</a></li>
							<li><a href="/forum_posts">Forum</a></li>
						</ul>
					</div>
				</div>
				
                <div class="col-md-3 d-none d-md-block">

                    <div class="widget">
                        <h4>Top Colleges</h4>
                        <div class="posts-sm row col-mb-30" id="post-list-footer">
							<ul class=" text-center text-md-start" style="list-style: none"> <!-- Center on mobile, left-align on desktop -->
								<li><a href="/collegeweb/34">IIT, Mandi</a></li>
								<li><a href="/collegeweb/36">IIT, Delhi</a></li>
								<li><a href="/collegeweb/37">IIT, Indore</a></li>
								<li><a href="/collegeweb/39">IIT, Hyderabad</a></li>
								<li><a href="/collegeweb/33">IIT, Madras</a></li>
								{{-- <li><a href="/forum_posts">Forum</a></li> --}}
							</ul>
                        </div>
                    </div>

                </div>
				<div class="col-md-3 d-none d-md-block">

                    <div class="widget">
                        <h4>Company</h4>
                        <div class="posts-sm row col-mb-30" id="post-list-footer">
							<ul class=" text-center text-md-start" style="list-style: none"> <!-- Center on mobile, left-align on desktop -->
								<li><a href="#">About Us</a></li>
								<li><a href="#">
									Media Kit</a></li>
								<li><a href="#">Privacy Policy</a></li>
								<li><a href="#">Terms of Use</a></li>
								<li><a href="#">Contact Us</a></li>
								<li><a href="#">Forum</a></li>
							</ul>
                        </div>
                    </div>

                </div>
				<div class="col-md-3 d-none d-md-block">

                    <div class="widget">
                        <h4>Recent Posts</h4>
                        <div class="posts-sm row col-mb-30" id="post-list-footer">
                            @foreach($recentPosts as $post)
                                <div class="entry col-12">
                                    <div class="grid-inner row">
                                        <div class="col">
                                            <div class="entry-title">
                                                <h4><a href="{{ route('post.show', $post->PostID) }}">{{ $post->Title }}</a></h4>
                                            </div>
                                            <div class="entry-meta">
                                                <ul>
                                                    <li>{{ $post->created_at->format('jS F Y') }}</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                </div>
            </div>

        </div><!-- .footer-widgets-wrap end -->

    </div>

    <!-- Copyrights
    ============================================= -->
    <div id="copyrights">
        <div class="container">
            <div class="row col-mb-30">
                <div class="col-md-6 text-center text-md-start">
                    Copyrights &copy; 2023 All Rights Reserved by Murmu Software Infotech<br>
                    <div class="copyright-links"><a href="#">Terms of Use</a> / <a href="/privacy-policy">Privacy Policy</a></div>
                </div>

                <div class="col-md-6 text-center text-md-end">
                    <div class="d-flex justify-content-center justify-content-md-end mb-2">
                        <a href="https://www.facebook.com/" class="social-icon border-transparent si-small h-bg-facebook">
                            <i class="fa-brands fa-facebook-f"></i>
                            <i class="fa-brands fa-facebook-f"></i>
                        </a>

                        <a href="https://x.com/?lang=en" class="social-icon border-transparent si-small h-bg-x-twitter">
                            <i class="fa-brands fa-x-twitter"></i>
                            <i class="fa-brands fa-x-twitter"></i>
                        </a>

                        {{-- <a href="#" class="social-icon border-transparent si-small h-bg-google">
                            <i class="fa-brands fa-google"></i>
                            <i class="fa-brands fa-google"></i>
                        </a> --}}

                        {{-- <a href="https://www.yahoo.com/?guccounter=1" class="social-icon border-transparent si-small h-bg-yahoo">
                            <i class="fa-brands fa-yahoo"></i>
                            <i class="fa-brands fa-yahoo"></i>
                        </a> --}}

                        <a href="https://in.linkedin.com/" class="social-icon border-transparent si-small me-0 h-bg-linkedin">
                            <i class="fa-brands fa-linkedin"></i>
                            <i class="fa-brands fa-linkedin"></i>
                        </a>
                    </div>

                    {{-- <i class="bi-envelope"></i> commongurukul@gmail.com <span class="middot">&middot;</span> <i class="fa-solid fa-phone"></i> 7488399032 <span class="middot">&middot;</span> <i class="bi-skype"></i> CollegeArjunaOnSkype --}}
                </div>
            </div>
        </div>
    </div><!-- #copyrights end -->
</footer>
