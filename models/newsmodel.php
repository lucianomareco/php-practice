<?php

class NewsModel extends Model{

    public function __construct(){
        parent::__construct();
    }
    
    public function insert($data){
        //insert data in database

        try{
        $query = $this->db->connect()->prepare('INSERT INTO STUDENTS (ENROLLMENT, NAME, LASTNAME) VALUES(:enrollment, :name, :lastName)');
        $query->execute(['enrollment'=> $data['enrollment'], 'name'=>$data['name'], 'lastName'=>$data['lastName']]);
        }
        catch(PDOException $e){
            echo 'Enrollmnet already existented'

    }
}
?>