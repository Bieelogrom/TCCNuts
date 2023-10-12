<!--inicio perfil-popUp-->
  <div class="popup profile-popup">
        <div>
            <div class="popup-box profile-popup-box">
                <h1><?php echo $_SESSION['nomeUsuario'];?></h1>
                <div id="my-profile-picture">
                    <img src="./../../img/siteSerMae/home/perfil/1.png">
                </div>
                <form action="../../Controller/usuarioController.php" method="post" enctype="multipart/form-data">
                <input type="hidden" id="nomeUsuario" name="idusuario">
                <label for="profile-upload" class="btn btn-primary btn-lg">Escolha uma foto</label>
                <input type="file" accept="image/*" id="profile-upload" name="fotoUsuario">
                <label for="name-alterator" class="">Escolha seu nome de perfil</label>
                <input type="text" id="name-alterator" name="apelidoUsuario">
                <button type="submit" name="atualizaPerfil" id="atualizarPerfil" class="btn btn-primary btn-lg">enviar</button>
                </form>
                <a href="../../dao/logoff.php" class="btn btn-primary btn-lg">
                    Sair
                </a>
            </div>
            <span class="close"><i class="fa fa-close"></i></span>
        </div>
    </div>
    <!--Final perfil-popUp-->