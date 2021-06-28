<!DOCTYPE html>

<html>

<head>

    <title>Generate QR Code</title>

</head>

<body>
<div class="visible-print text-center">

    <h1>QR Code Generator Example</h1>

     

    {!! QrCode::size(250)->generate('tony'); !!}

    <p>Done by Bosscode Solutions.</p>
    
</div>
</body>
</html>