@extends("../layouts.layout")

@section("doc_title", "Planet")

@section("doc_content")
    <div class="separat-planet-container">
        <h1>{{$planet[0] -> planet_name}}</h1>
        <div class="round-planet">
            @if ($planet[0]->planet_class === 'saturn')
                <div class="rings">
                    <div class="{{$planet[0]->planet_class}}"></div>
                </div>
            @elseif($planet[0]->planet_class === 'uranus')
                <div class="rings">
                    <div class="{{$planet[0]->planet_class}}"></div>
                </div>
            @else
                <div class="{{$planet[0]->planet_class}}"></div>
            @endif
        </div>
        <div class="planet-description">
            <p>
                <span>Orbiting star: </span>
                {{$planet[0] -> orbiting_star}}
            </p>
            <p>
                <span>Galaxy name:</span> 
                {{$planet[0] -> galaxy_name}}
            </p>
            <p>
                <span>Orbiting time:</span>
                {{$planet[0] -> orbiting_time_days}} {{$planet[0] -> orbiting_time_days == 1 ? 'year' :'years'}}
            </p>
            <p>
                <span>Habitability:</span> 
                {{$planet[0] -> habitability ? 'Habitable' : 'Not habitable'}}
            </p>
            <p>
                <span>Description:</span>
                {{$planet[0] -> planet_description}}
            </p>
            <a href={{"/update" . $planet[0] -> id}} class="update">Update</a>
        </div>
        <div class="back-btn">
            <a href="/">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                Go Back
            </a>
        </div>
    </div>
@endsection