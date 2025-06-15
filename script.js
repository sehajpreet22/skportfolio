let nav = document.querySelector(".navbar");
window.onscroll = function() {
    if(document.documentElement.scrolltop > 100){
        nav.classListlist.add("header-scrolled");
    }
    else{
        nav.classList.remove("header-scrolled");
    }
}
//nav hide
let navBar = document.querySelectorAll(".nav.link");
let navCollapse = document.querySelector(".navbar-collapse.collapse");
navBar.forEach(function(a){
    a.addEventListener("click",function(){
        navCollapse.classList.remove("show");
    })
})