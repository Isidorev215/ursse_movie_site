import Toast, { clearToast } from './toast.js'

document.addEventListener('DOMContentLoaded', () => {

  const movieSubscribeButtons = document.querySelectorAll('.movie_sub');
  const seriesSubscribeButtons = document.querySelectorAll('.tv_sub');

  movieSubscribeButtons.forEach(button => {
    button.onclick = (event) => {
      event.preventDefault();
      event.stopPropagation();

      let movie_id = button.id;
      fetch('api/subscribeToMedia.php', {
        headers: {
          "Content-Type": "application/json",
        },
        method: 'POST',
        body: JSON.stringify({ id: movie_id, type: 'movie' })
      })
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
  });

  seriesSubscribeButtons.forEach(button => {
    button.onclick = (event) => {
      event.preventDefault();
      event.stopPropagation();

      let tv_id = button.id;
      fetch('api/subscribeToMedia.php', {
        headers: {
          "Content-Type": "application/json",
        },
        method: 'POST',
        body: JSON.stringify({ id: tv_id, type: 'tv' })
      })
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
  });


});