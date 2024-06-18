<div class="block text-center">
    <h3 class="mb-5">COMING SOON</h3>
    <div class="bar-container">
        <div class="bar">
            <div class="progress"></div>
        </div>
    </div>
</div>

<style>
    body {
        font-family: "Helvetica Neue", "Helvetica", Arial, "Lucida Grande", sans-serif;
    }

    h3 {
        font-size: 1em;
        font-weight: 100;
        letter-spacing: 1em;
        text-shadow: 0px 0px 20px #3603f1;
        /* color: #1abb9c; */
        color: #3603f1;
        display: inline-block;
    }

    .bar-container {
        display: flex;
        justify-content: center;
    }

    .bar {
        height: 1em;
        width: 30em;
        max-width: 80%;
        /* Added for responsiveness */
        border-radius: 10px;
        background: transparent;
        box-shadow: inset 0px 0px 8px #323232;
        overflow: hidden;
        padding: 1px;
    }

    .progress {
        height: inherit;
        border-radius: inherit;
        width: 0;
        background: #3603f17b;
        animation: load 3s linear infinite;
        animation-delay: 2s;
    }

    @keyframes load {
        0% {
            width: 0%;
        }

        50% {
            width: 100%;
        }

        100% {
            width: 0%;
            float: right;
        }
    }
</style>
