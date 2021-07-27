@props([
'error' => ""
])
@if($error)
@error($error)
<div {!! $attributes->merge(['class' => 'invalid-feedback d-block']) !!}>
  {{ $message }}
</div>
@enderror
@endif
