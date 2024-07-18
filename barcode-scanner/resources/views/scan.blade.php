<!DOCTYPE html> 
 <html lang="en"> 
  <head> 
      <meta charset="UTF-8"> 
     <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
      <title>Barcode/QR Code Scanner</title> 
     <script src="https://unpkg.com/html5-qrcode/minified/html5-qrcode.min.js"></script> 
 </head> 
  <body> 
     <h1>Scan Barcode/QR Code</h1> 
    <div id="reader" style="width: 500px;"></div> 
     <div id="result"></div> 
   
     <script> 
        function onScanSuccess(decodedText, decodedResult) { 
            document.getElementById('result').innerText = `Scanned Code: 
            ${decodedText}`; 
             // Send the scanned data to the server 
             fetch('/scan', { 
                method: 'POST', 
                 headers: { 
                    'Content-Type': 'application/json', 
                     'X-CSRF-TOKEN': '{{ csrf_token() }}' 
                 }, 
                 body: JSON.stringify({ code: decodedText }) 
            }) 
             .then(response => response.json()) 
            .then(data => console.log(data)) 
             .catch(error => console.error('Error:', error)); 
         } 
   
         let html5QrcodeScanner = new Html5QrcodeScanner( 
             "reader", { fps: 10, qrbox: 250 }); 
         html5QrcodeScanner.render(onScanSuccess); 
     </script> 
 </body> 
 </html> 