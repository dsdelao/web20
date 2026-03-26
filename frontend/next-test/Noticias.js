document.getElementById('form_noticia').addEventListener('submit', function(event) {
    var titulo = document.getElementById('titulo').value;
    var contenido = document.getElementById('contenido').value;

    if (titulo.trim() === '' || contenido.trim() === '') {
        alert('Por favor, llena todos los campos.');
        event.preventDefault(); // Evita que el formulario se envíe
    }
});