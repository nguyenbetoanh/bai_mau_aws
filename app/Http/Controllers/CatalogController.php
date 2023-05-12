<?php

namespace App\Http\Controllers;
use App\Models\Catalog;
use Illuminate\Http\Request;

class CatalogController extends Controller
{
    public function index(){
        $catalog = Catalog::all();
        return view("catalogs.index",compact('catalog'));
    }
    public function input(){
        return view("catalogs.create");
    }
    public function create(Request $request){
        $newCatalog= new Catalog();
        $newCatalog->catalogId=$request->input('catalogId');
        $newCatalog->catalogName=$request->input('catalogName');
        $newCatalog->price=$request->input('price');
        $newCatalog->catalogStatus=$request->input('catalogStatus');
        $newCatalog->save();
        return redirect()->action('App\Http\Controllers\CatalogController@index');
    }
    public function edit($id){
        $editCat = Catalog::findOrFail($id);
        return view("catalogs.edit",compact('editCat'));
    }

    public function update(Request $request,$id){
        $updateCat = Catalog::findOrFail($id);
        $updateCat->catalogName=$request->input('catalogName');
        $updateCat->price=$request->input('price');
        $updateCat->catalogStatus=$request->input('catalogStatus');
        $updateCat->save();
        return redirect()->action('App\Http\Controllers\CatalogController@index');
    }
    public function delete($id){
        $deleteCat = Catalog::findOrFail($id);
        $deleteCat->delete();
        return redirect()->action('App\Http\Controllers\CatalogController@index');
    }
    public function search($key){
        $catalog = Catalog::where('catalogId', $key)->orWhere('catalogName', 'like', '%' .$key. '%')->get();
        return view("catalogs.index",compact('catalog'));
    }
}
