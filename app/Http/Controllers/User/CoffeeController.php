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
            ->where('price', '>=', $request->price)
            ->where('concept', $request->concept)
            ->whereTime('start', '>=', $request->start)
            ->when(
                $request->end == 1,
                fn ($query) => $query->whereTime('end', '<', Carbon::create(2022, 1, 1, 17)->toTimeString()),
                fn ($query) => $query->whereTime('end', '>=', Carbon::create(2022, 1, 1, 17)->toTimeString())
            )
            ->paginate(10);

        return view('pages.user.coffee.recommended', compact('coffees'));
    }
}
