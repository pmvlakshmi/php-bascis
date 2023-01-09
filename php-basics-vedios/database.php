
//create a database.
create database database_name;

use database_name;

//check users table name exits or not.
// If the table exists, this query will return the name of the table. 
// If the table does not exist, the query will return an empty result set.
SHOW TABLES FROM database_name LIKE 'users';

// create a table with table name as "users".
CREATE TABLE users (
 id INT PRIMARY KEY AUTO_INCREMENT,
 name VARCHAR(255) NOT NULL,
 email VARCHAR(255) NOT NULL
);

// Display list of tables.
show tables;

// insert values in a table.


// Display a perticular table information(rows and coloumns).
select * from table_name;

