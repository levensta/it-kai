@extends('layouts.home')

@section('main')
    <div class="col-md-9">
        <h2>{{ $course->title }}</h2>

        @if ($purchased_course)
            Рейтинг: {{ $course->rating }} / 5
            <br />
            <b>Оцените курс:</b>
            <br />
            <form action="{{ route('courses.rating', [$course->id]) }}" method="post">
                {{ csrf_field() }}
                <select name="rating">
                    <option value="1">1 - Ужасно</option>
                    <option value="2">2 - Не очень</option>
                    <option value="3">3 - Сойдет</option>
                    <option value="4" selected>4 - Хорошо</option>
                    <option value="5">5 - Отлично!</option>
                </select>
                <input type="submit" value="Оценить" />
            </form>
            <hr />
        @endif

        <p>{{ $course->description }}</p>

       <!-- -->
        <p>
            @if (\Auth::check())
                @if ($course->students()->where('user_id', \Auth::id())->count() == 0)
                    <form action="{{ route('courses.join') }}" method="POST">
                        <button class="btn btn-primary">Начать курс</button>
                        {{ csrf_field() }}
                        <input name="course_id" value="{{$course->id}}" hidden>
                    </form>
                @endif
            @else
                <a href="{{ route('auth.login') }}?redirect_url={{ route('courses.show', [$course->slug]) }}"
                   class="btn btn-primary">Начать курс</a>
            @endif
        </p>
       <!-- -->

        @foreach ($course->publishedLessons as $lesson)
            <!-- @if ($lesson->free_lesson)(FREE!)@endif --> {{ $loop->iteration }}.
            <a href="{{ route('lessons.show', [$lesson->course_id, $lesson->slug]) }}">{{ $lesson->title }}</a>
            <p>{{ $lesson->short_text }}</p>
            <hr />
        @endforeach
    </div>
@endsection