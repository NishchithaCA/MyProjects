function hide(elementID) { 
	var myElement = document.getElementById(elementID); 
	if (myElement) myElement.style.display = "none"; 
	showLink.style.display = "block"; 
	hideLink.style.display = "none"; 
} 

function show(elementID) { 
	var myElement = document.getElementById(elementID); 
	if (myElement) myElement.style.display = "block"; 
	showLink.style.display = "none"; 
	hideLink.style.display = "block"; 
}