<div class="main main_middle" id="main_middle">
    <h2>Menu</h2>
    <hr/>

    <!-- Presentation des produits sous forome de cartes -->
    <div class="middle_container">
    <?php 
        foreach ($dataItems as $Item) 
        {
        	echo 
        	'<div class = "card_container">
    	    	<img class = "image_card" src = "'.$Item['image_path'].'" alt = "image">
    	    	<div class = "content_title">'. $Item['title'] .'</div>
    	    	<div class = "card_price_content price_content"><span class = "price">'.$Item['price'].'</span> €</div>
    	    	<a href="#" class="add add_to_cart">Add to cart</a>
    	    </div>';
        }
    ?>
    </div>


</div>