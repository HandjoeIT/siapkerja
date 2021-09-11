{{-- clock widget --}}
<style>
    .clock-hours:before {
        content: var(--timer-hours);
    }

    .clock-minutes:before {
        content: var(--timer-minutes);
    }

    .clock-seconds:before {
        content: var(--timer-seconds);
    }

    .clock-container {
        margin-top: 20px;
        margin-bottom: 20px;
        text-align: center;
        background-color: #cb0c9f;
        border-radius: 5px;
        padding: 20px;
        box-shadow: 1px 1px 5px rgba(255, 255, 255, 0.15), 0 15px 90px 30px rgba(0, 0, 0, 0);
        display: inline-flex;
    }

    .clock-col {
        text-align: center;
        margin-right: 20px;
        margin-left: 20px;
        min-width: 90px;
        position: relative;
    }

    .clock-col:not(:last-child):before,
    .clock-col:not(:last-child):after {
        content: "";
        background-color: rgb(255, 255, 255);
        height: 5px;
        width: 5px;
        border-radius: 50%;
        display: block;
        position: absolute;
        right: -26px;
    }

    .clock-col:not(:last-child):before {
        top: 35%;
    }

    .clock-col:not(:last-child):after {
        top: 50%;
    }

    .clock-timer:before {
        color: #fff;
        font-size: 34px;
        text-transform: uppercase;
    }

    .clock-label {
        color: rgb(255, 255, 255);
        text-transform: uppercase;
        font-size: 0.7rem;
        margin-top: 10px;
    }

    @media (max-width: 825px) {
        .clock-container {
            flex-direction: row;
            padding-top: 10px;
            padding-bottom: 10px;
        }

        .clock-col {
            text-align: center;
            margin-right: 10px;
            margin-left: 10px;
            min-width: 50px;
            position: relative;
        }

        .clock-col:before,
        .clock-col:after {
            display: none !important;
        }
    }

</style>
<div class="clock-container">
    <div class="clock-col">
        <p class="clock-hours clock-timer">
        </p>
        <p class="clock-label">
            Jam
        </p>
    </div>
    <div class="clock-col">
        <p class="clock-minutes clock-timer">
        </p>
        <p class="clock-label">
            Menit
        </p>
    </div>
    <div class="clock-col">
        <p class="clock-seconds clock-timer">
        </p>
        <p class="clock-label">
            Detik
        </p>
    </div>
</div>
<script src='https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.15.2/moment.min.js'></script>
<script src="{{ asset('dashboard') }}/assets/js/script.js"></script>
