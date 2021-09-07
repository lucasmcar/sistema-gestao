const lightDark = function (){

    let light    =  document.querySelector('.side-nav');
    let light2    =  document.querySelector('.side-menu');
    let light3   =  document.querySelector('.nav');
    let textChange = document.querySelector('#mode');

     light.classList.toggle('side-nav-dark');
     light2.classList.toggle('side-menu-dark');
     light3.classList.toggle('nav-dark');

     if(light.hasAttributes() === 'side-nav-dark' &&
         light2.hasAttributes() === 'side-menu-dark' &&
     light3.hasAttributes() === 'nav-dark'){
         textChange.innerHTML = 'Modo Claro';
     }

}
