<?
    class Conectar{
        protected $dbh;
        
        protected function Conexion(){
            try{
                $conectar=$this-> dbh=new PDO("mysql:local=localhost:81; dbname=servicioweb","root","root");
                return $conectar;
            }catch(Exception $e){
                print "Error de conexion:".$e->getMessage()."<br/>";
            }
        }

        
    }


?>