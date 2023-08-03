<?php

namespace App\Http\Controllers;

use App\Helper\AlertHelper;
use App\Models\DaftarMobilModel;
use App\Models\FullDayAllModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;

class FullDayAllController extends Controller
{
    protected $title = 'Full Day All-in';
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fullday = FullDayAllModel::all();
        $data = [
            'title' => $this->title,
            'menu' => 'list ' . $this->title,
            'mobil' => $fullday
        ];

        return view('backoffice.fulldayall.data')->with($data);
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
        $data = [
            'title' => $this->title,
            'menu' => 'rubah ' . $this->title,
            'data' => FullDayAllModel::findorfail(Crypt::decryptString($id)),
            'daftar' => DaftarMobilModel::all()
        ];
        return view('backoffice.fulldayall.edit')->with($data);
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
        $id = Crypt::decryptString($id);
        $validated = $request->validate([
            'id_mobil' => 'required',
            'harga_12' => 'required',
            'status' => 'required',
        ]);
        DB::beginTransaction();
        try {
            $update = FullDayAllModel::findorfail($id);
            $update->id_mobil = $request->id_mobil;
            $update->harga_full = $request->harga_12;
            $update->deskripsi = $request->deskripsi;
            $update->aktif = isset($request->status) ? 1 : 0;
            $update->save();

            DB::commit();
            AlertHelper::addAlert(true);

            return redirect('backoffice/full_day_all');
        } catch (\Throwable $err) {
            DB::rollBack();
            throw $err;
            AlertHelper::addAlert(false);
            return back();
        }
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
