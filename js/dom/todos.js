
let allTodoToggles = document.querySelectorAll('[role="toggle-options"]');

window.addEventListener('click', (e) => {

   allTodoToggles.forEach(toggleBtn => {

      let optionList = toggleBtn.nextElementSibling;
      let optionsVisible = optionList.classList.contains('show');
      let toggleClicked = toggleBtn.contains(e.target);

      if(toggleClicked) {
         optionList.classList.add('show');
         return;
      }

      if(optionsVisible) {
         optionList.classList.remove('show');
         return;
      }

   });
});