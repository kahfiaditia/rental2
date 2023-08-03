<?php

namespace App\Http\Controllers;

use App\Helper\AlertHelper;
use App\Models\DaftarMobilModel;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DaftarMobilController extends Controller
{
    protected $title = 'Mobil';
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mobilrental = DaftarMobilModel::all();
        $data = [
            'title' => $this->title,
            'menu' => 'list ' . $this->title,
            'mobil' => $mobilrental
        ];

        return view('backoffice.cars.data')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [
            'title' => $this->title,
            'menu' => 'tambah ' . $this->title,
        ];
        return view('backoffice.cars.tambah')->with($data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // dd($request);
        $validated = $request->validate([
            'nama' => 'required',
        ]);
        DB::beginTransaction();
        try {
            $store = new DaftarMobilModel();
            $store->nama = $request->nama;
            $store->merk = $request->merk;
            $store->model = $request->model;
            $store->layanan = $request->layanan;
            $store->deskripsi = $request->deskripsi;
            // upload file
            if ($request->file()) {
                $file = $request->file('foto');
                $fileName = Carbon::now()->format('ymdhis') . '_' . Auth::user()->id . '_' . str::random(25) . '.' . $file->extension();
                $store->image = $fileName;
                $file->move(public_path('files/armada'), $fileName);
            }
            $store->user_created = Auth::user()->id;
            $store->aktif = '1';
            $store->save();

            DB::commit();
            AlertHelper::addAlert(true);
            return redirect('backoffice/daftar_mobil');
        } catch (\Throwable $err) {
            DB::rollBack();
            throw $err;
            AlertHelper::addAlert(false);
            return back();
        }
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
            'data' => DaftarMobilModel::findorfail(Crypt::decryptString($id)),
        ];
        return view('backoffice.cars.edit')->with($data);
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
            'nama' => 'required',
            'status' => 'required',
        ]);
        DB::beginTransaction();
        try {
            $update = DaftarMobilModel::findorfail($id);
            $update->nama = $request->nama;
            $update->merk = $request->merk;
            $update->model = $request->model;
            $update->layanan = $request->layanan;
            $update->deskripsi = $request->deskripsi;
            $update->aktif = $request->status;

            // upload file
            if ($request->file()) {
                $file = $request->file('foto');
                $fileName = Carbon::now()->format('ymdhis') . '_' . Auth::user()->id . '_' . str::random(25) . '.' . $file->extension();
                $update->image = $fileName;
                $file->move(public_path('files/armada'), $fileName);
            }
            $update->aktif = isset($request->status) ? 1 : 0;
            $update->save();

            DB::commit();
            AlertHelper::addAlert(true);

            return redirect('backoffice/daftar_mobil');
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
