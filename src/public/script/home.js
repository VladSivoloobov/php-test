const sendButton = $('#comment-send');
const emailInput = $('#comment-email')[0];
const textInput = $('#comment-text')[0];

function checkInputValidity(input) {
  emailInput.reportValidity();
  return emailInput.validity.valid;
}

sendButton.on('click', () => {
  if (!checkInputValidity(emailInput) || !checkInputValidity(textInput)) return;
});
