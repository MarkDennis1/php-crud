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

    //add new record to database
    public function add_student_profile($id, $fname, $mname, $lname, $suffix, $sex, $section, $bday, $address, $contact, $email){
        $this->non_query(
            'INSERT INTO tbl_student_profile VALUES (:id, :fname, :mname, :lname, :suffix, :sex, :section, :bday, :address, :contact, :email)',
            [
                ':id' => $id,
                ':fname' => $fname,
                ':mname' => $mname,
                ':lname' => $lname,
                ':suffix' => $suffix,
                ':section' => $section,
                ':sex' => $sex,
                ':bday' => $bday,
                ':address' => $address,
                ':contact' => $contact,
                ':email' => $email
            ]
        );
    }

    //update selected term
    public function update_student_profile($id, $fname, $mname, $lname, $suffix, $sex, $section, $bday, $address, $contact, $email){
        $this->non_query(
            'UPDATE tbl_student_profile SET Student_ID = :id, Student_First_Name = :fname, Student_Middle_Name = :mname, Student_Last_Name = :lname,
            Student_Suffix = :suffix, Student_Sex = :sex, Student_Section = :section, Student_Birthday = :bday, Student_Address = :address,
            Student_Contact_Number = :contact, Student_Email_Address = :email',
            [
                ':id' => $id,
                ':fname' => $fname,
                ':mname' => $mname,
                ':lname' => $lname,
                ':suffix' => $suffix,
                ':sex' => $sex,
                ':section' => $section,
                ':bday' => $bday,
                ':address' => $address,
                ':contact' => $contact,
                ':email' => $email,
            ]
        );
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
            
            return new PDO($this->source, CONFIG['db_user'], CONFIG['db_password']);
        } catch (PDOException $e) {
            
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