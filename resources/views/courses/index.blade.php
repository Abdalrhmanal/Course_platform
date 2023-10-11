@extends('../layoutCTSU/layout')
<!-- ======= Portfolio Section ======= -->
<br>
<br>
<br>
<br>
<div class="container">
    <div class="col-6">
        @if(auth()->check() && auth()->user()->name === 'Admin')
        <div class="read-more">
            <a href="/courses1/create" class="btn btn-outline-success btn-lg">Create Course</a>
        </div>
        @endif

    </div>
    <section id="portfolio" class="section-bg">
        <div class="container" data-aos="fade-up">
            <header class="section-header">
                <h3 class="section-title">Our Courses</h3>
            </header>
            <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
                @foreach($courses as $course)
                <div class="col-lg-4 col-md-10 portfolio-item filter-app">
                    <div class="portfolio-wrap">
                        <figure>
                            <img src="{{ $course->image }}" class="img-fluid" alt="{{ $course->title }}">
                            <a href="{{ $course->image }}" data-lightbox="portfolio" data-title="{{ $course->title }}" class="link-preview"><i class="bi bi-plus"></i></a>
                            <a href="/courses/{{ $course->id }}" class="link-details" title="More Details"><i class="bi bi-link"></i></a>
                        </figure>
                        <div class="portfolio-info ">
                            <h4><a href="/courses/{{ $course->id }}">{{ $course->title }}</a></h4>
                            <div class="row">
                                @if(auth()->check() && auth()->user()->name === 'Admin')
                                <div class="col-3">
                                    <a href="/courses1/{{ $course->id }}/edit">
                                        <i class="bi bi-pen-fill"></i>
                                    </a>
                                </div>
                                <div class="col-3">
                                    <form method="POST" action="{{ route('courses.destroy', ['id' => $course->id]) }}" style="display: inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this course?');">
                                            <i class="bi bi-trash"></i>
                                        </button>
                                    </form>
                                </div>
                                @endif

                                <div class="col-6">
                                    <p>Price: ${{ $course->price }}</p>
                                </div>
                            </div>
                            <p>Teacher: {{ $course->teacher->name }}</p>
                            <p>Description: {{ $course->description }}</p>
                        </div>
                    </div>
                </div>

                @endforeach
            </div>
        </div>
    </section>
</div>
<br>
<br>
<br>
<!-- End Portfolio Section -->