<?php

namespace App\Http\ViewCreators;

use Illuminate\View\View;

class BackendMenuCreator
{

    /**
     * The user model.
     *
     * @var \App\Models\User;
     */
    protected $user;

    /**
     * Create a new menu bar composer.
     */
    public function __construct()
    {
        $this->user = auth()->user();
    }

    /**
     * Bind data to the view.
     *
     * @param  View $view
     * @return void
     */
    public function create(View $view)
    {
        $menu[] = [
            'class' => false,
            'route' => url('admin/home'),
            'icon'  => 'md md-home',
            'title' => 'Home'
        ];
      
         array_push($menu, [
            'class' => false,
            'route' => route('menu.index'),
            'icon'  => 'md md-menu',
            'title' => 'Menu',
        ]);
          array_push($menu, [
            'class' => false,
            'route' => route('slider.index'),
            'icon'  => 'md md-image',
            'title' => 'Homepage Slider',
        ]);
          array_push($menu, [
            'class' => false,
            'route' => route('feature.index'),
            'icon'  => 'md md-description',
            'title' => 'Program',
        ]);
           array_push($menu, [
           'class' => false,
            'route' => route('photo.index'),
            'icon'  => 'md md-image',
            'title' => 'Image',
        ]);
             array_push($menu, [
            'class' => false,
            'route' => route('form.index'),
            'icon'  => 'md md-rate-review',
            'title' => 'Form',
        ]);
         array_push($menu, [
            'class' => false,
            'route' => route('news.index'),
            'icon'  => 'md md-description',
            'title' => 'News',
        ]);
          array_push($menu, [
            'class' => false,
            'route' => route('album.index'),
            'icon'  => 'md md-photo',
            'title' => 'Gallery',
        ]);

         array_push($menu, [
            'class' => false,
            'route' => route('download.index'),
            'icon'  => 'md md-file-download',
            'title' => 'Brochure/Flyer',
        ]);
        
         
        array_push($menu, [
            'class' => false,
            'route' => route('post.index'),
            'icon'  => 'md md-image',
            'title' => 'Post',
        ]);
         array_push($menu, [
            'class' => false,
            'route' => route('page.index'),
            'icon'  => 'md md-pages',
            'title' => 'Page',
        ]);
        
         array_push($menu, [
            'class' => false,
            'route' => route('traininglocation.index'),
            'icon'  => 'md md-folder',
            'title' => 'Training location',
        ]);
       
       
         array_push($menu, [
            'class' => false,
            'route' => route('team.index'),
            'icon'  => 'md md-account-circle',
            'title' => 'Team'
        ]);
         /* */
        

       

        $view->with('allMenu', $menu);
    }
}
