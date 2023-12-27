@props([
    'type' => 'text',
    'name',
    'label' => '',
    'placeholder' => '',
    'required' => false,
    'disabled' => false,
    'readonly' => false,
    'inputmode' => '',
    'step' => '',
    'acceptedFileTypes' => '.csv,.xls,.xlsx,.pdf,.png,.jpg,.jpeg,.txt',
])

<div>
    @if (!empty($label))
        <label for="{{ $name }}"
               class="text-[#0F628B] font-bold text-sm">
            {{ $label }}
            @if ($required)
                <span class="text-red-600"><strong>*</strong></span>
            @endif
        </label>
    @endif
</div>

<div class="w-full">
    @if (!empty($type) && in_array($type, ['text', 'password', 'email']))
        <input type="{{ $type }}"
               {{ $attributes->merge(['class' => 'text-xs text-gray-500 rounded-sm w-[85%] px-3 border-solid border-[#CCCCCC] focus:border-[#FFC451] focus:ring-0', 'id' => $name, 'value' => old($name)]) }}
               name="{{ $name }}"
               id="{{ $name }}"
               placeholder="{{ $placeholder }}"
               @if ($disabled) disabled @endif
               @if ($readonly) readonly @endif
               @if ($type === 'number') inputmode="decimal" step="any" @endif>
    @elseif (!empty($type) && $type === 'number')
        <input type="{{ $type }}"
               {{ $attributes->merge(['class' => 'p-1 w-[85%] border-[#CCCCCC] border-1 border-solid focus:ring-0 focus:border-[#FFC451] focus:border-1 bg-white overflow-hidden text-gray-500 text-xs', 'id' => $name, 'value' => old($name)]) }}
               name="{{ $name }}"
               id="{{ $name }}"
               placeholder="{{ $placeholder }}"
               @if ($disabled) disabled @endif
               @if ($readonly) readonly @endif
               @if ($inputmode) inputmode @endif
               @if ($step) step @endif>
    @elseif (!empty($type) && $type === 'textarea')
        <textarea {{ $attributes->merge(['class' => 'p-1 w-11/12 border-[#CCCCCC] border-1 border-solid focus:ring-0 focus:border-[#FFC451] focus:border-1 bg-white overflow-hidden text-gray-500 text-xs', 'id' => $name]) }}
                  name="{{ $name }}"
                  id="{{ $name }}"
                  placeholder="{{ $placeholder }}"
                  @if ($disabled) disabled @endif
                  @if ($readonly) readonly @endif>{{ old($name) }}</textarea>
    @elseif (!empty($type) && $type === 'date')
        <input type="{{ $type }}"
               {{ $attributes->merge(['class' => 'text-xs text-gray-500 rounded-sm px-3 border-solid border-[#CCCCCC] focus:border-[#FFC451] focus:ring-0', 'id' => $name, 'value' => old($name)]) }}
               name="{{ $name }}"
               id="{{ $name }}"
               placeholder="{{ $placeholder }}"
               @if ($disabled) disabled @endif
               @if ($readonly) readonly @endif>
    @elseif (!empty($type) && $type === 'file')
        <input type="{{ $type }}"
               {{ $attributes->merge(['class' => 'text-xs text-gray-500 rounded-sm px-3 border-solid border-[#CCCCCC] focus:outline-0 focus:border-[#FFC451] focus:ring-0', 'id' => $name, 'accept' => $acceptedFileTypes]) }}
               name="{{ $name }}"
               id="{{ $name }}"
               placeholder="{{ $placeholder }}"
               @if ($disabled) disabled @endif
               @if ($readonly) readonly @endif>
    @endif
</div>
