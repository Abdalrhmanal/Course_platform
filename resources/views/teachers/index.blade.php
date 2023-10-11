@extends('../layoutCTSU/layout')
<br>
<br>
<br>
<!-- ======= Team Section ======= -->
<section id="team">
    @if(auth()->check() && auth()->user()->name === 'Admin')
        <div class="read-more">
            <a href="/teachers1/create" class="btn btn-outline-success btn-lg">Create Teachar</a>
        </div>
    @endif

    <div class="container" data-aos="fade-up">
        <div class="section-header">
            <h3>Teachers</h3>
            <p>A group of our distinguished teachers who contribute with us to our distinguished plan.</p>
        </div>
        <div class="row">
            @foreach($teachers as $teacher)
            <div class="col-lg-3 col-md-6">
                <div class="member" data-aos="fade-up" data-aos-delay="100">
                    <img src="{{ $teacher->img }}" class="img-fluid" alt="{{ $teacher->name }}">
                    <div class="member-info">
                        <div class="member-info-content">
                            <h4>{{ $teacher->name }}</h4>
                            <span>Email: {{ $teacher->email }}</span>
                            <div class="social">
                                <a href="#"><i class="bi bi-twitter"></i></a>
                                <a href="#"><i class="bi bi-facebook"></i></a>
                                <a href="#"><i class="bi bi-instagram"></i></a>
                                <a href="#"><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                @if(auth()->check() && auth()->user()->name === 'Admin')

                <div class="row">
                    <div class="col-3">
                        <a href="/teachers/{{ $teacher->id }}/edit">
                            <i class="bi bi-pen-fill"></i>Edit
                        </a>
                    </div>
                    <div class="col-3">
                        <form method="POST" action="{{ route('teachers.destroy', ['id' => $teacher->id]) }}" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this teacher?');">
                                <i class="bi bi-trash"></i>Delete
                            </button>
                        </form>
                    </div>
                </div>
                @endif

            </div>
            @endforeach
        </div>
    </div>
</section><!-- End Team Section -->