
// animazione delle card
document.addEventListener("DOMContentLoaded", function() {
    setTimeout(function() {
        const cards = document.querySelectorAll('.card-hidden');
        cards.forEach(function(card) {
            card.classList.add('card-visible');
        });
    }, 250); 
});

//animazione vista login e register

document.addEventListener("DOMContentLoaded", function() {
    setTimeout(function() {
        const elements = document.querySelectorAll('.hidden-element');
        elements.forEach(function(element) {
            element.classList.add('visible-element');
        });
    }, 250); // 
});
