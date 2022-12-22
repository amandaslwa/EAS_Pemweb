CREATE TABLE `eas_pweb`.`pendaftar` ( `id` INT NOT NULL , `username` VARCHAR(100) NOT NULL , `password` VARCHAR(100) NOT NULL , `email` VARCHAR(100) NOT NULL , `Nama` VARCHAR(150) NOT NULL , `NIK` CHAR(16) NOT NULL , `Jenis_Kelamin` VARCHAR(20) NOT NULL , `Tempat_Lahir` VARCHAR(50) NOT NULL , `Tanggal_Lahir` DATE NOT NULL , `Pendidikan_Terakhir` VARCHAR(100) NOT NULL , `KTP` BLOB NOT NULL , `Pasfoto` BLOB NOT NULL , `CV` BLOB NOT NULL , `Status_Pendaftaran` VARCHAR(100) NOT NULL ) ENGINE = InnoDB;

CREATE TABLE `eas_pweb`.`admin` ( `id` INT NOT NULL , `Username` VARCHAR(50) NOT NULL , `Password` VARCHAR(50) NOT NULL ) ENGINE = InnoDB;

