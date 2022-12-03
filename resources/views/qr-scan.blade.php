<div id="qr-reader" style="width:500px"></div>
<div id="qr-reader-results"></div>

<!-- include the library -->
<script src="https://unpkg.com/html5-qrcode"></script>

<script>
    var resultContainer = document.getElementById('qr-reader-results');
var lastResult, countResults = 0;

function onScanSuccess(decodedText, decodedResult) {
    if (decodedText !== lastResult) {
        ++countResults;
        lastResult = decodedText;
        // Handle on success condition with the decoded message.
        let str = 'road.local';
        let test = lastResult.search('road.local');
        if(test == -1){
            alert('Подделка qr кода')
        }
        console.log(test)
    }
}

var html5QrcodeScanner = new Html5QrcodeScanner(
    "qr-reader", { fps: 10, qrbox: 250 });
html5QrcodeScanner.render(onScanSuccess);
</script>