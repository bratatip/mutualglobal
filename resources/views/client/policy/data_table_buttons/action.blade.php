<div class='flex justify-between items-center max-xl:flex-wrap max-xl:w-full max-xl:justify-center'>
    <form action="{{ route('Client.downloadPolicy', $uuid) }}"
          method="GET">
        @csrf
        <button type="submit"
                class="m-1 rounded-full px-4 py-1 border-[#E25E14] border border-solid text-xs text-[#E25E14] w-[104px] h-[22px] flex justify-center items-center hover:bg-pss-orange-gradient hover:text-indigo-700">
            Download
        </button>
    </form>
</div>
