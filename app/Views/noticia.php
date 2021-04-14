<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $noticia['titol']; ?></title>

    <link rel="stylesheet" href="<?php echo base_url('css/styles.css'); ?>">
</head>
<body>

    <header>
        <h1>PAC2. Backend d'un portal de notícies i un API de consulta bàsic</h1>
    </header>

    <main>
        <a href="<?php echo base_url(); ?>/noticies" class="torna"> < Totes les noticies</a>
        <div>
            <h2>
                <?php echo $noticia['titol']; ?>
            </h2>
            <p>Autor: <?php echo $noticia['autor'] ?></p>
            <p class="data">Data publicació: <?php echo $noticia['data_publicacio']; ?></p>
            <img src="<?php 
                if(preg_match("/^http.*/", $noticia['imatge'])) {
                    echo $noticia['imatge'];
                } else {
                    echo base_url('images/'.$noticia['imatge']);
                }
                ?>" alt="">
            <?php echo $noticia['contingut'] ?>
        </div>
        
    </main>
    <footer>Domènec Cintes Sastre</footer>
    
</body>
</html>