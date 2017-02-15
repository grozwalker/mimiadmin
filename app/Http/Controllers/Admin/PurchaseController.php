<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin\Category;
use App\Models\Admin\Good;
use App\Models\Admin\Purchase;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PurchaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $purchases = Purchase::all();

        return view('admin.purchases.index', compact('purchases'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $purchase = new Purchase();

        $goods = Good::all()->pluck('name', 'id');

        $categories = Category::with('goods')->get();

        $goodsList = [];
        foreach ($categories as $category){
            foreach ($category->goods as $good){
                $goodsList[$category->name][] = $good->name;
            }
        }

        $good_id = null;

        return view('admin.purchases.view', compact('purchase', 'goodsList', 'good_id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        Purchase::create($request->except('_token'));
        /*$category = new Category();

        $category->good_id = $request->good_id;

        $category->save();*/

        return redirect('admin/purchase');
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
        //
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
        //
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
