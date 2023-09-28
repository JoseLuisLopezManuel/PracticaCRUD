<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <header class="header">
        <div class="menu container">
            <a href="#" class="logo">Barbería</a>
            <input type="checkbox" id="menu"/>
            <label for="menu">
                <img src="images/menu.png" class="menu-icono" alt="menu">
            </label>
            <nav class="navbar">
                <ul>
                    <li><a href="cita.html">Iniciar sesión</a></li>
                    <li><a href="index.php">Inicio</a></li>
                    <li><a href="#">Nosotros</a></li>
                    <li><a href="#">Servicios</a></li>
                    <li><a href="#">Contacto</a></li>
                </ul>
            </nav>
        </div>
        <div class="header-content container">
            <div class="header-txt">
                <h1>Barber shop cent</h1>
                <p>
                    ¡Bienvenido a nuestra exclusiva barbería! En este emocionante viaje, te invitamos a sumergirte en una experiencia única de cuidado personal y estilo. En nuestra barbería, no solo encontrarás un lugar para obtener cortes de cabello y afeitados excepcionales, sino también un refugio donde el arte de la barbería se fusiona con la atención al cliente de primer nivel.
                    Nuestro equipo de barberos altamente capacitados no solo son expertos en su oficio, sino que también se enorgullecen de crear un ambiente acogedor y amigable. Aquí, no solo se trata de transformar tu apariencia, sino de brindarte una experiencia que te haga sentir como en casa.
                </p>
                <p>
                    Tu imagen, nuestra responsabilidad.
                </p>
            </div>
            <div class="header-img">
                <img src="images/900.jpg" alt="left">    
            </div>
        </div>
    </header>
    <main class="servicios">
        <h2>Servicios</h2>
        <div class="servicios-content container">
            <div class="servicio-1">
                <img src="icons/tratamiento.png" alt="Ícono de mascarilla">
                <h3>Mascarillas</h3>
            </div>
            <div class="servicio-1">
                <img src="icons/estilista.png" alt="Ícono de estilista">
                <h3>Cortes</h3>
            </div>
            <div class="servicio-1">
                <img src="icons/maquinilla-de-afeitar.png" alt="Ícono de afeitar">
                <h3>Definiciones</h3>
            </div>
            <div class="servicio-1">
                <img src="icons/peine.png" alt="Ícono de peine">
                <h3>Peinados</h3>
            </div>
        </div>
    </main>


    <section class="formulario container">
        <form method="post" autocomplete="off">
            <h2>Agenda tu cita</h2>
            <div class="input-group">

                <div class="input-container">
                    <input type="text" name="name" placeholder="Nombre y apellido">
                    <i class="fa-solid fa-user"></i>
                </div>

                <div class="input-container">
                    <input type="tel" name="phone" placeholder="Telefono celular">
                    <i class="fa-solid fa-phone"></i>
                </div>

                <div class="input-container">
                    <input type="email" name="email" placeholder="Correo electronico">
                    <i class="fa-solid fa-envelope"></i>
                </div>

                <div class="input-container">
                    <input type="date" name="date" placeholder="Fecha">
                    <i class="fa-solid fa-calendar-days"></i>
                </div>

                
                <div class="input-container">
                    <textarea name="message" placeholder="Detalles de la cita"></textarea>
                </div>

                <input type="submit" name="send" class="btn" onclick="myFunction()">

            </div>
        </form>
    </section>

    <footer class="footer">
        <div class="footer-content container">
            <div class="link">
                <a href="#" class="logo">Barbería</a>
            </div>
            <div class="link">
            <ul>
                <li><a href="index.php">Inicio</a></li>
                <li><a href="#">Nosotros</a></li>
                <li><a href="#">Servicios</a></li>
                <li><a href="#">Contacto</a></li>
            </ul> 
            </div>
        </div>
    </footer>

    <?php
        include("send.php")
    ?>

    <script>
        function myFunction(){
            window.location.href="http://localhost/formulario";
            window.alert("Tu cita ha sido programada con éxito");
        }
    </script>
</body>
</html>