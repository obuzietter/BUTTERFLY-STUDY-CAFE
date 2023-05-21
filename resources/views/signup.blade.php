<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Sign Up</title>
    <link rel="stylesheet" href="./css/signup.css" />

  </head>
  <body>
    <div class="main">
      <div class="navbar">
        <div class="icon">
          <h2 class="logo">Butterfly</h2>
        </div>
      </div>
      <div class="content">
        <h1>Sign Up</h1>
        <form class="form" action="signup" method="POST" id="form">
          @csrf
          <div id="error"></div>
          <input type="text" id="fist_name" name="first_name" placeholder="First Name" />
          <input type="text" id="last_name" name="last_name" placeholder="Last Name" />
          <input type="text" id="email" name="email" placeholder="Your Email" />
          <input type="password" id="pwd" name="password" placeholder="Your Password" />
          <input type="password" id="pwd-c" name="password-confirm" placeholder="Confirm Password" />
          <button type="submit" class="btnn" id="btn" name="signup-submit">SIGN UP</button>

          <p class="liw">Or log in with</p>
          <div class="social-media">
            <a href="#"><ion-icon id="logo-fabebook" name="logo-facebook"></ion-icon></a>
            <a href="#"><ion-icon id="logo-instagram" name="logo-instagram"></ion-icon></a>
            <a href="#"><ion-icon id="logo-twitter" name="logo-twitter"></ion-icon></a>
            <a href="#"><ion-icon id="logo-google" name="logo-google"></ion-icon></a>
            <a href="#"><ion-icon id="logo-skype" name="logo-skype"></ion-icon></a>
          </div>
</form>
      </div>
    </div>
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
    <!-- <script>
      const form = document.getElementById('form')
      const fname = document.getElementById('user-fname')
      const lname = document.getElementById('user-lname')
      const email = document.getElementById('email')
      const pwd = document.getElementById('pwd')
      const pwdC = document.getElementById('pwd-c')
      const errorBox = document.getElementById('error')
      const btn =  document.getElementById('btn')

      // form.setAttribute('action', './user_rec_insert.php')

function emailValidator(){

}
function pwdMatch(){
  if(pwd.value!==pwdC.value){
    errorBox.innerText="Passwords do not match!"
    errorBox.style.color= 'Red'
    errorBox.style.padding= '15px'
    errorBox.style.fontSize= '20px'
    return false;
  }else{
    return true;
  }
}
function emptyFieldsCheck(){
  if (fname.value === ''||lname.value ===''||email.value===''||pwd.value===''||pwd.value===''||pwdC.value==='') {
    errorBox.innerText="All the fields are required!"
    errorBox.style.color= 'Red'
    errorBox.style.padding= '15px'
    errorBox.style.fontSize= '20px'
    return false;
}else{
  
    return true;
  }
}
// function setAction(){
//   if(emptyFieldsCheck==true && pwdMatch==true){
//       form.setAttribute('action', './user_rec_insert.php')
//     }
// }
function formValidator(e) {  
  e.preventDefault()
  emptyFieldsCheck()
    pwdMatch()

}

btn.addEventListener('click', formValidator)  
// fname.addEventListener('change', emptyFieldsCheck)
// lname.addEventListener('change', emptyFieldsCheck)
// email.addEventListener('change', emptyFieldsCheck)


    </script>
  --></body>  
</html>
