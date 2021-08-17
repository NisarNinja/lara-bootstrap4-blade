@props([
  'name' => '',
  'label' => '',
])
 
<div class="multiselect_div">
 <select name="{{ $name }}" {{ $attributes->merge(['class' => 'multiselect']) }}>
    @if($label)
    <option value="" selected="" disabled="">{{ $label }}</option>
    @endif
    {{ $slot }}
</select>
</div>
