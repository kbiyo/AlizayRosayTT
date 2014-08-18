@section('content')

{{ Form::open(array('class' => 'form-horizontal')) }}

@for ($i = 1; $i <= $championship->nbEquipe; $i++)
<div class="form-group">
<label for="param{{$i}}" class="col-sm-1 control-label">{{ $i }}-</label>
	<div class="col-sm-11">
		<select id="param{{$i}}" data-numEq="{{$i}}" class="form-control">
			<option></option>
			@foreach ($clubs as $club)
			<option value="{{ $club->id }}">{{ stripslashes($club->nom) }}</option>
			@endforeach
		</select>
	</div>
</div>
@endfor

{{ Form::hidden('idChamp', $championship->id) }}
{{ Form::submit('Envoyer', array('class'=> 'btn btn-primary')) }}


{{ Form::close() }}
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