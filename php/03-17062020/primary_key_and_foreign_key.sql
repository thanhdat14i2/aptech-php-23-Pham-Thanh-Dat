
CREATE TABLE aptech_php_23_03.class(
	id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(255),
    hocsinh_id INT,
    FOREIGN KEY (hocsinh_id) REFERENCES aptech_php_23_03.hocsinh(id)
)