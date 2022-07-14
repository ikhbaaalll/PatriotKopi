<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Coffee;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CoffeeController extends Controller
{
    public function index()
    {
        $section = ['Bekasi Utara', 'Bekasi Timur', 'Bekasi Barat', 'Bekasi Selatan'];

        $coffees = Coffee::query()
            ->when(
                request()->query('bekasi') && in_array(request()->query('bekasi'), $section),
                fn ($query) => $query->where('bekasi_section', request()->query('bekasi'))
            )
            ->paginate(10);

        return view('pages.user.coffee.index', compact('coffees'));
    }

    public function create()
    {
        $bekasiSections = Coffee::query()
            ->distinct()
            ->get(['bekasi_section']);

        return view('pages.user.coffee.recommend', compact('bekasiSections'));
    }

    public function store(Request $request)
    {
        $section = ['Bekasi Utara', 'Bekasi Timur', 'Bekasi Barat', 'Bekasi Selatan'];

        $coffees = Coffee::query()
            ->when(
                in_array($request->bekasi_section, $section),
                fn ($query) => $query->where('bekasi_section', $request->bekasi_section)
            )
            ->when(
                $request->price == '1',
                fn ($query) => $query->where('price', '<', 15000),
                fn ($query) => $query->where('price', '>=', $request->price)
            );

        if ($request->start == '1') {
            $coffees = $coffees->whereTime('start', '>', Carbon::create(2022, 1, 1, 6)->toTimeString())
                ->whereTime('start', '<=', Carbon::create(2022, 1, 1, 10)->toTimeString());
        } else if ($request->start == '2') {
            $coffees =  $coffees->whereTime('start', '>', Carbon::create(2022, 1, 1, 10)->toTimeString())
                ->whereTime('start', '<=', Carbon::create(2022, 1, 1, 14)->toTimeString());
        } else if ($request->start == '3') {
            $coffees = $coffees->whereTime('start', '>', Carbon::create(2022, 1, 1, 14)->toTimeString())
                ->whereTime('start', '<=', Carbon::create(2022, 1, 1, 18)->toTimeString());
        } else if ($request->start == '4') {
            $coffees = $coffees->whereTime('start', '>', Carbon::create(2022, 1, 1, 18)->toTimeString());
        }

        $coffees = $coffees
            ->where('concept', $request->concept)
            ->when(
                $request->end == 1,
                fn ($query) => $query->whereTime('end', '<', Carbon::create(2022, 1, 1, 17)->toTimeString()),
                fn ($query) => $query->whereTime('end', '>=', Carbon::create(2022, 1, 1, 17)->toTimeString())
            )
            ->paginate(10);

        return view('pages.user.coffee.recommended', compact('coffees'));
    }
}
