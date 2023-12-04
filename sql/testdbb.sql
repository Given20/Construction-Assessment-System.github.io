-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 08, 2023 at 11:21 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `testdbb`
--

-- --------------------------------------------------------

--
-- Table structure for table `cardboard`
--

CREATE TABLE `cardboard` (
  `id` int(11) NOT NULL,
  `reference` varchar(255) NOT NULL,
  `agency` varchar(255) NOT NULL,
  `length` varchar(255) NOT NULL,
  `width` varchar(255) NOT NULL,
  `height` varchar(255) NOT NULL,
  `cardboard_type` varchar(255) NOT NULL,
  `cardboard_replacement` varchar(255) NOT NULL,
  `cardboard_notes` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cardboard`
--

INSERT INTO `cardboard` (`id`, `reference`, `agency`, `length`, `width`, `height`, `cardboard_type`, `cardboard_replacement`, `cardboard_notes`) VALUES
(2, '80808022', 'Absa', '5030cm', '200cm', '500cm', 'Cardboard', '50', 'Another cause for this trigger could be when working with PHP authentication, typically in line with an API service.');

-- --------------------------------------------------------

--
-- Table structure for table `ceiling`
--

CREATE TABLE `ceiling` (
  `id` int(11) NOT NULL,
  `reference` varchar(255) NOT NULL,
  `agency` varchar(255) NOT NULL,
  `ceiling_intact` varchar(255) NOT NULL,
  `ceiling_type` varchar(255) NOT NULL,
  `water_damage` varchar(255) NOT NULL,
  `spots_stains_mold` varchar(255) NOT NULL,
  `ceiling_note` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `electrical`
--

CREATE TABLE `electrical` (
  `id` int(11) NOT NULL,
  `reference` varchar(255) NOT NULL,
  `agency` varchar(255) NOT NULL,
  `length` varchar(255) NOT NULL,
  `width` varchar(255) NOT NULL,
  `height` varchar(255) NOT NULL,
  `damage_cause` varchar(255) NOT NULL,
  `replacement` varchar(255) NOT NULL,
  `notes` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `electrical`
--

INSERT INTO `electrical` (`id`, `reference`, `agency`, `length`, `width`, `height`, `damage_cause`, `replacement`, `notes`) VALUES
(2, '808080222', 'Absa', '5030cm', '200cm', '500cm', 'yes', 'yesn', 'Geyser');

-- --------------------------------------------------------

--
-- Table structure for table `foundation`
--

CREATE TABLE `foundation` (
  `id` int(11) NOT NULL,
  `reference` varchar(255) NOT NULL,
  `agency` varchar(255) NOT NULL,
  `length` varchar(255) NOT NULL,
  `width` varchar(255) NOT NULL,
  `height` varchar(255) NOT NULL,
  `damages` varchar(255) NOT NULL,
  `cracks` varchar(255) NOT NULL,
  `notes` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `foundation`
--

INSERT INTO `foundation` (`id`, `reference`, `agency`, `length`, `width`, `height`, `damages`, `cracks`, `notes`) VALUES
(2, '80808022', 'Absa Insurance', '5030cm', '200cm', '500cm', 'Yes', 'Yes', 'Geysers');

-- --------------------------------------------------------

--
-- Table structure for table `glazing`
--

CREATE TABLE `glazing` (
  `id` int(11) NOT NULL,
  `reference` varchar(255) NOT NULL,
  `agency` varchar(255) NOT NULL,
  `length` varchar(255) NOT NULL,
  `width` varchar(255) NOT NULL,
  `height` varchar(255) NOT NULL,
  `glazing_type` varchar(255) NOT NULL,
  `notes` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `office`
--

CREATE TABLE `office` (
  `id` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `domain` varchar(50) DEFAULT NULL,
  `usertype` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `office`
--

INSERT INTO `office` (`id`, `username`, `domain`, `usertype`, `password`) VALUES
(1, 'user', 'tiroclif', 'user', '1234'),
(2, 'admin', 'tiroclif', 'admin', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `painting`
--

CREATE TABLE `painting` (
  `id` int(11) NOT NULL,
  `reference` varchar(255) NOT NULL,
  `agency` varchar(255) NOT NULL,
  `paint_peeling` varchar(255) NOT NULL,
  `damage_cause_paint` varchar(255) NOT NULL,
  `litres` varchar(255) NOT NULL,
  `additional_notes` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `paving`
--

CREATE TABLE `paving` (
  `id` int(11) NOT NULL,
  `reference` varchar(255) NOT NULL,
  `agency` varchar(255) NOT NULL,
  `broken_tiles_paving` varchar(255) NOT NULL,
  `surface_uneven_paving` varchar(255) NOT NULL,
  `damage_water_paving` varchar(255) NOT NULL,
  `tiles_replace_paving` varchar(255) NOT NULL,
  `tile_damage_paving` varchar(255) NOT NULL,
  `length` varchar(255) NOT NULL,
  `width` varchar(255) NOT NULL,
  `height` varchar(255) NOT NULL,
  `add_notes_paving` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `paving`
--

INSERT INTO `paving` (`id`, `reference`, `agency`, `broken_tiles_paving`, `surface_uneven_paving`, `damage_water_paving`, `tiles_replace_paving`, `tile_damage_paving`, `length`, `width`, `height`, `add_notes_paving`) VALUES
(1, '80808022', 'Absa Insurance', 'Yes', 'Yes', 'Yes', 'No', 'not sure', '5030cm', '200cm', '500cm', 'This is just an example');

-- --------------------------------------------------------

--
-- Table structure for table `plumbing`
--

CREATE TABLE `plumbing` (
  `id` int(11) NOT NULL,
  `reference` varchar(255) NOT NULL,
  `agency` varchar(255) NOT NULL,
  `geyser_condition` varchar(255) NOT NULL,
  `vacuum_breakers` varchar(255) NOT NULL,
  `drip_tray` varchar(255) NOT NULL,
  `pressure_control` varchar(255) NOT NULL,
  `tile_damage` varchar(255) NOT NULL,
  `pipe_leaking` varchar(255) NOT NULL,
  `check_pipe_fittings` varchar(255) NOT NULL,
  `conduct` varchar(255) NOT NULL,
  `leaking_taps` varchar(255) NOT NULL,
  `waste_pipes` varchar(255) NOT NULL,
  `drain_blockage` varchar(255) NOT NULL,
  `bathroom_leaking_taps` varchar(255) NOT NULL,
  `leaking_blocked_pipes` varchar(255) NOT NULL,
  `waste_pipe_condition` varchar(255) NOT NULL,
  `water_closet` varchar(255) NOT NULL,
  `rubber_intact` varchar(255) NOT NULL,
  `water_intake_block` varchar(255) NOT NULL,
  `flexible_pipe` varchar(255) NOT NULL,
  `shower_issues` varchar(255) NOT NULL,
  `shower_condition` varchar(255) NOT NULL,
  `shower_tap` varchar(255) NOT NULL,
  `notes` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `plumbing`
--

INSERT INTO `plumbing` (`id`, `reference`, `agency`, `geyser_condition`, `vacuum_breakers`, `drip_tray`, `pressure_control`, `tile_damage`, `pipe_leaking`, `check_pipe_fittings`, `conduct`, `leaking_taps`, `waste_pipes`, `drain_blockage`, `bathroom_leaking_taps`, `leaking_blocked_pipes`, `waste_pipe_condition`, `water_closet`, `rubber_intact`, `water_intake_block`, `flexible_pipe`, `shower_issues`, `shower_condition`, `shower_tap`, `notes`) VALUES
(2, '80808022', 'Absa', 'Geyser', 'Geyser', 'Geyser', 'Geyser', 'Claim', 'Claim', 'Claim', 'Geyser', 'Geyser', 'Geyser', 'Geyser', 'Geyser', 'Geyser', 'Geyser', 'Geyser', 'Geyser', 'Geyser', 'Geyser', 'Geyser', 'Geyser', 'Geyser', 'Claim');

-- --------------------------------------------------------

--
-- Table structure for table `roofing`
--

CREATE TABLE `roofing` (
  `id` int(11) NOT NULL,
  `reference` varchar(255) NOT NULL,
  `agency` varchar(255) NOT NULL,
  `roof_type` varchar(255) NOT NULL,
  `roof_cracked` varchar(255) NOT NULL,
  `roof_leaking` varchar(255) NOT NULL,
  `cause_of_leaking` varchar(255) NOT NULL,
  `broken_tiles` varchar(255) NOT NULL,
  `length` varchar(255) NOT NULL,
  `width` varchar(255) NOT NULL,
  `height` varchar(255) NOT NULL,
  `number_of_tiles_broken` varchar(255) NOT NULL,
  `zinc_roof` varchar(255) NOT NULL,
  `loose_nails` varchar(255) NOT NULL,
  `tiles_aligned` varchar(255) NOT NULL,
  `trusses` varchar(255) NOT NULL,
  `valley_point` varchar(255) NOT NULL,
  `valley_point_leaking` varchar(255) NOT NULL,
  `condition_valley_point` varchar(255) NOT NULL,
  `gutter_condition` varchar(255) NOT NULL,
  `additional_notes` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `roofing`
--

INSERT INTO `roofing` (`id`, `reference`, `agency`, `roof_type`, `roof_cracked`, `roof_leaking`, `cause_of_leaking`, `broken_tiles`, `length`, `width`, `height`, `number_of_tiles_broken`, `zinc_roof`, `loose_nails`, `tiles_aligned`, `trusses`, `valley_point`, `valley_point_leaking`, `condition_valley_point`, `gutter_condition`, `additional_notes`) VALUES
(0, '808080225', 'Absas', 'A', 'no', 'no', 'no', 'yes', '5030cm', '200cm', '500cm', '8', 'Yes', 'yes', 'yes', 'yes', 'Yes', 'yes', 'good', 'great', 'nose');

-- --------------------------------------------------------

--
-- Table structure for table `tiles`
--

CREATE TABLE `tiles` (
  `id` int(11) NOT NULL,
  `reference` varchar(255) NOT NULL,
  `agency` varchar(255) NOT NULL,
  `broken_tiles` varchar(255) NOT NULL,
  `surface_uneven` varchar(255) NOT NULL,
  `damage_water` varchar(255) NOT NULL,
  `tiles_replace` varchar(255) NOT NULL,
  `tile_damage` varchar(255) NOT NULL,
  `length` varchar(255) NOT NULL,
  `width` varchar(255) NOT NULL,
  `height` varchar(255) NOT NULL,
  `add_notes` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tiles`
--

INSERT INTO `tiles` (`id`, `reference`, `agency`, `broken_tiles`, `surface_uneven`, `damage_water`, `tiles_replace`, `tile_damage`, `length`, `width`, `height`, `add_notes`) VALUES
(2, '80808022', 'Absa', 'tiles', 'tiles', 'tiles', 'yes', 'no', '5030cm', '200cm', '500cm', 'Claim');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `domain_key` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `user_name`, `password`, `domain_key`) VALUES
(1, 'name', 'surname', 'tiroclif');

