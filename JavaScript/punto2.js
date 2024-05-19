document.addEventListener('DOMContentLoaded', () => {
    const items = document.querySelectorAll('.item');

    items.forEach(item => {
        item.addEventListener('click', () => {
            item.style.backgroundColor = getRandomColor();
            item.style.fontSize = `${getRandomFontSize()}px`;
        });
    });

    function getRandomColor() {
        const letters = '0123456789ABCDEF';
        let color = '#';
        for (let i = 0; i < 6; i++) {
            color += letters[Math.floor(Math.random() * 16)];
        }
        return color;
    }

    function getRandomFontSize() {
        return Math.floor(Math.random() * 30) + 16;
    }
});
