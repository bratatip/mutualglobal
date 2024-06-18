{{-- <div>
    <label class="inline-flex items-center me-5 cursor-pointer">
        <input id="user_action_{{ $id }}"
               data-id="{{ $id }}"
               type="checkbox"
               value=""
               checked
               class="sr-only peer">
        <div
             class="relative w-11 h-6 bg-gray-300 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-sky-800">
        </div>
    </label>
</div> --}}


<div class='flex justify-between items-center max-xl:flex-wrap max-xl:w-full max-xl:justify-center'>
    {{-- <a href="{{ url('client/application/show/' . $id) }}"
       class=' m-1 
    rounded-full px-3 py-1
    border-[#E25E14]
    border 
    border-solid
    text-sm
    w-[87px] h-[27px] flex justify-center items-center hover:bg-[#E25E14] hover:text-white
    
     '>
        View
    </a> --}}

    <div class='flex justify-between items-center flex-wrap flex-row'>

        @if ($status == 'APPROVED')
            <button type="submit"
                    disabled
                    class="m-1 
                rounded-full px-4 py-1 border-gray-300 border border-solid
            bg-white text-green-500 text-sm w-[104px] h-[27px] flex justify-center items-center">
                Approved
            </button>

            <form action="{{ route('Admin.rejectClientRegistration', $uuid) }}"
                  method="POST">
                @csrf
                <button type="submit"
                        @if ($status == 'REJECTED') disabled @endif
                        class="m-1 rounded-full px-4 py-1 border-[#E25E14] border border-solid text-sm text-[#E25E14] w-[104px] h-[22px] flex justify-center items-center hover:bg-pss-orange-gradient hover:text-white">
                    Reject
                </button>
            </form>
        @elseif($status == 'REJECTED')
            <button type="submit"
                    disabled
                    class="m-1 
        rounded-full px-4 py-1 border-gray-300 border border-solid
    bg-white text-gray-500 text-sm w-[104px] h-[27px] flex justify-center items-center">
                Rejected
            </button>

            <form action="{{ route('Admin.approveClientRegistration', $uuid) }}"
                  method="POST">
                @csrf
                <button type="submit"
                        @if ($status == 'APPROVED') disabled @endif
                        class="m-1 rounded-full px-4 py-1 border-[#E25E14] border border-solid bg-pss-orange-gradient text-white text-sm w-[104px] h-[22px] flex justify-center items-center approve_btn">
                    Approve
                </button>
            </form>
        @else
            <form action="{{ route('Admin.approveClientRegistration', $uuid) }}"
                  method="POST">
                @csrf
                <button type="submit"
                        @if ($status == 'APPROVED') disabled @endif
                        class="m-1 rounded-full px-4 py-1 border-[#E25E14] border border-solid bg-pss-orange-gradient text-white text-sm w-[104px] h-[22px] flex justify-center items-center approve_btn">
                    Approve
                </button>
            </form>

            <form action="{{ route('Admin.rejectClientRegistration', $uuid) }}"
                  method="POST">
                @csrf
                <button type="submit"
                        @if ($status == 'REJECTED') disabled @endif
                        class="m-1 rounded-full px-4 py-1 border-[#E25E14] border border-solid text-sm text-[#E25E14] w-[104px] h-[22px] flex justify-center items-center hover:bg-pss-orange-gradient hover:text-white">
                    Reject
                </button>
            </form>
        @endif

    </div>
</div>

<style>
    .delete_btn:hover {
        background: linear-gradient(#fff, #fff);
        color: #000;
    }

    .approve_btn:hover {
        background: linear-gradient(#fff, #fff);
        color: #E25E14 !important;
    }

    .modal_650px {
        width: 100%;
        max-width: 650px;
        margin: 0 auto;

    }

    .border_bg {
        border: 0.2px solid transparent;
        box-shadow: 0px 2px 4px rgb(0 0 0 / 25%);
        border-radius: 15px;
    }

    @media (max-width:768px) {
        .modal_350px {
            width: 100%;
            max-width: 350px;
            margin: 0 auto;
        }
    }
</style>
