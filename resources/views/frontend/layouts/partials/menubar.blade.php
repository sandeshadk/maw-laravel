	<header class="header_wrap dark_skin">
	
	    <div class="container">
	        <nav class="navbar navbar-expand-lg"> 
	            <a class="navbar-brand" href="{{route('homepage')}}" style="width: 210px;" >
	               <img class="logo_dark" src="{{asset('assets/images/newlogo.PNG')}}" alt="logo" />
	               <p class="logo_text">Supporting industries with excellence through partnership</p>
	        	</a>
	            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="ion-android-menu"></span> </button>
	            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
					<ul class="navbar-nav">

	                    @foreach(menus() as $menu)
                        <?php
                        $hasSub = !$menu->subMenus->isEmpty();
                        ?>
                        @if($menu->name=='Programs')
	                    <li class="{{$hasSub ? 'dropdown' : '' }} new_menu" >

	                        <a class="{{$hasSub ? 'dropdown-toggle ' : '' }} nav-link new_nav" data-toggle="{{$hasSub ? 'dropdown' : '' }}" href="{{ url($menu->url) }}">{!! $menu->name !!}</a>

	                        <div class="dropdown-menu">

                                <ul> 
                                  	@php $subprogram = \App\Models\Brand::get() @endphp
              									@if($subprogram != '')
              									@foreach($subprogram as $data)    
              									<?php
				                        $hasChildSub=!$sub->childsubMenus->isEmpty();

										            ?>      


                                   <li class="new_submenu" >
                                        <a  class="  {{$hasChildSub ? 'dropdown-toggler ' : '' }}  nav-link nav_item dropdown-item" href="{{route('trainings',$data->brand)}}">{!! $data->title !!}
                                        	
                                        </a>
                                        @if($hasChildSub)

                                        <div class="dropdown-menu">
                                            <ul> 
                       s                     @foreach($sub->childsubMenus->sortBy('order') as $key => $childsubmenu)
                                            <li class="new_submenu"><a class="dropdown-item anchortag  nav-link  nav_item" href="#">{!! $childsubmenu->name !!}</a></li>
             								@endforeach
                                            </ul>
                                        </div>
                                        @endif
                                    </li>
                                   @endforeach
                                   @endif


                                </ul>
                            </div>
                          
                        
	                        
	                    </li>
	                    @else

	                    <li class="{{$hasSub ? 'dropdown' : '' }} new_menu" >

	                        <a class="{{$hasSub ? 'dropdown-toggle ' : '' }} nav-link new_nav" data-toggle="{{$hasSub ? 'dropdown' : '' }}" href="{{ url($menu->url) }}">{!! $menu->name !!}</a>
	                       @if($hasSub)

	                        <div class="dropdown-menu">

                                <ul> 
                                  @foreach($menu->subMenus->sortBy('order') as $key => $sub)
										<?php
				                        $hasChildSub=!$sub->childsubMenus->isEmpty();

										 ?>                                  

                                   <li class="new_submenu" >
                                        <a  class=" {{$hasChildSub ? 'dropdown-toggler ' : '' }}  nav-link nav_item dropdown-item" href="{{url($sub->url)}}">{!! $sub->name !!}
                                        	
                                        </a>
                                        @if($hasChildSub)

                                        <div class="dropdown-menu">
                                            <ul> 
                                            @foreach($sub->childsubMenus->sortBy('order') as $key => $childsubmenu)
                                            <li class="new_submenu"><a class="dropdown-item anchortag  nav-link  nav_item" href="#">{!! $childsubmenu->name !!}</a></li>
             								@endforeach
                                            </ul>
                                        </div>
                                        @endif
                                    </li>
                                   @endforeach

                                </ul>
                            </div>
                            @endif
                        
	                        
	                    </li>
	                   @endif

	                    
	                  @endforeach

	                </ul>
	            </div>
	           
	        </nav>
	    </div>
	</header>