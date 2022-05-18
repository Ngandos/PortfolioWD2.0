<?php
    function getContent(){
        if(!isset($_GET['page'])){
            include __DIR__. '/../index.php';
                }
        else {
            switch($_GET['page']){
                case "About Me" :
                    include __DIR__. '/../pages/aboutme.php';
                    break;
                case "Accueil" :
                    include __DIR__. '/../pages/acceuil.php';
                    break;
                case "Codes Samples" :
                    include __DIR__. '/../pages/codessamples.php';
                    break;
                case "Projets" :
                    include __DIR__. '/../pages/projets.php' ;
                    break;
                case "Contact" :
                    include __DIR__. '/../pages/contact.php';
                    break;
                case "diplomescertifs.p" :
                    include __DIR__. '/../pages/codessamples.php';
                    }
                }
            } 

    function getPart($name){
        include __DIR__. '/'.$name.'.php';
            }
?>