<?php include("template/header.php"); ?>

<?php
if ($_POST) {
}
?>

<div class="col-md-2">

</div>
<div class="col-md-8">
    <div class="card text-left">
        <img class="card-img-top" src="holder.js/100px180/" alt="">
        <div class="card-body">
            <div class="content">
                <div class="info-card">
                    <h4 class="card-title">Contamos con Servicio 24/7</h4>
                    <p class="card-text">Contamos con profesionales perparados para atencion cualquier situación. las 24 horas del día, los 7 días de la semana.</p>
                </div>
                <div class="col-md-6">
                    <img src="img/CatHappy.png" alt="CatHappy" class="CatHappy">
                </div>
            </div>
        </div>
    </div>
    <br>
</div>

<div class="banimg">
    <br>
    <div class="col-md-5">
        <img src="./img/DogNosePhoto.png" alt="DogNose" class="DogNose">
    </div>
    <div class="col-md-4">
        <br>
        <div class="card-ban">
            <img class="card-img-top" src="holder.js/100x180/" alt="">
            <div class="card-body">
                <h4 class="card-title">¡Agenda tu Cita Ahora!</h4>
                <p class="card-text">Cubrimos todo Ciudad Juárez al igual que sus colonias cercanas.</p>
                <a name="" id="" class="btn btn-primary" href="admin/alumno.php" role="button">Agenda Cita</a>
            </div>
        </div>
    </div>
    <br><br>
</div>
<br><br>
<div class="col-md-2">
</div>
<div class="col-md-8">
    <br><br>
    <div class="card text-left">
        <img class="card-img-top" src="holder.js/100px180/" alt="">
        <div class="card-body">
            <div class="content">
                <div class="info-card">
                    <h4 class="card-title">Sucursales Perrooo</h4>
                    <div class="card-columns">
                        <div class="direction">
                            <div class="card">
                                <img class="card-img-top" src="holder.js/100x180/" alt="">
                                <div class="card-body">
                                    <h4 class="card-title">Direccion <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                                            <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z" />
                                        </svg></h4>
                                    <p class="card-text">René Mascareñas Miranda, Cd Juárez, Chih.</p>
                                </div>
                            </div>
                            <div class="card">
                                <img class="card-img-top" src="holder.js/100x180/" alt="">
                                <div class="card-body">
                                    <h4 class="card-title">Direccion <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                                            <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z" />
                                        </svg></h4>
                                    <p class="card-text">C. Yepomera, Roma, 32695 Cd Juárez, Chih.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <img src="img/./CatLook.png" alt="CatHappy" class="CatHappy">
                </div>
            </div>
        </div>
    </div>
    <br>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="well well-sm">
                <div class="is">
                    <form class="form-horizontal" method="POST">
                        <fieldset>
                            <legend class="text-center header">Contactanos</legend>

                            <div class="form-group">
                                <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                                <div class="col-md-8">
                                    <input id="fname" name="name" type="text" placeholder="Nombre" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-envelope-o bigicon"></i></span>
                                <div class="col-md-8">
                                    <input id="email" name="email" type="text" placeholder="Correo Electronico" class="form-control">
                                </div>
                            </div>

                            <div class="form-group">
                                <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-phone-square bigicon"></i></span>
                                <div class="col-md-8">
                                    <input id="phone" name="phone" type="text" placeholder="Telefono" class="form-control">
                                </div>
                            </div>

                            <div class="form-group">
                                <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-pencil-square-o bigicon"></i></span>
                                <div class="col-md-8">
                                    <textarea class="form-control" id="message" name="message" placeholder="Comentario" rows="7"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12 text-center">
                                    <button type="submit" class="btn btn-primary btn-lg">Enviar</button>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>



<?php include("template/footer.php"); ?>