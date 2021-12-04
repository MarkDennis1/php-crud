CREATE SCHEMA dbstudentlist;
USE dbstudentlist;

CREATE TABLE `tbl_student_profile` (
  `Student_ID` varchar(10) NOT NULL,
  `Student_First_Name` varchar(50) NOT NULL,
  `Student_Middle_Name` varchar(50),
  `Student_Last_Name` varchar(50) NOT NULL,
  `Student_Suffix` varchar(10),
  `Student_Sex` enum('Male','Female') NOT NULL,
  `Student_Section` varchar(50) NOT NULL,
  `Student_Birthday` date NOT NULL,
  `Student_Address` varchar(100) NOT NULL,
  `Student_Contact_Number` varchar(11) NOT NULL,
  `Student_Email_Address` varchar(50) NOT NULL,
  `is_archive` boolean NOT NULL DEFAULT false
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;