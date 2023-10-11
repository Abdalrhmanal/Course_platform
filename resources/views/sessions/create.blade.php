@extends('../layoutCTSU/layout')
<br>
    <br>
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
                <div class="card-header">{{ __('Add New Session for Course') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('sessions.store', ['course' => $course->id]) }}">
                        @csrf

                        <div class="form-group">
                            <label for="title">{{ __('Title') }}</label>
                            <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}" required autofocus>
                            @error('title')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="video_link">{{ __('Video Link') }}</label>
                            <input id="video_link" type="text" class="form-control @error('video_link') is-invalid @enderror" name="video_link" value="{{ old('video_link') }}" required>
                            @error('video_link')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="description">{{ __('Description') }}</label>
                            <textarea id="description" class="form-control @error('description') is-invalid @enderror" name="description" required>{{ old('description') }}</textarea>
                            @error('description')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Add Session') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
