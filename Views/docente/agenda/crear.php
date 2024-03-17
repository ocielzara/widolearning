<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <!-- Bootstrap -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

   <!-- Font Awesome -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

   <title>Crear</title>
</head>

<body>
<?php include 'Views/contenido/header.php'; 
 // Obtener el valor del parámetro "id"
    $id_disponibilidad = $_GET['id'];?>

   <div class="container">
      <div class="text-center mb-4">
         <h3>Agregar nueva disponibilidad</h3>
         <p class="text-muted">Completa lo siguiente</p>
      </div>

      <div class="container d-flex justify-content-center">
         <form action="index.php?c=Docentes&a=agendaCrear" method="post" style="width:50vw; min-width:300px;">
            <div class="row mb-3">
               <div class="col">
                  <label class="form-label">Fecha:</label>
                  <input type="date" class="form-control" name="date" required>
               </div>

               <div class="col">
                  <label class="form-label">Hora:</label>
                  <input type="time" class="form-control" name="time" required>
               </div>
            </div>

             <!-- Campo oculto para enviar información -->
             <input type="hidden" name="id_maestro" value="<?php echo $id_disponibilidad; ?>">

            <div>
               <button type="submit" class="btn btn-success" name="submit">Guardar</button>
               <!--<a href="index.php" class="btn btn-danger">Cancelar</a>-->
            </div>
         </form>
      </div>
   </div>

   <!-- Bootstrap -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>