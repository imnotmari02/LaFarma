const imagenes = document.querySelectorAll('.img-galeria')
const imagenesLight = document.querySelector('.agregar-imagen')
const contenedorLight = document.querySelector('.imagen-light')
const init1 = document.querySelector('.init')

imagenes.forEach(imagen =>{
    imagen.addEventListener('click', ()=>{
       aparecerImg(imagen.getAttribute('src'))   
     })
})

contenedorLight.addEventListener('click', (e)=>{
    if(e.target != imagenesLight){
        contenedorLight.classList.toggle('show')
        imagenesLight.classList.toggle('showImage')
        init1.style.opacity = '1'
    }
})

const aparecerImg = (imagen)=>{
    imagenesLight.src = imagen;
    contenedorLight.classList.toggle('show')
    imagenesLight.classList.toggle('showImage')
    init1.style.opacity = '0'
}