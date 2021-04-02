let navbar = document.querySelector('#navbar')


document.addEventListener('scroll',()=>{

if(window.pageYOffset > 20){
    navbar.classList.remove('bg-transparent')
    navbar.classList.add('bg-warning', 'shadow')
}else{
    navbar.classList.remove('bg-white', 'shadow')
    navbar.classList.add('bg-transparent')
}
})

let togglerIcon = document.querySelector('#togglerIcon')

document.addEventListener('click',()=>{
    togglerIcon.classList.toggle('fa-rotate-180')
})


