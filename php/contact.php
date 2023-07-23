<!DOCTYPE html>
<html>
<head>
    <title>Trattoria da Casa - Contact</title>
    <link rel="stylesheet" href="https://bootswatch.com/5/simplex/bootstrap.min.css">
</head>
<body>
    <?php include 'header.php'; ?>
    <div class="container text-center p-5" style="background-color: #c4d3d1;">
        <div class="row">
            <div class="col-6">
                <h2>Have Questions?</h2>
                <p>Please feel free to call or email us,<br> or use our contact form to get in touch with us.<br> We look forward to hearing from you! Emergency?<br> Call Us: 0123 456789</p>
                <p>Send Us Mail: info@trattoriadacasa.it</p>
                <p>Find the Studio</p>
            </div>
            <div class="col-6">
                <div id="map" style="height: 400px; width: 400px;"></div>
            </div>
        </div>
    </div>
    <script>
        function initMap() {
            var centerLatLng = { lat: 43.558990, lng: 6.968200 };
            var map = new google.maps.Map(document.getElementById('map'), {
            center: centerLatLng,
            zoom: 16
            });
            var marker = new google.maps.Marker({
            position: centerLatLng,
            map: map, 
            title: 'Cannes' 
            });
        }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD4VVM28DoKoWPt-JPqIy_XSLagnUU7ZrA&callback=initMap" async defer></script>
    <?php include 'footer.php'; ?>
</body>
</html>
