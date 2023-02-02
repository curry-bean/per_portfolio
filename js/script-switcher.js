/*-------toggle style switcher--------*/
const styleSwitcherToggle = document.querySelector(".style-switcher-toggler");
styleSwitcherToggle.addEventListener("click", () =>{
    document.querySelector(".style-switcher").classList.toggle("open");
})
//hide style switcher on scroll
window.addEventListener("scroll", () =>{
    if(document.querySelector(".style-switcher").classList.contains("open"))
    {
        document.querySelector(".style-switcher").classList.remove("open");
    }
})
/*---------theme  colors-----*/
const alternativeStyles = document.querySelectorAll(".alternative-style");
function SetActiveStyle(color)
{
    alternativeStyles.forEach((style) =>{
        if(color === style.getAttribute("title"))
        {
            style.removeAttribute("disabled");
        }
        else{
            style.removeAttribute("disable", "true");
        }
    })
}
/*-----------theme light and dark mode--------------*/
const dayNight = document.querySelector(".day-night");
dayNight.addEventListener("click", () =>{
    dayNight.querySelector("i").classList.toggle("fa-sun-o");
    dayNight.querySelector("i").classList.toggle("fa-moon-o");
    document.body.classList.toggle("dark");
})
// window.addEventListener("load", () => {
//    if(document.body.classList.contains("dark"))
//    {
//     dayNight.querySelector("i").classList.add("fa fa-sun-o");
//    }
//     dayNight.querySelector("i").classList.add("fa fa-moon-o");

// })