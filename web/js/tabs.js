var aArr=document.querySelectorAll('a');
for(var i=0;i<aArr.length;i++){
  aArr[i].onclick=function(){
     var active=document.querySelector(".active");
     active.classList.remove("active");
     this.classList.add("active");
     var name=this.getAttribute("data-cont");
     var section=document.getElementById(name);
     var cont = document.getElementsByClassName("cont");
     for(var i=0;i<cont.length;i++){
      cont[i].style.display="none";

     }
     section.style.display="block";
  }
}