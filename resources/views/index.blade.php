@extends('layouts.app')

@section('content')
<section id="section_1">
    <div class="title_container mb-4">
        <h3 class="section_title mb-3">Recently Updated</h3>
        <p class="text-center">Curious what's new at Laracast? The following series have been recently updated.</p>
    </div>

    @foreach ($recents as $id => $recent)
        @if ($id == 2)
            @break
        @endif

        <div class="in_evidence">
            <div class="left_container">
                <span class="topic {{$recent['topic']}}">
                    {{ strtoupper($recent["topic"]) }}
                </span>
                <h4>
                    {{ $recent["title"] }}
                </h4>
                <p class="text-muted mb-5">
                    {{ substr($recent["text"], 0, 259) }}...
                </p>
                <div class="course_info d-flex">
                    <div class="d-flex align-items-center">
                        <div class="d-flex flex-column ">
                           <span class="grey_line"></span>
                           <span class="grey_line"></span>
                           <span class="grey_line"></span>
                        </div>
                        <p class="mx-2 my-0 info_text"> {{$recent["difficulty"]}} </p>
                    </div>
                    <div class="d-flex align-items-center">
                        <i class="fas fa-book"></i>
                        <p class="mx-2 my-0 info_text"> {{$recent["lessons_number"]}} </p>
                    </div>
                    <div class="d-flex align-items-center">
                        <i class="fas fa-clock"></i>
                        <p class="mx-2 my-0 info_text"> {{$recent["time"]}} </p>
                    </div>
                </div>

            </div>
        </div>
    @endforeach
</section>
@endsection