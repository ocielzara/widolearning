<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Slider</title>
    <link rel="stylesheet" href="public/styles/main/slider.css">
</head>

<body>
    <section id="container-slider">
        <a href="javascript: fntExecuteSlide('prev');" class="arrowPrev"><i class="fas fa-chevron-circle-left"></i></a>
        <a href="javascript: fntExecuteSlide('next');" class="arrowNext"><i class="fas fa-chevron-circle-right"></i></a>
        <ul class="listslider">
            <li><a itlist="itList_0" href="#" class="item-select-slid"></a></li>
            <li><a itlist="itList_1" href="#"></a></li>
            <li><a itlist="itList_2" href="#"></a></li>
        </ul>
        <ul id="slider">
            <li
                style="background-image: url('public/images/home/Inicio.png'); z-index:0; opacity: 1;">
            </li>
            <li
                style="background-image: url('https://cdn.pixabay.com/photo/2018/02/20/10/28/business-3167295_960_720.jpg'); ">
            </li>
            <li style="background-image: url('https://cdn.pixabay.com/photo/2015/07/17/22/42/typing-849806_960_720.jpg'); ">
            </li>
        </ul>
    </section>

    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
    <script defer src="public/JS/main/slider-main.js"></script>
</body>

</html>