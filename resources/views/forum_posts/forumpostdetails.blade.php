<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Forum-Post-Details</title>

    <!-- Font Imports -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Playfair+Display:ital@0;1&display=swap" rel="stylesheet">

    <!-- Core Style -->
    <link rel="stylesheet" href="{{ asset('reso/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('reso/forum/forum.css') }}">
    <link rel="stylesheet" href="{{ asset('reso/css/font-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('reso/css/custom.css') }}">

    <!-- Summernote CSS -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    
    <!-- Bootstrap (if needed) -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="stretched search-overlay">
    @include('components.header')

    <!-- Page Title -->
    <section class="page-title bg-color py-6 page-title-center">
        <div class="container">
            <div class="page-title-row">
                <div class="page-title-content">
                    <h2 class="h2" style="font-weight: 800">Join the conversation and share your thoughts</h2>
                </div>

                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mt-4">
                        <li class="breadcrumb-item"><a class="alt-color" href="#">Forum</a></li>
                        <li class="breadcrumb-item text-black-50 active" aria-current="page">Forumdetails</li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>

    <!-- Content -->
    <section id="content">
        <div class="content-wrap">
            <div class="container mw-md">
                <div class="topic-post">
                    <div class="row g-0 justify-content-between align-items-center border-top border-bottom py-3 mb-4">
                        <div class="col-9">
                            <div class="d-flex align-items-center">
                                <img src="https://cdn-icons-png.flaticon.com/128/64/64572.png" alt="Author" class="rounded-circle me-2" width="50" height="50">
                                <div>
                                    <h5 class="mb-0 h6 fw-semibold"><a class="text-dark" href="#">{{ $post->user->name }}</a></h5>
                                    <small class="text-muted mb-0 fw-normal">{{ \Carbon\Carbon::parse($post->created_at)->format('d/m/Y H:i') }}</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <a href="#" id="editlink" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="uil uil-ellipsis-h icon-2x alt-color"></i></a>
                        </div>
                    </div>

                    {!! $post->postcontent !!}

                    <!-- Comment Section -->
                    <div class="topic-post reply mt-5 p-4 p-md-5 border-top border-width-5 border-color">
                        <h2 class="mb-0 fw-bold"><i class="bi-check-lg text-success"></i> Reply</h2>
                        
                        <div id="comment-list">
                            @foreach($post->comments as $comment)
                            <div class="row g-0 justify-content-between align-items-center border-top border-bottom border-color py-3 mb-4">
                                <div class="col-9">
                                    <div class="d-flex align-items-center">
                                        <img src="https://cdn-icons-png.flaticon.com/128/1144/1144760.png" alt="Author" class="rounded-circle me-2" width="50" height="50">
                                        <div>
                                            <h5 class="mb-0 h6 fw-semibold align-middle">
                                                <a class="text-dark" href="#">{{ $comment->user->name }}</a>
                                            </h5>
                                            <small class="text-muted mb-0 fw-normal">{{ \Carbon\Carbon::parse($comment->created_at)->format('d/m/Y H:i') }}</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="comment-text">
                                {!! $comment->comment !!}
                            </div>
                            @endforeach
                        </div>

                        <!-- Reply Form -->
                        <div id="message-reply" class="topic-form mt-5">
                            <h3 class="h2 fw-bolder mb-4">Reply to the Message</h3>
                            <form id="comment-form" method="POST" action="{{ route('comments.store') }}">
                                @csrf
                                <input type="hidden" name="forum_post_id" value="{{ $post->id }}">
                                <div class="form-group mb-4">
                                    <textarea class="form-control" name="comment" id="summernote" required></textarea>
                                </div>
                                <div>
                                    <button type="submit" class="button button-large bg-alt py-2 rounded-1 fw-medium">Submit Now</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('components.footer')

    <!-- JavaScript -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        $(document).ready(function() {
            $('#summernote').summernote({
                height: 150, 
                toolbar: [
                    ['style', ['bold', 'italic', 'underline']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['insert', ['link']],
                    ['view', ['fullscreen', 'codeview', 'help']]
                ]
            });

            $('#comment-form').on('submit', function(e) {
                e.preventDefault(); 
                let formData = $(this).serialize(); 
                $.ajax({
                    url: "{{ route('comments.store') }}",
                    type: 'POST',
                    data: formData,
                    success: function(response) {
                        if (response.redirect) {
                            window.location.href = response.redirect;
                        } else if (response.user_name && response.created_at && response.comment) {
                            let newComment = `
                                <div class="row g-0 justify-content-between align-items-center border-top border-bottom border-color py-3 mb-4">
                                    <div class="col-9">
                                        <div class="d-flex align-items-center">
                                            <img src="https://cdn-icons-png.flaticon.com/128/1144/1144760.png" alt="Author" class="rounded-circle me-2" width="50" height="50">
                                            <div>
                                                <h5 class="mb-0 h6 fw-semibold align-middle">
                                                    <a class="text-dark" href="#">${response.user_name}</a>
                                                </h5>
                                                <small class="text-muted mb-0 fw-normal">${response.created_at}</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="comment-text">
                                    ${response.comment}
                                </div>
                            `;
                            $('#comment-list').prepend(newComment);
                            $('#summernote').summernote('code', '');
                        } else {
                            Swal.fire({
                                icon: 'error',
                                title: 'Oops...',
                                text: 'Unexpected response format!',
                            });
                        }
                    },
                    error: function(xhr) {
                // Check if the response status code is 401 (Unauthorized)
                if (xhr.status === 401) {
                    // Redirect to the login page
                    window.location.href = "/login";
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Something went wrong!',
                    });
                }
            }
        });
    });
});
    </script>
</body>
</html>
