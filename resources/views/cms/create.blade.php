@extends("../layouts.layout")

@section("doc_title", "Planet - CMS")

@section("doc_content")
    <div class="cms-container">
        <h1>Add a New Planet</h1>
        <form action="/create" method="POST">
            @csrf
            <div class="form-container">
                <div class="col">
                    <div class="form-group">
                        <div class="input">
                            <input type="text" name="planet_name" placeholder="Planet Name">
                        </div>
                        @error('planet_name')
                            <span class="invalid-feedback" role="alert">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <div class="input">
                            <input type="text" name="orbiting_star" placeholder="Orbiting Star">
                        </div>
                        @error('orbiting_star')
                            <span class="invalid-feedback" role="alert">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <div class="input">
                            <input type="text" name="galaxy_name" placeholder="Galaxy Name">
                        </div>
                        @error('galaxy_name')
                            <span class="invalid-feedback" role="alert">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <div class="input">
                            <input type="text" name="orbiting_time_days" placeholder="Orbiting Time(years)">
                        </div>
                        @error('orbiting_time_days')
                            <span class="invalid-feedback" role="alert">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <div class="input">
                            <input type="text" name="habitability" placeholder="Habitability">
                        </div>
                        @error('habitability')
                            <span class="invalid-feedback" role="alert">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <div class="input">
                            <input type="text" name="planet_class" placeholder="Planet class">
                        </div>
                        @error('planet_class')
                            <span class="invalid-feedback" role="alert">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <div class="input">
                            <textarea name="planet_description" cols="28" rows="4" placeholder="Planet description"></textarea>
                        </div>
                        @error('planet_description')
                            <span class="invalid-feedback" role="alert">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="add-btn">
                <button type="submit" class="btn btn-primary">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    Add Planet
                </button>
            </div> 
        </form>
    </div>
@endsection