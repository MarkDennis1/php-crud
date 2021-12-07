<?php

class Data {

    static private $mdp;

    //Set $mdp as new MySqlDataProvider
    static public function init(MySqlDataProvider $mdp){
        return self::$mdp = $mdp;
    }

    //sort records from database
    //functions/data/mysql.class.php
    static public function sort_by($sort){
        return self::$mdp->sort_by($sort);
    }
    
    //display all records from database
    //functions/data/mysql.class.php
    static public function get_student_records(){
        return self::$mdp->get_student_records();
    }

    //search records from database
    //functions/data/mysql.class.php
    static public function search_student_records($search){
        return self::$mdp->search_student_records($search);
    }

    //add new record
    //functions/data/mysql.class.php
    static public function add_student_profile($id, $fname, $mname, $lname, $suffix, $sex, $section, $bday, $address, $contact, $email){
        return self::$mdp->add_student_profile($id, $fname, $mname, $lname, $suffix, $sex, $section, $bday, $address, $contact, $email);
    }

    //update selected record
    //functions/data/mysql.class.php
    static public function update_student_profile($id, $fname, $mname, $lname, $suffix, $sex, $section, $bday, $address, $contact, $email){
        return self::$mdp->update_student_profile($id, $fname, $mname, $lname, $suffix, $sex, $section, $bday, $address, $contact, $email);
    }

    //archive selected record
    //functions/data/mysql.class.php
    static public function delete_student_profile($id){
        return self::$mdp->delete_student_profile($id);
    }
}