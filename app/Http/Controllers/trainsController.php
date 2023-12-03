<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

// use App\Http\Requests\StorePlaylistsRequest;
// use App\Http\Requests\UpdatePlaylistsRequest;
use App\Models\train;
use App\Models\stasiun;

class trainsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function showlokasi()
    {
        $trains = train::all();
        $stasiuns = stasiun::all();

        return view('lokasi-train', [
            'title' => 'Trains',
            'train' => $trains,
            'stasiun' => $stasiuns,
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function showtrain()
    {
        $trains = train::all();
        $stasiuns = stasiun::all();

        return view('jadwal-train', [
            'title' => 'Trains',
            'train' => $trains,
            'stasiun' => $stasiuns,
        ]);
    }

    public function show($id)
    {
        $trains = train::where('id', $id);

        return view('lokasi-train', [
            'title' => 'Detail',
            'train' => $trains,
            
        ]);
    }

    public function showtarif()
    {
        $trains = train::all();
        $stasiuns = stasiun::all();

        return view('tarif-train', [
            'title' => 'Trains',
            'train' => $trains,
            'stasiun' => $stasiuns,
        ]);
    }

    public function handleFormSubmit(Request $request)
    {
        // nothing
    }

    // public function showtarif()
    // {
    //     $stasiun = Stasiun::all(); // Ganti Stasiun dengan model atau data Anda

    //     $nominal = number_format(mt_rand(3000, 6000) / 100, 2);

    //     return View::make('welcome', ['stasiun' => $stasiun, 'nominal' => $nominal]);
    // }
}
