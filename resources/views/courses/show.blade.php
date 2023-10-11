@extends('../layoutCTSU/layout')

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">
            <ol>
                <li><a href="/courses1">Home</a></li>
            </ol>
            <h2>Course</h2>
        </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Course Section ======= -->
    <section id="course" class="course">
        <div class="container" data-aos="fade-up">
            <div class="row">
                <div class="col-lg-7 entries" style="box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);">
                    <article class="entry">
                        <div class="entry-img" style="width: 90%;">
                            <img src="{{ $course->image }}" class="img-fluid" alt="{{ $course->title }}">
                        </div>

                        <h2 class="entry-title">
                            <a href="/courses/{{ $course->id }}/sessions">{{ $course->title }}</a>
                        </h2>

                        <div class="entry-meta">
                            <ul>
                                <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="#">John Doe</a></li>
                                <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="#"><time datetime="2020-01-01">Jan 1, 2020</time></a></li>
                                <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="#">12 Comments</a></li>
                            </ul>
                        </div>

                        <div class="entry-content">
                            <h4>Teacher: {{ $course->teacher->name }}</h4>
                            <p>{{ $course->description }}</p>
                            <p>Price: ${{ $course->price }}</p>
                            <div class="row">
                                <div class="col-6">
                                    <div class="read-more">
                                        <form method="POST" action="{{ route('courses.register', ['course' => $course->id]) }}">
                                            @csrf
                                            <button type="submit" class="btn btn-outline-success btn-lg">Register for the course</button>
                                        </form>
                                    </div>

                                </div>
                                <div class="col-6">
                                    <div class="read-more">
                                        <a href="/courses1" class="btn btn-outline-success btn-lg">Back</a>
                                    </div>
                                </div>
                            </div>


                        </div>

                    </article><!-- End blog entry -->

                </div><!-- End course entries list -->
                <div class="col-lg-1 entries">
                </div>
                <div class="col-lg-4 entries">
                    <!-- ======= Team Section ======= -->
                    <section id="team">
                        <div class="container" data-aos="fade-up">
                            <div class="section-header">
                                <h3>Teachers</h3>
                                <p>A One of our distinguished teachers who contribute with us to our distinguished plan.</p>
                            </div>
                            <div class="row">
                                @foreach($teachers as $teacher)
                                @if($teacher->id === $course->teacher->id && $teacher->name === $course->teacher->name)
                                <div class="col-lg-4 col-md-8">
                                    <div class="member" data-aos="fade-up" data-aos-delay="100">
                                        <img src="{{ $teacher->img }}" class="img-fluid" alt="{{ $teacher->name }}">

                                    </div>
                                </div>
                                <div class="member-info">
                                    <div class="member-info-content">
                                        <h3>{{ $teacher->name }}</h3>
                                        <h4>{{ $teacher->description }}</h4>
                                        <span>Email: {{ $teacher->email }}</span>
                                        <div class="social">
                                            <a href="#"><i class="bi bi-twitter"></i></a>
                                            <a href="#"><i class="bi bi-facebook"></i></a>
                                            <a href="#"><i class="bi bi-instagram"></i></a>
                                            <a href="#"><i class="bi bi-linkedin"></i></a>
                                        </div>
                                    </div>
                                </div>
                                @endif
                                @endforeach
                            </div>
                        </div>
                    </section><!-- End Team Section -->
                </div>
            </div>
        </div>
    </section><!-- End Course Section -->

</main><!-- End #main -->