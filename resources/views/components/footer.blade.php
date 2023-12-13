<style>
    body {
        margin: 0;
        padding: 0;
        height: 100%;
    }

    /* .footer {
        position: fixed;
        bottom: 0;
        width: 100%;
        background-color: #ff8000;
        z-index: 100;
    } */

    .footer-content {
        display: flex;
        justify-content: center;
        padding: 10px 0;
    }
</style>

<footer style="width: 100%; background-color: #ff8000; z-index: 100; flex-shrink: none;">
    <div class="d-flex justify-content-center footer-content">
        <div class="sticky-md-top">&copy; {{ date('Y') }} Copyright KELOMPOK 2 UAS PWL.</div>
    </div>
</footer>
