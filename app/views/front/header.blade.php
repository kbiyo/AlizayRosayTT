<header class="vertical-space">
	<h1>
		AlizayRosayTT
		<!--<small>Connecté en tant que Kbiyo_Oh <a href="#">déconnexion</a></small>-->
	</h1>
	<nav class="ink-navigation">
		<ul class="menu horizontal black">
			<li class="active"><a href="{{url('/')}}"><i class="fa fa-home fa-lg" style="color:white;"></i>&nbsp;Accueil</a></li>
			@foreach($menus as $menu)
			<li>
				<a href="{{substr($menu->link, 0,1)=='/'?url($menu->link):$menu->link}}">{{$menu->title}}</a>
				@if(count($menu->SubMenus)>0)
				<ul class="submenu">
					@foreach($menu->SubMenus as $sub)
					<li><a href="{{substr($sub->link, 0,1)=='/'?url($sub->link):$sub->link}}">{{$sub->title}}</a>
						@endforeach
					</ul>
					@endif
				</li>
				@endforeach
				<li><a href="{{url('/admin')}}">Administration</a></li>
			</ul>
		</nav>
	</header>