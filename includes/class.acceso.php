<?php

#' or '1'='1 

class acceso {

    protected $user;
    protected $pass;
    protected $email;

    public function __construct($usuario, $password, $email) {
        $this->user = htmlspecialchars($usuario);
        $this->pass = $password;                                    //htmlspecialchars(); 
        $this->email = htmlspecialchars($email);
    }

    //////////////////////////////////////////////////////////////////
    public function login() {
        $db = new conexion();
        $id_user = $db->real_escape_string($this->user);
        $pass = $this->pass;      //sha1($db->real_escape_string());
        $sql = $db->query("SELECT id_user, password FROM                              
        usuarios WHERE id_user='$id_user' AND                   
        password='$pass';");

        session_start();
        $_SESSION['user'] = $this->user;
        header('location: imagen-ajax.php');

        session_start();
        $_SESSION['user'] = $this->user;
        header('location: confirmarImg.php');

        if ($db->rows($sql) > 0) {

            session_start();
            $_SESSION['user'] = $this->user;
            header('location: acceso.php');
        } else {
            session_start();
            session_destroy();
            echo('location: index.php?error=acceso');
        }
    }

    ///////////////////////////////////////////////////////////////////// 
    public function registro() {
        $db = new conexion();

        $user = $db->real_escape_string($this->user);
        $pass = $this->pass;                                 //sha1(db->real_escape_string());
        $email = $db->real_escape_string($this->email);

        $sql = $db->query("SELECT id_user,email FROM usuarios WHERE id_user='$user' OR email='$email';");
        $existe = $db->recorrer($sql);

        if ($db->rows($sql) == 0) {
            $db->query("INSERT INTO usuarios (id_user, password, email) VALUES ('$user','$pass','$email');");
            session_start();
            $_SESSION['user'] = $this->user;
            header('location: acceso.php');
        } else if (strtolower($existe['id_user']) == strtolower($this->user) and strtolower($existe['email']) != strtolower($this->email)) {
            header('location: index.php?modo=registro&error=usuario_usado');
        } else if (strtolower($existe['email']) == strtolower($this->email) and strtolower($existe['id_user']) != strtolower($this->user)) {
            header('location: index.php?modo=registro&error=email_usado');
        } else if (strtolower($existe['email']) == strtolower($this->email) and strtolower($existe['id_user']) == strtolower($this->user)) {
            header('location: index.php?modo=registro&error=email_user_usado');
        }
    }

    //////////////////////////////////////////////////////////////////
    public function claveperdida() {
        $db = new conexion();

        $email = $db->real_escape_string($this->email);
        $sql = $db->query("SELECT email FROM usuarios WHERE email='$email';");
        $existe = $db->recorrer($sql);

        if ($db->rows($sql) > 0) {
            include('includes/class.generarPass.php');
            $passw = new generarPass();
            $password = $passw->nuevaPass(5);
            dumpx($passw);
            $pass = $password;
            $password;                                //sha1();
            $db->query("UPDATE usuarios SET password='$password' WHERE email='$this->email';");
            mail($this->email, 'cambio de contraseña', "estimado usuario hemos realizado el cambio de su contraseña a $pass");
            header('location: index.php?modo=claveperdida&succes=ok');
        } else {
            header('location: index.php?modo=claveperdida&error=email_inexistente');
        }
    }

    //////////////////////////////////////////////////////////////////////////
}
