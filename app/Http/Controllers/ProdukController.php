<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;
class ProdukController extends Controller
{
    //
    public function index(Request $request){
        // $produk=Produk::all();
        // return view ('index', compact(['produk']));
        $keyword = $request->keyword;
        $produk = Produk::where('ProdukID','LIKE','%'.$keyword.'%')->orwhere('NamaProduk','LIKE','%'.$keyword.'%')->paginate(5);
        return view('index',compact('produk'));
    }
    public function tambah(){
        return view ('tambahproduk');
    }
    public function simpan(Request $request){
        Produk::create($request->except((['_token','submit'])));
        return redirect('/produk');
    }
    public function delete(Request $request, $ProdukID){
        $ProdukID=Produk::where('ProdukID',$ProdukID)->
        delete($ProdukID);
        return redirect ('/produk');
    }
    public function edit(Request $request,$ProdukID){
        $ProdukID=Produk::where('ProdukID',$ProdukID)->first();
        return view('editproduk',compact('ProdukID'));
    }
    public function update(Request $request,$ProdukID){
        $ProdukID=Produk::where('ProdukID',$ProdukID);
        $ProdukID->update($request->except((['_token','submit','_method'])));
        return redirect('/produk');
    }
}
