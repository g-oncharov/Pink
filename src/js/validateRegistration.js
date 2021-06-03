function validateRegistration(obj){
let return_value = true;

const reg_login = /^[a-z][a-z0-9_\.]{2,30}$/;
const reg_email = /[0-9a-z_]+@[0-9a-z_^.]+.[a-z]{2,3}/i;
const reg_tel = /^[0-9+\.]{4,20}$/;;
const reg_pass = /^[a-z0-9]{4,20}$/;

const login = obj.login.value;
const email = obj.email.value;
const telephone = obj.telephone.value;
const password = obj.password.value;
const password2 = obj.password2.value;

const elLogin = document.querySelector('.user-contacts__block--login');
const elEmail = document.querySelector('.user-contacts__block--address');
const elTelephone = document.querySelector('.user-contacts__block--telephone');
const elPassword = document.querySelector('.user-contacts__block--password');
const elPassword2 = document.querySelector('.user-contacts__block--password2');

const classError = 'user-contacts__block--error';

  if(reg_login.exec(login) == null || login =="")
  {
      return_value = false;
      elLogin.classList.add(classError);
  }else {
    if (elLogin.classList.contains(classError))
      elLogin.classList.remove(classError);
  }

  if(reg_email.exec(email) == null || login =="")
  {
      return_value = false;
      elEmail.classList.add(classError);
  }else {
      if (elEmail.classList.contains(classError))
        elEmail.classList.remove(classError);
  }

  if(reg_tel.exec(telephone) == null || telephone == "")
  {
      return_value = false;
      elTelephone.classList.add(classError);
  }else {
      if (elTelephone.classList.contains(classError))
        elTelephone.classList.remove(classError);
  }
  if (reg_pass.exec(password) == null || password == "") {
      return_value = false;
      elPassword.classList.add(classError);
  }else {
      if (elPassword.classList.contains(classError))
        elPassword.classList.remove(classError);
  }
  if (password2 != password || password2 == "") {
      return_value = false;
      elPassword2.classList.add(classError);
  }else {
      if (elPassword2.classList.contains(classError))
        elPassword2.classList.remove(classError);
  }

return return_value;
}
