<div id="reader" style="width: 600px;"></div>

<script src="https://unpkg.com/html5-qrcode" type="text/javascript"></script>
<script>
    function onScanSuccess(decodedText, decodedResult) {
        console.log(${decodedText});
    }

    function onScanFailure(error) {
        console.warn(${error});
    }

    let options = {fps: 30, qrbox: {width: 250, height: 250}};

    let html5QrcodeScanner = new Html5QrcodeScanner("reader", options, false);
    html5QrcodeScanner.render(onScanSuccess, onScanFailure);
</script>
