CREATE TABLE `products` 
( 	`id` INT NOT NULL AUTO_INCREMENT , 
	`name` VARCHAR(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL , 
	`description` TEXT CHARACTER SET utf8 COLLATE utf8_general_ci NULL 
		DEFAULT NULL , 
	`price` FLOAT NOT NULL DEFAULT '1000000' , 
	`id_type` INT NOT NULL , 
	`update` DATETIME NULL DEFAULT CURRENT_TIMESTAMP , 
	PRIMARY KEY (`id`)
)



CREATE TABLE products_type(
	`id` INT NOT NULL AUTO_INCREMENT,
	`name` VARCHAR(255)  CHARACTER SET utf8 COLLATE utf8_general_ci NULL
	`description` TEXT CHARACTER SET utf8 COLLATE utf8_general_ci NULL 
		DEFAULT NULL , 
	`update` DATETIME NULL DEFAULT CURRENT_TIMESTAMP , 
	
)

ALTER TABLE  products_type
ADD  PRIMARY KEY (`id`)


ALTER TABLE `type_products` 
	CHANGE `description` `content` TEXT 
	CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL;


ALTER TABLE `products` 
ADD `promotion_price` FLOAT NOT NULL DEFAULT 0



ALTER TABLE products
MODIFY description TEXT NOT NULL


ALTER TABLE products
ADD FOREIGN KEY (id_type) REFERENCES type_products(id)



SELECT * FROM `products` /*lấy tất cả các cột và data*/

SELECT id,name FROM `products` WHERE name like '%Tủ lạnh%'

-- c1
SELECT id,name FROM `products` WHERE id=2 OR id=3

-- c2
SELECT id,name FROM `products` WHERE id IN (2,3,5)

SELECT id,name FROM `products` WHERE name = 'TI VI SAMSUNG ' AND price=12000000

SELECT * FROM `products` WHERE price between 10000000 and 30000000

--C1
SELECT id,name FROM `products` WHERE name<>"TI VI SAMSUNG "
--C2
SELECT id,name FROM `products` WHERE name NOT IN ("TI VI SAMSUNG "


SELECT loaitin.id,loaitin.Ten as TenLoaitin ,theloai.Ten as TenTheLoai
FROM theloai
INNER JOIN loaitin
ON theloai.id = loaitin.idTheLoai



SELECT TieuDe, Ten
FROM tintuc 
INNER JOIN loaitin
ON tintuc.idLoaiTin = loaitin.id





INSERT INTO products(`name`,`description`,`price`,`id_type`,`promotion_price`)
VALUES (
	'Điện thoại SAMSUNG S7 plus',
	'Điện thoại SAMSUNG S7 plus Điện thoại SAMSUNG S7 plus',
	15000000,
	3,
	13000000
)



UPDATE products 
SET `update`='2017-6-21 20:25:25' 
WHERE name like "%S8%"


DELETE FROM products 
WHERE price>40000000

-- Bài tập

--1.
SELECT title, image, summary, content, views 
FROM tintuc
ORDER BY views DESC 

--2
SELECT title, image, summary, content, views 
FROM tintuc
WHERE title LIKE 'S%'

--3
SELECT *
FROM tintuc
WHERE title LIKE '%học sinh%'


--4 C1

SELECT *
FROM tintuc
INNER JOIN loaitin ON tintuc.id_loaitin = loaitin.id
WHERE loaitin.name="Du học"

--4 C2

SELECT *
FROM tintuc,loaitin
WHERE tintuc.id_loaitin = loaitin.id
	AND loaitin.name="Du học"


--5 C1

SELECT tintuc.*
FROM tintuc
INNER JOIN loaitin ON tintuc.id_loaitin = loaitin.id
INNER JOIN theloai ON theloai.id = loaitin.id_theloai
WHERE theloai.name="Văn Hoá"


--5 c2
SELECT *
FROM tintuc,loaitin,theloai
WHERE tintuc.id_loaitin = loaitin.id
AND theloai.id = loaitin.id_theloai
and theloai.name="Văn Hoá"

--6 c1
SELECT *
FROM tintuc 
WHERE views between 444 and 555

--6 C2
SELECT *
FROM tintuc 
WHERE views>=444 and views<=555


--7
SELECT *
FROM tintuc
WHERE id NOT IN (SELECT DISTINCT id_tintuc FROM comment)

--7 Liệt kê loại tin chưa có tin tức nào
SELECT *
FROM loaitin
WHERE id NOT IN (SELECT DISTINCT id_loaitin FROM tintuc)



--8 
SELECT theloai.id AS idTheLoai, theloai.name AS TenTheLoai,
		GROUP_CONCAT(loaitin.id, ':',loaitin.name,':',loaitin.alias) AS loaitin
FROM theloai
INNER JOIN loaitin ON theloai.id = loaitin.id_theloai
GROUP BY theloai.id



--II
--1
UPDATE tintuc SET views = views+1
WHERE title = 'Trịnh Kim Chi làm quý bà ăn chơi'

--2

UPDATE loaitin SET name = 'Doanh Nghiệp Việt'
WHERE name = 'Doanh Nghiệp Viết'

--III
--1
DELETE FROM comment 
WHERE id_tintuc =12


--2
DELETE FROM tintuc 
WHERE views<5

--3

DELETE FROM loaitin
WHERE id NOT IN (SELECT id_loaitin FROM tintuc)


--4
DELETE FROM loaitin 
WHERE loaitin.id_theloai = (SELECT id FROM theloai WHERE theloai.name = "Vi Tính")



--INSERT
--1
INSERT INTO tintuc(title,summary, content,image,noibat,views
, id_loaitin) VALUES ('Công chúa Nhật Bản sẽ du học ở Anh','Đại học Leeds (West Yorkshire, Anh) sẽ chào đón
thành viên Hoàng gia Nhật Bản - công chúa Kako vào tháng 9
theo chương trình trao đổi sinh viên.','Công chúa Kako (22 tuổi), cháu gái của Hoàng đế
Akihito, sẽ sang Anh để tiếp tục việc học tại Đại học Leeds theo
chương trình trao đổi sinh viên từ tháng 9 năm nay đến tháng
6 năm sau, Japans Times ngày 24/4 đưa tin từ Cơ quan nội
chính Hoàng gia Nhật Bản. Con gái thứ hai của Hoàng tử
Akishino và Công nương Kiko vẫn chưa quyết định sẽ học
ngành gì. Tuy nhiên, cô khá quan tâm đến ngành tâm lý học và
nghệ thuật.Theo trang web của Đại học Leeds, ngôi trường này
thành lập năm 1904, hiện thuộc top 100 trường đại học thế giới
và là một trong những cơ sở giáo dục lớn nhất nước Anh. Công
chúa Kako từng là sinh viên Đại học Gakushuin trước khi
chuyển sang Đại học Thiên chúa giáo Quốc tế (ICU) ở Tokyo từ
tháng 4/2015. Sau khi kết thúc chương trình học ở Anh vào
mùa hè năm 2018, cô sẽ trở lại Nhật Bản.Chị gái Kako, công
chúa Mako từng tham gia chương trình trao đổi sinh viên tại
Đại học Edinburgh (Anh) từ năm 2012 đến năm 2013, khi đang
học năm thứ 3 tại ICU. ','http://img.f29.vnecdn.net/2017/04/26/cong-chua-kako-4061-1493172249.jpg',
1,1,1)


--5
INSERT INTO users(name,email,password)
Values ('Hương','new_user@gmail.com','1213')