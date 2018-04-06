<!DOCTYPE html>
<!--[if IE 8 ]><html class="no-js oldie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js oldie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->
<head>

   <!--- basic page needs
   ================================================== -->
   <meta charset="utf-8">
	<title>Samsun Bilgi Güvenliği Zirvesi</title>
	<meta name="description" content="">  
	<meta name="author" content="">

   <!-- mobile specific metas
   ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

 	<!-- CSS
   ================================================== -->
   <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">   
   <link rel="stylesheet" href="assets/css/datatables.min.css">   
   <link rel="stylesheet" href="assets/css/admin.css">   


   <!-- favicons
	================================================== -->
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
	<link rel="icon" href="favicon.ico" type="image/x-icon">
</head>
<body>
<h1>Toplam katılımcı: <span>{{ $participants_count }}</span></h1>
    <table id="participants" class="display hover">
        <thead>
            <tr>
                <td>ID</td>
                <td>İsim</td>
                <td>Email</td>
                <td>Telefon</td>
                <td>Kurum/Üniversite</td>
                <td>Kayıt</td>
            </tr>
        </thead>
        @foreach($participants as $participant)
            <tr>
                <td>{{ $participant->id }}</td>
                <td>{{ $participant->name }}</td>
                <td>{{ $participant->email }}</td>
                <td>{{ $participant->phone }}</td>
                <td>{{ $participant->from }}</td>
                <td>{{ $participant->created_at }}</td>
            </tr>
        @endforeach
    </table>

	
   <!-- script
   ================================================== -->
   <script src="assets/js/jquery-2.1.3.min.js"></script>
   <script src="assets/js/datatables.min.js"></script>
   <script src="assets/js/admin.js"></script>
</body>
</html>