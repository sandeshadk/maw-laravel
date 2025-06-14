<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreService;
use App\Http\Requests\UpdateService;
use App\Models\Service;
use Illuminate\Http\Request;
use App\Models\Brand;
use Illuminate\Support\Facades\DB;

class ServiceController extends Controller
{ /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
  

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index($brand)
    {
        $service = Service::where('brand_id',$brand)->orderBy('id','ASC')->latest()->paginate(6);

        return view('backend.service.index', compact('service', 'brand'));
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create($brand)
    {
        //        dd($brand);
        //        $allBrands = Brand::pluck('brand')->all();
        //
        //        $brands = [];

        return view('backend.service.create', compact('brand'));
    }

    /**
     * @param StoreProduct $request
     * @return mixed
     */
    public function store(StoreService $request, $brand)
    {
        DB::transaction(function () use ($request, $brand) {

            $data = $request->data();

            $service = Service::create($data);

            $this->uploadRequestImage($request,$service);
        });

        return redirect()->route('service.index',$brand)->withSuccess(trans('messages.create_success', ['entity' => 'service']));
    }

    /**
     * @param Product $product
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
   

    /**
     * @param Product $product
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit(Service $service)
    {
        //        $allBrands = Brand::pluck('brand')->all();
        //
        //        $brands = $product->brands()->pluck('brand')->all();

        return view('backend.service.edit', compact('service'));
    }

    /**
     * @param UpdateProduct $request
     * @param Product $product
     * @return mixed
     */
    public function update(UpdateService $request, Service $service)
    {
        DB::transaction(function () use($request,$service)
    {
      $service->update($request->data());

      $this->uploadRequestImage($request,$service);
    });
   

        return redirect()->route('service.index', $service->brand_id)->withSuccess(trans('messages.update_success', ['entity' => 'service']));
    }

    /**
     * @param Product $product
     * @return mixed
     */
     public function destroy(Service $service)
    {
        $service->delete();
         return back()->withsuccess(trans('service has been deleted successfully', ['entity'=>'page']));
    }

}
