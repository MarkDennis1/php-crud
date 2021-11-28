<?php

class Data {

    static private $mdp;

    //initialize static class
    static public function init(MySqlDataProvider $mdp){
        return self::$mdp = $mdp;
    }

    static public function sort_by($sort){
        return self::$mdp->sort_by($sort);
    }

    static public function get_student_records(){
        return self::$mdp->get_student_records();
    }

    //search records from database
    static public function search_student_records($search){
        return self::$mdp->search_student_records($search);
    }

    //get the id 
    static public function get_student_profile($id){
        return self::$mdp->get_student_profile($id);
    }

    //add new record
    static public function add_student_profile($id, $definition){
        return self::$mdp->add_student_profile($id, $definition);
    }

    //update selected record
    static public function update_student_profile($id, $new_term, $definition){
        return self::$mdp->update_student_profile($id, $new_term, $definition);
    }

    //delete selected record
    static public function delete_student_profile($id){
        return self::$mdp->delete_student_profile($id);
    }
}