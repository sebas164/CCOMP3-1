<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = $_POST['nombre'];    
    $fecNac = $_POST['fecha_nacimiento'];
    $ocupacion = $_POST['ocupacion'];
    $telefono=$_POST['telefono'];
    $email=$_POST['email'];
    $nacionalidad=$_POST['nacionalidad'];
    $ingles=$_POST['ingles'];
    $lenguajes=$_POST['lenguajes'];
    $aptitudes=$_POST['aptitudes'];    
    $habilidades=$_POST['habilidades'];
    $perfil=$_POST['perfil'];
}
    
    /*echo "<h3>Nombre: $nombre</h3>";    
    echo "<h3>Fecha de Nacimiento: $fecNac</h3>";
    echo "<h3>Ocupación: $ocupacion</h3>";
    echo "<h3>Telefono: $telefono</h3>";
    echo "<h3>Email: $email</h3>";
    echo "<h3>nacionalidad: $nacionalidad</h3>";
    echo "<h3>ingles: $ingles</h3>";
    echo "<h3>Lenguajes de Programación:</h3>";
    if (!empty($lenguajes)) {
        foreach ($lenguajes as $lenguaje) {
            echo "<h3>$lenguaje</h3>";
        }
    }    
    echo "<h3>Aptitudes: $aptitudes</h3>";
    if (!empty($habilidades)) {
        foreach ($habilidades as $habilidad) {
            echo "<h3>$habilidad</h3>";
        }
    }    
    echo "<h3>Perfil: $perfil</h3>";    
}*/

?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <title>Curriculum</title>
    <style>
        
        body{
           
            font-family: "Roboto", sans-serif;
            font-weight: 500;
            font-style: normal;
          }
        h1{
            font-size: 3rem;
            font-family: "Roboto", sans-serif;
            font-weight: 300;
            font-style: normal;
            color: white;
            margin: 0.5rem;
        }
        .h2_2{
            font-family: "Roboto", sans-serif;
            font-weight: 300;
            font-style: normal;
            color: rgb(168, 164, 164);
        }
        p{
            margin: 0.3rem 0;
        }
        ul{
            padding-left: 1.3rem;
        }
        li{
            padding-bottom: 0.3rem;

        }
        .container-main{
            width: 55rem;
            margin:auto;
            
        }
        .container-up{
            background-color: rgb(100, 100, 100);
            display: flex;
            justify-content:space-around;
            align-items: center;
            padding: 1rem;
            
        }
        
            
        
        img{
            display: block;
            width: 30%;
            border-radius: 50%;
            object-fit: cover;
            width: 10rem;
            height: 10rem;
            
        }
        .container-down{
            display: flex; 
            

        }

        .aside-1{
            background-color: rgb(238, 235, 235);
            padding: 1rem 2rem;
            width: 38rem;
        }
        .section-1{
           padding: 1rem 3rem;
           
        }
        
        .section-1 li{
            font-size: 0.9rem;
        }


        .borde{
            border-bottom: 0.1rem solid black;
        }

        .nombre{
            text-align: center;
            
        }
        .image{
            display: flex;
            align-items: center;
            gap: 0.3rem;
        }


    </style>
