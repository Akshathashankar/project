SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;


CREATE TABLE `register` (
  `username` VARCHAR(30) PRIMARY KEY NOT NULL ,
  `email` VARCHAR(30) NOT NULL ,
  `password` VARCHAR(30) NOT NULL ,
  `person` VARCHAR(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO `register` (`username`, `email`, `password`, `person`) VALUES
('esha', 'esha@gmail.com', '1234', 'a'),
('admin', 'admin@gmail.com', '1234', 'a'),
('akshatha', 'akshatha@gmail.com', '5678', 'a');



CREATE TABLE `parkingcharge` (
  `VehicleType` VARCHAR(30) PRIMARY KEY NOT NULL ,
  `hours` int(10) NOT NULL ,
  `charge` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO `parkingcharge` (`VehicleType`, `hours`, `charge`) VALUES
('two1', '1', '20'),
('two2', '2', '30'),
('two3', '3', '40'),
('two4+', '4', '5'),
('four1', '1', '30'),
('four2', '2', '40'),
('four3', '3', '50'),
('four4+', '4', '10');




CREATE TABLE `tblcategory` (
  `ID` int(10) NOT NULL,
  `VehicleCat` varchar(120) DEFAULT NULL,
  `Slot`  int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO `tblcategory` (`ID`, `VehicleCat`, `Slot`) VALUES
(1, 'Four Wheeler Vehicle', '80'),
(2, 'Two Wheeler Vehicle', '30');

-- --------------------------------------------------------



CREATE TABLE `tblvehicle` (
  `ID` int(10) NOT NULL,
  `ParkingNumber` varchar(120) DEFAULT NULL,
  `VehicleCategory` varchar(120) NOT NULL,
  `RegistrationNumber` varchar(120) DEFAULT NULL,
  `OwnerName` varchar(120) DEFAULT NULL,
  `OwnerContactNumber` bigint(10) DEFAULT NULL,
  `InTime` timestamp NULL DEFAULT current_timestamp(),
  `OutTime` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `ParkingCharge` varchar(120) NOT NULL,
  `Status` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `user` (
 
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `PhoneNumber` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;







ALTER TABLE `tblcategory`
  ADD PRIMARY KEY (`ID`);


ALTER TABLE `tblvehicle`
  ADD PRIMARY KEY (`ID`);


ALTER TABLE `tblcategory`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;


ALTER TABLE `tblvehicle`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
  
ALTER TABLE `user`
  ADD PRIMARY KEY (`PhoneNumber`);  
  
COMMIT;


