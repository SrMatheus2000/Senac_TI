  function iniciapopup(popupID) {
    const popup = document.getElementById(popupID);
    if(popup){
      popup.classList.add('mostrar');
      popup.addEventListener('click', (e) => {
        if(e.target.id == popupID || e.target.className == 'cbtn-close'){
          popup.classList.remove('mostrar');
        }
      });
    }
  }
