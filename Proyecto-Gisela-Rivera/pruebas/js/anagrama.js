

function anagrama(){
	
	var palabra = document.getElementById("txtn1").value;
var posibleAnagrama = document.getElementById("txtn2").value;

  // Cambiar a minúsculas ambas cadenas
  palabra = palabra.toLowerCase();
  posibleAnagrama = posibleAnagrama.toLowerCase();
  
  // Convertir ambas cadenas en un arreglo
  palabra = palabra.split("");
  posibleAnagrama = posibleAnagrama.split("");
  
  // Ordenar ese arreglo
  palabra = palabra.sort();
  posibleAnagrama = posibleAnagrama.sort();
  
  // Una vez ordenados, los convertimos a cadena nuevamente
  palabra = palabra.join("");
  posibleAnagrama = posibleAnagrama.join("");
  
  // Finalmente comparamos
  
  if(palabra === posibleAnagrama){
    alert  ("Es anagrama") ;
  }else{
    alert  ("No es anagrama") ;
  }
}