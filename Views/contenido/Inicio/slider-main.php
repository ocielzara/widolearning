<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Slider</title>
    <link rel="stylesheet" href="public/styles/main/slider.css">
</head>

<body>
    <section class="container-slider">
        <div class="slider-wrapper">
            <ul id="slider">
                <li><img src="public/images/home/WidoSlider.png" alt=""></li>
                <li><img src="public/images/home/WidoSlider1.png" alt=""></li>
            </ul>
            <button class="prev" onclick="changeSlide(-1)">
                <i class="fas fa-chevron-circle-left"></i>
            </button>
            <button class="next" onclick="changeSlide(1)">
                <i class="fas fa-chevron-circle-right"></i>
            </button>
        </div>
    </section>

    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
    <script defer src="public/JS/main/slider-main.js"></script>
    
</body>

</html>
