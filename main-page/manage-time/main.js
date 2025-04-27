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

// main.js

document.addEventListener('DOMContentLoaded', () => {
  let draggedCard = null;

  // 1) make cards draggable and hide them while dragging
  document.querySelectorAll('.card').forEach(card => {
    card.addEventListener('dragstart', e => {
      draggedCard = card;
      // give it a moment to pick up before hiding
      setTimeout(() => card.style.display = 'none', 0);
    });

    card.addEventListener('dragend', e => {
      // show the card again when done
      setTimeout(() => {
        draggedCard.style.display = 'flex';
        draggedCard = null;
      }, 0);
    });
  });

  // 2) allow each column to receive drops
  document.querySelectorAll('.column').forEach(col => {
    col.addEventListener('dragover', e => {
      e.preventDefault();          // without this, drop is disallowed
    });

    col.addEventListener('dragenter', e => {
      e.preventDefault();
      col.classList.add('bg-blue-50');  // optional highlight
    });

    col.addEventListener('dragleave', () => {
      col.classList.remove('bg-blue-50');
    });

    col.addEventListener('drop', e => {
      col.classList.remove('bg-blue-50');
      if (draggedCard) {
        col.appendChild(draggedCard);
      }
    });
  });
});
