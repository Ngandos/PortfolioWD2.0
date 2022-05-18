<?php
    include '../parts/header.php';
    include '../connect/connectmysql.php';
?>
<link rel="stylesheet" href="../Caroussel3D.css">
<title>Projects</title>
<style>
    #mutu {
        width: 100%;
        height: 50%;
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
        justify-content: space-around;
        margin-bottom: 5%;
            }
    
    p {
       margin-top: 10%;
       width: 50%;
   }

    h1 {
       margin-left: 5%;
       margin-bottom: 3%;
   }

    .illustr {
        width: 30%;
        height: 60%;
        display: flex;
        margin-bottom: 2%;
        border: wheat solid 1px;
            }

    .selfie {
        width: 100%;
        height: 100%;
    }

    span {
        width: 100%;
        height: 20;
    }
</style>
<h1>Bognoua ABDOULAYE Projets</h1>
<section id="mutu">
    <?php
        $req3 = $pdo->query("SELECT * FROM projets WHERE 1");
        while($article = $req3->fetch()){
            echo <<<ARTICLE
                <aside class="illustr">
                    <img class="selfie" src={$article->image_acceuil} title={$article->nom}>
                </aside>
                
            ARTICLE;
        };
    ?>
</section>
