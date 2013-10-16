<html>
<head>
	<title> Halaman Login </title>
</head>

<body bgcolor="skyblue" >

	<div style="width:250;background-color:white; padding:20px;">
	<script type="text/javascript">
		var user = "ahmad";
		var pass = "bepe";
		
		function validasi(form){
		if (form.username.value == ""){
		form.username.focus();
		return (false);
		}
		else if(form.password.value == ""){
		form.password.focus();
		return(false);
		}
		
		huruf=/^[a-zA-Z]/;
		if ((!huruf.test(form.username.value)) | (!huruf.test(form.password.value))){
		alert ('USERNAME dan PASSWORD harus Huruf');
		form.username.focus();
		return (false);
		}
		
		if((form.username.value!=user) | (form.password.value!=pass)){
		alert('maaf, username dan password tidak sesuai');
		form.username.focus();
		return false;
		}
		if((form.username.value==user) && (form.password.value==pass)){
		alert('Selamat Datang '+user+', password anda '+pass);
		return true;
		}
		
		return (true);
		}		
		
	</script>
		<form action="<?php $_SERVER['PHP_SELF'];?>" onsubmit="return validasi(this)">
		USERNAME <br/>
		<input type="text" name="username" style="width:200px" /> <br/>
		PASSWORD <br/>
		<input type="text" name="password" style="width:200px" /> <br/>
	
		<input type="submit" value="LOGIN" />
		</form>
	</div>
	
</body>
</html>