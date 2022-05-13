-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 12, 2021 at 04:10 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `user_care_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `chats`
--

CREATE TABLE `chats` (
  `chat_id` int(11) NOT NULL,
  `from_id` int(11) NOT NULL,
  `to_id` int(11) NOT NULL,
  `message` text NOT NULL,
  `opened` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chats`
--

INSERT INTO `chats` (`chat_id`, `from_id`, `to_id`, `message`, `opened`, `created_at`) VALUES
(1, 1, 2, 'Hi', 1, '2021-10-02 15:06:30'),
(2, 2, 1, 'Hi', 1, '2021-10-02 15:06:39'),
(3, 1, 2, 'how are you', 1, '2021-10-02 15:06:48');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `contact_id` int(11) NOT NULL,
  `name` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `subject` varchar(225) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`contact_id`, `name`, `email`, `subject`, `message`) VALUES
(1, 'Ravindu', 'ravindu.xq99@gmail.com', 'I.C.T', 'Good Word'),
(2, 'Vihanga', 'vihanga@gmail.com', 'Maths', 'Thank You Sir'),
(3, 'Jayasinghe', 'Jayasinghe@gmail.com', 'Maths', 'Good Work Sir'),
(4, 'Prasad', 'Prasad@gmail.com', 'Sinhala', 'Good Website'),
(5, 'Supun', 'Supun@gmail.com', 'English', 'Nice'),
(6, 'Hussain', 'Hussain@gmail.com', 'Maths', 'Superb Subject');

-- --------------------------------------------------------

--
-- Table structure for table `conversations`
--

