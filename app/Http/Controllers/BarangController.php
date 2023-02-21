<?php

namespace App\Http\Controllers;

use App\Models\Barang\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    //
    public function getBarang(Request $r)
    {
        $nomor = $r->nomor;
        $kode = $r->kode;
        $nama = $r->nama;

        $b = Barang::all();

        if ($nama != null) {
            $b = Barang::where("nama", "like", "%" . $nama . "%")->get();
        } else {
            if ($nomor != null) {
                $b = $b->where("nomor", "=", $nomor);
            }
            if ($kode != null) {
                $b = $b->where("kode", "=", $kode);
            }
        }
        return makeJson(200, "Sukses dapatkan barang", $b->values());
    }
}
