<?php 
require_once __DIR__.'/HTMLElement.php';
require_once __DIR__.'/baseinput.php';
require_once __DIR__.'/button.php';
require_once __DIR__.'/psswordinput.php';
require_once __DIR__.'/textinput.php';
require_once __DIR__.'/form.php';

$form =new form();
$form->addElement(new textinput('firstname','First Name'));
$form->addElement(new textinput('email','Email'));
$form->addElement(new passwordinput('password','password'));
$form->addElement(new button('Submit'));

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php echo $form->render(); ?>
</body>
</html>
