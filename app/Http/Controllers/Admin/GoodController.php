<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin\Category;
use App\Models\Admin\Good;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Intervention\Image\ImageManagerStatic as Image;
use File;

class GoodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $goods = Good::with('category')
            ->active()
            ->orderBy('name', 'asc')
            ->paginate(20);

        $categories = Category::all();

        return view('admin.goods.index', compact('goods', 'categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($category_id = null)
    {
        $good = new Good();

        // Список всех родительских категорий для отображения в листе выбора
        $categories = Category::all()->pluck('name', 'id');

        return view('admin.goods.view', compact('good', 'categories', 'category_id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $category_id = null)
    {

        $this->validate($request, [
            'name' => 'required|max:255',
            'category_id' => 'required|numeric',
            'price' => 'required|numeric',

        ]);

        $good = new Good();
        $good->name = $request->name;
        $good->category_id = $request->category_id;
        $good->category_id = $request->category_id;
        $good->price = $request->price;
        $good->active = $request->active == 1 ? true : false;;
        $good->have_photo = $request->have_photo == 1 ? true : false;;
        $good->description = $request->description;
        $good->vk_link = $request->vk_link;
        $good->featured = $request->featured == 1 ? true : false;;
        $good->save();

        if ($request->file('img')){

            $imageName = $good->id . '.' .
                $request->file('img')->getClientOriginalExtension();

            $bigImagePath = '/images/catalog/';
            $previewImagePath = '/images/catalog/preview/';

            if(!File::exists(public_path().'/'.$bigImagePath)) {
                File::makeDirectory(public_path().'/'.$bigImagePath, $mode = 0777, $recursive = false);
            }

            if(!File::exists(public_path().'/'.$previewImagePath)) {
                File::makeDirectory(public_path().'/'.$previewImagePath, $mode = 0777, $recursive = false);
            }

            $request->file('img')->move(base_path('public') . $bigImagePath, $imageName);

            $good->img = $bigImagePath . $imageName;
            $good->save();

            Image::make(base_path('public') . $bigImagePath . $imageName)
                ->heighten(150)
                ->save(base_path('public') . $previewImagePath . $imageName);
        }

        if ($request->category_id) {
            return redirect('admin/goods/category/' . $request->category_id);
        } else {
            return redirect('admin/goods');
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id, $category_id = null)
    {

        $good = Good::where('id', $id)->first();


        // Список всех родительских категорий для отображения в листе выбора
        $categories = Category::all()->pluck('name', 'id');

        return view('admin.goods.view', compact('good', 'categories', 'category_id'));
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
        $good->category_id = $request->category_id;
        $good->price = $request->price;
        $good->active = $request->active == 1 ? true : false;
        $good->have_photo = $request->have_photo == 1 ? true : false;
        $good->description = $request->description;
        $good->vk_link = $request->vk_link;
        $good->featured = $request->featured == 1 ? true : false;

        if ($request->file('img')){

            $imageName = $good->id . '.' .
                $request->file('img')->getClientOriginalExtension();

            $bigImagePath = '/images/catalog/';
            $previewImagePath = '/images/catalog/preview/';

            $request->file('img')->move(base_path('public') . $bigImagePath, $imageName);

            $good->img = $bigImagePath . $imageName;

            if(!File::exists(public_path().'/'.$bigImagePath)) {
                File::makeDirectory(public_path().'/'.$bigImagePath);
            }

            if(!File::exists(public_path().'/'.$previewImagePath)) {
                File::makeDirectory(public_path().'/'.$previewImagePath);
            }

            Image::make(base_path('public') . $bigImagePath . $imageName)
                ->heighten(150)
                ->save(base_path('public') . $previewImagePath . $imageName);
        }
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

    /**
     * Выводим список товаров конкретной категории
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showCategory($id)
    {
        $goods = Good::with('category')
            ->where('category_id', $id)
            ->active()
            ->orderBy('name', 'asc')
            ->paginate(20);

        $categories = Category::all();
        $category = Category::where('id', $id)
                        ->first(['name']);

        return view('admin.goods.index', compact('goods', 'categories', 'category'));
    }

    /**
     * Выводим список всех неактивных товаров
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showNonActive(){

        $goods = Good::with('category')
            ->nonActive()
            ->orderBy('name', 'asc')
            ->paginate(20);

        $categories = Category::all();

        return view('admin.goods.index', compact('goods', 'categories'));
    }
}
