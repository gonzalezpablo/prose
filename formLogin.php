<?php
    include 'include/header1.html'; 
    

?>
        
    <main class="container">
     
        <h1 id="texto">Formulario de Ingreso</h1>

        <div class="alert alert-secondary col-6 mx-auto">
            
 <form action="respuesta.php" method="post" id="formLogin">            
               <div>
                <label for="form-froup" class="mm">Correo corporativo</label>
                <input type="email" name="usuEmail" placeholder="Correo corporativo" class="form-control input-lg">
                </div>
                <br>
                <div>
                <label for="form-froup" class="mm">Contraseña</label>
                <input type="password" name="usuPass"  placeholder="Contraseña" class="form-control input-lg">
                </div>
                <button name='enviar' class="btn btn-dark btn-block mt-4">Ingresar</button>
            </form>
    </main>

    <?php  include 'include/footer.php';  ?>



