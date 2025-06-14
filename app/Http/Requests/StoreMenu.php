<?php

namespace App\Http\Requests;

use App\Models\Menu;
use App\Models\subMenu;
use App\Models\Page;
use Illuminate\Foundation\Http\FormRequest;

class StoreMenu extends FormRequest {

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
//            'page' => 'required'
        ];
    }

    /**
     * @return array
     */
    public function subMenuFillData()
    {
        $page = Page::find($this->get('page'));

        $first_sub_menu_order = $this->menu->subMenus->sortByDesc('order')->first();

        $inputs = [
            'menu_id'    => $this->menu->id,
            'name'       => $this->get('name') ? $this->get('name') : $page->title,
            'url'        => isset($page) ? $page->slug : ($this->get('custom_url') ? $this->get('custom_url') : '#') ,
            'order'      => $first_sub_menu_order ? $first_sub_menu_order->order + 1 : 0,
        ];

        return $inputs;
    }

    /**
     * @return array
     */
    public function childsubMenuFillData()
    {
//        dd($this->get());
        $page = Page::find($this->get('page'));

        $first_child_sub_menu_order = $this->subMenu->childsubMenus->sortBydesc('order')->first();

        $input = [
            'sub_menu_id'       => $this->subMenu->id,
            'name'              => $this->get('name') ? $this->get('name') : $page->title,
            'url'               => isset($page) ? $page->slug : ($this->get('custom_url') ? $this->get('custom_url') : '#') ,
            'order'             => $first_child_sub_menu_order ? $first_child_sub_menu_order->order + 1 : 0,
        ];

        return $input;
    }

    /**
     * @return array
     */
    public function menuFillData()
    {
        $page = Page::find($this->get('page'));

        $inputs = [
            'name'       => $this->get('name') ? $this->get('name') : $page->title,
            'url'        => isset($page) ?  $page->slug : ($this->get('custom_url') ? $this->get('custom_url') : '#' ),
            'order'      => Menu::orderBy('order', 'desc')->first()->order + 1,
        ];

        return $inputs;
    }
}
