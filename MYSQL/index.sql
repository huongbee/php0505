CREATE TABLE `users` ( 
    `id` INT NOT NULL AUTO_INCREMENT , 
    `fullname` VARCHAR(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL , 
    `email` VARCHAR(50) NOT NULL , 
    `password` VARCHAR(100) NOT NULL , 
    `birthdate` DATE NULL DEFAULT NULL , 
    `address` VARCHAR(100) NULL DEFAULT NULL , 
    `status` TINYINT(1) NOT NULL DEFAULT '0' COMMENT '0: chưa kích hoạt, 1 đã kích hoạt, -1: đã bị chặn ' , 
    PRIMARY KEY (`id`), 
    UNIQUE `unique` (`email`)
) ENGINE = InnoDB CHARSET=utf8 COLLATE utf8_general_ci;


/**

bills

id PK AI
user_id int(11)
date_order
total
quantity
note

*/


ALTER TABLE `bills` 
ADD FOREIGN KEY (`user_id`) REFERENCES `users`(`id`);

INSERT INTO users(email,fullname,password,birthdate)
VALUES('nguyenvana@gmail.com','Nguyen Van A','111111','2018-06-15');


INSERT INTO bills(user_id,date_order,total,quantity)
VALUES (2,'2018-1-16 12:20:45',200000,2);


UPDATE bills
SET date_order = '2018-2-19 1:21:12',
    total=300000
WHERE id=1


DELETE FROM users
WHERE id=1

SELECT * 
FROM users


SELECT email,fullname
FROM users
WHERE status=1


SELECT bills.*, users.fullname 
FROM bills,users 
WHERE bills.user_id = users.id


SELECT bills.*, users.fullname 
FROM bills
INNER JOIN users 
ON bills.user_id = users.id

/**

1.  Liệt kê danh sách sản phẩm gồm có: tên sản phẩm, Mô tả. Có sắp tăng theo cột tên sp, và sắp giảm theo cột đơn giá.

SELECT name, detail 
FROM products 
ORDER BY name ASC, price DESC

2. Liệt kê danh sách các sản phẩm thuộc loại Iphone X

SELECT p.*
FROM products p 
INNER JOIN categories c 
ON p.id_type = c.id 
WHERE c.name = "Iphone X"

2.2 Liệt kê danh sách các sản phẩm là Iphone 

SELECT *
FROM products p 
WHERE name LIKE "iphone%" 


3.  Liệt kê danh sách các sản phẩm là ốp lưng.

SELECT *
FROM products p 
WHERE name LIKE "%ốp lưng%" 

4. Liệt kê danh sách các sản phẩm có đơn giá từ 50.000.000 VNĐ đến 150.000.000

SELECT *
FROM products 
WHERE price>=50000000
AND price<=150000000

SELECT *
FROM products 
WHERE price BETWEEN 50000000 AND 150000000

5. Cho biết đơn giá trung bình của sản phẩm theo từng Loại sản phẩm

SELECT c.name, avg(price) as DGTB, min(price) as minPrice, max(price) as maxPrice, count(p.id) as tongSP, sum(price) as tongtien,  sum(price)/count(p.id) as DGTB2
FROM products p
INNER JOIN categories c
ON p.id_type = c.id
GROUP BY c.name

6. Cho biết tổng giá tiền và số sản phẩm của sản phẩm có đơn giá trong khoảng 50.000.000 đ đến 100.000.000 đ theo từng loại sản phẩm.

SELECT c.name,  count(p.id) as tongSP, sum(price) as tongtien 
FROM products p
INNER JOIN categories c
ON p.id_type = c.id
WHERE price BETWEEN 50000000 AND 100000000
GROUP BY c.name


7. Liệt kê 2 sản phẩm bán chạy nhất

SELECT p.*, sum(quantity) as soluong
FROM bill_detail d 
INNER JOIN products p
ON d.id_product = p.id
GROUP BY d.id_product
ORDER BY soluong DESC
LIMIT 0,2

*/
