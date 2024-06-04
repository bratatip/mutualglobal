@props([
    'modal_open_button' => 'Open Modal',
    'modal_open_btn_bg' => 'bg-blue-700',
    'modal_open_btn_hover_bg' => 'hover:bg-blue-800',
    'icon' => 'fas fa-plus',
    'cancle_botton_text' => 'Cancle',
    'submit_botton_text' => 'Submit',
    'is_custom_submit_button' => 'false',
    'is_footer_required' => 'true',
])

<div x-data="{ open: false }">
    <!-- Trigger button -->
    <button @click="open = true"
            class="flex items-center px-4 py-1 {{ $modal_open_btn_bg }} {{ $modal_open_btn_hover_bg }} text-white rounded-sm  focus:outline-none focus:bg-blue-800">
        <i class="{{ $icon }} me-2 text-sm"></i> <span class="whitespace-nowrap">{{ $modal_open_button }}</span>
    </button>

    <!-- Modal Component -->
    <div x-show="open"
         x-cloak>
        <div @click="open = false"
             class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity z-50"
             x-show="open"
             x-cloak>
        </div>

        <div class="fixed inset-0 flex items-center justify-center z-50"
             x-show="open"
             x-cloak>
            <!-- Modal -->
            <div class="bg-white p-6 rounded-sm overflow-hidden shadow-xl transform transition-all sm:max-w-lg sm:w-full"
                 x-show="open"
                 x-transition:enter="ease-out duration-100"
                 x-transition:enter-start="opacity-0 scale-95"
                 x-transition:enter-end="opacity-100 scale-100"
                 x-transition:leave="ease-in duration-200"
                 x-transition:leave-start="opacity-100 scale-100"
                 x-transition:leave-end="opacity-0 scale-95">
                <!-- Modal header -->
                <div class="flex items-start justify-between">
                    <div class="text-left">
                        {{ $modal_title }}

                    </div>
                    <span class="cursor-pointer"
                          @click="open = false">✕</span>
                </div>

                <!-- Modal body -->
                <div>
                    {{ $modal_body }}
                </div>

                <!-- Modal footer -->
                @if ($is_footer_required === 'true')
                    <div class="flex items-center justify-end gap-2 mt-4">
                        <button type="button"
                                class="w-full inline-flex justify-center rounded-sm border border-red-700 px-4 py-1 text-base font-medium text-red-700 hover:text-white hover:border-red-800 hover:bg-red-800 focus:outline-none sm:w-auto sm:text-sm"
                                @click="open = false">
                            {{ $cancle_botton_text }}
                        </button>
                        @if ($is_custom_submit_button == 'false')
                            <button type="submit"
                                    class="w-full inline-flex justify-center rounded-sm border border-transparent px-4 py-1 bg-blue-800 text-base font-medium text-white hover:bg-blue-700 focus:outline-none sm:w-auto sm:text-sm">
                                {{ $submit_botton_text }}
                            </button>
                        @endif

                        @if ($is_custom_submit_button === 'true')
                            {{ $custom_submit_button ?? 'ADD YOUR BUTTON' }}
                        @endif
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
