<!DOCTYPE html>
<html>
<head>
<title>Registration form</title>
</head>
 
<body>
	<form method="post">
    <h1 align="center"> EMPLOYEE REGISTRATION FORM</h1>
		<table width="600" align="center" border="1" cellspacing="5" cellpadding="5">
	<tr>
		<td colspan="2"><?php echo @$error; ?></td>
	</tr>	
  <tr>
    <td width="230">Enter Your Name </td>
    <td width="329"><input type="text" name="name"/></td>
  </tr>
  
  <tr>
    <td>Enter Your Email </td>
    <td><input type="text" name="email"/></td>
  </tr>
  
  <tr>
    <td>Enter Your Password </td>
    <td><input type="password" name="pass"/></td>
  </tr>
 
  <tr>
    <td>Enter Your Mobile </td>
    <td><input type="text" name="mobile"/></td>
  </tr>
  
  
  <tr>
    <td colspan="2" align="center">
	<input type="submit" name="register" value="Register Me"/></td>
  </tr>
</table>
 
	</form>
</body>
</html>
