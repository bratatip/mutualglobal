@error($name)
    <span class="text-red-500 text-xs overflow-hidden">{{ $message }}</span>
@enderror


{{-- @if ($errors->has('policy_name'))
                            <span class="text-red-500 text-xs overflow-hidden">{{ $errors->first('policy_name') }}</span>
                        @endif --}}
