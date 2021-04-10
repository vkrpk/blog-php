let burger = document.getElementsByClassName("burger")[0]
let menuDeroulant = document.getElementsByClassName("menuDeroulant")[0]
function active() {
    if (menuDeroulant.classList.contains("active")) {
        menuDeroulant.classList.remove("active")
    } else {
        menuDeroulant.classList.add("active")
    }
}
burger.addEventListener("click", active)

console.log("ee")