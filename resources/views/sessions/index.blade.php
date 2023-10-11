@extends('../layoutCTSU/layout')
<br>
<br>
<br>
<br>
<br>
<br>
<main id="main">
    @if(auth()->check() && auth()->user()->name === 'Admin')
    <div class="read-more">
        <a href="/courses1/{{ $course->id }}/sessions/create" class="btn btn-outline-success btn-lg">Create Session</a>
    </div>
    @endif

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">
            <ol>
                <li><a href="/courses/{{ $course->id }}">Course Details</a></li>
            </ol>
            <h2>Videos</h2>
        </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Videos Section ======= -->
    <section id="videos" class="videos">
        <div class="container" data-aos="fade-up">

            <div class="row">

                <div class="col-lg-8 entries">
                    
                        @foreach($sessions as $session)
                        <div class="card shadow" style="padding: 3%;">
                        <article class="entry">  
                            <div class="ratio ratio-16x9">
                                <iframe width="100%" src="{{ $session->video_link }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                            </div>

                            <h2 class="entry-title">
                                <a href="#">{{ $session->title }}</a>
                            </h2>
                            <div class="entry-content">
                                <p>
                                    {{ $session->description }}
                                </p>
                                <p>Course: <a href="/courses/{{ $session->course_id }}">{{ $session->course->title }}</a></p>
                            </div>
                        </article><!-- End video entry -->
                        @if(auth()->check() && auth()->user()->name === 'Admin')
                        <div class="row">
                            <div class="col-3">
                                <a href="/courses/{{ $course->id }}/sessions/{{ $session->id }}/edit">
                                    <i class="bi bi-pen-fill"></i>Edit
                                </a>
                            </div>
                            <div class="col-3">
                                <form method="POST" action="{{ route('sessions.destroy', ['courseId' => $course->id, 'sessionId' => $session->id]) }}" style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this session?');">
                                        <i class="bi bi-trash"></i>Delete
                                    </button>
                                </form>
                            </div>
                        </div>
                        <br>
                        @endif
                        </div>
                        <br>
                        @endforeach
                    

                    <br><br><br>
                    <div class="blog-pagination">
                        <div class="row justify-content-center">
                            <div class="col-1" style="background-color: rgba(133, 223, 121, 0.637); border-top-left-radius: 40%;border-bottom-left-radius: 40%; text-align: center;">
                                <a href="#" style="display: block; padding: 10px;">1</a>
                            </div>
                            <div class="col-1" style="background-color: rgba(0, 131, 22, 0.74); border-radius: 10%; text-align: center;">
                                <a href="#" style="display: block; padding: 10px;">2</a>
                            </div>
                            <div class="col-1" style="background-color: rgba(0, 131, 22, 0.74); border-top-right-radius: 40%;border-bottom-right-radius: 40%; text-align: center;">
                                <a href="#" style="display: block; padding: 10px;">3</a>
                            </div>

                        </div>
                    </div>

                </div><!-- End videos entries list -->

                <div class="col-lg-4">

                    <div class="sidebar">

                        <!-- قائمة البحث -->
                        <div class="sidebar-title">Search</div>
                        <div class="sidebar-item search-form">
                            <form action="" method="GET">
                                <input type="text" class="form-control" name="search" placeholder="Search for a session">
                                <button type="submit"><i class="bi bi-search"></i></button>
                            </form>
                        </div>
                        <!-- End sidebar search formn-->

                        <!-- قائمة الفئات -->
                        <h3 class="sidebar-title">Categories</h3>
                        <div class="sidebar-item categories">
                            <ul>
                                <li><a href="#">Beginner category <span>(25)</span></a></li>
                                <li><a href="#">Middle category <span>(12)</span></a></li>
                                <li><a href="#">Advanced category <span>(5)</span></a></li>
                            </ul>
                        </div><!-- End sidebar categories-->


                        <!-- قائمة الوسوم -->
                        <h3 class="sidebar-title">Course topics</h3>
                        <div class="sidebar-item tags">
                            <ul>
                                <li><a href="#">Introduction to the course</a></li>
                                <li><a href="#">Este test</a></li>
                                <li><a href="#">Training basics</a></li>
                                <li><a href="#">Basics test</a></li>
                                <li><a href="#">Building thought on the course topic</a></li>
                                <li><a href="#">(small project)</a></li>
                                <li><a href="#">Advanced topics in the course</a></li>
                                <li><a href="#">Building an integrated project</a></li>
                                <li><a href="#">Final exam in the course</a></li>
                                <li><a href="#">An integrated final project for the course topics</a></li>
                                <li><a href="#">Submitting a certificate of completion of the course</a></li>
                            </ul>
                        </div><!-- End sidebar tags-->

                    </div><!-- End sidebar -->

                </div><!-- End videos sidebar -->

            </div>

        </div>
    </section><!-- End Videos Section -->

</main>