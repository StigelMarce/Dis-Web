document.addEventListener('DOMContentLoaded', () => {
    const tareaInput = document.getElementById('tareaInput');
    const agregarBtn = document.getElementById('agregarBtn');
    const tareaList = document.getElementById('tareaList');

    agregarBtn.addEventListener('click', () => {
        console.log('Agregando tarea...');
        const tareaText = tareaInput.value.trim();
        if (tareaText) {
            const li = document.createElement('li');
            li.textContent = tareaText;
            const eliminarBtn = document.createElement('button');
            eliminarBtn.textContent = 'Eliminar';
            eliminarBtn.addEventListener('click', () => {
                tareaList.removeChild(li);
            });
            li.appendChild(eliminarBtn);
            tareaList.appendChild(li);
            tareaInput.value = '';
        }
    });
});
