let navbar = document.querySelector('#navbar')
let navbarBrand = document.querySelector('#navbarBrand')
let navbarLink = document.querySelectorAll('.nav-link')

document.addEventListener('scroll',()=>{

if(window.pageYOffset > 20){
    navbar.classList.remove('bg-transparent')
    navbar.classList.add('bg-white', 'shadow')
    navbarBrand.classList.add('text-dark')
    navbarLink.classList.add('text-dark')
}else{
    navbar.classList.remove('bg-white', 'shadow')
    navbar.classList.add('bg-transparent')
    navbarBrand.classList.remove('text-dark')
}
})


