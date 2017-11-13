$(document).ready(function(){
	// Cette ligne de code est une manière 'arangée' de scroller la discussion en bas(cad tant que la taille de la discussion n'excède pas 9999999 px). Cela permet de toujours visualiser le dernier message de la discussion.
	$('#discussion_container').animate({
            scrollTop: 9999999+'px'}, 0);
})