-- --------------------------------------------------------

--
-- Table structure for table `wall`
--

CREATE TABLE `wall` (
  `id` int(11) NOT NULL,
  `reference` varchar(255) NOT NULL,
  `agency` varchar(255) NOT NULL,
  `length` varchar(255) NOT NULL,
  `width` varchar(255) NOT NULL,
  `height` varchar(255) NOT NULL,
  `walls_damp` varchar(255) NOT NULL,
  `peeling_paint` varchar(255) NOT NULL,
  `walls_cracked` varchar(255) NOT NULL,
  `boundary_wall` varchar(255) NOT NULL,
  `palisade_fence` varchar(255) NOT NULL,
  `wall_partitioned_erecting` varchar(255) NOT NULL,
  `wall_replace_wall_repair` varchar(255) NOT NULL,
  `add_note` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `wall`
--

INSERT INTO `wall` (`id`, `reference`, `agency`, `length`, `width`, `height`, `walls_damp`, `peeling_paint`, `walls_cracked`, `boundary_wall`, `palisade_fence`, `wall_partitioned_erecting`, `wall_replace_wall_repair`, `add_note`) VALUES
(0, '80808022555', 'Absa', '5030cm', '200cm', '20m', 'Yes', 'No', 'Yes', 'Yes', 'No', 'Wall', 'wall', 'Yesn');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cardboard`
--
ALTER TABLE `cardboard`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `electrical`
--
ALTER TABLE `electrical`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `foundation`
--
ALTER TABLE `foundation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `office`
--
ALTER TABLE `office`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `painting`
--
ALTER TABLE `painting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `paving`
--
ALTER TABLE `paving`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `plumbing`
--
ALTER TABLE `plumbing`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tiles`
--
ALTER TABLE `tiles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cardboard`
--
ALTER TABLE `cardboard`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `electrical`
--
ALTER TABLE `electrical`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `foundation`
--
ALTER TABLE `foundation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `office`
--
ALTER TABLE `office`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `painting`
--
ALTER TABLE `painting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `paving`
--
ALTER TABLE `paving`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `plumbing`
--
ALTER TABLE `plumbing`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tiles`
--
ALTER TABLE `tiles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
