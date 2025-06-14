<?php
namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Product;
use App\Http\Requests\StoreBrand;
use App\Http\Requests\UpdateBrand;
use Illuminate\Http\Request;
use App\Models\Image;
use Illuminate\Support\Facades\DB;

class BrandController extends Controller
{
   

    // Backend Part

    public function index()
    {
        $brands = Brand::orderBy('id','ASC')->get();

        return view('backend.brand.index', compact('brands'));
    }

    public function create()
    {
        return view('backend.brand.create');
    }

    public function store(StoreBrand $request)
    {
        DB::transaction(function () use ($request) {
            $data = $request->data();
            $brand = Brand::create($data);
              $brand->image()->create([])->setPath($request->image);

        });
        return redirect()->route('feature.index')->withSuccess(trans('messages.create_success', [ 'entity' => 'Service' ]));
    }
    public function edit(Brand $brand)
    {
        return view('backend.brand.edit', compact('brand'));
    }

    public function update(Updatebrand $request, Brand $brand)
    {
        DB::transaction(function () use($request,$brand)
    {
      $brand->update($request->data());

      $this->uploadRequestImage($request,$brand);
    });

        return back()->withSuccess(trans('Updated success', [ 'entity' => 'Service' ]));
    }

    public function delete(Brand $brand)
    {
        $brand->delete();
        return back()->withSuccess(trans('message.delete_success', [ 'entity' => 'Service' ]));
    }

}
