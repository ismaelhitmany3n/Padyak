<!DOCTYPE html>
<html>
<head>
	<title>OPS-BV</title>
  <link rel="stylesheet" type="text/css" href="style.css">

</head>
<body style="margin:auto;padding: 3px;min-width: 320px;width: 500px; background-color: #f28542;">
<div  class="container">
<div class="head">
<h1>Online Pedicab Service</h1>
<h2>(Birmingham Village)</h2>

</div>
<hr>

<div class="button-group">
  <button id="button1">Incoming</button>
  <button id="button2">Outgoing</button>
  <button id="button3">Vicinity</button>
</div>
<hr>
<div class="button-group">
  <button id="button4">1 Pedicab</button>
  <button id="button5">2 Pedicab</button>
  <button id="button6">3 Pedicab</button>
</div>
<hr>
<div class="button-group">
  <button id="button7">Regular</button>
  <button id="button8">Special</button>
  <button id="button9">Waiting</button>
</div>
<hr>
<div class="button-group">
	<button id="cancel">Cancel</button>
	 <button id="logoff">Sign Out</button>
  <button id="request">Request</button>
  
 
  <br><hr>
  <label id="selected-label">Selected: </label>
  <h3>User detail</h3>
  <h5>Name: Juan Dela Cruz</h5>
  <h5>Address: Blk 7  Lot 11</h5>
</div>

</div>

<script type="text/javascript">
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

</script>

</body>
</html>