<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin\Category;
use App\Models\Admin\Good;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GoodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $goods = Good::with('category')->get();

        return view('admin.goods.index', compact('goods'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $good = new Good();

        // Список всех родительских категорий для отображения в листе выбора
        $categories = Category::all()->pluck('name', 'id');

        return view('admin.goods.view', compact('good', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $good = new Good();
        $good->name = $request->name;
        $good->category_id = $request->category_id;
        $good->price = $request->price;
        $good->active = $request->active;
        $good->save();

        return redirect('admin/goods');
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

        $good = Good::where('id', $id)->first();

        // Список всех родительских категорий для отображения в листе выбора
        $categories = Category::all()->pluck('name', 'id');

        return view('admin.goods.edit', compact('good', 'categories'));
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
        $good = Good::where('id', $id)->first();
        $good->name = $request->name;
        $good->category_id = $request->category_id;
        $good->price = $request->price;
        //$good->description = $request->description;
        $good->active = $request->active;
        $good->save();

        return redirect('admin/goods');
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
