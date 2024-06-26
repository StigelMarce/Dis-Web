document.addEventListener('DOMContentLoaded', () => {
    const display = document.getElementById('display');
    const buttons = document.querySelectorAll('.btn');
    const clearButton = document.getElementById('clear');
    const equalsButton = document.getElementById('equals');

    buttons.forEach(button => {
        button.addEventListener('click', () => {
            const value = button.getAttribute('data-value');
            display.value += value;
        });
    });

    clearButton.addEventListener('click', () => {
        display.value = '';
    });

    equalsButton.addEventListener('click', () => {
        try {
            if (/^[\d+\-*/.() ]+$/.test(display.value)) {
                display.value = eval(display.value);
            } else {
                display.value = 'Error';
            }
        } catch (error) {
            display.value = 'Error';
        }
    });
});
