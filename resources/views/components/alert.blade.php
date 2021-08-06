@props([
	'html' => '',
	'type' => 'success',
	'closeButton' => true,
])
<div class="card-text alert alert-{{ $type }} @if($closeButton) alert-dismissible @endif">
	{{ $slot }}
	{!! $html !!}
	@if($closeButton)
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
	@endif
</div>