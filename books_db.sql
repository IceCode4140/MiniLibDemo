--
-- database: `books_db`
--

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

--
-- table structure： `books`
--

CREATE TABLE `books` (
  `Book_ID` int(11) NOT NULL auto_increment,
  `title` char(50) COLLATE utf8_unicode_ci NOT NULL,
  `author` char(50) COLLATE utf8_unicode_ci NOT NULL,
  `category` char(30) COLLATE utf8_unicode_ci NOT NULL,
  `Register_ID` int(11) NOT NULL,
  PRIMARY KEY (`Book_ID`),
  KEY `Register_ID` (`Register_ID`),
  CONSTRAINT `books_ibfk_1` FOREIGN KEY (Register_ID) REFERENCES admin (Register_ID)
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- insert data into `books`
--

INSERT INTO `books` (`title`, `author`,`category`, `Register_ID`)  VALUES
('Art for kids:Drawing', 'Kathryn Temple', 'art', 1),
('The overstreet Comic Book', 'Robert M.Overstreet', 'comic', 1),
('His truth is marching on:John Lewis', 'John Meacham','biographies', 1),
('Games Puzzle Trivia Challenges', 'Nancy Linde','entertainment', 1),
('Life of Pie', 'Yann Martel','fiction', 1),
('Current Diagnosis and Treatment Pediatrics', 'William Hay','medical', 1),
('Shoe Dog:A Memoir by the creator of Nike', 'Phil Knight', 'sports', 1),
('Llama Llama Loves Camping', 'Anna Dewdney', 'kids', 1),
('Java for beginner', 'Herbert Schildt', 'computer', 1),
('Southeast France Road Trip Provence', 'Oliver Berry', 'travel', 1);



--
-- table structure： `members`
--


CREATE TABLE members (
   Member_ID  int(20) NOT NULL auto_increment,
   name  char(20) COLLATE utf8_unicode_ci NOT NULL,
   username char(20) COLLATE utf8_unicode_ci NOT NULL,
   password varchar(255) COLLATE utf8_unicode_ci NOT NULL, 
   gender char(1) COLLATE utf8_unicode_ci  NOT NULL,
   birthday DATE NOT NULL,
   email varchar(50) COLLATE utf8_unicode_ci NOT NULL,
   PRIMARY KEY(Member_ID),
   UNIQUE(username)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


INSERT INTO members ( name, username, password, gender, birthday, email) VALUES 
('Sam', 'member1', 'member1', 'F', '2000-01-01', 'sam@gmail.com'),
('Kevin', 'member2', 'member2', 'M', '2000-01-02', 'kevin@gmail.com'),
('Winnie', 'member3', 'member3', 'M', '2000-01-03', 'winnie@gmail.com'),
('Mark',  'member4', 'member4', 'F', '2000-01-04', 'mark@gmail.com'),
('Suzuki',  'member5', 'member5', 'F', '2000-01-05', 'suzuki@gmail.com'),
('Akko', 'member6', 'member6', 'F', '2000-01-06', 'akko@gmail.com'),
('Gary', 'member7', 'member7', 'M', '2000-01-07', 'gary@gmail.com'),
('Bob', 'member8', 'member8', 'M', '2000-01-08', 'bob@gmail.com'),
('Cristina',  'member9', 'member9', 'F', '2000-01-09', 'cristina@gmail.com'),
('Lily',  'member10', 'member10', 'F', '2000-01-10', 'lily@gmail.com');

--
-- data structure `admin`
--

CREATE TABLE  admin (
  Register_ID int(11) NOT NULL auto_increment,
  admin_username char(20) COLLATE utf8_unicode_ci NOT NULL,
  admin_password char(20) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY(Register_ID)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- insert into `admin`
--

INSERT INTO  admin (admin_username, admin_password) VALUES
('admin', 'password');


--
-- data structure `records`
--

CREATE TABLE `records` (
  `Member_ID` int(20) NOT NULL,
  `Book_ID`   int(11) NOT NULL,
  `borrowDate`   date NOT NULL,
  `expireDate`   date NOT NULL,
  PRIMARY KEY (Member_ID, Book_ID),
  KEY `Book_ID` (Book_ID),
  CONSTRAINT `records_ibfk_1` FOREIGN KEY (`Book_ID`) REFERENCES `books` (`Book_ID`) ON DELETE CASCADE,
  CONSTRAINT `records_ibfk_2` FOREIGN KEY (`Member_ID`) REFERENCES `members` (`Member_ID`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- insert into `records`data
--


INSERT INTO `records` (`Member_ID`, `Book_ID`, `borrowDate`,`expireDate`)VALUES
(1, 1, NOW(), DATE_ADD(NOW(), INTERVAL +14 DAY)),
(2, 2, NOW(), DATE_ADD(NOW(), INTERVAL +14 DAY)),
(3, 3, NOW(), DATE_ADD(NOW(), INTERVAL +14 DAY)),
(4, 4, NOW(), DATE_ADD(NOW(), INTERVAL +14 DAY));
