@extends('layouts.home')

@section('main')

    @if (!is_null($purchased_courses))
        <h3>Мои курсы</h3>

        <div class="row">
        @foreach($purchased_courses as $course)
            <div class="col-sm-4 col-lg-4 col-md-4">

                <div class="thumbnail thumbnail-active">
                    <img src="http://placehold.it/320x180" alt="">
                    <div class="caption">
                        <h4><a href="{{ route('courses.show', [$course->slug]) }}">{{ $course->title }}</a>
                        </h4>
                        <p>{{ $course->description }}</p>
                    </div>
                    <div class="ratings">
                        <p>Прогресс: {{ Auth::user()->lessons()->where('course_id', $course->id)->count() }}
                            из {{ $course->lessons->count() }} уроков</p>
                    </div>
                </div>
            </div>
        @endforeach
        </div>
        <hr />

    @endif

    <h3>Все курсы</h3>
    <div class="row">
    @foreach($courses as $course)
        <div class="col-sm-4 col-lg-4 col-md-4">
            <div class="thumbnail">
                @if ($course->course_image)
                    <img src="{{ asset('uploads/'.$course->course_image) }}">
                @else
                    <img src="http://placehold.it/320x180" alt="">
                @endif
                <div class="caption">
                    @if ($course->price)
                        <h4 class="pull-right">{{ $course->price }} &#8381;</h4>
                    @endif
                    <h4><a href="{{ route('courses.show', [$course->slug]) }}">{{ $course->title }}</a>
                    </h4>
                    <p>{{ $course->description }}</p>
                </div>
                <div class="ratings">
                    <p class="pull-right">Кол-во студентов: {{ $course->students()->count() }}</p>
                    <p>
                        @for ($star = 1; $star <= 5; $star++)
                            @if ($course->rating >= $star)
                                <span class="glyphicon glyphicon-star"></span>
                            @else
                                <span class="glyphicon glyphicon-star-empty"></span>
                            @endif
                        @endfor
                    </p>
                </div>
            </div>
        </div>
    @endforeach
    </div>

@endsection