<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Menu</title>

    <link rel="icon" href="favicon.png" type="image/x-icon" />
    <link rel="stylesheet" href="assets/demo.css">
    <link rel="stylesheet" href="assets/navigation-icons.css">
    <link rel="stylesheet" href="assets/slicknav/slicknav.min.css">

    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


</head>

<body>

<nav class="menu-navigation-icons">
    <a href="perfil.html" class="menu-magenta"><i class="fa fa-address-card"></i><span>Perfil</span></a>
    <a href="doar.html" class="menu-blue"><i class="fa fa-heart"></i><span>Faça uma doação</span></a>
    <a href="receber.html" class="menu-yellow"><i class="fa fa-smile-o"></i><span>Fazer um pedido</span></a>
    <a href="historico_mensagens.html" class="menu-green"><i class="fa fa-comment"></i><span>Mensagens</span></a>
</nav>

<br>
<br>
<div class="menu">

    <img class="arrow" src="sgsp logo.png" alt="arrow" height="120">

<br>
<br>
    <h1>Helping Hand</h1>



</div>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="assets/slicknav/jquery.slicknav.min.js"></script>

<script>
    $(function(){
        $('.menu-navigation-icons').slicknav();
    });
</script>

</body>

</html>
