@extends('../layoutCTSU/layout')
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
                <div class="card-header">{{ __('Edit Session') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('sessions.update', ['course' => $course->id, 'session' => $session->id]) }}">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label for="title">{{ __('Title') }}</label>
                            <input id="title" type="text" class="form-control" name="title" value="{{ $session->title }}" required autofocus>
                        </div>

                        <div class="form-group">
                            <label for="video_link">{{ __('Video Link') }}</label>
                            <input id="video_link" type="text" class="form-control" name="video_link" value="{{ $session->video_link }}" required>
                        </div>

                        <div class="form-group">
                            <label for="description">{{ __('Description') }}</label>
                            <textarea id="description" class="form-control" name="description" required>{{ $session->description }}</textarea>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Update Session') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>