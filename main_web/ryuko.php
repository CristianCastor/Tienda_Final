<?php
    $conexion =mysqli_connect('localhost','root','','tienda');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Figuras</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link href="https://fonts.googleapis.com/css2?family=Staatliches&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.2/jspdf.min.js"></script>
    <script type="text/javascript">
        function genPDF() {
	
            const doc = new jsPDF();
            margins = {
            top: 80,
            bottom: 60,
            left: 40,
            width: 522
        };
	
	doc.text(20,20,'Ticket de compra para la figura "Ryuko Matoi"');
    doc.text(10,10,'Precio 100$ DLLS"');
    doc.text(30,30,'Unidad= 1');
	doc.save('Ryuko.pdf');
	
        }
    </script>
</head>
<body>
    <header class="header">
        <a href="index.html">
            <img class="header__logo" src="img/logo.jpg" alt="Logotipo">
        </a>
    </header>
    <nav class="navegacion">
        <a class="navegacion__enlace navegacion__enlace--activo" href="index.html">Main</a>
        <a class="navegacion__enlace" href="nosotros.html">Informacion</a>
    </nav>
    <main class="contenedor">
        <a href="https://www.amiami.com/eng/c/bishoujo/">
        <h1>Ryuko Matoi(Escala 1/7)</h1>
     </a>
        <div class="nosotros">
            <div class="nosotros__contenido">
                <p>Ryuko Matoi de KilllaKill</p>

                <p> Personaje Principal de la serie Kill la Kill
                </p>
                <form class="formulario">
                    <?php
                    ?>
                    <?php
                    $sql= "SELECT * from inventario WHERE producto = 'Ryuko'";
                    $result=mysqli_query($conexion,$sql);
                    
                    while($mostrar=mysqli_fetch_array($result))
                    {
                        
                        ?><a>En existencia:</a>
                    <td><?php echo $mostrar['existencia']?></td>
                    
                    <?php
                    $codigo=42072;
                    mysqli_query($conexion,"UPDATE inventario SET existencia = existencia+-1 WHERE codigo ='$codigo'");
                    ?>
                     <input class="formulario__submit" type="submit" value="Agregar al Carrito">
                    <p class="producto__precio">Precio $130 USD</p>
                    <a href="javascript:genPDF()">Download PDF</a>
                    <?php
                    
                    }
                    ?>
                    
                    </form>
                </form>
            </div>
            <img class="nosotros__imagen" src="img/fig4.jpg" alt="imagen nosotros">
        </div>
    </main>
    </div>
    <footer class="footer">
        <p class="footer__texto">Cristian Castor Cedillo</p>
    </footer>
            </body>
            </html>