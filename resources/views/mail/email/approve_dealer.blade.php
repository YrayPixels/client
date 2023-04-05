<div class="email-container"
    style="max-width: 50%; min-width: 300px; height: 80vh; background-color: #edf2f6; margin: 1rem auto; padding-top: 1rem; border-radius: 10px;">
    <h1 style="text-align:center;">GAPA</h1>
    <div style="display: flex; justify-content: center;">
        <div style="margin: auto 1rem;">
            <div>
                <p>Hello, <span>{{ $dealer->first_name ?? '' }}</span></p>
                <p>your dealership account has been approved here is your dealer_id</p>
                <h1
                    style="cursor: pointer; background-color: orange; text-align:center;  padding: 1rem; border-radius: 5px; border: none;">
                    {{ $dealer->code ?? '' }} 600676</h1>
            </div>
            <div style="margin-top: 3rem;">
                <p>Regard</p>
                <p style="font-size: 1.1em;">GapaAuto</p>
            </div>
        </div>


    </div>

</div>
