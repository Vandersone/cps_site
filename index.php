

<?php include_once("lib/includes.php");?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <base href="<?php echo url_site;?>">
   
    
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/sistema.css">
    <link rel="stylesheet" href="css/estilo.css">

     <title><?php geraTitulo(titulo_site);?></title>
</head>








<body>
    <img src="images/template/DIAS.jpg" width="500px" left="30px" top="10px">

    <header>



        <a href="#" class="logo"></a>



        <input type="checkbox" id="menu-bar">
        <label for="menu-bar">MENU</label>



        <nav class="navbar">
            <ul>

                <li><a href="#">INICIO</a></li>
              
                <li><a href="#">CPS</a>
                
                <ul>
                    
                    <li><a href="membros">QUEM SOMOS</a></li>
                    <li><a href="membros">HISTORIAL</a></li>
                    <li><a href="membros">MISSÃO</a></li>
                    <li><a href="membros">VISÃO</a></li>
                    <li><a href="portifolio">VALORES</a></li>
                    
                </ul>

            </li>




              
               
                <li><a href="noticia">NOTICIAS</a>



                <li><a href="#">PERGUNTAS FREQUENTES</a>
                <li><a href="video">CULTURA E DESPORTOS</a></li>
                <li><a href="legislacao">LEGISLAÇÃO</a></li>
                <li><a href="contato">CONTACTOS</a></li>
                   

                </li>

                   

                   


                 
          
        </nav>

    </header>
    <?php paginacao();?>





















    

    





    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/97bdcc5c17.js"></script>
  

</body>

</html>













