var titre = document.querySelectorAll("article.fondbleu2");  //Creation variable titre qui contient tous les articles de class fondbleu
var para = document.querySelectorAll("p.art");   // Idem avec para qui contient tous les paragraphes de class art

function afficher()  //Creation de la fonction afficher
{
	for (var i = 0; i < para.length; i++) {  // On parcours le contenu de para
		para[i].style.display="block";  // On affiche les paragraphes
		titre[i].style.boxShadow = "-1px 2px 5px 1px rgba(0, 0, 0, 0.7)", "-1px 2px 20px rgba(255, 255, 255, 0.6) inset;"; //  On affiche les ombres
	}	
}

function cacher() //  Creation de la fonction cacher
{
	for (var i = 0; i < para.length; i++) {
		para[i].style.display="none";   //On cache les paragraphes
		titre[i].style.boxShadow = "none"; // et les ombres
	}
}

window.addEventListener("load", function(event) { //  Creation du EventListener
	for (var i = 0; i < titre.length; i++) {
		titre[i].addEventListener("mouseover", afficher); //  Event mouseover
		titre[i].addEventListener("mouseout", cacher); //  Event mouseout
	}
	
});
