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
            div.container {
                border-radius: 10px;
                background: #ffffff;
                padding: 20px;
                box-shadow: 0 14px 28px rgba(0,0,0,0.25), 0 10px 10px rgba(0,0,0,0.22);
            }
            div.row.header,div.row.body,div.row.footer,div.row.info {
                color: #000;
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
            span{
                display: block;
            }
            
        </style>
    </head>
    <body>
        <div class="container">
            <h1>
                Kaydınız Onaylandı!
            </h1>
            <hr>
            <div class="row header">
                Merhaba {{$participant->name}}!
            </div>
            <div class="row body">
                <span>
                    Sizi bu güzel etkinlikte aramızda görmekten onur duyacağımızı belirtmek isteriz! Etkinlik boyunca birbirinden güzel konferanslar ve çekilişler gerçekleşecektir.
                    Aynı zamanda, etkinlik alanındaki standları gezebilirsiniz. İlgili durumlarda, bilgilendirme için bu mail adresi kullanılacaktır.
                </span>
                <span>
                    Etkinlik hakkında detaylı bilgiyi <a href="https://bilgiguvenligizirvesi.com"> web sitemizden </a> öğrenebilirsiniz.
                </span>
            </div>
            <div class="row footer">
                Saygılarımızla <br>
                Bilgi Güvenliği Zirvesi Etkinlik Kurulu ve OMUSiber Yönetim Kurulu
            </div>
            <hr>

            <div class="row info">
                    Yer: Ondokuz Mayıs Üniversitesi Mühendislik Fakültesi Konferans Salonu<br>
                    Tarih: 26 - 27 Nisan 2018<br>
                    Saat: 09.30 - 17.00 / 09.30 - 12.30
                </div>
            <div class="row">
                <img src="assets/images/omusiber.png" alt="">
            </div>
        </div>  
    </body>
</html>