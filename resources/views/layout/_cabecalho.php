<html>
<head>
    <title><?php echo $__env->yieldContent('titulo'); ?></title>
    <style>
        *{
            margin: 0;
            padding: 0;
        }

        body{
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        #navbar{
            width: 100vw;
            display: flex;
            height: 80px;
            justify-content: space-around;
            align-items: center;
            background-color: antiquewhite;
        }
        img{
            height: 70px;
        }
        section{
            flex: 1;
            padding: 30px;
        }
        #footer{
            height: 50px;
            background-color: burlywood;
        }
        #cabecalho{
            display: flex;
            gap: 30px;
        }
        #cabecalho a{
            transition: 0.25s;
        }
        #cabecalho a:hover{
            color: blue;
        }
    </style>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

</head>
<body>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js" defer></script>

    <div id="navbar">
        
        <a href='./'><img src="<?php echo e(asset('img/abacate.png')); ?>" alt="Logo da empresa"></a>

        <div id="cabecalho">
            <a href="./1">Pagina 1</a>
            <a href="./2">Pagina 2</a>
            <a href="./3">Pagina 3</a>
            <a href='../admin/cursos'>ADMIN - Tela de cursos</a>
        </div>
    </div>


    