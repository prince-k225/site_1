CREATE TABLE products (
    id INT PRIMARY KEY,
    product_name VARCHAR5(150) NOT NULL,
    description VARCHAR(300) NOT NULL,
    price INT NOT NULL,
    category VARCHAR(200) NOT NULL,
    stock INT NOT NULL,
    in_sold tinyint NULL

)