function myFunction(x){
    x.classList.toggle("change");
    
    // document.getElementById("mysidebar").style.width = "250px";
    closesidebar(document.getElementById("mysidebar").style.width);
  }
  
  function closesidebar(x){
    if (x == "250px"){
    document.getElementById("mysidebar").style.width = "0px";
    }else{
    document.getElementById("mysidebar").style.width = "250px";
    }
  }