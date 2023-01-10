<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <title>Local File System Explorer</title>
</head>

<body>
    <header class="container-fluid" id="header">
        <div class="content-buttons row ">
            <div class="col-md-1" id="create-bttn"><button class="create-element">Create</button></div>

            <div class="col-md-1"><button class="upload-element">Upload</button></div>
        </div>
    </header>
    <section class="container-fluid" id="section-content">
        <div class="row" id="content-box">

            <div class="col-md-3 border border-dark-1" id="root">
            <?php


            function rootFolder($ruta){
            $ruta = "root";
            
            if (is_dir($ruta)){
                // Abre un gestor de directorios para la ruta indicada
                $gestor = opendir($ruta);
                echo "<ul>";

                // Recorre todos los elementos del directorio
                while (($archivo = readdir($gestor)) !== false)  {
                        
                    $ruta_completa = $ruta . "/" . $archivo;

                    // Se muestran todos los archivos y carpetas excepto "." y ".."
                    if ($archivo != "." && $archivo != "..") {
                        // Si es un directorio se recorre recursivamente
                        if (is_dir($ruta_completa)) {
                            echo "<li>" . $archivo . "</li>";
                            rootFolder($ruta_completa);
                        } else {
                            echo "<li>" . $archivo . "</li>";
                        }
                    }
                }
                
                // Cierra el gestor de directorios
                closedir($gestor);
                echo "</ul>";
            } else {
                echo "No es una ruta de directorio valida<br/>";
            }
            }


            ?>

            </div>

            <div class="col-md-7" >
                <p></p>
            </div>

            <div class="col-md-2 border border-dark-1">
                <p>dasdasdasdasd</p>
            </div>
        
        </div>
    </section>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
    <script src="script.js" defer></script>

    <script>
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
    </script>
</body>

</html>