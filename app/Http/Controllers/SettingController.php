<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller {

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $settings = Setting::all();

        return view('backend.setting.index', compact('settings'));
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request)
    {
        foreach ($request->get('setting') as $slug => $value)
        {
            $setting = Setting::firstOrCreate([
                'slug'       => $slug
            ]);

            $this->uploadRequestImage($request, $setting);

            if ($setting)
            {
                $setting->update(['value' => $value]);
            }
        }

        return redirect()->back()->with('success', trans('messages.update_success', ['entity' => 'Setting']));
    }
}
