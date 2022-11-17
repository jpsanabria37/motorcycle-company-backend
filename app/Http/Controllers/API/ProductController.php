<?php

namespace App\Http\Controllers\API;

use App\Http\Resources\CityResource;
use App\Models\City;
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Models\Product;
use Validator;
use App\Http\Resources\ProductResource;
use App\Http\Requests\City\StoreCityRequest;


class ProductController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();

        return $this->sendResponse(ProductResource::collection($products), 'Products retrieved successfully.');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCityRequest $request)
    {
        $input = $request->validated();


        $city = City::create($input);

        return $this->sendResponse(new CityResource($city), 'City created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreCityRequest $request, City $city)
    {
        $input = $request->validated();

        $city->name = $input['name'];
        $city->zip_code = $input['zip_code'];
        $city->save();

        return $this->sendResponse(new CityResource($city), 'City updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(City $city)
    {
        $city->delete();

        return $this->sendResponse([], 'City deleted successfully.');
    }
}
