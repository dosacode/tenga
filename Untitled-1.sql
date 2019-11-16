CREATE TABLE books (
    id INTEGER primary key auto_increment,
    book_name VARCHAR(100),
    wrote_by INTEGER,
    bought_at DATE,
    price DECIMAL

);

CREATE USER 'dosaco'@'localhost' IDENTIFIED mysql_native_password BY 'doi315mysql#SAICO';