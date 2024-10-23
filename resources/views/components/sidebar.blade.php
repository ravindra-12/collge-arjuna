<div class="widget">
    <!-- Exams Section -->
    <h3 style="font-size: 20px;" class="mt-5">POPULAR EXAMS</h3>
    <hr class="w-65" style="color: black;">
    <div id="canvas-TabContent" class="tab-content">
        <div class="tab-pane active show" id="tab-1" role="tabpanel" aria-labelledby="canvas-tab-1" tabindex="0">
            <div class="posts-sm row col-mb-30" id="popular-post-list-sidebar">
                @foreach($examsPosts as $post)
                    <div class="entry col-12">
                        <div class="grid-inner row g-0">
                            <div class="col-auto">
                                <div class="entry-image">
                                    <a href="#"><img class="" src="{{ $post->imageUrl }}" alt="Image"></a>
                                </div>
                            </div>
                            <div class="col ps-3">
                                 <a class="text-dark" href="{{ route('post.show', $post->PostID) }}">
                                <div class="entry-title">
                                    <strong>{!! $post->Title !!}</strong>
                                    <p>{!! $post->shortDescription !!}</p>
                                </div>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <!-- News Section -->
    <h3 style="font-size: 20px;" class="mt-5">LATEST NEWS</h3>
    <hr class="w-65" style="color: black;">
    <div id="canvas-TabContent" class="tab-content">
        <div class="tab-pane active show" id="tab-2" role="tabpanel" aria-labelledby="canvas-tab-2" tabindex="0">
            <div class="posts-sm row col-mb-30" id="latest-news-list-sidebar">
                @foreach($newsPosts as $post)
                    <div class="entry col-12">
                        <div class="grid-inner row g-0">
                            <div class="col-auto">
                                <div class="entry-image">
                                    <a href="#"><img class="" src="{{ $post->imageUrl }}" alt="Image" height="180px;"></a>
                                </div>
                            </div>
                            <div class="col ps-3">
                                <a class="text-dark" href="{{ route('post.show', $post->PostID) }}">
                                <div class="entry-title">
                                    <strong>{!! $post->Title !!}</strong>
                                    <p>{!! $post->shortDescription !!}</p>
                                </div>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <!-- Latest Colleges Section -->
    <h3 style="font-size: 20px;" class="mt-5">EXPLORE COLLEGES</h3>
    <hr class="w-65" style="color: black;">
    <div id="canvas-TabContent" class="tab-content">
        <div class="tab-pane active show" id="tab-3" role="tabpanel" aria-labelledby="canvas-tab-3" tabindex="0">
            <div class="posts-sm row col-mb-30" id="latest-colleges-list-sidebar">
                @foreach($latestColleges as $college)
                    <div class="entry col-12">
                        <div class="grid-inner row g-0">
                            <div class="col-auto">
                                <div class="entry-image">
                                    <a href="#"><img class="" src="{{ $college->imageUrl }}" alt="Image"></a>
                                </div>
                            </div>
                            <div class="col ps-3">
                                  <a class="text-dark" href="{{ url('collegeweb/' . $college->id) }}">
                                <div class="entry-title">
                                    <strong>{{ $college->title }}</strong>
                                    <p>{{ $college->shortDescription }}</p>
                                    
                                </div>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
