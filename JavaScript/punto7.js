document.addEventListener('DOMContentLoaded', () => {
    const cards = [
        '😆', '😆', '🤢', '🤢', '😡', '😡', '👽', '👽', 
        '😻', '😻', '😒', '😒', '🧠', '🧠', '💀', '💀'
    ];

    const game = document.getElementById('memory-game');
    const shuffledCards = cards.sort(() => 0.5 - Math.random());

    shuffledCards.forEach(card => {
        const cardElement = document.createElement('div');
        cardElement.classList.add('memory-card');
        cardElement.innerHTML = `
            <div class="front-face">${card}</div>
            <div class="back-face"></div>
        `;
        game.appendChild(cardElement);
    });

    let hasFlippedCard = false;
    let lockBoard = false;
    let firstCard, secondCard;

    function flipCard() {
        if (lockBoard) return;
        if (this === firstCard) return;

        this.classList.add('flip');
        
            // remover clase back-face del 2do hijo
            this.children[1].classList.remove('back-face');

        if (!hasFlippedCard) {
            hasFlippedCard = true;
            firstCard = this;
            console.log(this.children[1]);
            return;
        }

        secondCard = this;
        checkForMatch();
    }

    function checkForMatch() {
        let isMatch = firstCard.innerText === secondCard.innerText;

        isMatch ? disableCards() : unflipCards();
    }

    function disableCards() {
        firstCard.removeEventListener('click', flipCard);
        secondCard.removeEventListener('click', flipCard);

        resetBoard();
    }

    function unflipCards() {
        lockBoard = true;

        setTimeout(() => {
            firstCard.classList.remove('flip');
            secondCard.classList.remove('flip');
            
            
            // add clase back-face del 2do hijo de cada carta
            firstCard.children[1].classList.add('back-face');
            secondCard.children[1].classList.add('back-face');

            resetBoard();            
        }, 1500);
    }

    function resetBoard() {
        [hasFlippedCard, lockBoard] = [false, false];
        [firstCard, secondCard] = [null, null];
    }

    document.querySelectorAll('.memory-card').forEach(card => card.addEventListener('click', flipCard));
});
