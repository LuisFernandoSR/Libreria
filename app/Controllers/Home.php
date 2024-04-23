<?php namespace App\Controllers;

    use App\Models\Usuarios;
    
class Home extends BaseController
{
    public function index(): string
    {
        $libreria =\Config\Database::connect('libreria');
       
        //*$libreria ? echo 'conexion' : 'noconexion';

       // var_dump($libreria);

        $q = $libreria->query('SELECT * FROM usuarios;');

        var_dump($q->getResultArray());

        return view('inicio');
    }
    
  
    public function book() {
       return view('book');
    }

    
    public function inicio(){
        $usuario = $this->request->getPost('usuario');
        //$password = $_POST['password'];
		$password = $this->request->getPost('password')??"";
		$Usuario = new Usuarios();

		$datosUsuario = $Usuario->obtenerUsuario(['usuario' => $usuario]);

		if (count($datosUsuario) > 0 && password_verify($password, $datosUsuario[0]['password'])) {

			$data = [
						"usuario" => $datosUsuario[0]['usuario'],
					];

			$session = session();
			$session->set($data);

			return redirect()->to(base_url('/book'))->with('mensaje','1');

		} else {
			return redirect()->to(base_url('/'))->with('mensaje','0');
		}
    }
    

	public function salir() {
		$session = session();
		$session->destroy();
		return redirect()->to(base_url('/'));
	}
}
