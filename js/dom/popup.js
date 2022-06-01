let popupList = document.querySelectorAll('.popup');

popupList.forEach(popup => {

   if(popup) {
      let popupId = popup.dataset.popid;
      let openBtn = document.querySelector(`[role="${popupId}"]`);
      let closeBtn = popup.querySelector('[role="popup-close"]');

      openBtn.addEventListener('click', () => {
         openPopup(popup);
      });

      closeBtn.addEventListener('click', () => {
         closePopup(popup);
      });
   } 
});

function openPopup(popup) {
   popup.classList.add('show');
}

function closePopup(popup) {
   popup.classList.remove('show');
}