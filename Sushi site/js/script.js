$(document).ready(function(){

    /* Initialisation de la variable total a 0, 
    qui représente le prix des produits choisis par le client*/

    var total = 0;

    /* on lie aux boutons de classes add, l'eveneement click
     * pour ajouter le titre et le prix dans la liste #cart 
     * et on ajoute le prix a la variable total
    */
    $('.add').click(function(){
        var parent = $(this).parent();
        var title = parent.find('.content_title').text();
        var price = parent.find('.price').text()*1;

        var newItemCart = document.createElement('li');
        newItemCart.innerText = title +' '+price+' €';
        $('#cart').append(newItemCart);

        total += price;
        $('#total').html(total.toFixed(2));

        return false;
    })  

    /*
     * Le bouton d'id reset permet de vider la liste #cart
     * et de remettre la variable total a 0
     */
    $("#reset").click(function(){
        total = 0;
            $('#total').empty();
            $('#cart').empty();

        return false;
    })

    /*
     * on lie aux bouton d'id command, l'evenement click
     * celui ci est factice et ne sert qu'a afficher 
     * un message alert presentant le prix sauf si celui ci est egal a 0
     */
    $('#command').click(function(){
        if(total == 0){
            alert("Vous n'avez encore rien commandé!")
        } else {
            alert("Nous avons bien pris en compte votre commande de "+total.toFixed(2)+" €, nous nous en occupons immédiatement.")
        }
    });

    /*
     * Gestion de la date via une 
     * variable year pour les droits réservés
     */
    var date = new Date();  
    var year = date.getFullYear();
    $('#year').text(year) ;
})