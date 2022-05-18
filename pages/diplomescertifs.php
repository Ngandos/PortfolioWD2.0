<?php
    include '../parts/header.php';
    include '../connect/connectmysql.php';
?>
<link rel="stylesheet" href="../Caroussel3D.css">
<style>
    #mutu {
        width: 100%;
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
        margin-bottom: 5%;
    }

   h1 {
       margin-left: 5%;
       margin-bottom: 3%;
   }

   .illustr {
    width: 25%;
    margin: auto;
    margin-bottom: 1%;
    border: wheat solid 1px;
        }

    .selfie {
        width: 100%;
        height: 100%;
            }
</style>
<title>Certifications</title>
<h1>Bognoua ABDOULAYE Diplomes & Certifications</h1>
<section id="mutu">
    <?php
        $req3 = $pdo->query("SELECT * FROM diplomes WHERE 1");
        while($article = $req3->fetch()){
            echo <<<ARTICLE
                <aside class="illustr">
                    <img class="selfie" src={$article->image} title={$article->nom}>
                </aside>
            ARTICLE;
                };
    ?>
</section>
<section id="second">
    
</section>
