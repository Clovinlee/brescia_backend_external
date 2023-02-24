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
        $aktif = $r->aktif ?? 1;


        $b = Barang::with(["bentuk", "grade", "jenis", "kategori", "motif", "satuan", "surface", "tebal", "tipe", "ukuran"]);

        $b = $b->where("aktif", "=", $aktif);
        $b = $b->where("nama", "like", "%" . $nama . "%");

        if ($nomor != null) {
            $b = $b->where("nomor", "=", $nomor);
        }
        if ($kode != null) {
            $b = $b->where("kode", "=", $kode);
        }
        return makeJson(200, "Sukses dapatkan barang", $b->get());
    }
}
