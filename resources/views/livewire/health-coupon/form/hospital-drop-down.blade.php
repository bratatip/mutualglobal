<div>
    <div>
        {{-- <x-forms.select wire:model.live="selectedCity"
                        class="js-select2"
                        label="City"
                        name="city"
                        :options="$cities" />
        @include('common.partials._error', ['name' => 'city']) --}}
        <label for="city"
               class="text-[#0F628B] text-sm">
            City
            <span class="text-red-600"><strong>*</strong></span>
        </label>
        <div>
            <select wire:model.live="selectedCity"
                    class="h-8 p-1 w-11/12 border-[#CCCCCC] text-gray-500 text-xs border-1 border-solid focus:ring-0 focus:border-[#FFC451] focus:border-1"
                    name="city"
                    id="city">
                <option value=""
                        selected>Select City</option>
                @foreach ($cities as $city)
                    <option value="{{ $city->id }}">{{ $city->name }}</option>
                @endforeach
            </select>
        </div>

    </div>

    <div>
        <label for="area"
               class="text-[#0F628B] text-sm">
            Area
            <span class="text-red-600"><strong>*</strong></span>
        </label>
        <div>
            <select wire:model.live="selectedArea"
                    class="h-8 p-1 w-11/12 border-[#CCCCCC] text-gray-500 text-xs border-1 border-solid focus:ring-0 focus:border-[#FFC451] focus:border-1"
                    name="area"
                    id="area">
                <option value=""
                        selected>Select Area</option>
                @if (!is_null($selectedCity))
                    @foreach ($areas as $area)
                        <option value="{{ $area->id }}">{{ $area->name }}</option>
                    @endforeach
                @endif
            </select>
        </div>
    </div>



    <div>
        <label for="area"
               class="text-[#0F628B] text-sm">
            Area
            <span class="text-red-600"><strong>*</strong></span>
        </label>
        <div>
            <select class="h-8 p-1 w-11/12 border-[#CCCCCC] text-gray-500 text-xs border-1 border-solid focus:ring-0 focus:border-[#FFC451] focus:border-1"
                    name="hospital"
                    id="hospital">
                <option value=""
                        selected>Select Hospital</option>
                @if (!is_null($selectedArea))
                    @foreach ($hospitals as $hospital)
                        <option value="{{ $hospital->id }}">{{ $hospital->name }}</option>
                    @endforeach
                @endif
            </select>
        </div>
    </div>


</div>
