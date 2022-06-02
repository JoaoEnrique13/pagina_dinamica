var i = setInterval(function () {
    clearInterval(i);
    
    document.getElementById("loading").style.display = "none";
    document.getElementById("content").style.display = "block";
   
}, 900);