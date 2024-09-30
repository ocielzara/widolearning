let currentSlide = 0;
        const slides = document.querySelectorAll('#slider li');

        function showSlide(index) {
            currentSlide = (index + slides.length) % slides.length; // Wrap around
            const offset = -currentSlide * 100; // Calculate offset
            document.querySelector('#slider').style.transform = `translateX(${offset}%)`;
        }

        function changeSlide(direction) {
            showSlide(currentSlide + direction);
        }

        // Auto slide every 5 seconds
        setInterval(() => changeSlide(1), 5000);