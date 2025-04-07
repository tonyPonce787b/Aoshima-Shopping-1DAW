<!DOCTYPE html>
<html lang="es">
<head>
<?php require_once 'codigo/meta.php';?>
    <title>Contacto</title>
</head>
<body>
<?php require_once 'codigo/header.php';?>
    <section id="alineadoSection">
        <h1>Contacto</h1>
        <a href="sobrenosotros.php">
            <img src="../images/logo_aoshima.png" alt="Maquetas Aoshima">
        </a>
        <h2>Te resolvemos cualquier duda sobre nuestras maquetas, su montaje o sobre productos externos necesarios para que tengas tu colección perfecta.</h2>
        <h3>Puede comunicarse directamente con nosotros desde <a href="tel:+81542639070" id="telefono">+81 542 639 070</a>, o si lo prefiere puede dejarnos un mensaje en el siguiente formulario.</h3>
    </section>
    <section id="catalogo">
        <form action="/submit" method="post">
            <h2>❔❓❓Aquí te podemos ayudar❓❓❔</h2>
            <section id="maquetacionFormulario">   
                <div>
                    <label for="nombre">*Nombre:</label>
                    <input type="text" id="nombre" name="firstName" required placeholder="Antonio">
                </div>
                <div>
                    <label for="apellidos">*Apellidos:</label>
                    <input type="text" id="apellidos" name="lastName" required placeholder="Perez Romero">
                </div>
                <div>
                    <label for="email">*Dirección de correo:</label>
                    <input type="text" id="email" name="email" required placeholder="ejemplo@aoshima.com">
                </div>
                <div id="comentariosFormulario">
                    <label for="comentarios">Descripción:</label>
                    <textarea name="comment" id="comentarios" rows="5" required placeholder="Cuentanos tu caso..."></textarea>
                </div>
            </section>
            <sub>*: Campo requerido para completar la solicitud.</sub><br>
            <button type="reset">Volver a rellenar</button>
            <button type="submit">Terminar pedido</button>
        </form>
    </section>
<?php require_once 'codigo/footer.php';?>
</body>
</html>