<?php
require('../functions/requires.php');

//declare variable
$view_bag = [
    'title' => 'Student Database',
    'heading' => 'Student list'
];

//display all records from database
//functions/data/static.class.php
$records = Data::get_student_records();

//check if user request is get
//functions/functions.php
if (is_get()) {
    if (isset($_GET['delete'])) {
        $id = $_GET['delete'];

        //archive selected record
        //functions/data/static.class.php
        Data::delete_student_profile($id);

        //navigates to crud.php
        //functions/functions.php
        redirect('crud.php');
    }

    //check if user use search
    if (isset($_GET['search'])) {
        if ($_GET['search'] != '') {

            //Display searched records 
            //functions/data/static.class.php
            $records = Data::search_student_records($_GET['search']);
            
            //change heading
            $view_bag['heading'] = "Search result for '" . $_GET['search'] . "'";
        }
        else {

            //Display all records if search input is null
            //functions/data/static.class.php
            $records = Data::get_student_records();
        }
    }

    //check if user use sort by
    if (isset($_GET['sort'])) {
        $sort = $_GET['sort'];

        //Display all records in ordered by
        $records = Data::sort_by($sort);
    }
}

//check if user request is post
//functions/functions.php
if (is_post()) {

    if (isset($_POST['btnAddStudent'])) {

        //add new record
        //functions/data/static.class.php
        Data::add_student_profile($_POST['student-id'], $_POST['student-fname'], $_POST['student-mname'], $_POST['student-lname'], 
        $_POST['student-suffix'], $_POST['student-sex'], $_POST['student-section'], $_POST['student-birthday'], $_POST['student-address'],
        $_POST['student-number'], $_POST['student-email']);


        //Display all records 
        //functions/data/static.class.php
        $records = Data::get_student_records();
    }

    if (isset($_POST['btnUpdateStudent'])) {
        
        //update selected record
        //functions/data/static.class.php
        Data::update_student_profile($_POST['student-id'], $_POST['student-fname'], $_POST['student-mname'], $_POST['student-lname'], 
        $_POST['student-suffix'], $_POST['student-sex'], $_POST['student-section'], $_POST['student-birthday'], $_POST['student-address'],
        $_POST['student-number'], $_POST['student-email']);
    
        //Display all records 
        //functions/data/static.class.php
        $records = Data::get_student_records();
    }

}


//navigate subpage
//functions/functions.php
view('crud', $records);

    //returns message of database connection status
    try {
        $pdo = new PDO(CONFIG['db'], CONFIG['db_user'], CONFIG['db_password']);
    } catch (PDOException $e) {
        $message = "No connected database.";
        echo "<script type='text/javascript'>alert('$message');</script>";
        return null;
    }

