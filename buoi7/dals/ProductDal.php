<?php
    require_once 'DB.php';
    require_once 'ICrud.php';

    class ProductDal extends DB implements ICrud{
        public function create($obj)
        {
            try{
                $this->pdo->query('insert into products (name) values ("'.$obj->getName().'")');
                return true;
            }catch(PDOException $e){
                return false;
            }
        }

        public function getAll()
        {
            try{
                $rs = $this->pdo->query('select * from products');
                return $rs->fetchAll(PDO::FETCH_OBJ);
            }catch(PDOException $e){
                echo $e->getMessage();
            }
            
        }

        public function update($id, $obj)
        {
            try{
                $this->pdo->query('update products set name = "'.$obj.'"where id = '.$id);            }
            catch(PDOException $e){
                echo $e->getMessage();
            }
        }

        public function delete($id)
        {
            try{
                $this->pdo->query('delete from products where id = '.$id);
            }catch(PDOException $e){
                echo $e->getMessage();
            }
        }
    }
?>