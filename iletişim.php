<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giriş Yap</title>
    <link rel="stylesheet" href="iletişimphp.css">
</head>
<body>
<div><a href="../ANASAYFA/index.html" class="back">ANASAYFAYA GİTMEK İÇİN TIKLA</a></div>
   
   <div  class="capsule">
 <table class="table container " id="form">
		<thead>
			<tr >
				<th scope="col" >Bilgiler</th>
				   
			</tr>
		</thead>
		<tbody>
			<tr>
				<th scope="row">İsim:</th>
				<td><?php echo $_POST["isim"]?></td>
			</tr>
			<tr>
				<th scope="row">Soyisim:</th>
				<td><?php echo $_POST["soyisim"]?></td>
			</tr>
			<tr>
				<th scope="row">Email:</th>
				<td><?php echo $_POST["email"]?></td>
			</tr>
            <tr>
                <th scope="row">Telefon:</th>
                <td><?php echo $_POST["tel"]?></td>
            </tr>
			<tr>
				<th scope="row">Cinsiyet:</th>
				<td><?php echo $_POST["cinsiyet"]?></td>
			</tr>
			<tr>
				<th scope="row">Mesaj:</th>
				<td><?php echo $_POST["mesaj"]?></td>
			</tr>
		</tbody>
	</table>
</div>

   

</body>

</html>