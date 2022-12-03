<html>
    <style>
        html{
            width: 800px;
            
        }
        body{
            width: 800px;
            
        }
        button{
            
            font-size: 36px;
        }
        a{
            
            font-size: 36px;
        }
        select{
            font-size: 36px;
        }
    </style>
    <body>
        <div id="qr-reader" style="width:100%; height: 100%;"></div>
        <div id="qr-reader-results"></div>
    </body>
</html>


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
        let str = 'gp.admrad.ru';
        let test = lastResult.search('gp.admrad.ru');
        if(test == -1){
            alert('Подделка qr кода')
        }
        else{
            window.location.href = lastResult;
        }
        
    }
}

var html5QrcodeScanner = new Html5QrcodeScanner("qr-reader", { fps: 10, qrbox: 350 });
//html5QrcodeScanner.render({ facingMode: { exact: "environment" } }, onScanSuccess);
html5QrcodeScanner.render(onScanSuccess);
</script>