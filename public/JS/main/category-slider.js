// public/JS/main/category-slider.js

document.addEventListener('DOMContentLoaded', function() {
    const container = document.querySelector('.cursos-container');
    const prevBtn = document.querySelector('.prev-btn');
    const nextBtn = document.querySelector('.next-btn');

    // Desplazar a la izquierda
    prevBtn.addEventListener('click', function() {
        container.scrollBy({
            left: -container.clientWidth / 2, // Desplaza a la izquierda
            behavior: 'smooth'
        });
    });

    // Desplazar a la derecha
    nextBtn.addEventListener('click', function() {
        container.scrollBy({
            left: container.clientWidth / 2, // Desplaza a la derecha
            behavior: 'smooth'
        });
    });
});


