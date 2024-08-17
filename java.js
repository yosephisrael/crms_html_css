//RESPONSIVE MENU BARS
var navlinks = document.getElementById("navlinks");
function showMenu() {
  navlinks.style.right = "0";
}
function hideMenu() {
  navlinks.style.right = "-200px";
}
//LOGIN FORMS JS
const reg_form = document.querySelector("#registration-form");
const login_form = document.querySelector("#login-form");

const reg_tab = document.querySelector(".reg-tab");
const login_tab = document.querySelector(".login-tab");

reg_tab.addEventListener("click", (e) => {
  login_form.style.display = "none";
  reg_form.style.display = "block";
  reg_tab.classList.add("active");
  login_tab.classList.remove("active");
});
login_tab.addEventListener("click", (e) => {
  reg_form.style.display = "none";
  login_form.style.display = "block";
  reg_tab.classList.remove("active");
  login_tab.classList.add("active");
});
//Form Validation
function validateForm() {
  var username = document.forms["registeruser"]["username"].value;
  var name = document.forms["registeruser"]["firstname"].value;
  var lname = document.forms["registeruser"]["lastname"].value;
  var email = document.forms["registeruser"]["email"].value;
  var pass = document.forms["registeruser"]["pass"].value;
  var pass1 = document.forms["registeruser"]["confirm-pass"].value;
  var phone = document.forms["registeruser"]["mobilenumber"].value;
  
  var regex = /^[a-zA-Z\s]+$/;
  var regex1 = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
  var reg=/^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/im;
  var no = /^[0-9]+$/;
  var num = /^\+[1-9]{1}[0-9]{3,14}$/;

  if (username === "") {
      alert("Name must be filled out");
      return false;
  }
  if (username.length > 15) {
      alert("Username length must not exceed 15 characters");
      return false;
  }
  if (name === "") {
      alert("Name must be filled out");
      return false;
  }
  if (name.length > 15) {
      alert("first name length must not exceed 15 characters");
      return false;
  }
  if (!name.match(regex)) {
      alert("name must be character");
      return false;
  }
  if (lname === "") {
      alert("Name must be filled out");
      return false;
  }
  if (lname.length > 15) {
      alert("Last name length must not exceed 15 characters");
      return false;
  }
  if (!lname.match(regex)) {
      alert("name must be character");
      return false;
  }

  if (email === "") {
      alert("please enter your email");
      return false;
  }
  if (!email.match(regex1)) {
      alert("invalid email format");
      return false;
  }
  if (pass === "") {
      alert("please enter your password");
      return false;
  }
  if (pass.length < 8) {
      alert("password must be greater than 8 character");
      return false;
  }
  if (!pass.match(/[a-z]/g)) {
      alert("password must include at least one lowercase");
      return false;
  }
  if (!pass.match(/[A-Z]/g)) {
      alert("password must include at least one uppercase");
      return false;
  }
  if (!pass.match(/[0-9]/g)) {
      alert("password must include number");
      return false;
  }
  if (pass1 === "") {
      alert("please confirm your password");
      return false;
  }

  if (pass1 != pass) {
      alert("password must be match");
      return false;
  }

  if (phone === "") {
    alert("please enter phone number");
    return false;
}

if (!phone.match(reg)) {
    alert("please format phone numbers");
    return false;
} 
}