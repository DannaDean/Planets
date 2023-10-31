@extends("../layouts.layout")

@section("doc_title", "Planet - CMS")

@section("doc_content")
    <div class="cms-container">
        <h1>Update Planet's Details</h1>
        <form action={{"/update/" . $planet -> id}} method="POST">
            @csrf
            @method("PUT")
            <div class="form-container">
                <div class="col">
                    <div class="form-group">
                        <div class="input">
                            <input type="text" name="planet_name" value={{$planet -> planet_name}}>
                        </div>
                        @error('planet_name')
                            <span class="invalid-feedback" role="alert">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <div class="input">
                            <input type="text" name="orbiting_star" 
                            value={{$planet -> orbiting_star}}>
                        </div>
                        @error('orbiting_star')
                            <span class="invalid-feedback" role="alert">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <div class="input">
                            <input type="text" name="galaxy_name" value={{$planet -> galaxy_name}}>
                        </div>
                        @error('galaxy_name')
                            <span class="invalid-feedback" role="alert">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <div class="input">
                            <input type="text" name="orbiting_time_days" value={{$planet -> orbiting_time_days}}>
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
                            <input type="text" name="habitability" value={{$planet -> habitability}}>
                        </div>
                        @error('habitability')
                            <span class="invalid-feedback" role="alert">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <div class="input">
                            <input type="text" name="planet_class" value={{$planet -> planet_class}}>
                        </div>
                        @error('planet_class')
                            <span class="invalid-feedback" role="alert">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <div class="input">
                            <textarea name="planet_description" cols="28" rows="4">{{$planet -> planet_description}}</textarea>
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
                    Update Planet
                </button>
            </div> 
        </form>
    </div>
@endsection