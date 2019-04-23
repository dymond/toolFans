@if(config('website.tracking.google_ads_universal_code'))
{{--<!-- Global site tag (gtag.js) - AdWords: 1040105408 -->--}}
<script async src="https://www.googletagmanager.com/gtag/js?id={{config('website.tracking.google_ads_universal_code')}}"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag() {dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', '{{config('website.tracking.google_ads_universal_code')}}');
</script>
@endif

<!-- Global site tag (gtag.js) - Google Analytics -->
@if(config('website.tracking.google_analytics_code'))
<script async src="https://www.googletagmanager.com/gtag/js?id={{config('website.tracking.google_analytics_code')}}"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function analytics(){dataLayer.push(arguments);}
    analytics('js', new Date());
    analytics('config', '{{config('website.tracking.google_analytics_code')}}');
</script>
@endif
