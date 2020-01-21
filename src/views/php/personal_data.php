<?php  


// clase para info del index
class makubexcode{
	private $makubex_code;
	private $entorno_web;

	public function __construct($makubex_code, $entorno_web){
		$this->full_makubex_code = $makubex_code;
		$this->full_entorno_web =  $entorno_web;
	}

	public function get_makubex_code(){
		return $this->full_makubex_code;
	}
	public function get_entorno_web(){
		return $this->full_entorno_web;
	}
}
$obj_maku = new makubexcode("Makubex-code", "Entorno de desarrollo web");

//Clase para información de contacto 
class dataPersonal{

	private $name;
	private $mail;
	private $phone;
	private $country;

	public function __construct($name,$mail,$phone,$country){
		$this->full_name = $name;
		$this->full_mail = $mail;
		$this->full_phone = $phone;
		$this->full_country = $country;
	}

	public function getName(){
		return $this->full_name;
	}

	public function getMail(){
		return $this->full_mail;
	}

	public function getPhone(){
		return $this->full_phone;
	}

	public function getCountry(){
		return $this->full_country;
	}

	
}

$obj_dataPersonal = new dataPersonal('Jorge Adarmes', 'jorgeluismakubex@gmail.com','+58-4243534350', 'Venezuela');

// clase para definicion de texto Informativo Sobre mí (about.php)
class textInformation{
	private $web_developer;

	public function __construct($web_developer){
		$this->fullwebDeveloper = $web_developer;
	}

	public function getwebDeveloper(){
		return $this->fullwebDeveloper;
	}

}

$obj_textInformation = new textInformation("Soy <strong>Jorge Adarmes</strong> una persona actualmente dedicada al diseño y desarrollo web, a la creación de aplicaciones distribuidas para la red.");

// clase para definicion de texto Informativo desarrollador web 
class textwebDeveloper extends textInformation {
	private $web_developer;

	public function __construct($web_developer){
		$this->fullwebDeveloper = $web_developer;
	}
	public function getwebDeveloper(){
		return $this->fullwebDeveloper;
	}
}

$ojb_txtwebDeveloper = new textwebDeveloper(" Basado en la programación de propósito general, de código del lado del cliente, y codigo del lado del servidor.");

class resumenCarrera extends textwebDeveloper{
	private $resumenCarrera;

	public function __construct($resumenCarrera){
		$this->fullresumenCarrera = $resumenCarrera;
	}
	public function getresumenCarrera(){
		return $this->fullresumenCarrera;
	}
}
$obj_resumenCarrera = new resumenCarrera(" Velo por la programación y el entorno del desarrollo web, además de ser un desarrollador autodidacta e independiente, actualmente soy una persona que está en desarrollo para convertirse en un desarrollador web fullstack profesional, este contexto de codigo web, he trabajado con tecnologias como PHP del lado del servidor, SQL, Mysql, Javascript y Jquery del cliente, y el DOM, metodos como AJAX, y Nodejs del lado del servidor en progreso de aprendizaje, etiquetas de marcado de información como HTML5, lenguaje de diseño como CSS3 y su framework como BOOTSTRAP4.");

// clase para skill habilidades del index
class code {
	private $php_dato;
	private $Javascript_dato;
	private $Jquery_dato;
	private $ajax_dato;
	private $mysql_dato;
	private $html5_dato;
	private $css3_dato;
	private $bootstrap_dato;
	private $español;
	private $ingles;

	public function __construct($php_dato, $Javascript_dato, $Jquery_dato, $ajax_dato, $mysql_dato, $html5_dato, $css3_dato, $bootstrap_dato,$español,$ingles){
		$this->full_Php = $php_dato;
		$this->full_Javascript = $Javascript_dato;
		$this->full_Jquery = $Jquery_dato;
		$this->full_ajax = $ajax_dato;
		$this->full_mysql = $mysql_dato;
		$this->full_html5 = $html5_dato;
		$this->full_css3 = $css3_dato;
		$this->full_bootstrap = $bootstrap_dato;
		$this->full_español = $español;
		$this->full_ingles = $ingles;
	}

	public function getphp(){
		return $this->full_Php;
	}
	public function getjavascript(){
		return $this->full_Javascript;
	}
	public function getjquery(){
		return $this->full_Jquery;
	}
	public function getajax(){
		return $this->full_ajax;
	}
	public function getmysql(){
		return $this->full_mysql;
	}
	public function gethtml5(){
		return $this->full_html5;
	}
	public function getcss3(){
		return $this->full_css3;
	}
	public function getbootstrap(){
		return $this->full_bootstrap;
	}
	public function getespañol(){
		return $this->full_español;
	}
	public function getingles(){
		return $this->full_ingles;
	}
}
$obj_code = new code("Php","Javascript", "Jquery", "Ajax", "Mysql", "Html5", "Css3", "Bootstrap4", "Español", "Ingles");


