{{-- @props(
[
'id'=> "",
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
])

<div class="form-group">
  @if($label) 
  <label id="{{ $labelOption['id'] }}" class="{{ $labelOption['class'] }}">{{ $label }}</label> 
  @endif
    
  {{ $slot }}
  <x-lara-b4::input-error :error="($error ? $error : ( !$disableFieldError ? $name : ''))" />
  @if($help)
  <small id="{{ $helpOption['id'] }}" class="{{ $helpOption['class'] }}">{{ $help }}</small>
  @endif
</div> --}}