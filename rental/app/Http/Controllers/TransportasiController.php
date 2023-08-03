<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ArmadaModel;
use App\Models\DaftarMobilModel;
use App\Models\TentangModel;

class TransportasiController extends Controller
{
    protected $title = 'tranportasi';
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function transportasi()
    {

        $products = DaftarMobilModel::leftJoin('full_day_all_models', 'baru_daftar_mobil.id', '=', 'full_day_all_models.id_mobil')
            ->leftJoin('full_day_models', 'baru_daftar_mobil.id', '=', 'full_day_models.id_mobil')
            ->leftJoin('dakot12_jam_allins', 'baru_daftar_mobil.id', '=', 'dakot12_jam_allins.id_mobil')
            ->leftJoin('dakot_12', 'baru_daftar_mobil.id', '=', 'dakot_12.id_mobil')
            ->select(
                'baru_daftar_mobil.nama',
                'image',
                'full_day_all_models.jam AS jam1_full_day_all_models_harga',
                'full_day_all_models.harga_full AS full_day_all_models_harga',
                'full_day_models.jam AS jam2_full_day_models_harga',
                'full_day_models.harga_full AS full_day_models_harga',
                'dakot12_jam_allins.jam AS jam3_dakot12_jam_allins_harga',
                'dakot12_jam_allins.harga_12 AS dakot12_jam_allins_harga',
                'dakot_12.jam AS jam4_dakot_12_harga',
                'dakot_12.harga_12 AS dakot_12_harga'
            )
            ->get();

        // dd($products);

        $armada = ArmadaModel::all();
        $tentang = TentangModel::all();
        $data = [
            'title' => $this->title,
            'armada' => $armada,
            'tentang' => $tentang,
            'test' => $products
        ];
        return view('transportasi')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
