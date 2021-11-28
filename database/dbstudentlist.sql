CREATE SCHEMA dbstudentlist;
USE dbstudentlist;

CREATE TABLE `tbl_student_profile` (
  `Student_ID` varchar(10) NOT NULL,
  `Student_First_Name` varchar(50) NOT NULL,
  `Student_Middle_Name` varchar(50) NOT NULL,
  `Student_Last_Name` varchar(50) NOT NULL,
  `Student_Suffix` varchar(10) NOT NULL,
  `Student_Sex` enum('Male','Female') NOT NULL,
  `Student_Section` varchar(10) NOT NULL,
  `Student_Birthday` date NOT NULL,
  `Student_Address` varchar(50) NOT NULL,
  `Student_Contact_Number` varchar(11) NOT NULL,
  `Student_Email_Address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `tbl_student_profile` (`Student_ID`, `Student_First_Name`, `Student_Middle_Name`, `Student_Last_Name`, `Student_Suffix`, `Student_Sex`, `Student_Section`, `Student_Birthday`, `Student_Address`, `Student_Contact_Number`, `Student_Email_Address`) VALUES
('1', 'Mark Dennis', 'Cuento', 'Sanchez', '', 'Male', 'BSIT 3-1', '2000-10-11', 'Tayuman, Binangonan, Rizal', '09397271117', 'markdennissanchez1@gmail.com');
INSERT INTO `tbl_student_profile` (`Student_ID`, `Student_First_Name`, `Student_Middle_Name`, `Student_Last_Name`, `Student_Suffix`, `Student_Sex`, `Student_Section`, `Student_Birthday`, `Student_Address`, `Student_Contact_Number`, `Student_Email_Address`) VALUES
('2', 'Mon Albert', 'Laoyon', 'Gamil', '', 'Male', 'BSIT 3-1', '2000-10-17', 'Angono, Rizal', '09693792543', 'mrgamilmonalbert@gmail.com');
INSERT INTO `tbl_student_profile` (`Student_ID`, `Student_First_Name`, `Student_Middle_Name`, `Student_Last_Name`, `Student_Suffix`, `Student_Sex`, `Student_Section`, `Student_Birthday`, `Student_Address`, `Student_Contact_Number`, `Student_Email_Address`) VALUES
('2', 'Renniel', 'Rocela', 'Gerongga', '', 'Male', 'BSIT 3-1', '2001-04-11', 'Angono, Rizal', '09331529849', 'itsrennieeeel@gmail.com');
INSERT INTO `tbl_student_profile` (`Student_ID`, `Student_First_Name`, `Student_Middle_Name`, `Student_Last_Name`, `Student_Suffix`, `Student_Sex`, `Student_Section`, `Student_Birthday`, `Student_Address`, `Student_Contact_Number`, `Student_Email_Address`) VALUES
('2', 'Jeiwel Anne', 'Pitular', 'Alcachupas', '', 'Female', 'BSIT 3-1', '2000-05-18', 'Taytay, Rizal', '09275704747', 'jeiwelanne0810@gmail.com');


