@extends('layouts.app')

@section('content')

<!-- section 1 recently updated in evidence -->

<section id="section_1">
    <div class="title_container mb-4">
        <h3 class="section_title mb-3">Recently Updated</h3>
        <p class="text-center">Curious what's new at Laracast? The following series have been recently updated.</p>
    </div>

    @foreach ($recents as $id => $recent)
        @if ($id == 2)
            @break
        @endif

        <div class="in_evidence container card_border">
            <div class="left_container">
                <span class="topic {{$recent['topic']}}">
                    {{ strtoupper($recent["topic"]) }}
                </span>
                <h4>
                    {{ $recent["title"] }}
                </h4>
                <p class="text-muted my-4">
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
                <button class="start_series my-4">
                    <a href="#"><i class="far fa-play-circle"></i>Start Series</a>
                </button>
            </div>
            <img src="{{$recent['img']}}" alt="">
        </div>
    @endforeach

</section>

<!-- //section 1 recently updated in evidence -->

<!-- section 2 recently updated not in evidence -->

<section id="section_2">
    <div class="blue_background container card_border">
        <h5 class="text-white text-center mb-4">
            More Recently Updated Series
        </h5>

        <div class="flex_container d-flex flex-wrap">
            @for ($i = 2; $i < count($recents); $i++)
                <div class="card py-2 px-3 bg_darker d-flex flex-column align-items-center">
                    <img src="{{$recents[$i]['img']}}" alt="">
                    <h6 class="text-white my-4">{{substr($recents[$i]['title'], 0, 22)}}...</h6>
                </div>
            @endfor

        </div>
        
    </div>
</section>

<!-- section 2 recently updated not in evidence -->
@endsection