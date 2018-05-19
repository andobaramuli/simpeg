<?php
  class AuthModel
  {
    private $db;
		private $con;

		public function __construct()
    {
			require_once("../config/Database.php");

			$this->db = new Database("localhost","root","","simpeg");
			$this->con = $this->db->connectToMySQL();
		}

		public function getUserAuth($username, $password)
    {
			if($this->con){
				$sql = "SELECT namapengguna, katakunci, kodeperan FROM pengguna WHERE namapengguna LIKE '$username' AND katakunci LIKE '$password'";
				$result = mysqli_query($this->con, $sql);
				return $result;
			}else{
				echo "Can not get the data";
			}
		}
  }
?>
