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
        $purchases = Purchase::with('good')->get();

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

        $goodsList = Good::getGoodsList();

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
        $this->validate($request, [
            'good_id' => 'required|integer',
            'price' => 'required|regex:/^\d*(\.\d{1,2})?$/',
            'quantity' => 'required|integer',
            'purchase_date' => 'required|date',
        ]);

        $purchase = new Purchase();
        $purchase->good_id = $request->good_id;
        $purchase->price = $request->price;
        $purchase->quantity = $request->quantity;
        $purchase->link = $request->link;
        $purchase->purchase_date = $request->purchase_date;
        if ($request->departure_date != ""){
            $purchase->departure_date = $request->departure_date;
        }
        if ($request->buyer_protection != ""){
            $purchase->buyer_protection = $request->buyer_protection;
        }
        if ($request->arrival_date != ""){
            $purchase->arrival_date = $request->arrival_date;
        }


        if ($purchase->save()) {
            return redirect('admin/purchase')->with('success', 'Закупка успешно добавлена');
        } else {
            return redirect('admin/purchase')->with('error', 'Произошла ошибка при добавлении закупкию Пожалуйста, попробуйте позже.');
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
    public function edit(Purchase $purchase)
    {
        $goodsList = Good::getGoodsList();
        $good_id = $purchase->good->id;

        return view('admin.purchases.view', compact('purchase', 'goodsList', 'good_id'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Purchase $purchase)
    {
        $this->validate($request, [
            'good_id' => 'required|integer',
            'price' => 'required|regex:/^\d*(\.\d{1,2})?$/',
            'quantity' => 'required|integer',
            'purchase_date' => 'required|date',
        ]);

        $purchase->good_id = $request->good_id;
        $purchase->price = $request->price;
        $purchase->quantity = $request->quantity;
        $purchase->link = $request->link;
        $purchase->purchase_date = $request->purchase_date;
        if ($request->departure_date != ""){
            $purchase->departure_date = $request->departure_date;
        }
        if ($request->buyer_protection != ""){
            $purchase->buyer_protection = $request->buyer_protection;
        }
        if ($request->arrival_date != ""){
            $purchase->arrival_date = $request->arrival_date;
        }

        if ($purchase->save()) {
            return redirect('admin/purchase')->with('success', 'Закупка успешно обновлен');
        } else {
            return redirect('admin/purchase')->with('error', 'Произошла ошибка при обновлении закупки. Пожалуйста, попробуйте позже');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Purchase $purchase)
    {
        if ($purchase->delete()) {
            return redirect('admin/purchase')->with('success', 'Закупка успешно удалена');
        } else {
            return redirect('admin/purchase')->with('error', 'Произошла ошибка при удалении закупки. Пожалуйста, попробуйте позже');
        }


    }

    /**
     *
     */
    private function getCategoriesList()
    {

        $categories = Category::get();



        $goodsList = [];
        foreach ($categories as $category){
            foreach ($category->goods as $good){
                $goodsList[$category->name][$good->id] = $good->name;
            }
        }


        $goodsList = array_merge(["" => ""], $goodsList);

        return $goodsList;
    }
}
