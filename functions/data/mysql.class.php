<?php

require('studentprofile.class.php');

class MySqlDataProvider {

    public function __construct($source) {
        $this->source = $source;
    }

    public function sort_by($sort) {
        $pdo = $this->connect();

        if ($pdo == null) {
            return[];
        }

        $smt = $pdo->query("SELECT * FROM tbl_student_profile ORDER BY $sort");

        $data = $smt->fetchAll(PDO::FETCH_CLASS, 'StudentProfile');

        $smt = null;
        $pdo = null;

        if (empty($data)){
            return[];
        }

        return $data;
    }

    //decode data.json
    public function get_student_records(){
        $pdo = $this->connect();

        if ($pdo == null) {
            return[];
        }

        $smt = $pdo->query('SELECT * FROM tbl_student_profile');

        $data = $smt->fetchAll(PDO::FETCH_CLASS, 'StudentProfile');

        $smt = null;
        $pdo = null;

        if (empty($data)){
            return[];
        }

        return $data;
    }

    //search objects from data.json
    public function search_student_records($search){
        $pdo = $this->connect();

        if ($pdo == null) {
            return[];
        }

        $smt = null;
        
        $smt = $pdo->prepare('SELECT * FROM tbl_student_profile WHERE CONCAT(Student_ID, Student_First_Name, Student_Last_Name) LIKE :search');

        $smt->execute([':search' => '%'.$search.'%']);
    

        $data = $smt->fetchAll(PDO::FETCH_CLASS, 'StudentProfile');

        $smt = null;
        $pdo = null;

        if (empty($data)){
            return[];
        }

        return $data;
    
    }

    //get the key 'term' from data.json
    public function get_student_profile($id){

    }

    //add new term
    public function add_student_profile($id, $definition){

    }

    //update selected term
    public function update_student_profile($id, $new_term, $definition){

    }

    //delete selected term
    public function delete_student_profile($id){
        $this->non_query(
            'DELETE FROM tbl_student_profile WHERE Student_ID = :id',
            [':id' => $id]
        );
    }

    private function connect() {
        try {
            $message = "Database connected.";
            echo "<script type='text/javascript'>alert('$message');</script>";
            return new PDO($this->source, CONFIG['db_user'], CONFIG['db_password']);
        } catch (PDOException $e) {
            $message = "No connected database.";
            echo "<script type='text/javascript'>alert('$message');</script>";
            return null;
        }
    }

    //mysql non-query method
    private function non_query($sql, $sql_param) {
        $pdo = $this->connect();

        if ($pdo == null) {
            return;
        }

        $smt = $pdo->prepare($sql);
        $smt->execute($sql_param);

        $smt = null;
        $db = null;
    }
}