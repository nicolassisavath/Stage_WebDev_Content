<main>
    <?php
    // Le menu main comporte les deux parties main_left et main_right fixes
    // Seule la partie centrale varie en fct des valeurs envoyées dans l'url
    
        include "views/main_left.php";

        if( !empty($_GET['view']) AND $_GET['view'] == 'produit' )
        {
            include 'views/cartes.php';
        }
        elseif( !empty($_GET['view']) AND $_GET['view'] == 'liste' )
        {
            include 'views/liste.php';
        }
        else
        {
            include "views/main_index.php";
        }

        include "views/main_right.php";
    ?>
</main>