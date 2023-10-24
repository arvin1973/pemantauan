<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-09-01 08:35:16 --> 404 Page Not Found: Assets/images
ERROR - 2023-09-01 11:21:47 --> 404 Page Not Found: Assets/libs
ERROR - 2023-09-01 11:21:47 --> 404 Page Not Found: Assets/libs
ERROR - 2023-09-01 11:22:28 --> 404 Page Not Found: Assets/libs
ERROR - 2023-09-01 11:22:28 --> 404 Page Not Found: Assets/libs
ERROR - 2023-09-01 11:22:28 --> 404 Page Not Found: Assets/libs
ERROR - 2023-09-01 11:22:35 --> 404 Page Not Found: Assets/libs
ERROR - 2023-09-01 11:22:35 --> 404 Page Not Found: Assets/libs
ERROR - 2023-09-01 11:22:35 --> 404 Page Not Found: Assets/libs
ERROR - 2023-09-01 11:22:35 --> 404 Page Not Found: Assets/images
ERROR - 2023-09-01 14:18:50 --> Severity: Notice --> Array to string conversion C:\xampp5\htdocs\pemantauan\application\views\admin\home\home_page_PPD1.php 67
ERROR - 2023-09-01 14:28:30 --> Severity: Parsing Error --> syntax error, unexpected '$ekonominilai' (T_VARIABLE) C:\xampp5\htdocs\pemantauan\application\controllers\Home.php 59
ERROR - 2023-09-01 14:42:00 --> 404 Page Not Found: Assets/libs
ERROR - 2023-09-01 14:42:00 --> 404 Page Not Found: Assets/libs
ERROR - 2023-09-01 14:43:21 --> 404 Page Not Found: Assets/libs
ERROR - 2023-09-01 14:43:21 --> 404 Page Not Found: Assets/libs
ERROR - 2023-09-01 14:44:31 --> 404 Page Not Found: Assets/libs
ERROR - 2023-09-01 14:44:31 --> 404 Page Not Found: Assets/libs
ERROR - 2023-09-01 14:44:31 --> 404 Page Not Found: Assets/libs
ERROR - 2023-09-01 14:44:48 --> 404 Page Not Found: Assets/libs
ERROR - 2023-09-01 14:44:48 --> 404 Page Not Found: Assets/libs
ERROR - 2023-09-01 14:44:48 --> 404 Page Not Found: Assets/libs
ERROR - 2023-09-01 14:44:52 --> 404 Page Not Found: Assets/libs
ERROR - 2023-09-01 14:44:52 --> 404 Page Not Found: Assets/libs
ERROR - 2023-09-01 14:44:52 --> 404 Page Not Found: Assets/libs
ERROR - 2023-09-01 14:45:06 --> 404 Page Not Found: Assets/libs
ERROR - 2023-09-01 14:45:06 --> 404 Page Not Found: Assets/libs
ERROR - 2023-09-01 14:45:06 --> 404 Page Not Found: Assets/libs
ERROR - 2023-09-01 14:56:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'ASC' at line 16 - Invalid query: SELECT ni.*, i.nama_indikator AS nm_indikator, i.jenis, i.chart, i.deskripsi
            FROM nilai_indikator ni
            INNER JOIN indikator i ON ni.id_indikator = i.id
            WHERE ni.id_indikator = '1'
              AND ni.wilayah = '1000'
              AND ni.periode = '00'
              AND (ni.id_periode, ni.versi) IN (
                SELECT id_periode, MAX(versi) AS versi
                FROM nilai_indikator
                WHERE id_indikator = '1'
                  AND wilayah = '1000'
                  AND periode = '00'
                GROUP BY id_periode
              )
            GROUP BY ni.id_periode
            ORDER BY ni.id_periode limit 5 ASC;
            
ERROR - 2023-09-01 14:56:17 --> Severity: Error --> Call to a member function result_array() on boolean C:\xampp5\htdocs\pemantauan\application\controllers\Home.php 56
ERROR - 2023-09-01 14:56:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'ASC' at line 16 - Invalid query: SELECT ni.*, i.nama_indikator AS nm_indikator, i.jenis, i.chart, i.deskripsi
            FROM nilai_indikator ni
            INNER JOIN indikator i ON ni.id_indikator = i.id
            WHERE ni.id_indikator = '1'
              AND ni.wilayah = '1000'
              AND ni.periode = '00'
              AND (ni.id_periode, ni.versi) IN (
                SELECT id_periode, MAX(versi) AS versi
                FROM nilai_indikator
                WHERE id_indikator = '1'
                  AND wilayah = '1000'
                  AND periode = '00'
                GROUP BY id_periode
              )
            GROUP BY ni.id_periode
            ORDER BY ni.id_periode LIMIT 5 ASC;
            
ERROR - 2023-09-01 14:56:41 --> Severity: Error --> Call to a member function result_array() on boolean C:\xampp5\htdocs\pemantauan\application\controllers\Home.php 56
ERROR - 2023-09-01 14:57:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'ASC' at line 16 - Invalid query: SELECT ni.*, i.nama_indikator AS nm_indikator, i.jenis, i.chart, i.deskripsi
            FROM nilai_indikator ni
            INNER JOIN indikator i ON ni.id_indikator = i.id
            WHERE ni.id_indikator = '1'
              AND ni.wilayah = '1000'
              AND ni.periode = '00'
              AND (ni.id_periode, ni.versi) IN (
                SELECT id_periode, MAX(versi) AS versi
                FROM nilai_indikator
                WHERE id_indikator = '1'
                  AND wilayah = '1000'
                  AND periode = '00'
                GROUP BY id_periode
              )
            GROUP BY ni.id_periode
            ORDER BY ni.id_periode LIMIT 5 ASC;
            
