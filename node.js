document.addEventListener('DOMContentLoaded', function() {
    const form = document.querySelector('form');
    const popup = document.getElementById('popup');

    form.addEventListener('submit', function(event) {
        event.preventDefault(); // Evita o envio padrão do formulário

        // Aqui você pode adicionar a lógica para enviar os dados do formulário
        // Exemplo: fetch() ou XMLHttpRequest()

        // Exibe o popup
        popup.style.display = 'flex';

        setTimeout(function() {
            popup.style.display = 'none';
            
            window.location.reload();
        }, 1500);
    });
});

