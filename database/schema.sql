CREATE database biblio;
use biblio;
CREATE TABLE users (

id INT AUTO_INCREMENT PRIMARY KEY,

firstName VARCHAR(100) NOT NULL,

lastName VARCHAR(100) NOT NULL,

email VARCHAR(150) NOT NULL UNIQUE,

password VARCHAR(255) NOT NULL,

role ENUM('reader','admin') NOT NULL

);

CREATE TABLE books (

id INT AUTO_INCREMENT PRIMARY KEY,

title VARCHAR(255) NOT NULL,

author VARCHAR(150) NOT NULL,

year INT NOT NULL,

status ENUM('available','borrowed') NOT NULL DEFAULT 'available'

);

CREATE TABLE borrows (

id INT AUTO_INCREMENT PRIMARY KEY,

readerId INT NOT NULL,

bookId INT NOT NULL,

borrowDate DATETIME NOT NULL,

returnDate DATETIME NULL,

FOREIGN KEY (readerId) REFERENCES users(id),

FOREIGN KEY (bookId) REFERENCES books(id)

);