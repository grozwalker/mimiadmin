<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin\Category;
use App\Models\Admin\Client;
use App\Models\Admin\Good;
use App\Models\Admin\Order;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

class OrderController extends Controller
{
    private $validateRules = [
        'client_id' => 'required|min:1',
    ];
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = Order::with('client')->paginate(20);

        return view('admin.orders.index', compact(['orders']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $order = new Order();

        $clientsList = $this->getClientsList();

        $client_id = null;


        $goods = Good::all()->pluck('name', 'id');

        $categoriesList = $this->getCategoryList();

        $goodsList = Good::getGoodsList();

        return view('admin.orders.view',
            compact([
                'order',
                'clientsList',
                'client_id',
                'goods',
                'categoriesList',
                'goodsList'
            ]));
        }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Сохраняем
        $this->validate($request, $this->validateRules);

        $order = Order::create($request->except('_token'));

        return redirect(route('orders.edit', $order->id));
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
        $order = Order::findOrFail($id);

        $clientsList = $this->getClientsList();

        $goods = Good::all()->pluck('name', 'id');

        $categoriesList = $this->getCategoryList();

        $goodsList = Good::getGoodsList();

        return view('admin.orders.view',
            compact([
                'order',
                'clientsList',
                'client_id',
                'goods',
                'categoriesList',
                'goodsList'
            ]));
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
        // Сохраняем
        $this->validate($request, $this->validateRules);

        $order = Order::findOrFail($id);

        $order->fill($request->except('_token'));
        $order->save();

        return redirect(route('orders.index'));
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


    public function getClientsList()
    {
        $clients = Client::all()->each(function ($item, $key) {
            $item->name = $item->name . ' ' . $item->surname;
        });

        $clients = $clients->pluck('name', 'id');

        return array_merge(["0" => ""], $clients->toArray());
    }

    public function getCategoryList()
    {
        $categories = Category::get()->pluck('name', 'id');

        return array_merge(["" => ""], $categories->toArray());
    }

    public function addGood()
    {
        $inputs = Input::all();

        $order = Order::find($inputs['order_id']);

        $order->goods()->attach($inputs['good_id']);

        return redirect()->back();
    }
}