</head>
<body>
    <main class="container-main" >
        <div class="container-up">
            <img src="./imagen/cesar-rincon-XHVpWcr5grQ-unsplash.jpg" alt="imagen">
            <div class="nombre">
                <h1><?= $nombre ?></h1>
                <h2 class="h2_2"><?= htmlspecialchars($ocupacion) ?></h2>

            </div>
        </div>
        <div class="container-down">
            <aside class="aside-1">
                <h2 class="borde">CONTACTO</h2>
                <div class="image">
                    <svg xmlns="http://www.w3.org/2000/svg"  class="icon icon-tabler icon-tabler-phone" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <path d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2" />
                      </svg> <p><?= htmlspecialchars($telefono) ?></p>

                </div>
                  <div class="image">
                      <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-mail" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                          <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                          <path d="M3 7a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-10z" />
                          <path d="M3 7l9 6l9 -6" />
                        </svg> <p><?=htmlspecialchars($email) ?></p>

                  </div>
                  <div class="image">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-map-pin-filled" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <path d="M18.364 4.636a9 9 0 0 1 .203 12.519l-.203 .21l-4.243 4.242a3 3 0 0 1 -4.097 .135l-.144 -.135l-4.244 -4.243a9 9 0 0 1 12.728 -12.728zm-6.364 3.364a3 3 0 1 0 0 6a3 3 0 0 0 0 -6z" stroke-width="0" fill="currentColor" />
                      </svg>
                      <p><?=htmlspecialchars($nacionalidad) ?></p>
                  </div>
                  <div class="image">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-linkedin" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <path d="M4 4m0 2a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2z" />
                        <path d="M8 11l0 5" />
                        <path d="M8 8l0 .01" />
                        <path d="M12 16l0 -5" />
                        <path d="M16 16v-3a2 2 0 0 0 -4 0" />
                      </svg>
                      <p>linkedin.com/sebas-lopez</p>
                  </div>
                <br>
                <h2 class="borde">IDIOMAS</h2>
                <p>Español:Nativo</p>
                <p>Ingles: <?=htmlspecialchars($ingles) ?></p>
                <p>Frances:Intermedio (B2)</p>
                <br>
                <h2 class="borde">APTITUDES</h2>
                <ul>
                    <?php
                            if (!empty($aptitudes)) {
                                foreach ($aptitudes as $aptitud) {
                                    echo "<li>".htmlspecialchars($aptitud)."</li>";
                                }
                            }else{
                                $aptitudes = [];
                                echo "<li>No se seleccionaron otros lenguajes.</li>";
                            }   


                        ?>
                   <!---?php
                        if (!empty($aptitudes)) {                        
                            echo "<li>".htmlspecialchars($aptitudes)."</li>";                        
                        } else {
                            echo "<li>No se selecciono.</li>";
                        }
                    ?>--->
                </ul>
                
                <br>
                <h2 class="borde">HABILIDADES</h2>
                <ul>
                <?php
                    if (!empty($habilidades)) {
                        foreach ($habilidades as $habilidad) {
                            echo "<li>".htmlspecialchars($habilidad)."</li>";
                        }
                    } else {
                        
                        echo "<li>No se selecciono.</li>";
                    }
                    ?>
                </ul>
                <br>
                <h2 class="borde">Otros intereses</h2>
                <ul>
                    <?php
                        if (!empty($lenguajes)) {
                            foreach ($lenguajes as $lenguaje) {
                                echo "<li>".htmlspecialchars($lenguaje)."</li>";
                            }
                        }else{
                            echo "<li>No se seleccionaron otros lenguajes.</li>";
                        }   


                    ?>
                </ul>

            </aside>
            <section class="section-1">
                <h2 class="borde">PERFIL</h2>
                <p><?= htmlspecialchars($perfil) ?></p>
                <h2 class="borde">EXPERIENCIA</h2>
                <h3><strong>Trabajador Social</strong></h3>
                <p><b>México DF</b> | 2022 - Actualmente</p>
                
                <ul>
                    <li>Coordinador y mediador entre los equipos de ayuda psicológica a jóvenes y niños en exclusión social.</li>
                    <li>Proveer apoyo al salud mental del equipo e individuos involucrados en el trabajo social.</li>
                    <li>Mepeo de necesidades estratégicas y lógicas para las diferentes áreas.</li>
                    <li>Monitor de ejercicios físicos para adolescentes.</li>
                    <li>Programar diferentes actividades extracurriculares en los involucrados.</li>
                </ul>

                <h3><strong>Trabajador Social</strong></h3>
                <p><b>México DF</b> | 2020 - 2022</p>
                <ul>
                    <li>Funciones para seguimientos de casos para jóvenes con problemas de adicciones.</li>
                    <li>Capacitación e integración vinculadas a medidas preventivas.</li>
                    <li>Recopilación de evidencias para auditorías y programas sociales.</li>
                </ul>

                <h3><strong>Trabajador Social (Prácticas)</strong></h3>
                <p><b>Zaragoza, España</b> | 2019 - 2020</p>
                <ul>
                    <li>Profesor de lengua española e inglesa para jóvenes migrantes.
                    </li>
                    <li>Monitor de actividades ecológicas con adolescentes.
                    </li>
                    <li>Coordinador de áreas deportivas.</li>
                </ul>
                <h2 class="borde">FORMACION</h2>
                <h3><strong>Grado de Trabajo Social</strong> </h3>
                <p><b>ESMA, Madrid</b> | 2012 - 2015</p>
                <h3><strong>Licenciatura Profesional</strong> </h3>
                <p><b>Universidad de la Frontera, México DF</b> | 2011 - 2012</p>
            </section>
        </div>

    </main>
    

    
</body>
</html>
