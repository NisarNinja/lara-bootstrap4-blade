@props([
'nativeType' => "",
'type' => "primary",
'title' => "",
'block' => "",
'tag' => "button",
])
@php
$config = config('lara-bootstrap4-blade.buttons');
@endphp
<{{ $tag }} {{ $attributes->merge(['class' => $config['class']['prepend'].' '.$config['class']['prefix'].$type]) }} type="{{ $nativeType }}">
	@if($title)
	{{ $title }}
	@else
	{{ $slot }}
	@endif
</{{ $tag }}>