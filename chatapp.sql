-- Creating the DATABASE
mysql -h localhost -u root

create database chatapp;

use chatapp;

-- Contact TABLE

create table contact(name varchar(30) not null, email varchar(50) not null, message varchar(225) not null);

-- Table structure for table `messages`

CREATE TABLE `messages` (
  `msg_id` int(11) NOT NULL,
  `incoming_msg_id` int(255) NOT NULL,
  `outgoing_msg_id` int(255) NOT NULL,
  `msg` varchar(1000) NOT NULL
);


-- Table structure for table `users`

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `unique_id` int(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
);

-- Indexes for table `messages`

ALTER TABLE `messages`
  ADD PRIMARY KEY (`msg_id`);

-- Indexes for table `users`

ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

-- AUTO_INCREMENT for table `messages`

ALTER TABLE `messages`
  MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT;

-- AUTO_INCREMENT for table `users`

ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;
