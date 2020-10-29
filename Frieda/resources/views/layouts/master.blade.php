<html>
<head>
<title>蔬翠好友-農夫與民眾的好朋友</title>
<meta charset="utf-8">
<meta name="author" content="Frieda">
<link rel="icon"
    href="{{ URL::asset('https://bl3302files.storage.live.com/y4m2PKhbbZjrG0gpD8KD-F4G2COoUP-NvXGqQQ5Su6PTMxzb52HHo5_038IP0zOrCNQjXPaaHBRh0ukW2izTwd54_aQJ9yOOYKtbeCTsq3RpR1FPV0cDT74Dz-XqMGPZ97ZGTz2npd4CejFfcmm5o35gZ52WRt4pzTXJg6daiZvtl3yBBWJtUArYIR35eUEOTrw?width=512&height=512&cropmode=none') }}"
    type="image/x-icon" />
<link
    href="https://fonts.googleapis.com/css2?family=Noto+Serif+TC:wght@900&display=swap"
    rel="stylesheet">
<link rel='icon' href="../favicon.ico" type='image/x-icon'>
<link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
    integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2"
    crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
    crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet"
    href="https://www.w3schools.com/lib/w3-theme-light-green.css">
</head>
<body>
    <div class="container">
        <header class="row"> @include("includes.navbar") </header>
        <div id="main" class="row">@yield("content")</div>
        <footer id="footer" class="row"> @include("includes.footer") </footer>
    </div>
</body>
</html>