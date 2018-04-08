<html>
    <head>
        <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">            
        <style>
            body {
                font-family: 'Raleway', sans-serif;
            }
            h1 {
                color: #008e62;
                text-align: center;
            }
            hr {
                border-top: 1px solid rgba(255, 221, 221, 0.1);
            }
            div.container {
                border-radius: 10px;
                background: #141414;
                padding: 20px;
                box-shadow: 0 14px 28px rgba(0,0,0,0.25), 0 10px 10px rgba(0,0,0,0.22);
            }
            div.row.header,div.row.body,div.row.footer,div.row.info {
                color: #fff;
                padding: 20px;
            }
            div.row.header{
                font-size: 1.5rem;
            }
            div.row img{
                width: 100px;
                height: 100px;
                display: block;
                margin: 0 auto;
            }
            div.row.body{
                text-align: justify;
            }
            span{
                display: block;
            }
            
        </style>
    </head>
    <body>
        <div class="container">
            @yield('content')
            <div class="row footer">
                Saygılarımızla <br>
                Bilgi Güvenliği Zirvesi Etkinlik Kurulu
            </div>
            <hr>
            
            <div class="row info">
                    Yer: Ondokuz Mayıs Üniversitesi Mühendislik Fakültesi Konferans Salonu<br>
                    Tarih: 26 - 27 Nisan 2018<br>
                    Saat: 09.30 - 17.00 / 10.00 - 12.30
                </div>
            <div class="row">
                <img src="https://bilgiguvenligizirvesi.com/assets/images/omusiber.png" alt="">
            </div>
        </div>  
    </body>
</html>