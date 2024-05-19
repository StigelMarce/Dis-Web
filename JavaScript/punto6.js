document.addEventListener('DOMContentLoaded', () => {
    function actualizarReloj() {
        const reloj = document.getElementById('reloj');
        const ahora = new Date();
        const horas = String(ahora.getHours()).padStart(2, '0');
        const minutos = String(ahora.getMinutes()).padStart(2, '0');
        const segundos = String(ahora.getSeconds()).padStart(2, '0');
        reloj.textContent = `${horas}:${minutos}:${segundos}`;
    }

    actualizarReloj(); 
    setInterval(actualizarReloj, 1000);
});
