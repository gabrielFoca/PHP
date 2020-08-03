<?php
$assunto = $_POST['assunto'];
$corpo = 
"Assunto: "    .$_POST['assunto']." 
 Nome: "       .$_POST['nome']."
 E-mail: "     .$_POST['email']."
 Mensagem: "   .$_POST['mensagem']."
";

mail($_POST['email'], $assunto, $corpo, 'From: Mojang@meuOvo.com');
echo "Mensagem enviada com sucesso";

?>