<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class SuperadminProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Product::where('status_product', '>', '0')->get();
        return view('superadmin.product', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'img_input' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:5048'
        ]);

        if ($request->hasfile('img_input'))
        {
            $images = $request->file('img_input');
            $nameimage = time().".".$images->getClientOriginalExtension();
            $folderimage = 'img_uploads/thumbnail';
            $images->move($folderimage,$nameimage);

            Product::create([
                'thumbnail_img' => $nameimage,
                'name_product' => $request->name_input,
                'price_product' => $request->price_input,
                'description_product' => $request->description_input,
                'information_product' => $request->information_input,
                'sku_product' => $request->sku_input,
                'categories_product' => $request->categories_input,
                'tags_product' => $request->tags_input,
                'stock_product' => $request->stock_input,
                'status_product' => $request->status_input,
            ]);

            Alert::success('Success Message', 'Success Save');
            $data = Product::where('status_product', '>', '0')->get();
            return redirect()->route('product.superadmin')->with(['data']);
        }
        else
        {
            Alert::error('Error Message', 'Failed Save, Salah Format');
            $data = Product::where('status_product', '>', '0')->get();
            return redirect()->route('product.superadmin')->with(['data']);
        }
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
            $dataproduct = Product::where('id', $id)->first();
            unlink('img_uploads/thumbnail/'.$dataproduct->thumbnail_img);

            $images = $request->file('img_input');
            $nameimage = time().".".$images->getClientOriginalExtension();
            $folderimage = 'img_uploads/thumbnail';
            $images->move($folderimage,$nameimage);

            Product::where('id', $id)->update([
                'thumbnail_img' => $nameimage,
                'name_product' => $request->name_input,
                'price_product' => $request->price_input,
                'description_product' => $request->description_input,
                'information_product' => $request->information_input,
                'sku_product' => $request->sku_input,
                'categories_product' => $request->categories_input,
                'tags_product' => $request->tags_input,
                'stock_product' => $request->stock_input,
                'status_product' => $request->status_input,
            ]);

            Alert::success('Success Message', 'Success Edit');
            $data = Product::where('status_product', '>', '0')->get();
            return redirect()->route('product.superadmin')->with(['data']);
        }
        else
        {
            Product::where('id', $id)->update([
                'name_product' => $request->name_input,
                'price_product' => $request->price_input,
                'description_product' => $request->description_input,
                'information_product' => $request->information_input,
                'sku_product' => $request->sku_input,
                'categories_product' => $request->categories_input,
                'tags_product' => $request->tags_input,
                'stock_product' => $request->stock_input,
                'status_product' => $request->status_input,
            ]);

            Alert::success('Success Message', 'Success Edit');
            $data = Product::where('status_product', '>', '0')->get();
            return redirect()->route('product.superadmin')->with(['data']);
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
        $dataproduct = Product::where('id', $id)->first();
        unlink('img_uploads/thumbnail/'.$dataproduct->thumbnail_img);

        Product::where('id', $id)->update([
            'status_product' => '-1',
        ]);

        Alert::success('Success Message', 'Success Delete');
        $data = Product::where('status_product', '>', '0')->get();
        return redirect()->route('product.superadmin')->with(['data']);
    }
}
