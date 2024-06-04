<div class="mt-3 flex justify-center spinner">
    <div class="overlay">
        <div class="atom-spinner show">
            <div class="spinner-inner">
                <div class="spinner-line"></div>
                <div class="spinner-line"></div>
                <div class="spinner-line"></div>
            </div>
        </div>
    </div>
</div>
<style>
    /* Start Loader Style  */
    .show {
        display: block !important;
    }

    .hide {
        display: none !important;
    }

    .atom-spinner {
        position: absolute;
        z-index: 9999;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }

    .atom-spinner,
    .atom-spinner * {
        box-sizing: border-box;
    }

    .atom-spinner {
        height: 60px;
        width: 60px;
        overflow: hidden;
    }

    .atom-spinner .spinner-inner {
        position: relative;
        display: block;
        height: 100%;
        width: 100%;
    }

    .atom-spinner .spinner-circle {
        display: block;
        position: absolute;
        color: #8080FF;
        font-size: calc(60px * 0.24);
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }

    .atom-spinner .spinner-line {
        position: absolute;
        width: 100%;
        height: 100%;
        border-radius: 50%;
        animation-duration: 1s;
        border-left-width: calc(60px / 25);
        border-top-width: calc(60px / 25);
        border-left-color: #8080FF;
        border-left-style: solid;
        border-top-style: solid;
        border-top-color: transparent;
    }

    .atom-spinner .spinner-line:nth-child(1) {
        animation: atom-spinner-animation-1 1s linear infinite;
        transform: rotateZ(120deg) rotateX(66deg) rotateZ(0deg);
    }

    .atom-spinner .spinner-line:nth-child(2) {
        animation: atom-spinner-animation-2 1s linear infinite;
        transform: rotateZ(240deg) rotateX(66deg) rotateZ(0deg);
    }

    .atom-spinner .spinner-line:nth-child(3) {
        animation: atom-spinner-animation-3 1s linear infinite;
        transform: rotateZ(360deg) rotateX(66deg) rotateZ(0deg);
    }

    @keyframes atom-spinner-animation-1 {
        100% {
            transform: rotateZ(120deg) rotateX(66deg) rotateZ(360deg);
        }
    }

    @keyframes atom-spinner-animation-2 {
        100% {
            transform: rotateZ(240deg) rotateX(66deg) rotateZ(360deg);
        }
    }

    @keyframes atom-spinner-animation-3 {
        100% {
            transform: rotateZ(360deg) rotateX(66deg) rotateZ(360deg);
        }
    }
</style>
