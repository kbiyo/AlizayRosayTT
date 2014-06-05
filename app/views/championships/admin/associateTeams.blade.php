@section('content')

@for ($i = 1; $i <= $championship->nbEquipe; $i++)
{{ $i }}-<select id="param{{$i}}" data-numEq="{{$i}}">
<option></option>
@foreach ($clubs as $club)
<option value="{{ $club->id }}">{{ $club->nom }}</option>
@endforeach
</select><br />
@endfor
<br />

@stop


@section('js')
<script type="text/javascript">
	$(document).ready(function() {
		var previousVal;

		$("select[id*=param]").focus(function () {
	        previousVal = $(this).val();
	    }).change(function() {
			$('select:not(#'+$(this).attr('id')+') option[value='+$(this).val()+']').hide();
			$('select:not(#'+$(this).attr('id')+') option[value='+previousVal+']').show();
	        previousVal = $(this).val();
	    });
	});
</script>
@stop