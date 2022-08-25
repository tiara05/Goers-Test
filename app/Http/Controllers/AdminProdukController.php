<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\produk;

class AdminProdukController extends Controller
{
    public function index()
    {
        $produk = produk::orderBy('harga', 'asc')->paginate(7);

        // $pro = $p->sortBy('rating');

        // $pro = produk::groupBy('harga')->having('harga', '>', 1);
        // dd($pro);

        // $produk = $pro->sortBy('likes');

        return view('Page.DataProduk.DataProduk',  compact('produk'));
        
    }
    
    public function create()
    {        
        return view('Page.DataProduk.Create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'namaproduk'               => 'required',
            'stokproduk'               => 'required',
            'hargaproduk'              => 'required',
            'detailproduk'             => 'required',
            'ratingproduk'             => 'required',
            'likesproduk'             => 'required',
        ]);

        $request->validate([
            'foto' => 'mimes:jpg,jpeg,png',
        ]);

        $produk = new produk;

            if ($files = $request->file('foto')) {
                $destinationPath = 'produk/';
                $file = $request->file('foto');
                // upload path  
    
                $profileImage = basename($request->file('foto')->getClientOriginalName(), '.' . $request->file('foto')->getClientOriginalExtension()) . "." .
                    $files->getClientOriginalExtension();
                $pathImg = $file->storeAs('', $profileImage);
                $files->move($destinationPath, $profileImage);
                $produk->foto_produk = $pathImg;
            }
            $produk->nama_produk         = $request->namaproduk;
            $produk->stok_produk         = $request->stokproduk;
            $produk->harga               = $request->hargaproduk;
            $produk->detail_produk       = $request->detailproduk;
            $produk->rating               = $request->ratingproduk;
            $produk->likes              = $request->likesproduk;
            $produk->save();
        
        return redirect(route('dataproduk.index'))->with(['success' => 'Tambah Produk Berhasil']);

    }

    public function show($id)
    {
        $produk = produk::findOrFail($id);

        return view('Page.DataProduk.Update', compact('produk') );
    }

    public function detail($id)
    {
        $produk = produk::findOrFail($id);

        return view('Page.DataProduk.Detail', compact('produk') );
    }

    public function update($id, Request $request)
    {
        $request->validate([
            'namaproduk'               => 'required',
            'stokproduk'               => 'required',
            'hargaproduk'              => 'required',
            'detailproduk'             => 'required',
            'ratingproduk'             => 'required',
            'likesproduk'             => 'required',
        ]);
        
        $produk = produk::find($id);

        $produk->nama_produk         = $request->namaproduk;
        $produk->stok_produk         = $request->stokproduk;
        $produk->harga               = $request->hargaproduk;
        $produk->detail_produk       = $request->detailproduk;
        $produk->rating               = $request->ratingproduk;
        $produk->likes              = $request->likesproduk;
        $produk->save();

        return redirect(route('dataproduk.index'))->with(['success' => 'Ubah Produk Berhasil']);
    }

    public function delete($id)
    {
        $produk = produk::find($id);

        $produk->delete();

        return redirect(route('dataproduk.index'))->with(['success' => 'Delete Produk Berhasil']);
    }
}
