<script src="{{ asset('frontend/frontend/libraries/jquery/jquery-3.4.1.min.js') }}"></script>
<script src="{{ asset('frontend/frontend/libraries/bootstrap/js/bootstrap.js') }}"></script>
<script src="{{ asset('frontend/frontend/libraries/retina/retina.min.js') }}"></script>
<script async src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAbgwx_Yi6fcKdeEMHsRro8X47vZkuqaio">
</script>

<script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>


<script>
    $(document).ready(function() {
        var map = new google.maps.Map(document.getElementById("map"), {
            center: {
                lat: -34.397,
                lng: 150.644
            },
            zoom: 8,
        });
    });

</script>
<script>
    AOS.init();

</script>
