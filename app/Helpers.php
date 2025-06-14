<?php
use App\Models\ColocationComponent;
use App\Models\CoLocationOrder;
use App\Models\CoLocationRenewal;
use App\Models\Country;
use App\Models\Customer;
use App\Models\CustomOrder;
use App\Models\CustomRenewal;
use App\Models\DomainOrder;
use App\Models\DomainRenewal;
use App\Models\EmailComponent;
use App\Models\EmailOrder;
use App\Models\EmailProvision;
use App\Models\EmailRenewal;
use App\Models\EndpointSecurityOrder;
use App\Models\EndpointSecurityRenewal;
use App\Models\Ip;
use App\Models\LicenseOrder;
use App\Models\LicenseRenewal;
use App\Models\Menu;
use App\Models\Traininglocation;
use App\Models\Program;
use App\Models\Order;
use App\Models\Rate;
use App\Models\Brand;
use App\Models\Service;
use App\Models\Form;
use App\Models\Receipt;
use App\Models\ServiceUpdate;
use App\Models\Setting;
use App\Models\SslOrder;
use App\Models\SslRenewal;
use App\Models\User;
use App\Models\VpsComponent;
use App\Models\VpsOrder;
use App\Models\VpsProvision;
use App\Models\VpsRenewal;
use App\Models\WebComponent;
use App\Models\WebOrder;
use App\Models\WebProvision;
use App\Models\WebRenewal;
use Carbon\Carbon;

/**
 * @param $value
 * @param string $dash
 * @return string
 */
function display($value, $dash = 'NA')
{
    if (empty($value))
    {
        return $dash;
    }

    return $value;
}

/**
 * @param $width
 * @param null $username
 * @return mixed
 * @internal param $guard
 */
function user_avatar($width, $username = null)
{
    if ($username)
    {
        $user = \App\Models\User::whereUsername($username)->first();
    }
    else
    {
        $user = auth()->user();
    }

    if ($image = $user->image)
    {
        return asset($image->thumbnail($width, $width));
    }
    else
    {
        return asset(config('paths.placeholder.avatar'));
    }
}

/**
 * @param $width
 * @param null $entity
 * @return mixed
 */
function thumbnail($width, $entity = null)
{
    if ( ! is_null($entity))
    {
        if ($image = $entity->image)
        {
            dd($image);
            return asset($image->thumbnail($width, $width));
        }
    }

    return asset(config('paths.placeholder.default'));
}

/**
 * @param $query
 * @return mixed
 */
function setting($query)
{
    $setting = Setting::fetch($query)->first();

    return $setting ? $setting->value : null;
}

/**
 * @param $id
 * @return mixed
 */
function getUserName($id)
{
    $user = User::find($id)->name;

    return $user;
}

function applyform()
{
    $applyform = Form::where('view','apply-course')->get();
    return $applyform;

}
function hireform()
{
    $hireform = Form::where('view','hire-graduates')->get();
    return $hireform;
}
/* Collection of menu items */
function menus()
{
    return Menu::orderBy('order','ASC')->get();
}

function services()
{
    $services = Service::where('is_published', '=', 1)
        ->limit(7)
        ->get();
    return $services;

}

function footermenu()
{
    $menu = Menu::where('is_primary', 0)->whereNotIn('slug',['about'])
        ->get();
    return $menu;
}

function footer()
{
    $footer = Service::where('is_published',1)->limit(3)->get();
    return $footer;
}
function footerlocations()
{
    $location=Traininglocation::where('is_published',1)->get();
    return $location;
}
function about()
{
    $about =Page::where('slug','about-us')->get();
    return $about;
}


