@extends('layouts.home')

@section('sidebar')
    <div class="col-md-3">
        <p class="lead">{{ $lesson->course->title }}</p>

        <div class="list-group">
            @foreach ($lesson->course->publishedLessons as $list_lesson)
                <a href="{{ route('lessons.show', [$list_lesson->course_id, $list_lesson->slug]) }}" class="list-group-item"
                    @if ($list_lesson->id == $lesson->id) style="font-weight: bold; color: white; border-color: #294d9a; background-color: #008ED9;" @endif>{{ $loop->iteration }}. {{ $list_lesson->title }}</a>
            @endforeach
        </div>
    </div>
@endsection

@section('main')
    <div class="col-md-9">
        <div class="row">
            <h2>{{ $lesson->title }}</h2>

            @if ($purchased_course || $lesson->free_lesson == 1)
                {!! $lesson->full_text !!}

                @if ($test_exists)
                    <hr />
                    <h3>Тест: {{ $lesson->test->title }}</h3>
                    @if (!is_null($test_result))
                        <div class="alert alert-info">Ваши баллы за тест: {{ $test_result->test_result }}</div>
                    @else
                    <form action="{{ route('lessons.test', [$lesson->slug]) }}" method="post">
                        {{ csrf_field() }}
                        @foreach ($lesson->test->questions as $question)
                            <b>{{ $loop->iteration }}. {{ $question->question }}</b>
                            <br />
                            @foreach ($question->options as $option)
                                <input type="radio" name="questions[{{ $question->id }}]" value="{{ $option->id }}" /> {{ $option->option_text }}<br />
                            @endforeach
                            <br />
                        @endforeach
                        <input type="submit" value=" Отправить результаты " />
                    </form>
                    @endif
                    <hr />
                @endif
            @else
                <p><a href="{{ route('courses.show', [$lesson->course->slug]) }}">Зарегистрируйтесь на курс</a>, чтобы открыть доступ к урокам.<br></p>
            @endif

            @if ($previous_lesson)
                <p><a href="{{ route('lessons.show', [$previous_lesson->course_id, $previous_lesson->slug]) }}"><< {{ $previous_lesson->title }}</a><br></p>
            @endif
            @if ($next_lesson)
                <p><a href="{{ route('lessons.show', [$next_lesson->course_id, $next_lesson->slug]) }}">{{ $next_lesson->title }} >></a></p>
            @endif
        </div>
    </div>
@endsection