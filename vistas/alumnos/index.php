<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>ALUMNOS INFORMATICA</title>
</head>
<style>
        h1 {
            color: red;
        }
    </style>
<body>
    <header class="bg-red text-white text-center p-4">
    <h1 class="display-9">INGENIERIA DE SOFTWARE.</h1>
  </header>
    <div class="container bg-gray">
        <h1 class="text-center">REGISTRO DE ALUMNOS DEL CURSO DE INFORMATICA</h1>
        <div class="row justify-content-center">
            <form action="/practica7/controladores/alumnos/guardar.php" method="POST" class="col-lg-8 border bg-gray p-3">
                <div class="row mb-3">
                    <div class="col">
                        <label for="alumno_nombre">Nombre del Alumno</label>
                        <input type="text" name="alumno_nombre" id="alumno_nombre" class="form-control" >
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="alumno_apellido">Apellido del Alumno</label>
                        <input type="text" name="alumno_apellido" id="alumno_apellido" class="form-control" >
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="alumno_fecha_naci">Fecha de Nacimiento</label>
                        <input type="date" name="alumno_fecha_naci" id="alumno_fecha_naci" class="form-control">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="alumno_telefono">Teléfono</label>
                        <input type="number" name="alumno_telefono" id="alumno_telefono" class="form-control">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="alumno_correo">Correo Eléctronico</label>
                        <input type="mail" name="alumno_correo" id="alumno_correo" class="form-control">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <button type="submit" class="btn btn-primary w-100">Guardar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
