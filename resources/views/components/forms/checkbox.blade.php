@props([
    'id',
    'name',
    'checked' => false,
    'value' => '1',
    'class' => 'w-3 h-3 form-checkbox cursor-pointer border-solid focus:ring-0 focus:outline-0',
    'disabled' => false,
    'readonly' => false,
    'checked' => false,
])

<input type="checkbox"
    id="{{ $id }}"
    name="{{ $name }}"
    value="{{ $value }}"
    @if($checked) checked @endif
    {!! $attributes->merge(['class' => $class]) !!}
    @if($disabled) disabled @endif
    @if($readonly) readonly @endif>
