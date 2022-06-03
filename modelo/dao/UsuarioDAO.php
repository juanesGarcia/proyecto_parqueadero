
<?php
//En esta clase se implementa el patron de diseño DAO, para separar la capa de acceso
//a datos de la lógica de la aplicación. Aqui se crea una instancia de la clase de la 
//conexión para realizar las consultas pertinentes a la base de datos.
//Tambien se llama a las clases planas para guardar la informacion, por ejemplo 
//la clase Usuario


//Con require_once se incluye el archivo especificado, en este caso DataSource.php y 
//Usuario.php
require_once ("DataSource.php");  //La clase que permite conectarse a la Base de Datos
require_once (__DIR__."/../entidad/Usuario.php");

class UsuarioDAO {
     
     //Con este metodo se hace la validacion para saber si el usuario ingresado
     //en el login se encuentra registrado en la base de datos
	 public function autenticarUsuario($correo, $contrasena){
        
        //Se crea la instancia de DataSource para hacer la conexión
        $data_source = new DataSource();

        //Se llama al metodo ejecutarConsulta para devolver el usuario
        //que cumpla con el correo y contraseña recibidos del login
        $data_table= $data_source->ejecutarConsulta("SELECT * FROM usuario WHERE correo =:correo AND contrasena =:contrasena",array(':correo'=>$correo,':contrasena'=>$contrasena));

        $usuario=null;
        //Si $data_table retornó una fila, quiere decir que se encontro el usuario en la base de datos
        if(count($data_table)==1){
            
            //Se guarda la informacion del usuario en un objeto de tipo Usuario
            foreach($data_table as $indice => $valor){
                //Los nombres de los campos corresponden a los nombres que tienen en la 
                //base de datos, por ejemplo: id, nombre, correo, password, etc.
                $usuario = new Usuario(
                        $data_table[$indice]["idusuario"],
                        $data_table[$indice]["foto"],
                        $data_table[$indice]["nombre"],
                        $data_table[$indice]["correo"],
                        $data_table[$indice]["contrasena"]
                        );
            }
        }
        //se retorna el objeto usuario, retorna null en el caso de que no encuentre el usuario
        //en la base de datos 
        return $usuario;
    }    


    public function registrarUsuario(Usuario $usuario){
        $data_source = new DataSource();
        
        $stmt1 = "INSERT INTO usuario VALUES (NULL,:nombre,:correo,:contrasena)"; 
        
        $resultado = $data_source->ejecutarActualizacion($stmt1, array(
            ':nombre' => $usuario->getNombre(),
            ':correo' => $usuario->getCorreo(),
            ':contrasena' => $usuario->getContrasena()
            )
        ); 

      return $resultado;
    }

    public function verUsuarios(){
        $data_source = new DataSource();
        
        $data_table = $data_source->ejecutarConsulta("SELECT * FROM usuario", NULL);

        $usuario=null;
        $usuarios=array();

        foreach($data_table as $indice => $valor){
            $usuario = new Usuario(
                    $data_table[$indice]["idusuario"],
                    $data_table[$indice]["foto"],
                    $data_table[$indice]["nombre"], 
                    $data_table[$indice]["correo"],
                    $data_table[$indice]["contrasena"],
                    );
            array_push($usuarios,$usuario);
        }
        
    return $usuarios;
    }

    public function eliminarUsuario($idUsuario){
        $data_source = new DataSource();
        
        $stmt1 = "DELETE FROM usuario WHERE idusuario = :idUsuario"; 
        
        $resultado = $data_source->ejecutarActualizacion($stmt1, array(
            ':idUsuario' => $idUsuario
            )
        ); 

      return $resultado;
    }

    public function verUsuarioPorId($idUsuario){
        $data_source = new DataSource();
        
        $data_table = $data_source->ejecutarConsulta("SELECT * FROM usuario WHERE idusario = :idUsuario", array(':idUsuario'=>$idUsuario));

        $usuario=null;
        //Si $data_table retornó una fila, quiere decir que se encontro el usuario en la base de datos
        if(count($data_table)==1){
            $usuario = new Usuario(
                    $data_table[0]["idusuario"],
                    $data_table[0]["foto"],
                    $data_table[0]["nombre"],
                    $data_table[0]["correo"],
                    $data_table[0]["contrasena"],
                    );
        }

        
    return $usuario;
    }

    public function editarUsuario($usuario){
        $data_source = new DataSource();
        
        $stmt1 = "UPDATE usuario SET nombre = :nombre, correo = :correo, contrasena = :contrasena  WHERE idusuario= :idUsuario"; 
        
        $resultado = $data_source->ejecutarActualizacion($stmt1, array(
            ':nombre' => $usuario->getNombre(),
            ':correo' => $usuario->getCorreo(),
            ':contrasena' => $usuario->getContrasena(),
            ':idUsuario' => $usuario->getIdusuario()

           
        )); 

      return $resultado;
    }

}