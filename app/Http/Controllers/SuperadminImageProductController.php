<?php

namespace App\Http\Controllers;

use App\Models\ImageProduct;
use App\Models\Product;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class SuperadminImageProductController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        $request->validate([
            'img_input' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:5048'
        ]);

        if ($request->hasfile('img_input'))
        {
            $images = $request->file('img_input');
            $nameimage = time().".".$images->getClientOriginalExtension();
            $folderimage = 'img_uploads/gallery';
            $images->move($folderimage,$nameimage);

            ImageProduct::create([
                'id_produk' => $id,
                'name_img_produk' => $nameimage,
                'status_img_produk' => $request->status_input,
            ]);

            Alert::success('Success Message', 'Success Save');
            $data = ImageProduct::where('status_img_produk', '>', '0')->where('id_produk', $id)->get();
            $data2 = Product::where('id', $id)->first();
            return redirect()->route('product.image.superadmin', $id)->with(['data', 'data2']);
        }
        else
        {
            Alert::error('Error Message', 'Failed Save, Salah Format');
            $data = ImageProduct::where('status_img_produk', '>', '0')->where('id_produk', $id)->get();
            $data2 = Product::where('id', $id)->first();
            return redirect()->route('product.image.superadmin', $id)->with(['data', 'data2']);
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
        $data = ImageProduct::where('status_img_produk', '>', '0')->where('id_produk', $id)->get();
        $data2 = Product::where('id', $id)->first();
        return view('superadmin.imageproduct', compact('data', 'data2'));
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
        if ($request->hasfile('img_input'))
        {
            $dataimage = ImageProduct::where('id', $id)->first();
            unlink('img_uploads/gallery/'.$dataimage->name_img_produk);

            $images = $request->file('img_input');
            $nameimage = time().".".$images->getClientOriginalExtension();
            $folderimage = 'img_uploads/gallery';
            $images->move($folderimage,$nameimage);

            ImageProduct::where('id', $id)->update([
                'name_img_produk' => $nameimage,
                'status_img_produk' => $request->status_input,
            ]);

            Alert::success('Success Message', 'Success Edit');
            $data = ImageProduct::where('status_img_produk', '>', '0')->where('id_produk', $request->id)->get();
            $data2 = Product::where('id', $request->id)->first();
            return redirect()->route('product.image.superadmin', $request->id)->with(['data', 'data2']);
        }
        else
        {
            ImageProduct::where('id', $id)->update([
                'status_img_produk' => $request->status_input,
            ]);

            Alert::success('Success Message', 'Success Edit');
            $data = ImageProduct::where('status_img_produk', '>', '0')->where('id_produk', $request->id)->get();
            $data2 = Product::where('id', $request->id)->first();
            return redirect()->route('product.image.superadmin', $request->id)->with(['data', 'data2']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $dataimage = ImageProduct::where('id', $id)->first();
        unlink('img_uploads/gallery/'.$dataimage->name_img_produk);

        ImageProduct::where('id', $id)->update([
            'status_img_produk' => '-1',
        ]);

        Alert::success('Success Message', 'Success Delete');
        $data = ImageProduct::where('status_img_produk', '>', '0')->where('id_produk', $request->id)->get();
        $data2 = Product::where('id', $request->id)->first();
        return redirect()->route('product.image.superadmin', $request->id)->with(['data', 'data2']);
    }
}
