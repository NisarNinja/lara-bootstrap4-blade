@props([
'nativeType' => "",
'type' => "primary",
'title' => "",
'block' => "",
'tag' => "button",
'loaderOnSubmit' => true,
'loadingText' => 'Submitting',
])
@php
$config = config('lara-bootstrap4-blade.buttons');
@endphp
<{{ $tag }} {{ $attributes->merge(['class' => $config['class']['prepend'].' '.$config['class']['prefix'].$type." ".($loaderOnSubmit ? "loader-on-submit-btn" : '')]) }} type="{{ $nativeType }}" @if($loaderOnSubmit) data-loading-text="{{ $loadingText }}" @endif>
	@if($title)
	{{ $title }}
	@else
	{{ $slot }}
	@endif

{{-- 	@if($loaderOnSubmit)
	<span>
		<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
  		{{ $loadingText }}
	</span>
	@endif
 --}}
</{{ $tag }}>