@if ($paginator->getLastPage() > 1)
<?php $previousPage = ($paginator->getCurrentPage() > 1) ? $paginator->getCurrentPage() - 1 : 1; ?>  
<ul class="pagination">  
	<li class="item{{ ($paginator->getCurrentPage() == 1) ? ' disabled' : '' }}"><a href="{{ $paginator->getUrl($previousPage) }}"><i class="fa fa-arrow-left"></i></a></li>
	@for ($i = 1; $i <= $paginator->getLastPage(); $i++)
	<li class="{{ ($paginator->getCurrentPage() == $i) ? ' active' : '' }}"><a href="{{ $paginator->getUrl($i) }}">{{ $i }}</a></li>
	@endfor
	<li class="item{{ ($paginator->getCurrentPage() == $paginator->getLastPage()) ? ' disabled' : '' }}"><a href="{{ $paginator->getUrl($paginator->getCurrentPage()+1) }}"><i class="fa fa-arrow-right"></i></a></li>
</ul>  
@endif