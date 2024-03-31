<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Botón de compra de Stripe</title>
   <!-- Incluye la biblioteca de Stripe -->
   <script async src="https://js.stripe.com/v3/buy-button.js"></script>
     <!--========== BOX ICONS ==========-->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

</head>
<style>
   @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap");

/*========== VARIABLES CSS ==========*/
:root {
  --header-height: 3.5rem;
  --nav-width: 219px;

  /*========== Colors ==========*/
  --first-color: #6923D0;
  --first-color-light: #F4F0FA;
  --title-color: #19181B;
  --text-color: #58555E;
  --text-color-light: #A5A1AA;
  --body-color: #F9F6FD;
  --container-color: #FFFFFF;
}

/*========== HEADER ==========*/
.header__container {
  display: flex;
  align-items: center;
  height: var(--header-height);
  justify-content: space-between;
}


.header__search {
  display: flex;
  padding: .40rem .75rem;
  background-color: var(--first-color-light);
  border-radius: .25rem;
}

.header__input {
  width: 100%;
  border: none;
  outline: none;
  background-color: var(--first-color-light);
}

.header__input::placeholder {
  font-family: var(--body-font);
  color: var(--text-color);
}

.header__icon, 
.header__toggle {
  font-size: 1.2rem;
}

</style>
<body>
            <div class="header__container">
                <div class="header__search">
                    <i class='bx bx-search header__icon'></i>
                    <input type="search" placeholder="Search" class="header__input">
                </div>
            </div>


<?php
   // Variable de prueba
   $prueba = true;
?>

<?php if ($prueba) : ?>
   <!-- Botón de compra de Stripe -->
   <stripe-buy-button
      buy-button-id="buy_btn_1OurNQCiGkywhmkuimUxFNd8"
      publishable-key="pk_live_51OuqPCCiGkywhmkuV2nok90bajPjNUHxaG9zVsaV9rxUW5DHk68o9X5bME8vma7Ks6x2ZAUDCSWbfHWnXGLR5KhZ00xrK59zi2">
   </stripe-buy-button>
<?php else : ?>
   <!-- Botón "Clase muestra" -->
   <button  style="padding: 15px 70px; border-radius: 20px; border: none; background-color: orange; color: #4F7CAC; cursor: pointer; transition: background-color 0.3s;">
      Clase muestra
   </button>
<?php endif; ?>
</body>
</html>
