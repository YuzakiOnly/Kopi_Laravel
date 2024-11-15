<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Log;

use App\Models\Product;
use GrahamCampbell\ResultType\Success;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    use ValidatesRequests;
    public function index()
    {
        $products = Product::paginate(12);

        return view('products.index', compact('products'));
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
{
    $this->validate($request, [
        'nama' => 'required',
        'harga' => 'required|numeric',
        'foto' => 'required|image|mimes:jpeg,png,jpg,gif,svg'
    ]);

    // Mendapatkan file yang diupload
    $foto = $request->file('foto');

    // Menggunakan hashName() untuk mendapatkan nama file unik
    $fotoNamaUnik = $foto->hashName();

    // Menyimpan file dengan nama unik di folder 'public'
    $foto->storeAs('public', $fotoNamaUnik);

    // Simpan data produk ke database, termasuk nama asli file
    Product::create([
        'nama' => $request->nama,
        'harga' => str_replace(".","", $request->harga),
        'deskripsi' => $request->deskripsi,
        'foto' => $foto->getClientOriginalName() // Simpan nama asli file di database
    ]);

    return redirect()->route('products.index')->with('success', 'Product added successfully!');
}


    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
    }

    public function update(Request $request, Product $product)
    {
        $this->validate($request, [
            'nama' => 'required',
            'harga' => 'required|numeric',
        ]);



        // Update informasi produk
        $product->nama = $request->nama;
        $product->harga = str_replace(".","", $request->harga);
        $product->deskripsi = $request->deskripsi;

        // Jika ada file foto yang diupload
        if ($request->file('foto')) {
            // Hapus file gambar lama dari storage
            Storage::disk('public')->delete($product->foto);

            // Mendapatkan file baru dan nama asli file
            $foto = $request->file('foto');
            $fotoNamaAsli = $foto->getClientOriginalName(); // Mengambil nama asli file

            // Menyimpan file baru dengan nama asli di folder public
            $foto->storeAs('public', $fotoNamaAsli);

            // Memperbarui nama file di database
            $product->foto = $fotoNamaAsli;
        }

        // Update data produk
        $product->save();

        return redirect()->route('products.index')->with('success', 'Update Product successfully!');
    }


    public function destroy(Product $product) {
        // Hapus file gambar produk
        if ($product->foto !== "noimage.png") {
            Storage::disk('local')->delete('public/', $product->foto);


        }
        $product->delete();
        return redirect()->route('products.index')->with('success', 'Delete  Product successfully!');


    }

}
