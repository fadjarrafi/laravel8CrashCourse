<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index()
    {
        $title = 'welcome to my laravel 8';
        $description = 'created by Fadjar';

        $data = [
            'productOne' => 'Xiaomi',
            'productTwo' => 'Poco'
        ];

        // compact method
        // return view('products.index', compact('title', 'description'));

        // with method
        // return view('products.index')->with('title', $title);
        // return view('products.index')->with('data', $data);

        //Directly in the view
        return view('products.index', [
            'data' => $data
        ]);
    }

    public function about()
    {
        return 'About us page';
    }

    public function show($name)
    {
        $data = [
            'xiaomi' => 'Xiaomi',
            'poco' => 'Poco'
        ];

        return view('products.index', [
            'products' => $data[$name] ?? ' Product ' . $name . ' does not exist'
        ]);
    }
}
