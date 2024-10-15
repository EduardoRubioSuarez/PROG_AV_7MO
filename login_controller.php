<?php 

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['action'])) {
        $action = $_POST['action'];

        $authController = new AuthController();

        switch ($action) {
            case 'login':
                $email = $_POST['correo'];
                $password = $_POST['contrasena'];
                $authController->login($email, $password);
                break;

            case 'logout':
                $authController->logout();
                break;

            default:
                echo "Acción no válida.";
                break;
        }
    } else {
        echo "No se ha especificado ninguna acción.";
    }
}

class AuthController {
    public function login($email, $password) {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://crud.jonathansoto.mx/api/login',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => array(
                'email' => $email,
                'password' => $password
            ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        echo $response; 
    }

    public function logout() {
        echo "Cerrando sesión";
    }
}

?>
