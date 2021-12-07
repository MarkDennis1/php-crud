<?php

require('studentprofile.class.php');

class MySqlDataProvider {

    //Class parameter
    public function __construct($source) {
        $this->source = $source;
    }

    //Sort records 
    public function sort_by($sort) {
        $pdo = $this->connect();

        if ($pdo == null) {
            return[];
        }

        $smt = $pdo->query("SELECT * FROM tbl_student_profile WHERE is_archive = false ORDER BY $sort");

        $data = $smt->fetchAll(PDO::FETCH_CLASS, 'StudentProfile');

        $smt = null;
        $pdo = null;

        if (empty($data)){
            return[];
        }

        return $data;
    }

    //Display all the records from database
    public function get_student_records(){
        $pdo = $this->connect();

        if ($pdo == null) {
            return[];
        }

        $smt = $pdo->query('SELECT * FROM tbl_student_profile WHERE is_archive = false');

        $data = $smt->fetchAll(PDO::FETCH_CLASS, 'StudentProfile');

        $smt = null;
        $pdo = null;

        if (empty($data)){
            return[];
        }

        return $data;
    }

    //search records based on user input
    public function search_student_records($search){
        $pdo = $this->connect();

        if ($pdo == null) {
            return[];
        }

        $smt = null;
        
        $smt = $pdo->prepare('SELECT * FROM tbl_student_profile WHERE CONCAT(Student_ID, Student_First_Name, Student_Last_Name) LIKE :search AND is_archive = false');

        $smt->execute([':search' => '%'.$search.'%']);
    

        $data = $smt->fetchAll(PDO::FETCH_CLASS, 'StudentProfile');

        $smt = null;
        $pdo = null;

        if (empty($data)){
            return[];
        }

        return $data;
    
    }

    //add new record to database
    public function add_student_profile($id, $fname, $mname, $lname, $suffix, $sex, $section, $bday, $address, $contact, $email){
        $this->non_query(
            'INSERT INTO tbl_student_profile VALUES (:id, :fname, :mname, :lname, :suffix, :sex, :section, :bday, :address, :contact, :email, is_archive = true)',
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

    //update selected record
    public function update_student_profile($id, $fname, $mname, $lname, $suffix, $sex, $section, $bday, $address, $contact, $email){
        $this->non_query(
            'UPDATE tbl_student_profile SET Student_First_Name = :fname, Student_Middle_Name = :mname, Student_Last_Name = :lname,
            Student_Suffix = :suffix, Student_Sex = :sex, Student_Section = :section, Student_Birthday = :bday, Student_Address = :address,
            Student_Contact_Number = :contact, Student_Email_Address = :email WHERE Student_ID = :id',
            [
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
                ':id' => $id
            ]
        );
    }

    //archive selected record
    public function delete_student_profile($id){

        echo "ksdjhfolsdjflsdjlfjsldfjsdlfjlsdflsldjflsfljs";
        $this->non_query(
            'UPDATE tbl_student_profile SET is_archive = true WHERE Student_ID = :id',
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

    //mysql non-query method for add, update and delete
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