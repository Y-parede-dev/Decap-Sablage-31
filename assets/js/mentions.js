function mentions(){
    var content = document.getElementById("container_mentions");
    var contentDisplay = content.style.display;
    if(contentDisplay == "none"){
      content.style.display = "block";
    }else{
      content.style.display ="none";
  }
}