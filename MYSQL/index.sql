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