CREATE TABLE `conversations` (
  `conversation_id` int(11) NOT NULL,
  `user_1` int(11) NOT NULL,
  `user_2` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `conversations`
--

INSERT INTO `conversations` (`conversation_id`, `user_1`, `user_2`) VALUES
(1, 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `search`
--

CREATE TABLE `search` (
  `id` int(11) NOT NULL,
  `answers` varchar(1000) NOT NULL,
  `questions` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `search`
--

INSERT INTO `search` (`id`, `answers`, `questions`) VALUES
(1, 'Course Advisement', 'Students join our online courses for a variety of reasons and come from diverse backgrounds, professions, and age groups. With online courses, you can\r\n								              Advance your skill-set or begin a career change.\r\n                                    Take the next step in your formal education.\r\n                                    Ease the transition before entering a full-time academic program.\r\n                                    Enjoy learning a new topic.\r\n								                        Whatever the reason, our online courses are a flexible way of learning about the art world without disrupting your daily life.'),
(2, 'How do I select a course?', 'Visit the course catalog to browse our offerings. In addition to searching by course duration and availability, you can also search by subject to ensure you find a course that reflects your interests. Though it is not required, we encourage those who have not studied art before to consider taking an art history course first to get a solid grounding in the discipline before exploring more specific disciplines. '),
(3, 'I am a high school student, can I join?', ' Courses are open to all students 18 years or older. If you are under 18 years old, please contact us  to discuss further.'),
(4, 'Can I take more than one course at a time?', 'If you are new to online learning, we recommend that you begin with one course. As our courses are offered frequently throughout the year, you can always come back and continue your studies with one or more topics.'),
(5, ' How long is my course?', 'We currently offer 4-week, 6-week, and 8-week courses. Check the course dates listed online prior to registration.\r\n						\r\n                                  For a 4-week or 6-week course, you can expect to spend 5-7 hours a week reviewing and completing the course material.\r\n                                  For an 8-week course, you can expect to spend 8-10 hours a week reviewing and completing the course material.\r\n						     \r\n                                 You will also have read-only access to your course in Canvas for 90 days after its conclusion to review the course materials at your leisure.'),
(6, 'Do I need to buy textbooks?', 'All the reading materials you are required to access are included with your course. Instructors may provide  recommended and suggested texts for further exploration.'),
(7, 'How do I contact technical support during my course?', 'For technical support, please email <a href=\"blog.html\">online.support@sothebysinstitute.com</a>,   09:00 – 17:00 GMT, Monday – Friday. We are ready to help!'),
(8, 'How do I register?', 'Registration is available on our website. Just follow these simple steps:\r\nClick the “Register” button in the top right corner of your screen.          Select “Online Courses.”\r\n Choose your course(s)\r\n Enjoy learning a new topic. You will be asked for basic contact information'),
(9, 'When should I register?', 'Most courses are offered at least 3 times during the year. Certain courses can fill up quickly, so be sure to register early.'),
(10, ' Is there an orientation for online students?', 'Two weeks before your course starts you will be invited to join the SIA Online Community where our guides will introduce you to the technology and dynamics of online teaching and learning. It also gives you a chance to introduce yourself and network with fellow students.\r\nShould you have any questions or need help troubleshooting a piece of technology, our Online Team is only an email away and is ready to assist.'),
(11, 'When and how often will my course meet?', 'There is no set class time as your course can be accessed 24 hours a day, 7 days a week. We recommend logging on 3 - 4 times a week for two hours or more to stay engaged with the class discussion boards and the course materials, as well as to communicate with your instructor.'),
(12, 'What should I do if I’m away for a few days?', 'Please inform your instructor. Make every effort to continue working on the course while you’re away. It is important that you contact your instructor as soon as possible to determine what, if any, arrangements can be made for your situation.'),
(13, 'Do I need specific equipment to take Online Courses?', 'You should have an up-to-date web browser such as: Chrome, Safari, Firefox, or Internet Explorer. For more detailed information, please see the guides for supported browsers and basic computer specifications. '),
(14, 'How many students are in a course? Who will be my classmates?', 'Our classes are kept small, at no more than 30 students, to better facilitate and encourage personalized interaction with the instructor and fellow participants. Your classmates come from all over the globe and contribute their global perspectives and experience. Some are currently working within the arts while others are just beginning. All classmates share in their passion for the art world.'),
(15, 'I completed my course! Now what?', ' Well done! You will have 90 days of read-only access to revisit and reflect on the course material.  \r\n                                    Get your certificate: When you successfully complete an Online Course, you are eligible to receive a digital certificate of completion. We encourage you to review your instructor’s syllabus to understand the Certificate of Completion requirements for your course. These requirements often include the following:\r\n\r\n                                                 <li>Active participation in the majority of discussion boards</li>\r\n                                                 <li>Timely submission of all assignments</li>\r\n									\r\n                                     Most courses have 1-2 short written assignments, but it can vary and it is important for you to follow -up with your instructor early in the course should you have any questions or concerns regarding your eligibility or the requirements.  Certificates of Completion are delivered to the email used at the time of registration, and can be expected no later than 3 weeks after the course ends. These digital verified credentials allow you to present a trustworthy record of your learning to anyone at any time.  \r\n\r\n                                     Our certificate platform, Accredible, permits you to share your achievement on various social media platforms, embed it on your website, and add it to your LinkedIn profile.'),
(16, 'Can I audit an Online Course?', 'As a continuing education student, it is your decision how you participate in the course. Those who plan to audit the course and not receive a certificate of completion should send a message to the instructor at the start of the course so they understand your goals.'),
(17, ' Can I put my Online Course(s) toward a professional certificate or degree program?\r\n                  			     </button>', 'Online Courses are intended to deepen your knowledge of a particular field, but cannot be formally applied as credits to other institutions or the Sotheby’s Institute MA degree.'),
(18, 'How can Online Courses bolster my career options?', 'Sotheby’s Institute of Art Online Courses demonstrate to future employers that you have current knowledge of art world topics, provided by a trusted institution and art world leader. Including Online Courses on your resume, posting your Certificate of Completion to your online profiles such as LinkedIn, and staying connected with your classmates to network are powerful ways to continue leveraging your experience long after your course has ended.');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(100) NOT NULL,
  `p_p` varchar(255) NOT NULL DEFAULT 'user-default.png',
  `last_seen` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chats`
--
ALTER TABLE `chats`
  ADD PRIMARY KEY (`chat_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `conversations`
--
ALTER TABLE `conversations`
  ADD PRIMARY KEY (`conversation_id`);

--
-- Indexes for table `search`
--
ALTER TABLE `search`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chats`
--
ALTER TABLE `chats`
  MODIFY `chat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `conversations`
--
ALTER TABLE `conversations`
  MODIFY `conversation_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `search`
--
ALTER TABLE `search`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
