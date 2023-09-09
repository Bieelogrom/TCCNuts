<?php 

include_once ("../../Dao/validador_acesso.php");

?>
  <!--inicio perfil-popUp-->
  <div class="popup profile-popup">
        <div>
            <div class="popup-box profile-popup-box">
                <h1><?php echo $_SESSION['nomeUsuario'];?></h1>
                <p>@Aninha.cuidadora</p>
                <div id="my-profile-picture">
                    <img src="./../../img/siteSerMae/home/perfil/<?php echo $_SESSION['fotoUsuario'] ?>">
                </div>
                <form action="../../Controller/usuarioController.php" method="post" enctype="multipart/form-data">
                <input type="hidden" id="nomeUsuario" name="idusuario">
                <label for="profile-upload" class="btn btn-primary btn-lg">Escolha uma foto</label>
                <input type="file" accept="image/*" id="profile-upload" name="fotoUsuario">
                <button type="submit" name="atualizaPerfil" id="atualizarPerfil" class="btn btn-primary btn-lg">enviar</button>
                </form>
                <a class="btn btn-primary btn-lg" type="button" href="../../dao/logoff.php">Sair</a>
            </div>
            <span class="close"><i class="fa fa-close"></i></span>
        </div>
    </div>
    <!--Final perfil-popUp-->