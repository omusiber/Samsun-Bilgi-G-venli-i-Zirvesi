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
            span{
                display: block;
            }
            
        </style>
    </head>
    <body>
        <div class="container">
            @yield('content')
        </div>  
    </body>
</html>