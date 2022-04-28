/**
 * Get Input Fields
 */
let submitBtn = document.getElementById("submit_Btn");
let firstnameInput = document.getElementById("first_name");
let lastnameInput = document.getElementById("last_name");
let linkInput = document.getElementById("link");

/**
 * Get Error Divs by id
 */
let firstnameError = document.getElementById("first_name_error");
let lastnameError = document.getElementById("last_name_error");
let linkError = document.getElementById("link_error");

submitBtn.addEventListener("click", onSubmitForm);

let errorExists = false;

function showError(errorField, errorMessage){
  errorExists = true;
  errorField.innerHTML = errorMessage;
}

function resetValues(){
  errorExists = false;
  firstnameError.innerHTML = "";
  lastnameError.innerHTML = "";
  linkError.innerHTML = "";
  
}

function onSubmitForm(evt){
  resetValues();
  /**
   * Validate first name
   */

  if (headlineInput.value === "") {
    showError(firstnameError,"The name field is required.")
  }

  if (lastnameInput.value === "") {
    showError(lastnameError,"The name field is required.")
  }

  if (linkInput.value === "") {
    showError(lastnameError,"The link field is required.")
  }

  if (errorExists) {
    evt.preventDefault();
  }
}
