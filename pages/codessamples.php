<?php
    include '../parts/header.php';
    include '../connect/connectmysql.php';
?>
<link rel="stylesheet" href="../Caroussel3D.css">
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
       width: 50%;
   }

   h1 {
       margin-left: 5%;
       margin-bottom: 3%;
   }

   .illustr {
    width: 25%;
    height: 50%;
    display: flex;
    flex-direction: row;
    margin-bottom: 2%;
    border: wheat solid 1px;
        }

    .selfie {
        width: 100%;
        height: 100%;
    }

    .legend{
        width: 50%;
    }

    .legtxt {
        width: 100%;
        height: 100%;
        background-color: white;
        color: black;
        opacity: 0.6;
            }

    .legtxt > p {
        width: 100%;
        height: 100%;
            }
</style>
<title>Codes Samples</title>
<h1>Bognoua ABDOULAYE Codes Samples</h1>
<section id="mutu">
    <?php
        $req3 = $pdo->query("SELECT * FROM codes_samples WHERE 1");
        while($article = $req3->fetch()){
            echo <<<ARTICLE
                <aside class="illustr">
                    <img class="selfie" src={$article->code_image} title={$article->nom}>
                </aside>
            ARTICLE;
        };
    ?>
</section>
<?php
    include '../parts/footer.php';
?>