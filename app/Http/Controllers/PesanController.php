<?php

namespace App\Http\Controllers;

use App\addproduct;
use App\detail;
use App\purchaselog;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Carbon;
use Illuminate\Http\Request;

class PesanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index($id)
    {
        $data = addproduct::where('id', $id)->first();
        return view('home.pesan.index', compact('data'));
    }

    public function pesan(Request $request, $id)
    {
        $data = addproduct::where('id', $id)->first();
        $date = Carbon::now();

        //cek validasi totals
        if ($request->total > $data->stock) {
            return redirect('pesan/' . $id);
        }

        //cek validasi
        $purchase_check = purchaselog::where('id_users', Auth::user()->id)->where('purchase_status', 0)->first();
        if (empty($purchase_check)) {
            //simpan ke database pesanan
            $purchase = new purchaselog();
            $purchase->id_users = Auth::user()->id;
            $purchase->purchase_status = 0;
            $purchase->purchase_date = $date;
            $purchase->purchase_total = 0;
            $purchase->save();
        }

        //simpan ke database pesanan
        $new_purchase = purchaselog::where('id_users', Auth::user()->id)->where('purchase_status', 0)->first();

        //cek pesanan detail
        $check_detail = detail::where('id_purchaselogs', $new_purchase->id)->where('id_addproducts', $data->id)->first();

        if (empty($check_detail)) {
            $detail = new detail();
            $detail->id_purchaselogs = $new_purchase->id;
            $detail->id_addproducts = $data->id;
            $detail->status = 0;
            $detail->total_product = $request->total;
            $detail->total_detail = ($data->product_price + $data->tube_price) * $request->total;
            $detail->save();
        } else {
            $detail = detail::where('id_purchaselogs', $new_purchase->id)->where('id_addproducts', $data->id)->first();
            $detail->total_product = $detail->total_product + $request->total;

            //harga sekarang
            $new_price = ($data->product_price + $data->tube_price) * $request->total;
            $detail->total_detail = $detail->total_detail + $new_price;
            $detail->update();
        }

        //jumlah total
        $purchase = purchaselog::where('id_users', Auth::user()->id)->where('purchase_status', 0)->first();
        $purchase->purchase_total = $purchase->purchase_total + ($data->product_price + $data->tube_price) * $request->total;
        $purchase->update();

        return redirect('home');
    }
}
