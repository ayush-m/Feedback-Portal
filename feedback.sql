-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2014 at 11:06 AM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `feedback`
--

-- --------------------------------------------------------

--
-- Table structure for table `bt201a`
--

CREATE TABLE IF NOT EXISTS `bt201a` (
`id` int(11) NOT NULL,
  `username` int(11) NOT NULL,
  `instruction` int(11) NOT NULL,
  `The_concepts_were_explained_with_clarity` int(11) NOT NULL,
  `Questions_discussions_were_encouraged` int(11) NOT NULL,
  `Allotted_numbers_of_classes_was_held` int(11) NOT NULL,
  `Evaluation_was_done_regularly_and_feedback_was_given` int(11) NOT NULL,
  `The_course_was_highly_enjoyable` int(11) NOT NULL,
  `The_content_of_the_course_was_appropriate` int(11) NOT NULL,
  `Text_Reference_materials_were_appropriate_for_the_course` int(11) NOT NULL,
  `Strong_Points_For_the_Course` varchar(250) NOT NULL,
  `Strong_points_for_Instructor` varchar(250) NOT NULL,
  `Weak_Points_For_the_Course` varchar(250) NOT NULL,
  `Weak_points_for_Instructor` varchar(250) NOT NULL,
  `Any_Constructive_Suggestion_for_improving_the_course_and_its_thm` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `bt201b`
--

CREATE TABLE IF NOT EXISTS `bt201b` (
`id` int(11) NOT NULL,
  `username` int(11) NOT NULL,
  `instruction` int(11) NOT NULL,
  `The_concepts_were_explained_with_clarity` int(11) NOT NULL,
  `Questions_discussions_were_encouraged` int(11) NOT NULL,
  `Allotted_numbers_of_classes_was_held` int(11) NOT NULL,
  `Evaluation_was_done_regularly_and_feedback_was_given` int(11) NOT NULL,
  `The_course_was_highly_enjoyable` int(11) NOT NULL,
  `The_content_of_the_course_was_appropriate` int(11) NOT NULL,
  `Text_Reference_materials_were_appropriate_for_the_course` int(11) NOT NULL,
  `Strong_Points_For_the_Course` varchar(250) NOT NULL,
  `Strong_points_for_Instructor` varchar(250) NOT NULL,
  `Weak_Points_For_the_Course` varchar(250) NOT NULL,
  `Weak_points_for_Instructor` varchar(250) NOT NULL,
  `Any_Constructive_Suggestion_for_improving_the_course_and_its_thm` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `cl201`
--

CREATE TABLE IF NOT EXISTS `cl201` (
`id` int(11) NOT NULL,
  `username` int(11) NOT NULL,
  `instruction` int(11) NOT NULL,
  `The_concepts_were_explained_with_clarity` int(11) NOT NULL,
  `Questions_discussions_were_encouraged` int(11) NOT NULL,
  `Allotted_numbers_of_classes_was_held` int(11) NOT NULL,
  `Evaluation_was_done_regularly_and_feedback_was_given` int(11) NOT NULL,
  `The_course_was_highly_enjoyable` int(11) NOT NULL,
  `The_content_of_the_course_was_appropriate` int(11) NOT NULL,
  `Text_Reference_materials_were_appropriate_for_the_course` int(11) NOT NULL,
  `Strong_Points_For_the_Course` varchar(250) NOT NULL,
  `Strong_points_for_Instructor` varchar(250) NOT NULL,
  `Weak_Points_For_the_Course` varchar(250) NOT NULL,
  `Weak_points_for_Instructor` varchar(250) NOT NULL,
  `Any_Constructive_Suggestion_for_improving_the_course_and_its_thm` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE IF NOT EXISTS `courses` (
`id` int(11) NOT NULL,
  `number` varchar(6) NOT NULL,
  `course_name` varchar(35) NOT NULL,
  `faculty1` varchar(20) NOT NULL,
  `faculty2` varchar(20) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=46 ;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `number`, `course_name`, `faculty1`, `faculty2`) VALUES
(1, 'cs201', 'Data Structures And Algorithms', 'Saswata Shannigrahi', ''),
(2, 'cs202', 'Discrete Mathemtics', 'G. Sajith', 'Ashish Anand'),
(3, 'cs221', 'Digital Design', 'Santosh Biswas', 'Hemangee Kapoor'),
(4, 'hs235', 'History Of modern India', 'John Thomas', ''),
(5, 'MA201', 'Mathematics - III', 'Dr. Pratyoosh Kumar', 'Swaroop Nandan Bora'),
(9, 'HS230', 'Economics', 'Debarshi Das', 'Mrinal Kanti Dutta'),
(11, 'BT201', 'Biochemistry', 'Limaye Anil Mukund', 'Dubey Vikash Kumar'),
(12, 'CL201 ', 'Chemical Process Calculations', 'Senthilkumar S.', ''),
(13, 'CL202 ', 'Fluid Mechanics', 'Sasidhar Gumma ', ''),
(14, 'CL203', 'Chemical Engineering Thermodynamics', 'Das Debasish', ''),
(35, 'cs210', 'Data Structures Lab', 'Arnab Sarkar', 'Rashmi Dutta Baruah'),
(37, 'cs241', 'System Software Lab', 'Santosh Biswas', ''),
(40, 'ee200', 'Semiconductor Devices and Circuits', 'Roy Paily Palathinka', ''),
(41, 'ee201', 'Digital Circuits and Microprocessor', 'Shaik Rafi Ahamed', ''),
(42, 'ee220', 'Signals, Systems and Networks', 'S. R. Mahadeva Pras.', ''),
(43, 'ee202', 'Digital Circuits Laboratory', 'Harshal B. Nemade', ''),
(45, 'HS2xx', 'HSS Elective - I', 'ANY', '');

-- --------------------------------------------------------

--
-- Table structure for table `cs201`
--

CREATE TABLE IF NOT EXISTS `cs201` (
`id` int(11) NOT NULL,
  `username` int(11) NOT NULL,
  `instruction` int(11) NOT NULL,
  `The_concepts_were_explained_with_clarity` int(11) NOT NULL,
  `Questions_discussions_were_encouraged` int(11) NOT NULL,
  `Allotted_numbers_of_classes_was_held` int(11) NOT NULL,
  `Evaluation_was_done_regularly_and_feedback_was_given` int(11) NOT NULL,
  `The_course_was_highly_enjoyable` int(11) NOT NULL,
  `The_content_of_the_course_was_appropriate` int(11) NOT NULL,
  `Text_Reference_materials_were_appropriate_for_the_course` int(11) NOT NULL,
  `Strong_Points_For_the_Course` varchar(250) NOT NULL,
  `Strong_points_for_Instructor` varchar(250) NOT NULL,
  `Weak_Points_For_the_Course` varchar(250) NOT NULL,
  `Weak_points_for_Instructor` varchar(250) NOT NULL,
  `Any_Constructive_Suggestion_for_improving_the_course_and_its_thm` varchar(250) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `cs201`
--

INSERT INTO `cs201` (`id`, `username`, `instruction`, `The_concepts_were_explained_with_clarity`, `Questions_discussions_were_encouraged`, `Allotted_numbers_of_classes_was_held`, `Evaluation_was_done_regularly_and_feedback_was_given`, `The_course_was_highly_enjoyable`, `The_content_of_the_course_was_appropriate`, `Text_Reference_materials_were_appropriate_for_the_course`, `Strong_Points_For_the_Course`, `Strong_points_for_Instructor`, `Weak_Points_For_the_Course`, `Weak_points_for_Instructor`, `Any_Constructive_Suggestion_for_improving_the_course_and_its_thm`) VALUES
(1, 130101023, 2, 2, 2, 2, 3, 3, 4, 3, '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `cs202a`
--

CREATE TABLE IF NOT EXISTS `cs202a` (
`id` int(11) NOT NULL,
  `username` int(11) NOT NULL,
  `instruction` int(11) NOT NULL,
  `The_concepts_were_explained_with_clarity` int(11) NOT NULL,
  `Questions_discussions_were_encouraged` int(11) NOT NULL,
  `Allotted_numbers_of_classes_was_held` int(11) NOT NULL,
  `Evaluation_was_done_regularly_and_feedback_was_given` int(11) NOT NULL,
  `The_course_was_highly_enjoyable` int(11) NOT NULL,
  `The_content_of_the_course_was_appropriate` int(11) NOT NULL,
  `Text_Reference_materials_were_appropriate_for_the_course` int(11) NOT NULL,
  `Strong_Points_For_the_Course` varchar(250) NOT NULL,
  `Strong_points_for_Instructor` varchar(250) NOT NULL,
  `Weak_Points_For_the_Course` varchar(250) NOT NULL,
  `Weak_points_for_Instructor` varchar(250) NOT NULL,
  `Any_Constructive_Suggestion_for_improving_the_course_and_its_thm` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `cs202b`
--

CREATE TABLE IF NOT EXISTS `cs202b` (
`id` int(11) NOT NULL,
  `username` int(11) DEFAULT NULL,
  `instruction` int(11) DEFAULT NULL,
  `The_concepts_were_explained_with_clarity` int(11) DEFAULT NULL,
  `Questions_discussions_were_encouraged` int(11) DEFAULT NULL,
  `Allotted_numbers_of_classes_was_held` int(11) DEFAULT NULL,
  `Evaluation_was_done_regularly_and_feedback_was_given` int(11) DEFAULT NULL,
  `The_course_was_highly_enjoyable` int(11) DEFAULT NULL,
  `The_content_of_the_course_was_appropriate` int(11) DEFAULT NULL,
  `Text_Reference_materials_were_appropriate_for_the_course` int(11) DEFAULT NULL,
  `Strong_Points_For_the_Course` varchar(250) DEFAULT NULL,
  `Strong_points_for_Instructor` varchar(250) DEFAULT NULL,
  `Weak_Points_For_the_Course` varchar(250) DEFAULT NULL,
  `Weak_points_for_Instructor` varchar(250) DEFAULT NULL,
  `Any_Constructive_Suggestion_for_improving_the_course_and_its_thm` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `cs210a`
--

CREATE TABLE IF NOT EXISTS `cs210a` (
`id` int(11) NOT NULL,
  `username` int(11) NOT NULL,
  `instruction` int(11) NOT NULL,
  `The_instructor_clearly_explains_concepts` int(11) NOT NULL,
  `The_instructor_clarifies_areas_of_confusion` int(11) NOT NULL,
  `Allotted_numbers_of_assignments_was_held` int(11) NOT NULL,
  `Evaluation_was_done_regularly_and_feedback_was_given` int(11) NOT NULL,
  `The_instructor_is_well_organized_and_prepared` int(11) NOT NULL,
  `The_course_was_highly_enjoyable` int(11) NOT NULL,
  `The_content_of_the_course_was_appropriate` int(11) NOT NULL,
  `Strong_Points_For_the_Course` varchar(250) NOT NULL,
  `Strong_points_for_Instructor` varchar(250) NOT NULL,
  `Weak_Points_For_the_Course` varchar(250) NOT NULL,
  `Weak_points_for_Instructor` varchar(250) NOT NULL,
  `Any_Constructive_Suggestion_for_improving_the_course_and_its_thm` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `cs210b`
--

CREATE TABLE IF NOT EXISTS `cs210b` (
`id` int(11) NOT NULL,
  `username` int(11) NOT NULL,
  `instruction` int(11) NOT NULL,
  `The_instructor_clearly_explains_concepts` int(11) NOT NULL,
  `The_instructor_clarifies_areas_of_confusion` int(11) NOT NULL,
  `Allotted_numbers_of_assignments_was_held` int(11) NOT NULL,
  `Evaluation_was_done_regularly_and_feedback_was_given` int(11) NOT NULL,
  `The_instructor_is_well_organized_and_prepared` int(11) NOT NULL,
  `The_course_was_highly_enjoyable` int(11) NOT NULL,
  `The_content_of_the_course_was_appropriate` int(11) NOT NULL,
  `Strong_Points_For_the_Course` varchar(250) NOT NULL,
  `Strong_points_for_Instructor` varchar(250) NOT NULL,
  `Weak_Points_For_the_Course` varchar(250) NOT NULL,
  `Weak_points_for_Instructor` varchar(250) NOT NULL,
  `Any_Constructive_Suggestion_for_improving_the_course_and_its_thm` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `cs221a`
--

CREATE TABLE IF NOT EXISTS `cs221a` (
`id` int(11) NOT NULL,
  `username` int(11) NOT NULL,
  `instruction` int(11) NOT NULL,
  `The_concepts_were_explained_with_clarity` int(11) NOT NULL,
  `Questions_discussions_were_encouraged` int(11) NOT NULL,
  `Allotted_numbers_of_classes_was_held` int(11) NOT NULL,
  `Evaluation_was_done_regularly_and_feedback_was_given` int(11) NOT NULL,
  `The_course_was_highly_enjoyable` int(11) NOT NULL,
  `The_content_of_the_course_was_appropriate` int(11) NOT NULL,
  `Text_Reference_materials_were_appropriate_for_the_course` int(11) NOT NULL,
  `Strong_Points_For_the_Course` varchar(250) NOT NULL,
  `Strong_points_for_Instructor` varchar(250) NOT NULL,
  `Weak_Points_For_the_Course` varchar(250) NOT NULL,
  `Weak_points_for_Instructor` varchar(250) NOT NULL,
  `Any_Constructive_Suggestion_for_improving_the_course_and_its_thm` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `cs221b`
--

CREATE TABLE IF NOT EXISTS `cs221b` (
`id` int(11) NOT NULL,
  `username` int(11) NOT NULL,
  `instruction` int(11) NOT NULL,
  `The_concepts_were_explained_with_clarity` int(11) NOT NULL,
  `Questions_discussions_were_encouraged` int(11) NOT NULL,
  `Allotted_numbers_of_classes_was_held` int(11) NOT NULL,
  `Evaluation_was_done_regularly_and_feedback_was_given` int(11) NOT NULL,
  `The_course_was_highly_enjoyable` int(11) NOT NULL,
  `The_content_of_the_course_was_appropriate` int(11) NOT NULL,
  `Text_Reference_materials_were_appropriate_for_the_course` int(11) NOT NULL,
  `Strong_Points_For_the_Course` varchar(250) NOT NULL,
  `Strong_points_for_Instructor` varchar(250) NOT NULL,
  `Weak_Points_For_the_Course` varchar(250) NOT NULL,
  `Weak_points_for_Instructor` varchar(250) NOT NULL,
  `Any_Constructive_Suggestion_for_improving_the_course_and_its_thm` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `cs241`
--

CREATE TABLE IF NOT EXISTS `cs241` (
`id` int(11) NOT NULL,
  `username` int(11) DEFAULT NULL,
  `instruction` int(11) DEFAULT NULL,
  `The_concepts_were_explained_with_clarity` int(11) DEFAULT NULL,
  `Questions_discussions_were_encouraged` int(11) DEFAULT NULL,
  `Allotted_numbers_of_classes_was_held` int(11) DEFAULT NULL,
  `Evaluation_was_done_regularly_and_feedback_was_given` int(11) DEFAULT NULL,
  `The_course_was_highly_enjoyable` int(11) DEFAULT NULL,
  `The_content_of_the_course_was_appropriate` int(11) DEFAULT NULL,
  `Text_Reference_materials_were_appropriate_for_the_course` int(11) DEFAULT NULL,
  `Strong_Points_For_the_Course` varchar(250) DEFAULT NULL,
  `Strong_points_for_Instructor` varchar(250) DEFAULT NULL,
  `Weak_Points_For_the_Course` varchar(250) DEFAULT NULL,
  `Weak_points_for_Instructor` varchar(250) DEFAULT NULL,
  `Any_Constructive_Suggestion_for_improving_the_course_and_its_thm` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `cse`
--

CREATE TABLE IF NOT EXISTS `cse` (
`id` int(11) NOT NULL,
  `number` varchar(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `faculty1` varchar(30) NOT NULL,
  `faculty2` varchar(30) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `cse`
--

INSERT INTO `cse` (`id`, `number`, `name`, `faculty1`, `faculty2`) VALUES
(2, 'cs201', 'Data Structures And Algorithms', 'Saswata Shannigrahi', ''),
(3, 'cs202', 'Discrete Mathematics', 'G. Sajith', 'Ashish Anand'),
(4, 'cs221', 'Digital Design', 'Santosh Biswas', 'Hemangee Kapoor'),
(5, 'ma201', 'Mathematics III', 'Dr. Pratyoosh Kumar', 'Swaroop Nandan Bora'),
(6, 'hs235', 'History Of modern India', 'John Thomas', ''),
(7, 'cs210', 'Data Structures Lab', 'Arnab Sarkar', 'Rashmi Dutta Baruah'),
(11, 'cs241', 'System Software Lab', 'Santosh Biswas', '');

-- --------------------------------------------------------

--
-- Table structure for table `ece`
--

CREATE TABLE IF NOT EXISTS `ece` (
`id` int(11) NOT NULL,
  `number` varchar(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `faculty1` varchar(30) NOT NULL,
  `faculty2` varchar(30) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `ece`
--

INSERT INTO `ece` (`id`, `number`, `name`, `faculty1`, `faculty2`) VALUES
(1, 'ee200', 'Semiconductor Devices and Circ', 'Roy Paily Palathinka', ''),
(2, 'ee201', 'Digital Circuits and Microproc', 'Shaik Rafi Ahamed', ''),
(3, 'ee220', 'Signals, Systems and Networks', 'S. R. Mahadeva Pras.', ''),
(4, 'ee202', 'Digital Circuits Laboratory', 'Harshal B. Nemade', ''),
(5, 'ma201', 'Mathematics - III', 'Dr. Pratyoosh Kumar', 'Swaroop Nandan Bora'),
(6, 'HS2xx', 'HSS Elective - I', 'ANY', '');

-- --------------------------------------------------------

--
-- Table structure for table `ee200`
--

CREATE TABLE IF NOT EXISTS `ee200` (
`id` int(11) NOT NULL,
  `username` int(11) NOT NULL,
  `instruction` int(11) NOT NULL,
  `The_concepts_were_explained_with_clarity` int(11) NOT NULL,
  `Questions_discussions_were_encouraged` int(11) NOT NULL,
  `Allotted_numbers_of_classes_was_held` int(11) NOT NULL,
  `Evaluation_was_done_regularly_and_feedback_was_given` int(11) NOT NULL,
  `The_course_was_highly_enjoyable` int(11) NOT NULL,
  `The_content_of_the_course_was_appropriate` int(11) NOT NULL,
  `Text_Reference_materials_were_appropriate_for_the_course` int(11) NOT NULL,
  `Strong_Points_For_the_Course` varchar(250) NOT NULL,
  `Strong_points_for_Instructor` varchar(250) NOT NULL,
  `Weak_Points_For_the_Course` varchar(250) NOT NULL,
  `Weak_points_for_Instructor` varchar(250) NOT NULL,
  `Any_Constructive_Suggestion_for_improving_the_course_and_its_thm` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `ee201`
--

CREATE TABLE IF NOT EXISTS `ee201` (
`id` int(11) NOT NULL,
  `username` int(11) NOT NULL,
  `instruction` int(11) NOT NULL,
  `The_concepts_were_explained_with_clarity` int(11) NOT NULL,
  `Questions_discussions_were_encouraged` int(11) NOT NULL,
  `Allotted_numbers_of_classes_was_held` int(11) NOT NULL,
  `Evaluation_was_done_regularly_and_feedback_was_given` int(11) NOT NULL,
  `The_course_was_highly_enjoyable` int(11) NOT NULL,
  `The_content_of_the_course_was_appropriate` int(11) NOT NULL,
  `Text_Reference_materials_were_appropriate_for_the_course` int(11) NOT NULL,
  `Strong_Points_For_the_Course` varchar(250) NOT NULL,
  `Strong_points_for_Instructor` varchar(250) NOT NULL,
  `Weak_Points_For_the_Course` varchar(250) NOT NULL,
  `Weak_points_for_Instructor` varchar(250) NOT NULL,
  `Any_Constructive_Suggestion_for_improving_the_course_and_its_thm` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `ee202`
--

CREATE TABLE IF NOT EXISTS `ee202` (
`id` int(11) NOT NULL,
  `username` int(11) NOT NULL,
  `instruction` int(11) NOT NULL,
  `The_concepts_were_explained_with_clarity` int(11) NOT NULL,
  `Questions_discussions_were_encouraged` int(11) NOT NULL,
  `Allotted_numbers_of_classes_was_held` int(11) NOT NULL,
  `Evaluation_was_done_regularly_and_feedback_was_given` int(11) NOT NULL,
  `The_course_was_highly_enjoyable` int(11) NOT NULL,
  `The_content_of_the_course_was_appropriate` int(11) NOT NULL,
  `Text_Reference_materials_were_appropriate_for_the_course` int(11) NOT NULL,
  `Strong_Points_For_the_Course` varchar(250) NOT NULL,
  `Strong_points_for_Instructor` varchar(250) NOT NULL,
  `Weak_Points_For_the_Course` varchar(250) NOT NULL,
  `Weak_points_for_Instructor` varchar(250) NOT NULL,
  `Any_Constructive_Suggestion_for_improving_the_course_and_its_thm` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `ee220`
--

CREATE TABLE IF NOT EXISTS `ee220` (
`id` int(11) NOT NULL,
  `username` int(11) NOT NULL,
  `instruction` int(11) NOT NULL,
  `The_concepts_were_explained_with_clarity` int(11) NOT NULL,
  `Questions_discussions_were_encouraged` int(11) NOT NULL,
  `Allotted_numbers_of_classes_was_held` int(11) NOT NULL,
  `Evaluation_was_done_regularly_and_feedback_was_given` int(11) NOT NULL,
  `The_course_was_highly_enjoyable` int(11) NOT NULL,
  `The_content_of_the_course_was_appropriate` int(11) NOT NULL,
  `Text_Reference_materials_were_appropriate_for_the_course` int(11) NOT NULL,
  `Strong_Points_For_the_Course` varchar(250) NOT NULL,
  `Strong_points_for_Instructor` varchar(250) NOT NULL,
  `Weak_Points_For_the_Course` varchar(250) NOT NULL,
  `Weak_points_for_Instructor` varchar(250) NOT NULL,
  `Any_Constructive_Suggestion_for_improving_the_course_and_its_thm` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `eee`
--

CREATE TABLE IF NOT EXISTS `eee` (
`id` int(11) NOT NULL,
  `number` varchar(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `faculty1` varchar(30) NOT NULL,
  `faculty2` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `ep`
--

CREATE TABLE IF NOT EXISTS `ep` (
`id` int(11) NOT NULL,
  `number` varchar(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `faculty1` varchar(30) NOT NULL,
  `faculty2` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `hs2xx`
--

CREATE TABLE IF NOT EXISTS `hs2xx` (
`id` int(11) NOT NULL,
  `username` int(11) NOT NULL,
  `instruction` int(11) NOT NULL,
  `The_concepts_were_explained_with_clarity` int(11) NOT NULL,
  `Questions_discussions_were_encouraged` int(11) NOT NULL,
  `Allotted_numbers_of_classes_was_held` int(11) NOT NULL,
  `Evaluation_was_done_regularly_and_feedback_was_given` int(11) NOT NULL,
  `The_course_was_highly_enjoyable` int(11) NOT NULL,
  `The_content_of_the_course_was_appropriate` int(11) NOT NULL,
  `Text_Reference_materials_were_appropriate_for_the_course` int(11) NOT NULL,
  `Strong_Points_For_the_Course` varchar(250) NOT NULL,
  `Strong_points_for_Instructor` varchar(250) NOT NULL,
  `Weak_Points_For_the_Course` varchar(250) NOT NULL,
  `Weak_points_for_Instructor` varchar(250) NOT NULL,
  `Any_Constructive_Suggestion_for_improving_the_course_and_its_thm` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `hs230a`
--

CREATE TABLE IF NOT EXISTS `hs230a` (
`id` int(11) NOT NULL,
  `username` int(11) NOT NULL,
  `instruction` int(11) NOT NULL,
  `The_concepts_were_explained_with_clarity` int(11) NOT NULL,
  `Questions_discussions_were_encouraged` int(11) NOT NULL,
  `Allotted_numbers_of_classes_was_held` int(11) NOT NULL,
  `Evaluation_was_done_regularly_and_feedback_was_given` int(11) NOT NULL,
  `The_course_was_highly_enjoyable` int(11) NOT NULL,
  `The_content_of_the_course_was_appropriate` int(11) NOT NULL,
  `Text_Reference_materials_were_appropriate_for_the_course` int(11) NOT NULL,
  `Strong_Points_For_the_Course` varchar(250) NOT NULL,
  `Strong_points_for_Instructor` varchar(250) NOT NULL,
  `Weak_Points_For_the_Course` varchar(250) NOT NULL,
  `Weak_points_for_Instructor` varchar(250) NOT NULL,
  `Any_Constructive_Suggestion_for_improving_the_course_and_its_thm` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `hs230b`
--

CREATE TABLE IF NOT EXISTS `hs230b` (
`id` int(11) NOT NULL,
  `username` int(11) NOT NULL,
  `instruction` int(11) NOT NULL,
  `The_concepts_were_explained_with_clarity` int(11) NOT NULL,
  `Questions_discussions_were_encouraged` int(11) NOT NULL,
  `Allotted_numbers_of_classes_was_held` int(11) NOT NULL,
  `Evaluation_was_done_regularly_and_feedback_was_given` int(11) NOT NULL,
  `The_course_was_highly_enjoyable` int(11) NOT NULL,
  `The_content_of_the_course_was_appropriate` int(11) NOT NULL,
  `Text_Reference_materials_were_appropriate_for_the_course` int(11) NOT NULL,
  `Strong_Points_For_the_Course` varchar(250) NOT NULL,
  `Strong_points_for_Instructor` varchar(250) NOT NULL,
  `Weak_Points_For_the_Course` varchar(250) NOT NULL,
  `Weak_points_for_Instructor` varchar(250) NOT NULL,
  `Any_Constructive_Suggestion_for_improving_the_course_and_its_thm` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `hs235`
--

CREATE TABLE IF NOT EXISTS `hs235` (
`id` int(11) NOT NULL,
  `username` int(11) NOT NULL,
  `instruction` int(11) NOT NULL,
  `The_concepts_were_explained_with_clarity` int(11) NOT NULL,
  `Questions_discussions_were_encouraged` int(11) NOT NULL,
  `Allotted_numbers_of_classes_was_held` int(11) NOT NULL,
  `Evaluation_was_done_regularly_and_feedback_was_given` int(11) NOT NULL,
  `The_course_was_highly_enjoyable` int(11) NOT NULL,
  `The_content_of_the_course_was_appropriate` int(11) NOT NULL,
  `Text_Reference_materials_were_appropriate_for_the_course` int(11) NOT NULL,
  `Strong_Points_For_the_Course` varchar(250) NOT NULL,
  `Strong_points_for_Instructor` varchar(250) NOT NULL,
  `Weak_Points_For_the_Course` varchar(250) NOT NULL,
  `Weak_points_for_Instructor` varchar(250) NOT NULL,
  `Any_Constructive_Suggestion_for_improving_the_course_and_its_thm` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
`id` int(11) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=59 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`) VALUES
(1, '130101001', 'abhinav.s'),
(2, '130101002', 'abhishek2013'),
(3, '130101003', 'a.aishwarya'),
(4, '130101004', 'a.ajinkya'),
(5, '130101005', 't.alamanda'),
(6, '130101006', 'a.dash'),
(7, '130101007', 'a.agnihotry'),
(8, '130101008', 'a.seth'),
(9, '130101009', 'arnav'),
(10, '130101010', 'mashish'),
(11, '130101011', 'kayush'),
(12, '130101012', 'a.mananiya'),
(13, '130101013', 'bvamshi'),
(14, '130101014', 'bedapudi'),
(15, '130101015', 'c.teja'),
(16, '130101016', 'chetluru'),
(17, '130101017', 'c.babulal'),
(18, '130101018', 'r.desh'),
(19, '130101019', 'd.baro'),
(20, '130101020', 'divyesh'),
(21, '130101021', 'eeshani'),
(22, '130101022', 'ellore'),
(23, '130101023', 'g.badsara'),
(24, '130101024', 'gopidalai'),
(25, '130101025', 'jainam'),
(26, '130101026', 'jatoth'),
(27, '130101027', 'jondhale'),
(28, '130101028', 'k.sowmya'),
(29, '130101029', 'kalavagunta'),
(30, '130101030', 'kamidi'),
(31, '130102001', 'aarrushi'),
(32, '130102002', 'p.abinash'),
(33, '130102003', 'r.adesh'),
(34, '130102004', 'a.siddhant'),
(35, '130102005', 'a.kansal'),
(36, '130106001', 'a.khaund'),
(37, '130106003', 'akshay2013'),
(38, '130106004', 'a.anip'),
(39, '130106005', 'ankitk'),
(40, '130106006', 'ankit.sinha'),
(41, 'Saswata', 'Shannigrahi'),
(42, 'G.Sajith', 'Sajith'),
(43, 'Ashish', 'Anand'),
(44, 'Biswas', 'Santosh'),
(45, 'Hemangee', 'Kapoor'),
(46, 'John', 'Thomas'),
(47, 'Pratyoosh', 'Kumar'),
(48, 'Swaroop', 'Nandan'),
(49, 'Paily', 'Palathinka'),
(50, 'Rafi', 'Ahamed'),
(51, 'Mahadeva', 'P.mahadev'),
(52, 'ANY', 'ANY'),
(53, 'B.Nemade', 'Harshal'),
(54, 'Anil', 'Mukund'),
(55, 'Vikash', 'Dubey'),
(56, 'Senthil', ' Senthilkumar'),
(57, 'Sasidhar', 'Gumma'),
(58, 'any1', 'any1');

-- --------------------------------------------------------

--
-- Table structure for table `loginf`
--

CREATE TABLE IF NOT EXISTS `loginf` (
`id` int(11) NOT NULL,
  `number` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `course_name` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `loginf`
--

INSERT INTO `loginf` (`id`, `number`, `username`, `password`, `course_name`, `name`) VALUES
(1, 'cs201', 'Saswata', 'Shannigra', 'Data Structures And Algorithms', 'Saswata Shannigrahi'),
(2, 'cs202a', 'G.Sajith', 'Sajith', 'Discrete Mathemtics', 'G. Sajith'),
(3, 'cs202b', 'Ashish', 'Anand', 'Discrete Mathemtics', 'Ashish Anand'),
(4, 'cs221', 'Hemangee', 'Kapoor', 'Digital Design', 'Hemangee Kapoor'),
(5, 'hs235', 'John', 'Thomas', 'History Of modern India', 'John Thomas'),
(6, 'ee200', 'roy', 'paily', 'Semiconductor Devices& Circuit', 'Roy Paily Palathinka'),
(7, 'ee201', 'shaik', 'rafi', 'Digital Circ. & Microprocessor', 'Shaik Rafi Ahamed'),
(8, 'ee220', 'mahadeva', 'prasad', 'Signals, Systems and Networks', 'S. R. Mahadeva Pras.'),
(9, 'ee202', 'harshal', 'nemade', 'Digital Circuits Laboratory', 'Harshal B. Nemade'),
(10, 'hs230a', 'debarshi', 'das', 'EconomicTheory An Introduction', 'Debarshi Das'),
(11, 'hs230b', 'mrinal', 'kanti', 'EconomicTheory An Introduction', 'Mrinal Kanti Dutta');

-- --------------------------------------------------------

--
-- Table structure for table `m&c`
--

CREATE TABLE IF NOT EXISTS `m&c` (
`id` int(11) NOT NULL,
  `number` varchar(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `faculty1` varchar(30) NOT NULL,
  `faculty2` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `ma101`
--

CREATE TABLE IF NOT EXISTS `ma101` (
`id` int(11) NOT NULL,
  `username` int(11) DEFAULT NULL,
  `instruction` int(11) DEFAULT NULL,
  `The_concepts_were_explained_with_clarity` int(11) DEFAULT NULL,
  `Questions_discussions_were_encouraged` int(11) DEFAULT NULL,
  `Allotted_numbers_of_classes_was_held` int(11) DEFAULT NULL,
  `Evaluation_was_done_regularly_and_feedback_was_given` int(11) DEFAULT NULL,
  `The_course_was_highly_enjoyable` int(11) DEFAULT NULL,
  `The_content_of_the_course_was_appropriate` int(11) DEFAULT NULL,
  `Text_Reference_materials_were_appropriate_for_the_course` int(11) DEFAULT NULL,
  `Strong_Points_For_the_Course` varchar(250) DEFAULT NULL,
  `Strong_points_for_Instructor` varchar(250) DEFAULT NULL,
  `Weak_Points_For_the_Course` varchar(250) DEFAULT NULL,
  `Weak_points_for_Instructor` varchar(250) DEFAULT NULL,
  `Any_Constructive_Suggestion_for_improving_the_course_and_its_thm` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `ma201a`
--

CREATE TABLE IF NOT EXISTS `ma201a` (
`id` int(11) NOT NULL,
  `username` int(11) NOT NULL,
  `instruction` int(11) NOT NULL,
  `The_concepts_were_explained_with_clarity` int(11) NOT NULL,
  `Questions_discussions_were_encouraged` int(11) NOT NULL,
  `Allotted_numbers_of_classes_was_held` int(11) NOT NULL,
  `Evaluation_was_done_regularly_and_feedback_was_given` int(11) NOT NULL,
  `The_course_was_highly_enjoyable` int(11) NOT NULL,
  `The_content_of_the_course_was_appropriate` int(11) NOT NULL,
  `Text_Reference_materials_were_appropriate_for_the_course` int(11) NOT NULL,
  `Strong_Points_For_the_Course` varchar(250) NOT NULL,
  `Strong_points_for_Instructor` varchar(250) NOT NULL,
  `Weak_Points_For_the_Course` varchar(250) NOT NULL,
  `Weak_points_for_Instructor` varchar(250) NOT NULL,
  `Any_Constructive_Suggestion_for_improving_the_course_and_its_thm` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `ma201b`
--

CREATE TABLE IF NOT EXISTS `ma201b` (
`id` int(11) NOT NULL,
  `username` int(11) NOT NULL,
  `instruction` int(11) NOT NULL,
  `The_concepts_were_explained_with_clarity` int(11) NOT NULL,
  `Questions_discussions_were_encouraged` int(11) NOT NULL,
  `Allotted_numbers_of_classes_was_held` int(11) NOT NULL,
  `Evaluation_was_done_regularly_and_feedback_was_given` int(11) NOT NULL,
  `The_course_was_highly_enjoyable` int(11) NOT NULL,
  `The_content_of_the_course_was_appropriate` int(11) NOT NULL,
  `Text_Reference_materials_were_appropriate_for_the_course` int(11) NOT NULL,
  `Strong_Points_For_the_Course` varchar(250) NOT NULL,
  `Strong_points_for_Instructor` varchar(250) NOT NULL,
  `Weak_Points_For_the_Course` varchar(250) NOT NULL,
  `Weak_points_for_Instructor` varchar(250) NOT NULL,
  `Any_Constructive_Suggestion_for_improving_the_course_and_its_thm` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `ph101`
--

CREATE TABLE IF NOT EXISTS `ph101` (
`id` int(11) NOT NULL,
  `username` int(11) DEFAULT NULL,
  `instruction` int(11) DEFAULT NULL,
  `The_concepts_were_explained_with_clarity` int(11) DEFAULT NULL,
  `Questions_discussions_were_encouraged` int(11) DEFAULT NULL,
  `Allotted_numbers_of_classes_was_held` int(11) DEFAULT NULL,
  `Evaluation_was_done_regularly_and_feedback_was_given` int(11) DEFAULT NULL,
  `The_course_was_highly_enjoyable` int(11) DEFAULT NULL,
  `The_content_of_the_course_was_appropriate` int(11) DEFAULT NULL,
  `Text_Reference_materials_were_appropriate_for_the_course` int(11) DEFAULT NULL,
  `Strong_Points_For_the_Course` varchar(250) DEFAULT NULL,
  `Strong_points_for_Instructor` varchar(250) DEFAULT NULL,
  `Weak_Points_For_the_Course` varchar(250) DEFAULT NULL,
  `Weak_points_for_Instructor` varchar(250) DEFAULT NULL,
  `Any_Constructive_Suggestion_for_improving_the_course_and_its_thm` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bt201a`
--
ALTER TABLE `bt201a`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bt201b`
--
ALTER TABLE `bt201b`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cl201`
--
ALTER TABLE `cl201`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cs201`
--
ALTER TABLE `cs201`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cs202a`
--
ALTER TABLE `cs202a`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cs202b`
--
ALTER TABLE `cs202b`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cs210a`
--
ALTER TABLE `cs210a`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cs210b`
--
ALTER TABLE `cs210b`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cs221a`
--
ALTER TABLE `cs221a`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cs221b`
--
ALTER TABLE `cs221b`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cs241`
--
ALTER TABLE `cs241`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cse`
--
ALTER TABLE `cse`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ece`
--
ALTER TABLE `ece`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ee200`
--
ALTER TABLE `ee200`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ee201`
--
ALTER TABLE `ee201`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ee202`
--
ALTER TABLE `ee202`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ee220`
--
ALTER TABLE `ee220`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `eee`
--
ALTER TABLE `eee`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ep`
--
ALTER TABLE `ep`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hs2xx`
--
ALTER TABLE `hs2xx`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hs230a`
--
ALTER TABLE `hs230a`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hs230b`
--
ALTER TABLE `hs230b`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hs235`
--
ALTER TABLE `hs235`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `loginf`
--
ALTER TABLE `loginf`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `m&c`
--
ALTER TABLE `m&c`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ma101`
--
ALTER TABLE `ma101`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ma201a`
--
ALTER TABLE `ma201a`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ma201b`
--
ALTER TABLE `ma201b`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ph101`
--
ALTER TABLE `ph101`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bt201a`
--
ALTER TABLE `bt201a`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `bt201b`
--
ALTER TABLE `bt201b`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `cl201`
--
ALTER TABLE `cl201`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=46;
--
-- AUTO_INCREMENT for table `cs201`
--
ALTER TABLE `cs201`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `cs202a`
--
ALTER TABLE `cs202a`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `cs202b`
--
ALTER TABLE `cs202b`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `cs210a`
--
ALTER TABLE `cs210a`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `cs210b`
--
ALTER TABLE `cs210b`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `cs221a`
--
ALTER TABLE `cs221a`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `cs221b`
--
ALTER TABLE `cs221b`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `cs241`
--
ALTER TABLE `cs241`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `cse`
--
ALTER TABLE `cse`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `ece`
--
ALTER TABLE `ece`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `ee200`
--
ALTER TABLE `ee200`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `ee201`
--
ALTER TABLE `ee201`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `ee202`
--
ALTER TABLE `ee202`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `ee220`
--
ALTER TABLE `ee220`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `eee`
--
ALTER TABLE `eee`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `ep`
--
ALTER TABLE `ep`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `hs2xx`
--
ALTER TABLE `hs2xx`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `hs230a`
--
ALTER TABLE `hs230a`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `hs230b`
--
ALTER TABLE `hs230b`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `hs235`
--
ALTER TABLE `hs235`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=59;
--
-- AUTO_INCREMENT for table `loginf`
--
ALTER TABLE `loginf`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `m&c`
--
ALTER TABLE `m&c`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `ma101`
--
ALTER TABLE `ma101`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `ma201a`
--
ALTER TABLE `ma201a`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `ma201b`
--
ALTER TABLE `ma201b`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `ph101`
--
ALTER TABLE `ph101`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
