<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Resources\GroceryListCollection;
use App\Http\Resources\GroceryListResource;
use App\Models\GroceryList;

class GroceryListController extends Controller
{
    public function index(): GroceryListCollection
    {
        return new GroceryListCollection(GroceryList::all());
    }

    public function show(GroceryList $groceryList): GroceryListResource
    {
        return new GroceryListResource($groceryList);
    }

    public function delete(GroceryList $groceryList)
    {
        $groceryList->delete();
    }
}
