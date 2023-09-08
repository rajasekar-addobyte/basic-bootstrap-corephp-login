CREATE TABLE `users` (
  `id` int NOT NULL,
  `store_id` int DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `status` tinyint(1) DEFAULT '1',
  `createdTime` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;



INSERT INTO `users` (`id`, `store_id`, `name`, `username`, `password`, `status`, `createdTime`) VALUES
(1, 0, 'Admin', 'admin', '$2y$10$NK0e70zbk.b.IOZn2S2JmudXrXyk/kMyBMVPjrtXwMagsrSJg78nu', 1, '2023-09-08 07:31:26');

ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;
