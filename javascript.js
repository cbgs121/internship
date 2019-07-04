$(function(){
        setTimeout(function() {
                     $('.fly-in-text').removeClass('hidden');
                 }, 500);
                 
             })();
             function myFunction() {
    location.replace("http://localhost/ntpc/index.php")
}
             function userFunction() {
    location.replace("http://localhost/ntpc/login.php")
}
             function NuserFunction() {
    location.replace("http://localhost/ntpc/newuser.php")
}
             function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
    document.getElementById("main").style.marginLeft = "250px";
    document.body.style.backgroundColor = "rgba(255,0,0,0.4)";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginLeft= "0";
    document.body.style.backgroundColor = "white";
}