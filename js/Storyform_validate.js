/**
 * Get Input Fields
 */
let submitBtn = document.getElementById("submit_Btn");
let headlineInput = document.getElementsByName("headline");
let shortheadingInput = document.getElementsByName("short_heading");
let subheadingInput = document.getElementsByName("sub_heading");
let articleInput = document.getElementsByName("article");
let summaryInput = document.getElementsByName("summary");
let dateInput = document.getElementsByName("date");
let timeInput = document.getElementsByName("time");
let category_idInput = document.getElementsByName("category_id");
let author_idInput = document.getElementsByName("author_id");

/**
 * Get Error Divs by id
 */
let headlineError = document.getElementsByClassName("headline_error");
let shortheadingError = document.getElementsByClassName("short_heading_error");
let subheadingError = document.getElementsByClassName("sub_heading_error");
let articleError = document.getElementsByClassName("article_error");
let summaryError = document.getElementsByClassName("summary_error");
let dateError = document.getElementsByClassName("date_error");
let timeError = document.getElementsByClassName("time_error");
let category_idError = document.getElementsByClassName("category_id_error");
let author_idError = document.getElementsByClassName("author_id_error");

submitBtn.addEventListener("click", onSubmitForm);

let errorExists = false;

function showError(errorField, errorMessage) {
  errorExists = true;
  errorField.innerHTML = errorMessage;
}

function resetValues() {
  errorExists = false;
  headlineError.innerHTML = "";
  shortheadingError.innerHTML = "";
  subheadingError.innerHTML = "";
  articleError.innerHTML = "";
  summaryError.innerHTMl = "";
  dateError.innerHTML = "";
  timeError.innerHTML = "";
  category_idError.innerHTML = "";
  author_idError.innerHTML = "";
}

function onSubmitForm(evt) {
  resetValues();

  if (headlineInput.value === "") {
    showError(headlineError, "The headline field is required.");
  }

  if (shortheadingInput.value === "") {
    showError(shortheadingError, "The short heading field is required.");
  }

  if (subheadingInput.value === "") {
    showError(subheadingError, "The link field is required.");
  }

  if (articleInput.value === "") {
    showError(articleError, "The article field is required.");
  }

  if (summaryInput.value === "") {
    showError(summaryError, "The summary field is required.");
  }

  if (dateInput.value === "") {
    showError(dateError, "The date field is required.");
  }

  if (timerInput.value === "") {
    showError(timeError, "The time field is required.");
  }

  if (category_idInput.value === "") {
    showError(category_idError, "The category field is required.");
  }

  if (author_idInput.value === "") {
    showError(author_idError, "The author field is required.");
  }

  if (errorExists) {
    evt.preventDefault();
  }
}

/**
 * Validate first name
 */
