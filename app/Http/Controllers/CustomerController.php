<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;


class CustomerController extends Controller
{
    //
    public function getCustomer(Request $r)
    {
        $nomor = $r->nomor;
        $kode = $r->kode;
        $userid = $r->userid;

        $cust = Customer::all();

        if ($nomor != null) {
            $cust = $cust->where("nomor", '=', $nomor);
        }
        if ($kode != null) {
            $cust = $cust->where("kode", '=', $kode);
        }
        if ($userid != null) {
            $cust = $cust->where("userid", '=', $userid);
        }

        return makeJson(200, "Sukses mendapatkan customer", $cust->values());
    }
}
