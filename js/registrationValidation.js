import { debounce, isValidEmail } from './utils.js';

document.addEventListener('DOMContentLoaded', () => {

  const usernameInputField = document.querySelector('#Username');
  const emailInputField = document.querySelector('#Email');
  const passwordInputField = document.querySelector('#Password');
  const passwordConfirmationInputField = document.querySelector('#PasswordConfirmation');
  const usernameInfoSpanElement = document.querySelector('#username_info_span');
  const emailInfoSpanElement = document.querySelector('#email_info_span');
  const passwordMatchSpanElement = document.querySelector("#passsword_match_span");
  
  if(usernameInputField){
    usernameInputField.addEventListener('input', debounce((event) => {
      usernameInfoSpanElement.classList.remove('text-red-400');
      usernameInfoSpanElement.classList.remove('text-green-400');
      usernameInfoSpanElement.textContent = '';


      let username = event.target.value.toLowerCase();
      if(username.length > 0 && username.length < 6){
        usernameInfoSpanElement.textContent = 'At least (6) Chars';
        usernameInfoSpanElement.classList.add('text-red-400');
        return;
      }

      fetch('api/uniqueUsername.php', {
          headers: {
            "Content-Type": "application/json",
          },
          method: 'POST',
          body: JSON.stringify({ username })
        }
      )
      .then(res => res.json())
      .then(data => {
        usernameInfoSpanElement.textContent = data.message;
        if(data.OK){
          usernameInfoSpanElement.classList.add('text-green-400');
        } else {
          usernameInfoSpanElement.classList.add('text-red-400');
        }
      })
      .catch(err => console.log(err, 'ERROR'));
    }, 300));
  }

  if(emailInputField){
    emailInputField.addEventListener('input', debounce((event) => {
      emailInfoSpanElement.classList.remove('text-red-400');
      emailInfoSpanElement.classList.remove('text-green-400');
      emailInfoSpanElement.textContent = '';


      let email = event.target.value;
      if (!isValidEmail(email)) {
        emailInfoSpanElement.textContent = 'Invalid email format';
        emailInfoSpanElement.classList.add('text-red-400');
        return;
    }

      fetch('api/uniqueEmail.php', {
          headers: {
            "Content-Type": "application/json",
          },
          method: 'POST',
          body: JSON.stringify({ email })
        }
      )
      .then(res => res.json())
      .then(data => {
        emailInfoSpanElement.textContent = data.message;
        if(data.OK){
          emailInfoSpanElement.classList.add('text-green-400');
        } else {
          emailInfoSpanElement.classList.add('text-red-400');
        }
      })
      .catch(err => console.log(err, 'ERROR'));
    }, 300));
  }

  if(passwordConfirmationInputField){
    passwordConfirmationInputField.addEventListener('input', debounce((event) => {
      passwordMatchSpanElement.classList.remove('text-red-400');
      passwordMatchSpanElement.classList.remove('text-green-400');
      passwordMatchSpanElement.textContent = '';

      let password = passwordInputField.value;
      if(password === event.target.value){
        passwordMatchSpanElement.classList.add('text-green-400');
        passwordMatchSpanElement.textContent = 'Passwords are a match';
      } else {
        passwordMatchSpanElement.classList.add('text-red-400');
        passwordMatchSpanElement.textContent = 'Passwords do not match';
      }
    }, 300));
  }

});