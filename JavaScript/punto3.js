document.addEventListener('DOMContentLoaded', () => {
    const form = document.getElementById('registroForm');
    const errorElement = document.getElementById('errorMensaje');

    form.addEventListener('submit', (event) => {
        event.preventDefault();
        const nombre = form.nombre.value.trim();
        const email = form.email.value.trim();
        const contrasena = form.contrasena.value.trim();
        
        errorElement.textContent = '';

        if (!nombre || !email || !contrasena) {
            errorElement.textContent = 'Todos los campos son obligatorios.';
            return;
        }

        const nameRegex = /^[A-Za-z\s]+$/;
        if (!nameRegex.test(nombre)) {
            errorElement.textContent = 'El nombre solo puede contener letras y espacios.';
            return;
        }
        successElement.textContent = 'Registrado correctamente.';
    });
});
