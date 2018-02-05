	
CREATE TABLE `orders` (
  `order_number` int(11) NOT NULL,
  `customer_name` varchar(100) NOT NULL,
  `purchased_items` varchar(100) NOT NULL,
  `purchased_date` date NOT NULL,
  `price` double(12,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
 
INSERT INTO `orders` (`order_number`, `customer_name`, `purchased_items`, `purchased_date`, `price`) VALUES
(1, 'MOhan raj', 'iPhone', '2016-11-23', 649.00),
(2, 'Siva', 'iMac', '2016-11-24', 1999.05),
(3, 'Harish', 'iPhone 5s', '2016-11-24', 299.09),
(4, 'Raja', 'Macbook Pro', '2016-11-26', 1799.50),
(5, 'Praveen', 'iPad Air 2', '2016-11-27', 479.00),
(6, 'Moni', 'Apple Watch', '2016-11-27', 269.00),
(7, 'Ranjith', 'iMac', '2016-11-28', 1999.05),
(8, 'Sathish', 'iMac', '2016-11-30', 1999.05),
(9, 'Suba', 'iPhone 7', '2016-12-07', 649.00),
(10, 'Ruben', 'Apple TV', '2016-12-14', 199.00);