<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\planet;

class PlanetController extends Controller
{
    public function index() {
        $planets = planet::all();
        return view("pages.index", ["planets" => $planets]);
    }

    public function findId(Request $request) {
        $planet = planet::where("id", $request->id)->get();

        return view("pages.planet", ["planet" => $planet]);
    }

    public function create(Request $request) {
        $request->validate([
            "planet_name" => "required|string|max:255",
            "orbiting_star" => "required|string|max:255",
            "galaxy_name" => "required|string|max:255",
            "orbiting_time_days" => "required",
            "habitability" => "required|boolean",
            "planet_class" => "required|string|max:100",
            "planet_description" => "required|string"
        ], [
            "planet_name.required" => "Planet name is required",
            "planet_name.max" => "Planet name should not exceed 255 characters",

            "orbiting_star.required" => "Orbiting star is required",
            "orbiting_star.max" => "Orbiting star should not exceed 255 characters",

            "galaxy_name.required" => "Galaxy name is required",
            "galaxy_name.max" => "Galaxy name should not exceed 255 characters",

            "orbiting_time_days.required" => "Orbiting time (years) is required",

            "habitability.required" => "Habitability is required",

            "planet_class.required" => "Planet class is required",
            "planet_class.max" => "Planet class should not exceed 100 characters",

            "planet_description.required" => "Planet description is required"
        ]);

        planet::create($request -> post());

        return redirect('/');
    }

    public function updateId(Request $request) {
        $planet = planet::findOrFail($request->id);
    
        return view("cms.update", ["planet" => $planet]);
    }

    public function updateInfo(Request $request) {
        $id = $request->id;

        $request -> validate([
            "planet_name" => "required|string|max:255",
            "orbiting_star" => "required|string|max:255",
            "galaxy_name" => "required|string|max:255",
            "orbiting_time_days" => "required",
            "habitability" => "required|boolean",
            "planet_class" => "required|string|max:100",
            "planet_description" => "required|string"
        ]);

        $planet = planet::find($id);

        $planet -> planet_name = $request->input("planet_name");
        $planet -> orbiting_star = $request->input("orbiting_star");
        $planet -> galaxy_name = $request->input("galaxy_name");
        $planet -> orbiting_time_days = $request->input("orbiting_time_days");
        $planet -> habitability = $request->input("habitability");
        $planet -> planet_class = $request->input("planet_class");
        $planet -> planet_description = $request->input("planet_description");

        $planet -> save();

        return redirect('/');
    }
}
