const buttonGroups = document.querySelectorAll('.button-group');
const cancelButton = document.querySelector('#cancel');
const selectedLabel = document.querySelector('#selected-label');

buttonGroups.forEach((group) => {
  const buttons = group.querySelectorAll('button');

  buttons.forEach((button) => {
    button.addEventListener('click', () => {
      buttons.forEach((b) => {
        if (b !== button) {
          b.classList.remove('active');
        }
      });

      button.classList.add('active');
       updateSelectedLabel();
    });
  });
});

cancelButton.addEventListener('click', () => {
  const activeButtons = document.querySelectorAll('.button-group button.active');
  activeButtons.forEach((button) => {
    button.classList.remove('active');
  });
   updateSelectedLabel();
});
function updateSelectedLabel() {
  const activeButtons = document.querySelectorAll('.button-group button.active');
  const buttonTexts = [];

  activeButtons.forEach((button) => {
    buttonTexts.push(button.textContent);
  });

  if (buttonTexts.length > 0) {
    selectedLabel.textContent = 'Selected: ' + buttonTexts.join(', ');
  } else {
    selectedLabel.textContent = 'Selected: none';
  }
}
