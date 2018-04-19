<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title> Validação de E-mail com JavaScript</title>
<script src="validate-email.js"></script>
</head>
<body>
<form name="f1">
<h3> Validação de E-mail com JavaScript</h3>
<hr color='gray'>
<table>
<tr>
<td>
E-mail:
<input type="text" name="email" onblur="validacaoEmail(f1.email)"  maxlength="60" size='65'>
</td>
<td>
<div id="msgemail"></div>
</td>
</tr>
</table>
<hr color='gray'>
</form>
</body>
</html>