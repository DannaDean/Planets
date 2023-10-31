@extends('../layouts.layout')

@section("doc_title", "Planet Home")

@section("doc_content")
    <div class="main-container">
        <h1>Planets Home</h1>
        <div class="sun-container">
            <div class="sun"></div>
        </div>
        <div class="planets-container">
            @foreach ($planets as $planet)
                <div class="planet">
                    <a href={{"/planet/" . $planet -> id}}>{{$planet -> planet_name}}</a>
                    <p><span>Orbiting star: </span>{{$planet -> orbiting_star}}</p>
                    <p><span>Galaxy name:</span> {{$planet -> galaxy_name}}</p>
                    <p> <span>Orbiting time:</span>
                        {{$planet -> orbiting_time_days}} {{$planet -> orbiting_time_days == 1 ? 'year' :'years'}}
                    </p>
                    <p>
                        <span>Habitability:</span> 
                        {{$planet -> habitability ? 'Habitable' : 'Not habitable'}}
                    </p>
                </div>
            @endforeach
        </div>
    </div>
@endsection