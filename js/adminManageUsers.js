import Toast, { clearToast } from './toast.js'

document.addEventListener('DOMContentLoaded', () => {

  const deleteButtons = document.querySelectorAll('.delete-buttons');
  const passwordResetButtons = document.querySelectorAll('.reset-password-buttons');

  deleteButtons.forEach(button => {
    button.onclick = (event) => {
      event.preventDefault();
      event.stopPropagation();

      let id = button.id;
      
      const confirmDelete = window.confirm('Are you sure you want to delete this user?');
      if(confirmDelete){
        fetch('api/deleteUser.php', {
            headers: {
              "Content-Type": "application/json",
            },
            method: 'POST',
            body: JSON.stringify({ user_id: id })
          }
        )
        .then(res => res.json())
        .then(data => {
          if(data.OK){
            Toast(data.message, 'success');
            window.location.reload();
          } else {
            Toast(data.message, 'warning');
          }
          
        })
        .catch(err => {
          Toast(err.message, 'danger');
        })
      }
    }
  });


  passwordResetButtons.forEach(button => {
    button.onclick = (event) => {
      event.preventDefault();
      event.stopPropagation();

      let id = button.id;
      
      const confirmReset = window.confirm("Are you sure you want to reset this user's password?");
      if(confirmReset){
        fetch('api/resetUserPassword.php', {
            headers: {
              "Content-Type": "application/json",
            },
            method: 'POST',
            body: JSON.stringify({ user_id: id })
          }
        )
        .then(res => res.json())
        .then(data => {
          if(data.OK){
            Toast(data.message, 'success');
            window.location.reload();
          } else {
            Toast(data.message, 'warning');
          }
          
        })
        .catch(err => {
          Toast(err.message, 'danger');
        })
      }
    }
  });



});