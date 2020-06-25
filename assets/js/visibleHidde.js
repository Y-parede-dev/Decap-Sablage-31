// fonction qui affiche / et cache un menu deroulant par exemble //

function visibleHidde(){
  var content = document.getElementById("content");
  var contentDisplay = content.style.display;
  if(contentDisplay == "none"){
    
    content.style.display = "block";
  }else{
    content.style.display ="none";
}

  // le console.log n'a aucune importance, il a permis le reglage de la fonction


 // console.log(contentDisplay);

}