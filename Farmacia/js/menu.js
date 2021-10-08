const init = document.querySelector('.init')
const menu = document.querySelector('.menu')

//console.log(menu)
//console.log(init)

init.addEventListener('click', ()=>{
    menu.classList.toggle("spread")
})

window.addEventListener('click', e=>{
    if(menu.classList.contains('spread') && e.target != menu && e.target!= init){
            menu.classList.toggle("spread")
    }
})