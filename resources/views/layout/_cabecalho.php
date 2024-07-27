<html>
<head>
    
    <link href="../css/tailwind.css" rel="stylesheet">

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
            overflow-x: hidden;
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
            <a href="{{route('paginas.pagina1')}}">Pagina 1</a>
            <a href="{{route('paginas.pagina2')}}">Pagina 2</a>
            <a href="{{route('paginas.pagina3')}}">Pagina 3</a>

            @if(Auth::guest())
                <a href="{{route('site.login')}}">Login</a>
            @else
                <a href="{{route('admin.cursos')}}">Cursos</a>

                <a href="#">{{Auth::user()->name}}</a>
                <a href="{{ route('site.login.sair') }}">Sair</a>
            @endif
            
        </div>
    </div>


    