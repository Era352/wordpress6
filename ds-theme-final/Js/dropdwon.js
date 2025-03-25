console.log("Testing")
let dropdown = document.querySelector('.menu'), //ul
submeny = document.querySelector('.sub-menu'),//ul li a
buttonclick = document.querySelector('.check-button'),//button
hamburger =  document.querySelector('.menu-icon');

buttonclick.addEventListener('click', ()=> {
    dropdown.classList.toggle('togle');
    if(submenu){
        submenu.classList.toggle('show-dropdown');
    }
    hamburger.classList.toggle('animate-button')
})