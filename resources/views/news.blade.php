{{-- <x-header />  --}}

@include('components.header')

@extends('collegelayout')

@section('content')


{{-- EndNavBar --}}

{{-- Main Content --}}
{{--  --}}
<div class="col-12">
  
    <div class="fancy-title title-border">
        <h3>News</h3>
    </div>

    @foreach($posts as $post)
    <div class="posts-md">
        <div class="entry row mb-5">
            <div class="col-md-6">
                <div class="entry-image">
                    {{-- Extracting and displaying the first image from the post content --}}
                    @php
                        preg_match('/<img.+src=[\'"](?P<src>.+?)[\'"].*>/i', $post->Content, $image);
                    @endphp
                    <a href="#">
                        <img src="{{ $image['src']  }}" alt="Post Image">
                    </a>
                </div>
            </div>
            <div class="col-md-6 mt-3 mt-md-0">
                {{-- Keeping the original h6 and admission text --}}
                <h6 class="mt-3 mb-3" style="font-size: 12px;">
                    <i class="fas fa-folder" style="color: darkcyan;"></i> NEWS
                </h6>
                
                <h4>{{ $post->Title }}</h4>

                {{-- Displaying the first 25 words from the content for the description --}}
                <p>
                    {!! \Illuminate\Support\Str::words(strip_tags($post->Content), 15, '...') !!}
                </p>
                
                {{-- Keeping the "Read More" button --}}
                <div class="my-4">
                    <a href="{{ route('post.show', $post->PostID) }}">
                        <button class="py-1 px-2" type="button" style="font-size: 12px; background-color: orange; color: antiquewhite; border: none;">Read More &gt;&gt;</button>
                    </a>
                    
                </div>
            </div>
        </div>
    </div>
@endforeach

   

</div>


@endsection

