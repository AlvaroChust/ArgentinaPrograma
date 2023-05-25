function enableEditMode() {
  var userTextElement = document.getElementById("userText");
  var currentText = userTextElement.textContent;
  userTextElement.innerHTML = '<input type="text" id="editInput" class="editable" value="' + currentText + '">';
  var editInput = document.getElementById("editInput");
  editInput.focus();
  editInput.addEventListener("blur", disableEditMode);
  editInput.addEventListener("keyup", function(event) {
    if (event.key === "Enter") {
      disableEditMode();
    }
  });
}

function disableEditMode() {
  var editInput = document.getElementById("editInput");
  var newText = editInput.value;
  var userTextElement = document.getElementById("userText");
  userTextElement.textContent = newText;
}
