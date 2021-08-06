@props([
'nativeType' => "",
'type' => "primary",
'title' => "",
'block' => "",
'tag' => "a",
'url' => "",
'loaderOnSubmit' => true,
'loadingText' => 'Submitting',
])
@php
$config = config('lara-bootstrap4-blade.buttons');
@endphp
<{{ $tag }} @if($tag == 'a') href="{{ $url }}" @endif {{ $attributes->merge(['class' => $config['class']['prepend'].' '.$config['class']['prefix'].$type." ".($loaderOnSubmit ? "loader-on-submit-btn" : '')]) }} type="{{ $nativeType }}" @if($loaderOnSubmit) data-loading-text="{{ $loadingText }}" @endif>
	@if($title)
	{{ $title }}
	@else
	{{ $slot }}
	@endif
</{{ $tag }}>