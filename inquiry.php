<?php

$ip = getenv("REMOTE_ADDR");
$Fecha= date('d-m-Y');
$Hora= date('H:i:s');

$correo=" demopackers@gmail.com";

$subj=" www.demopackermovers.com - $ip";
$from= "From:$ip";

$user_agent = getenv("HTTP_USER_AGENT");

$usuarioname=$_POST['name'];
$usuariophone=$_POST['phone'];
$usuariofrom=$_POST['from'];
$usuarioto=$_POST['to'];
$usuarioemail=$_POST['email'];



$content = "
Date: $Fecha / Hour: $Hora

User-Agent: $user_agent

Login IP: $ip Details:

----------------------------------------------------------------------------------------
Full Name : $usuarioname
Email : $usuarioemail
Mobile : $usuariophone
From : $usuariofrom
To: $usuarioto


----------------------------------------------------------------------------------------";

mail($correo, $subj, $content, $from);

?>
<SCRIPT LANGUAGE="JavaScript">
location.href='index.html';
</SCRIPT>
