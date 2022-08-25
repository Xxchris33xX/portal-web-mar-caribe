<?php

    /**
 * base de datos  para compartir la conexión entre scripts
 * Clase Database
 */
class Database
{

	/**
	 * @var PDO|null Conectar pdo
	 */
	private static $connection;

	/**
	 * @var array PDO coneccion 
	 */
	private static $settings = array(
		PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, // caso de que algo salga mal 
		PDO::ATTR_EMULATE_PREPARES => false, // no queremos emular declaraciones preparadas para versiones antiguas de MySQL que no lo admitían
		PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8', // uso de codificación Unicode
	);

	/**
	 * conectar la base de datos.
	 * @param string $host direccion host
	 * @param string $user Username
	 * @param string $password contraseña
	 * @param string $database nombre base de daots
	 * @return PDO conectar con PDO
	 */
	public static function connect($host, $user, $password, $database)
	{
		if (!isset(self::$connection)) {
			self::$connection = @new PDO(
				"mysql:host=$host;dbname=$database",
				$user,
				$password,
                self::$settings
			);
		}
		return self::$connection;
	}

	/**
	 * Pasar de forma segura los parámetros a la consulta SQL, ejecutar la consulta y retornar su resultado
	 * @param string $sql SQL query
	 * @param array $Parámetros que se pasarán a la consulta
	 * @return PDOStatement resultado Query 
	 */
	public static function query($sql, $parameters = array())
	{
		$query = self::$connection->prepare($sql);
		$query->execute($parameters);
		return $query;
	}

}

class CountViewsModel
{
	/**
	 * insertar la nueva visitas en la base de datos
	 */
	public function addPageview()
	{
		Database::query('
            INSERT INTO `contador`
            (`ip`, `created`)
            VALUES (?, NOW())
        ', array($_SERVER['REMOTE_ADDR']));
	}

	/**
	 * Devuelve el número de visitas totales
	 * @return mixed
	 */
	public function totalPageviews()
	{
		$result = Database::query('
            SELECT COUNT(*) AS `cnt`
            FROM `contador`
        ');
		$data = $result->fetch();
		return $data['cnt'];
	}

	/**
	 * retorna el número de visitas de los últimos días.
	 * @param int $days Numero de dias
	 * @return int el numero de visito en los ultimos dias
	 */
	public function pageviewsFor($days)
	{
		$result = Database::query('
            SELECT COUNT(*) AS `cnt`
            FROM `contador`
            WHERE `created` > (NOW() - INTERVAL ? DAY)
        ', array($days));
		$data = $result->fetch();
		return $data['cnt'];
	}

	/**
	 * retorna el número total de UIP (usuarios por IP)
	 * @return int el numero total de UIP
	 */
	public function totalUips()
	{
		$result = Database::query('
            SELECT COUNT(DISTINCT `ip`) AS `cnt`
            FROM `contador`
        ');
		$data = $result->fetch();
		return $data['cnt'];
	}

	/**
	 * retorna el número de visitas UIP de los últimos días.
	 * @param int $days Numero de dias
	 * @return int el numero de visitas UIP en los ultimos dias
	 */
	public function uipsFor($days)
	{
		$result = Database::query('
            SELECT COUNT(DISTINCT `ip`) AS `cnt`
            FROM `contador`
            WHERE `created` > (NOW() - INTERVAL ? DAY)
        ', array($days));
		$data = $result->fetch();
		return $data['cnt'];
	}

	/**
	 * Tablas con las estadisticas
	 */



	public function printStatistics()
	{
		
		echo('<tr>
                
                <h3>' . $this->totalPageviews() . '</h3>
            </tr>');
		
	
	}

	public function printStatistics2()
	{echo('<tr>
                
                <h3>' . $this->totalUips() . '</h3>
            </tr>');

	}
	public function printStatistics3()
		{echo('<tr>
               
                <h3>' . $this->pageviewsFor(30) . '</th3>
            </tr>');
		}

		public function printStatistics4(){
		echo('<tr>
                <h3>' . $this->uipsFor(30) . '</h3>
            </tr>');
		}
		public function printStatistics5(){ 
		echo('<tr>
                
                <h3>' . $this->pageviewsFor(7) . '</h3>
            </tr>');

		}


		public function printStatistics6() { 
		echo('<tr>
                
                <h3>' . $this->uipsFor(7) . '</h3>
            </tr>');
		}
	



//funcion de todos los datos

		public function printStatistics_all(){
			echo('<table>');
			
			echo('<tr>
                
			<h3>' . $this->totalPageviews() . '</h3>
		</tr>');
	
		echo('<tr>
			<td>visitas por UIP</td>
			<td>' . $this->totalUips() . '</td>
		</tr>');

		echo('<tr>
			<td>Visitas de ultimo mes</td>
			<td>' . $this->pageviewsFor(30) . '</td>
		</tr>');

		echo('<tr>
		<td>Visitas UIP de ultimo mes</td>
		<td>' . $this->uipsFor(30) . '</td>
	</tr>');

		echo('<tr>
                <td>Visitas en la ultima semana</td>
                <td>' . $this->pageviewsFor(7) . '</td>
            </tr>');

			echo('<tr>
                <td>Visitas UIP en la ultima semana</td>
                <td>' . $this->uipsFor(7) . '</td>
            </tr>');
			echo('</table>');
		}
	
}

?>