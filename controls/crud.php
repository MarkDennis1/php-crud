<?php
require('../functions/requires.php');

$view_bag = [
    'title' => 'Student Database',
    'heading' => 'Student list'
];

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
    else {
        $records = Data::get_student_records();
    }

    if (isset($_GET['sort'])) {
        $sort = $_GET['sort'];
        $records = Data::sort_by($sort);
    }
}

view('crud', $records);