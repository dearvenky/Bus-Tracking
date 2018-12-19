# Bus-Tracking
Used to track real time bus location
--
-- Table structure for table `bus_profile`
--

CREATE TABLE `bus_profile` (
  `bus_no` varchar(10) NOT NULL,
  `bus_from` varchar(15) NOT NULL,
  `bus_to` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
--
-- Indexes for table `bus_profile`
--
ALTER TABLE `bus_profile`
  ADD PRIMARY KEY (`bus_no`);

--
-- Table structure for table `bus_location`
--

CREATE TABLE `bus_location` (
  `bus_no` varchar(15) NOT NULL,
  `lat` float NOT NULL,
  `lon` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


--
-- Indexes for table `bus_location`
--
ALTER TABLE `bus_location`
  ADD KEY `bus_no` (`bus_no`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bus_location`
--
ALTER TABLE `bus_location`
  ADD CONSTRAINT `bus_location_ibfk_1` FOREIGN KEY (`bus_no`) REFERENCES `bus_profile` (`bus_no`);
