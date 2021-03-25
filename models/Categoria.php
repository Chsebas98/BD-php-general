<?php
    class Categoria extends Conectar{
        public function get_categoria(){
            $conectar=parent::conexion();
            
            $sql="SELECT * FROM Categoria";
            $sql=$conectar->prepare($sql);
            $sql->execute();

            return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);
        }
        public function get_categoria_por_id($cat_id){
            $conectar = parent::conexion();
                
                $sql="SELECT * FROM Categoria WHERE id=?";
                $sql=$conectar->prepare($sql);
                $sql->bindValue(1,$cat_id);
                $sql=execute();
    
                return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);
    
        }

        public function insertcat($nombre,$comentario){
            $conectar = parent::conexion();
                
                $sql="INSERT INTO Categoria (id,nombre,comentario,estado) VALUES (NULL,?,?,'1');";
                $sql=$conectar->prepare($sql);
                $sql->bindValue(1,$nombre);
                $sql->bindValue(2,$comentario);
                $sql=execute();
    
                return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);
    
        }

        public function updatecat($id,$nombre,$comentario){
            $conectar = parent::conexion();
                
                $sql="UPDATE Categoria SET 
                nombre=?,
                comentario=?,
                WHERE id=?;";
                $sql=$conectar->prepare($sql);
                $sql->bindValue(1,$nombre);
                $sql->bindValue(2,$comentario);
                $sql->bindValue(3,$id);
                $sql=execute();
    
                return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);
    
        }
        
        public function deletecat($estado){
            $conectar = parent::conexion();
                
                $sql="UPDATE Categoria 
                SET estado=0
                WHERE estado=1;";
                $sql=$conectar->prepare($sql);
                $sql->bindValue(1,$estado);
                $sql=execute();
    
                return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);
    
        }
    }
    

?>