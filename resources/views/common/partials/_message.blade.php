<div id="notification-container">

    @if (Session::has('success'))
        <div id="success-notification"
             class="bg-green-100 border text-xs border-green-400 text-green-700 px-4 py-3 rounded relative"
             role="alert">
            <strong class="font-bold">Success!</strong>
            <span class="block sm:inline">{{ Session::get('success') }}</span>
            <button id="close-success"
                    class="absolute top-0 right-0 px-3 py-1"
                    onclick="closeNotification('success-notification')">X</button>
        </div>
    @endif

    @if (Session::has('error'))
        <div id="error-notification"
             class="bg-red-100 border text-xs border-red-400 text-red-700 px-4 py-3 rounded relative"
             role="alert">
            <strong class="font-bold">Error!</strong>
            <span class="block sm:inline">{{ Session::get('error') }}</span>
            <button id="close-error"
                    class="absolute top-0 right-0 px-3 py-1"
                    onclick="closeNotification('error-notification')">X</button>
        </div>
    @endif
</div>

<script>
    function closeNotification(notificationId) {
        // Remove the session data associated with the notification
        // You may need to adjust this based on your session storage mechanism
        @if (Session::has('success'))
            sessionStorage.removeItem('success');
        @endif
        @if (Session::has('error'))
            sessionStorage.removeItem('error');
        @endif

        // Hide the notification by setting its display property to none
        document.getElementById(notificationId).style.display = 'none';
    }
</script>


{{-- @if (Session::has('error'))
        @php
            $errorMessages = Session::get('error');
        @endphp
        @if (is_array($errorMessages) && count($errorMessages) > 0)
            <div class="bg-transparent text-center py-4 lg:px-4">
                <div class="p-2 bg-red-600 items-center text-indigo-100 leading-none lg:rounded-md flex lg:inline-flex"
                     role="alert">
                    <span class="font-semibold mr-2 text-left flex-auto">Error:</span>
                    <ul class="list-disc list-inside">
                        @foreach ($errorMessages as $errorMessage)
                            <li>{{ $errorMessage }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        @endif
    @endif --}}

<!-- -->

    {{-- @if ($errors->any())
        <div class="container mx-auto mt-4">
            <div class="bg-red-500 text-white py-2 px-4 rounded-lg">
                <h4 class="font-semibold">Error!</h4>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
                <button type="button"
                        class="close">×</button>
            </div>
        </div>
    @endif --}}
