<?php
require('../functions/requires.php');

$view_bag = [
    'title' => 'Student Database',
    'heading' => 'Student list'
];

$records = Data::get_student_records();

if (is_get()) {
    if (isset($_GET['delete'])) {
        $id = $_GET['delete'];
        Data::delete_student_profile($id);
        redirect('crud.php');
    }

    if (isset($_GET['search'])) {
        if ($_GET['search'] != '') {
            $records = Data::search_student_records($_GET['search']);
    
            $view_bag['heading'] = "Search result for '" . $_GET['search'] . "'";
        }
        else {
            $records = Data::get_student_records();
        }
    }

    if (isset($_GET['sort'])) {
        $sort = $_GET['sort'];
        $records = Data::sort_by($sort);
    }
}

if (is_post()) {

    if (isset($_POST['btnAddStudent'])) {

        Data::add_student_profile($_POST['student-id'], $_POST['student-fname'], $_POST['student-mname'], $_POST['student-lname'], 
        $_POST['student-suffix'], $_POST['student-sex'], $_POST['student-section'], $_POST['student-birthday'], $_POST['student-address'],
        $_POST['student-number'], $_POST['student-email']);

        $records = Data::get_student_records();
    }

    if (isset($_POST['btnUpdateStudent'])) {
        
        Data::update_student_profile($_POST['student-id'], $_POST['student-fname'], $_POST['student-mname'], $_POST['student-lname'], 
        $_POST['student-suffix'], $_POST['student-sex'], $_POST['student-section'], $_POST['student-birthday'], $_POST['student-address'],
        $_POST['student-number'], $_POST['student-email']);
    
        $records = Data::get_student_records();
    }

}



view('crud', $records);


    try {
        $pdo = new PDO(CONFIG['db'], CONFIG['db_user'], CONFIG['db_password']);
    } catch (PDOException $e) {
        $message = "No connected database.";
        echo "<script type='text/javascript'>alert('$message');</script>";
        return null;
    }

