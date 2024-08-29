const form = document.querySelector('#formulario');
const popup = document.querySelector('#popup');

form.addEventListener('submit', function(event) {
    event.preventDefault();
    popup.style.display = 'flex';

    setTimeout(function() {
        popup.style.display = 'none';
        form.submit(); 
    }, 1500);
});
