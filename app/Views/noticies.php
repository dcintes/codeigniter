<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Noticies</title>

    <link rel="stylesheet" href="<?php echo base_url('css/styles.css'); ?>">
</head>
<body>

    <header>
        <h1>PAC2. Backend d'un portal de notícies i un API de consulta bàsic</h1>
    </header>

    <main class="news">
        
        <?php foreach ($noticies as &$noticia) { ?>
            <div>
                <h2><a href="<?php echo base_url(); ?>/noticies/noticia/<?php echo $noticia['id'] ?>">
                    <?php echo $noticia['titol']; ?>
                </a></h2>
                <p class="data"><?php echo $noticia['data_publicacio']; ?></p>
            
            </div>
        <?php } ?>


    </main>
    <footer>Domènec Cintes Sastre</footer>
    
    
</body>
</html>