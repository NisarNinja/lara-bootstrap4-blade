@props(
[
'id'=> "",
'name'=> "",
"type" => 'text',
'placeholder' => "",
'label'=> "",
'labelOption'=> [
  'id' => '',
  'class' => '',
],
'icon'=> "",
'iconOption'=> [
  'id' => '',
  'class' => '',
  'prefix' => '',
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
])

@php
if($iconOption['prefix'] === false){
  $icon_prefix = "";
}elseif($iconOption['prefix'] == ""){
  $icon_prefix = config('lara-bootstrap4-blade.icons.default.prefix');
}else{
  $icon_prefix = $iconOption['prefix'];
}
@endphp

<div class="form-group">
  <div class="input-group">
    <div class="input-group-prepend">
      <x-slot name="prepend"></x-slot>

      @if($icon)
      <span class="input-group-text">
        <i class="{{ $icon_prefix }}{{ $icon }}"></i>
      </span>
      @endif
  
    </div>
    <input id="{{ $id }}" name="{{ $name }}" class="form-control" placeholder="{{ $placeholder }}" type="{{ $type }}">
  </div>
  @if($help)
  <small id="{{ $helpOption['id'] }}" class="{{ $helpOption['class'] }}">{{ $help }}</small>
  @endif
  <x-lara-b4::input-error :error="($error ? $error : ( !$disableFieldError ? $name : ''))" />
</div>



