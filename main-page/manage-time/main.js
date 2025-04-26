let icon = document.getElementById("icon");

icon.addEventListener('click', changeIcon);

function changeIcon(){
    if(icon.src.includes('menu.png')){  // Checking if the src includes "menu.png"
        icon.src = 'images/x-symbol.png';  // Change the image source to 'x-symbol.png'
    } else {
        icon.src = 'images/menu.png';  // Change the image back to 'menu.png'
    }

    let nav = document.getElementById("nav");

    if(nav.style.display === 'flex'){
        nav.style.display = 'none';
    }else{
        nav.style.display = 'flex';
    }


}
