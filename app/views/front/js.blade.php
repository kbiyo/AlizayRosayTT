<script type="text/javascript" src="{{asset('assets/ink-css/js/modernizr.js')}}"></script>
<script type="text/javascript">
	Modernizr.load({
		test: Modernizr.flexbox,
		nope : "{{asset('assets/ink-css/css/ink-legacy.min.css')}}"
	});
</script>

<!-- load inks javascript files from the cdn -->
<script type="text/javascript" src="{{asset('assets/ink-css/js/ink-all.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/ink-css/js/autoload.js')}}"></script>