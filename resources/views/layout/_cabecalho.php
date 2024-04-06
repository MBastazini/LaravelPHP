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
    </style>
</head>
<body>
    <div id="navbar">

        <a href='/'><img src="<?php echo e(asset('img/abacate.png')); ?>" alt="Logo da empresa"></a>

        <div>
            <a href="/paginas/1">Pagina 1</a>
            <a href="/paginas/2">Pagina 2</a>
            <a href="/paginas/3">pagina 3</a>
        </div>
    </div>