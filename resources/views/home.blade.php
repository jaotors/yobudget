<!DOCTYPE html>
<html>
<head>
    <title>Yo! Budget</title>
    <link rel="stylesheet" href="{{URL::asset('css/app.css')}}" type="text/css">
</head>
<body>

    <header>
        <div class="container-title">
            <div class="row">
                <div class="col s1">
                    <a href="#"><i class="fa fa-bars"></i></a>
                </div>

                <div class="col s10">
                    <h1>Dashboard</h1>
                    <div class="money-container">
                        <p class="current-monney">: 1,000 PHP</p>
                    </div>
                </div>

                <div class="col s1">
                    <p class="date-today">03/14/2015</p>
                </div>
            </div>
        </div>

        <div class="nav-container"></div>
    </header>






    <script src="{{URL::asset('js/jquery.min.js')}}" type="text/javascript"></script>
    <script src="{{URL::asset('js/materialize.min.js')}}" type="text/javascript"></script>
    <script src="{{URL::asset('js/scripts.js')}}" type="text/javascript"></script>

    <script id="__bs_script__">//<![CDATA[
    document.write("<script async src='http://HOST:3000/browser-sync/browser-sync-client.2.14.0.js'><\/script>".replace("HOST", location.hostname));
//]]></script>
</body>
</html>
