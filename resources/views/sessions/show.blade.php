@extends('../layoutCTSU/layout')
<br>
<br>
<br>
<br>
<br>
<br>
<main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">
            <ol>
                <li><a href="/courses/{{ $course->id }}">Course Details</a></li>
                <li><a href="/courses/{{ $course->id }}/sessions">Back to Sessions</a></li>
            </ol>
            <h2>Session Details</h2>
        </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Session Details Section ======= -->
    <section id="session-details" class="session-details">
        <div class="container" data-aos="fade-up">

            <div class="row">

                <div class="col-lg-8">
                    <div class="session-content">
                        <div class="ratio ratio-16x9">
                            <iframe width="100%" src="{{ $session->video_link }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                        </div>

                        <h2 class="session-title">{{ $session->title }}</h2>
                        <p class="session-description">{{ $session->description }}</p>

                        <div class="session-meta">
                            <p><strong>Course:</strong> <a href="/courses/{{ $session->course_id }}">{{ $session->course->course_name }}</a></p>
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
                            @endif
                        </div>
                    </div>
                </div><!-- End Session Content -->

                <div class="col-lg-4">

                    <div class="sidebar">

                        <!-- قائمة البحث -->
                        <div class="sidebar-title">Search</div>
                        <div class="sidebar-item search-form">
                            <form action="{{ route('search') }}" method="GET">
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
    </section><!-- End Session Details Section -->

</main>