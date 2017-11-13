<div class="main main_middle" id="main_middle2">
    <div id="liste_title_menu">
        <h2>Menu</h2>
    </div>
    <hr/>

    <!-- Presentation des produits sous forme de liste -->
    <div class="middle_container">
    <?php 
        foreach ($dataItems as $Item) 
        {
            echo
            '<div class="liste_element_container">
                <img class="image_liste_card" src="'.$Item['image_path'].
                '" alt="fef">
                <div class="content_title">'.$Item['title'].
                '</div>
                <div class="price_content">
                    <span class="price">'.$Item['price'].
                    '</span> €
                </div>
                <a href="#" class="add">Add to cart</a>
            </div>';
        }
    ?>
    </div>
   
</div>