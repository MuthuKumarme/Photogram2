CREATE TABLE `users` (
  `id` int NOT NULL,
  `bio` longtext NOT NULL,
  `avatar` varchar(1024) NOT NULL,
  `firstname` text NOT NULL,
  `lastname` text NOT NULL,
  `dob` date NULL,
  `instragram` varchar(1024) NULL,
  `facebook` varchar(1024) NULL,
  `twitter` varchar(1024) NULL
);