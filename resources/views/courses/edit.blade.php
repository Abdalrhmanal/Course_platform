@extends('../layoutCTSU/layout')
<br>
<br>
<br>
<br>
<br>
<br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Edit Course') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('courses.update', ['id' => $course->id]) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label for="title">{{ __('Title') }}</label>
                            <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ $course->title }}" required autofocus>
                            @error('title')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="image">{{ __('Image') }}</label>
                            <input id="image" type="text" class="form-control @error('image') is-invalid @enderror" name="image">
                            @error('image')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="teacher_id">{{ __('Teacher') }}</label>
                            <select id="teacher_id" class="form-control @error('teacher_id') is-invalid @enderror" name="teacher_id" required>
                                <option value="">Select Teacher</option>
                                @foreach ($teachers as $teacher)
                                <option value="{{ $teacher->id }}" {{ $course->teacher_id == $teacher->id ? 'selected' : '' }}>{{ $teacher->name }}</option>
                                @endforeach
                            </select>
                            @error('teacher_id')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="description">{{ __('Description') }}</label>
                            <textarea id="description" class="form-control @error('description') is-invalid @enderror" name="description" required>{{ $course->description }}</textarea>
                            @error('description')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="price">{{ __('Price') }}</label>
                            <input id="price" type="number" step="0.01" class="form-control @error('price') is-invalid @enderror" name="price" value="{{ $course->price }}" required>
                            @error('price')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Update Course') }}
                            </button>
                            <div class="col-6">
                                <div class="read-more">
                                    <a href="/courses1" class="btn btn-outline-success btn-lg"> Courses</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>