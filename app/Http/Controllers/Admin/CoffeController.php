<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Imports\FileImport;
use App\Models\Coffee;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Maatwebsite\Excel\Facades\Excel;
// use PhpOff

class CoffeController extends Controller
{
    public function index()
    {
        $coffees = Coffee::all();

        return view('pages.admin.coffee.index', compact('coffees'));
    }

    public function create()
    {
        return view('pages.admin.coffee.create');
    }

    public function store(Request $request)
    {
        $validation = $request->validate([
            'name' => ['required'],
            'bekasi_section' => ['required', Rule::in(['Bekasi Timur', 'Bekasi Barat', 'Bekasi Selatan', 'Bekasi Utara'])],
            'concept' => ['required', Rule::in(['Full Outdoor', 'Full Indoor', 'Indoor Outdoor'])],
            'price' => ['required', 'min:0', 'integer'],
            'start' => ['required', 'dateformat:H:i'],
            'end' => ['required', 'dateformat:H:i', 'after:start'],
            'place' => ['required'],
            'image' => ['required'],
            'instagram' => ['required'],
        ]);

        Coffee::create(['id' => Coffee::latest()->max('id') + 1] + $validation);

        return redirect()->route('admin.coffees.index');
    }

    public function edit(Coffee $coffee)
    {
        return view('pages.admin.coffee.edit', compact('coffee'));
    }

    public function update(Request $request, Coffee $coffee)
    {
        $validation = $request->validate([
            'name' => ['required'],
            'bekasi_section' => ['required', Rule::in(['Bekasi Timur', 'Bekasi Barat', 'Bekasi Selatan', 'Bekasi Utara'])],
            'concept' => ['required', Rule::in(['Full Outdoor', 'Full Indoor', 'Indoor Outdoor'])],
            'price' => ['required', 'min:0', 'integer'],
            'start' => ['required', 'dateformat:H:i'],
            'end' => ['required', 'dateformat:H:i', 'after:start'],
            'place' => ['required'],
            'image' => ['required'],
            'instagram' => ['required'],
        ]);

        $coffee->update($validation);

        return redirect()->route('admin.coffees.index');
    }

    public function destroy(Coffee $coffee)
    {
        $coffee->delete();

        return redirect()->route('admin.coffees.index');
    }
}
