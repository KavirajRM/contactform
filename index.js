const form = document.getElementById("form");
const username = document.getElementById("name");
const email = document.getElementById("email");
const city = document.getElementById("city");
const mobile = document.getElementById("mobile");
const message = document.getElementById("message");

form.addEventListener("submit", (e) => {
  checkInputs();
  //e.preventDefault();
  if (
    username.parentElement.className === "form-control error" ||
    email.parentElement.className === "form-control error" ||
    mobile.parentElement.className === "form-control error"
  ) {
    e.preventDefault();
  }
});

function checkInputs() {
  // trim to remove the whitespaces
  const usernameValue = username.value.trim();
  const emailValue = email.value.trim();
  const mobileValue = mobile.value.trim();

  if (usernameValue === "") {
    setErrorFor(username, "Username cannot be blank");
  } else {
    setSuccessFor(username);
  }

  if (isNaN(mobileValue)) {
    setErrorFor(mobile, "Add only integer values for mobile number");
  } else {
    setSuccessFor(mobile);
  }

  if (emailValue === "") {
    setErrorFor(email, "Email cannot be blank");
  } else if (!isEmail(emailValue)) {
    setErrorFor(email, "Not a valid email");
  } else {
    setSuccessFor(email);
  }

  // if (isNaN(mobile)) {
  //   setErrorFor(mobile, "Add only integer values for mobile number");
  // } else {
  //   setSuccessFor(mobile);
  // }
}

function setErrorFor(input, message) {
  const formControl = input.parentElement;
  const small = formControl.querySelector("small");
  formControl.className = "form-control error";
  small.innerText = message;
}

function setSuccessFor(input) {
  const formControl = input.parentElement;
  formControl.className = "form-control success";
}

function isEmail(email) {
  return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(
    email
  );
}
