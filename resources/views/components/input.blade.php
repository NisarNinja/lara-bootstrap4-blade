@props(
[
'id'=> "",
'name'=> "",
'value'=> "",
'old'=> true,
"type" => 'text',
'placeholder' => null,
'label'=> "",
'labelOption'=> [
  'id' => '',
  'class' => '',
],
'help' => "",
'helpOption' => [
  'id' => '',
  'class' => 'form-text text-muted',
],
'error' => "",
'errorOption' => [
],
'disableFieldError' => false,
'hideErrorOnChange' => true,
'parentClass' => ''
])

<div class="form-group {{ $parentClass }}">
  @if($label) 
  <label id="{{ $labelOption['id'] }}" class="{{ $labelOption['class'] }}">{{ $label }}</label> 
  @endif
  <input {!! $attributes !!} id="{{ $id }}" name="{{ $name }}" class="lara-b4-input form-control @error($name) is-invalid @endif @if($hideErrorOnChange) lara-b4-input-hide-error @endif" placeholder="{{$placeholder ?? $label}}" type="{{ $type }}" value="@if($old){{old($name,$value)}}@else{{$value}}@endif">
  <x-lara-b4::input-error :error="($error ? $error : ( !$disableFieldError ? $name : ''))" />
  @if($help)
  <small id="{{ $helpOption['id'] }}" class="{{ $helpOption['class'] }}">{{ $help }}</small>
  @endif
</div>
