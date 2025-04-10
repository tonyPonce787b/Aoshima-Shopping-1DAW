<!DOCTYPE html>
<html lang="es">
<head>
<?php require_once 'codigo/meta.php';?>
    <title>Nuevo pedido</title>
</head>
<body>
<?php require_once 'codigo/header.php';?>
    <section id="alineadoSection">
        <h1>Pedidos</h1>
        <a href="sobrenosotros.php">
            <img src="../images/logo_aoshima.png" alt="Maquetas Aoshima">
        </a>
        <h2>Todos nuestros pedidos se hacen bajo encargo y de manera personalizada.</h2>
        <h3>Tambien resolvemos cualquier duda sobre nuestras maquetas y su montaje en <a href="contacto.html">nuestro apartado de contacto</a>.</h3>
    </section>
    <section id="catalogo">
        <form action="/submit" method="post">
            <h2>🛍️🛍️Nuevo pedido🛍️🛍️</h2>
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
                <div>
                    <label for="direccion">*Dirección de envio:</label>
                    <input id="inputGrande" type="text" id="direccion" name="address" required>
                </div>
                <div>
                    <label for="facturacion">Dirección de facturación:</label>
                    <input id="inputGrande" type="text" id="facturacion" name="billingAddress">
                </div>
                <div>
                    <label for="prefijo">Prefijo:</label>
                    <input type="text" id="prefijo" name="diallingCode" pattern="\+[0-9]{1,3}" placeholder="+34"> <br>
                    <label for="telefono">*Nº de teléfono:</label>
                    <input type="text" id="telefono" name="phone" required pattern="[0-9]{9}">
                </div>
                <div id="comentariosFormulario">
                    <label for="pedido">Detalles del pedido:</label>
                    <textarea name="order" id="pedido" rows="5" required placeholder="No olvides que todos nuestros productos tienen números de referencia para ayudarte a hacer el pedido."></textarea>
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