ERROR - 2023-09-01 14:57:01 --> Severity: Error --> Call to a member function result_array() on boolean C:\xampp5\htdocs\pemantauan\application\controllers\Home.php 56
ERROR - 2023-09-01 15:19:25 --> Severity: Parsing Error --> syntax error, unexpected '$ekonomitahun' (T_VARIABLE) C:\xampp5\htdocs\pemantauan\application\controllers\Home.php 63
ERROR - 2023-09-01 15:27:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') y order by id_periode ASC' at line 1 - Invalid query: select * from nilai_indikator where (id_indikator='36' AND wilayah='1000') AND (id_periode, versi) in (select id_periode, max(versi) as versi from nilai_indikator WHERE id_indikator='36' AND wilayah='1000' group by id_periode) group by id_periode order by id_periode desc limit 6) y order by id_periode ASC
ERROR - 2023-09-01 15:27:04 --> Severity: Error --> Call to a member function result_array() on boolean C:\xampp5\htdocs\pemantauan\application\controllers\Home.php 62
ERROR - 2023-09-01 15:27:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') y order by id_periode ASC' at line 1 - Invalid query: select * from nilai_indikator where (id_indikator='36' AND wilayah='1000') AND (id_periode, versi) in (select id_periode, max(versi) as versi from nilai_indikator WHERE id_indikator='36' AND wilayah='1000' group by id_periode) group by id_periode order by id_periode desc limit 6) y order by id_periode ASC
ERROR - 2023-09-01 15:27:05 --> Severity: Error --> Call to a member function result_array() on boolean C:\xampp5\htdocs\pemantauan\application\controllers\Home.php 62
ERROR - 2023-09-01 15:27:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') y order by id_periode ASC' at line 1 - Invalid query: SELECT * from nilai_indikator where (id_indikator='36' AND wilayah='1000') AND (id_periode, versi) in (select id_periode, max(versi) as versi from nilai_indikator WHERE id_indikator='36' AND wilayah='1000' group by id_periode) group by id_periode order by id_periode desc limit 6) y order by id_periode ASC
ERROR - 2023-09-01 15:27:21 --> Severity: Error --> Call to a member function result_array() on boolean C:\xampp5\htdocs\pemantauan\application\controllers\Home.php 62
ERROR - 2023-09-01 16:08:07 --> Severity: Warning --> Missing argument 1 for CI_DB_driver::query(), called in C:\xampp5\htdocs\pemantauan\application\controllers\Home.php on line 57 and defined C:\xampp5\htdocs\pemantauan\system\database\DB_driver.php 608
ERROR - 2023-09-01 16:08:07 --> Severity: Notice --> Undefined variable: sql C:\xampp5\htdocs\pemantauan\system\database\DB_driver.php 610
ERROR - 2023-09-01 16:08:07 --> Severity: Notice --> Undefined variable: sql C:\xampp5\htdocs\pemantauan\system\database\DB_driver.php 617
ERROR - 2023-09-01 16:08:07 --> Severity: Notice --> Undefined variable: sql C:\xampp5\htdocs\pemantauan\system\database\DB_driver.php 647
ERROR - 2023-09-01 16:08:07 --> Severity: Notice --> Undefined variable: sql C:\xampp5\htdocs\pemantauan\system\database\DB_driver.php 654
ERROR - 2023-09-01 16:08:07 --> Severity: Warning --> mysqli::query(): Empty query C:\xampp5\htdocs\pemantauan\system\database\drivers\mysqli\mysqli_driver.php 305
ERROR - 2023-09-01 16:08:07 --> Severity: Notice --> Undefined variable: sql C:\xampp5\htdocs\pemantauan\system\database\DB_driver.php 671
ERROR - 2023-09-01 16:08:07 --> Query error:  - Invalid query: 
ERROR - 2023-09-01 16:08:07 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at C:\xampp5\htdocs\pemantauan\system\core\Exceptions.php:271) C:\xampp5\htdocs\pemantauan\system\core\Common.php 570
ERROR - 2023-09-01 16:08:07 --> Severity: Error --> Call to a member function result_array() on boolean C:\xampp5\htdocs\pemantauan\application\controllers\Home.php 57
ERROR - 2023-09-01 16:20:20 --> Severity: Notice --> Undefined variable: kemiskinantahun C:\xampp5\htdocs\pemantauan\application\views\admin\template\template.php 677
ERROR - 2023-09-01 16:20:20 --> Severity: Notice --> Undefined variable: kemiskinannilai C:\xampp5\htdocs\pemantauan\application\views\admin\template\template.php 694
ERROR - 2023-09-01 16:20:47 --> 404 Page Not Found: Assets/libs
ERROR - 2023-09-01 16:20:47 --> 404 Page Not Found: Assets/libs
ERROR - 2023-09-01 16:22:34 --> 404 Page Not Found: Assets/libs
ERROR - 2023-09-01 16:22:34 --> 404 Page Not Found: Assets/libs
ERROR - 2023-09-01 16:22:34 --> 404 Page Not Found: Assets/libs
