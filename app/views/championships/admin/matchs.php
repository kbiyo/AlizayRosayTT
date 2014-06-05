Prévisualisation des rencontres

@for ($i = 1; $i <= ($championship->nbEquipe-1)*$championship->nbPhase; $i++)
<div>JOURNEE {{ $i }}</div>
<?php $phase = ceil($i/($championship->nbEquipe-1)); ?>
<table>
	@for ($j = 1; $j <= $championship->nbEquipe/2; $j++)
	<tr>
		<td data-unik="{{$phase}}{{$i}}{{$j}}DS">
			<select class="journee" data-numP="{{$phase}}" data-numJ="{{$i}}" data-unik="{{$phase}}{{$i}}{{$j}}D">
				@for ($k = 1; $k <= $championship->nbEquipe; $k++)
				<?php $numEq = $previsionMatchs[$phase][$i-(($phase-1)*($championship->nbEquipe-1))][$j]['home']; ?>
				<option value="{{ $k }}" {{{ $numEq == $k ? 'selected="selected"':'' }}}>{{ $k }}</option>
				@endfor
			</select>
		</td>
		<td data-unik="{{$phase}}{{$i}}{{$j}}DC"></td>
		<td>-</td>
		<td>
			<select class="journee" data-numP="{{$phase}}" data-numJ="{{$i}}" data-unik="{{$phase}}{{$i}}{{$j}}E">
				@for ($k = 1; $k <= $championship->nbEquipe; $k++)
				<?php $numEq = $previsionMatchs[$phase][$i-(($phase-1)*($championship->nbEquipe-1))][$j]['visitor']; ?>
				<option value="{{ $k }}" {{{ $numEq == $k ? 'selected="selected"':'' }}}>{{ $k }}</option>
				@endfor
			</select>
		</td>
		<td></td>
	</tr>	
	@endfor
</table>
@endfor

@section('js')
<script type="text/javascript">
	$(document).ready(function() {
		
		
		var previousVal;
		var attrJ;
		var attrP;

		$("select.journee").focus(function () {
	        // Store the current value on focus, before it changes
	        previousVal = $(this).val();
	        attrJ = $(this).attr('data-numJ');
	        attrP = $(this).attr('data-numP');
	    }).change(function() {
	    	$("select.journee[data-numP="+attrP+"][data-numJ="+attrJ+"][data-unik!="+$(this).attr('data-unik')+"]:has(option[value="+$(this).val()+"]:selected)").val(previousVal);

	    	previousVal = $(this).val();
	    });
	});
</script>
@stop