<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Projeto 1</title>
    </head>
    <body>
        <pre>
        <?php
        require_once 'Video.php';
        require_once 'Gafanhoto.php';
        require_once 'Visualizacao.php';
        
        $v [0] = new Video ("Aula 1 de POO");
        $v [1] = new Video ("Aula 2 de PHP");
        $v [2] = new Video ("Aula 3 de HTML");
        
        $g [0] = new Gafanhoto ("isa", "22" ,"F", "isalogin");
        $g [1] = new Gafanhoto ("elisa", "25", "F", "elisalogin");
        
        $vis[0] = new Visualizacao ($g[0], $v[2]);
        $vis[1] = new Visualizacao ($g[1], $v[0]);
        
        $vis[0]->avaliar();
        $vis[1]->avaliarPorc(85);
      
        print_r($v);
        print_r($g);
        print_r($vis);
                   
        ?>
        </pre>
    </body>
</html>
