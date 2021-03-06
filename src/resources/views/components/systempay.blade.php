@if(empty($request))
    <code>
        &lt;x-systempay>
        The request attribute has not been set
    </code>
@else
    <div class="kr-embedded" kr-form-token="{{ $token }}"{!! empty($attributes) ? '' : ' '.$attributes !!}>
        <!-- payment form fields -->
        <div class="kr-pan"></div>
        <div class="kr-expiry"></div>
        <div class="kr-security-code"></div>

        <!-- payment form submit button -->
        {!! $hasButton === true ? '<button class="kr-payment-button"></button>' : '' !!}

        <!-- error zone -->
        <div class="kr-form-error"></div>
    </div>
    <script
        src="https://api.systempay.fr/static/js/krypton-client/V4.0/stable/kr-payment-form.min.js"
        kr-public-key="{{ $key }}"
        {!! isset($successPost) ? "kr-post-url-success=\"$successPost\"" : '' !!}
        {!! isset($successGet) ? "kr-get-url-success=\"$successGet\"" : '' !!}
        {!! isset($failPost) ? "kr-post-url-refused=\"$failPost\"" : '' !!}
        {!! isset($failGet) ? "kr-get-url-refused=\"$failGet\"" : '' !!}>
    </script>

    <link rel="stylesheet" href="https://api.systempay.fr/static/js/krypton-client/V4.0/ext/classic-reset.css">
    <script
        src="https://api.systempay.fr/static/js/krypton-client/V4.0/ext/classic.js">
    </script>
@endif
