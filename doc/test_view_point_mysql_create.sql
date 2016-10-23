CREATE TABLE `users` (
	`id` INT NOT NULL,
	`username` varchar(32) NOT NULL UNIQUE,
	`displayname` varchar(100),
	PRIMARY KEY (`id`)
);

CREATE TABLE `teams` (
	`id` INT NOT NULL,
	`name` varchar(100) NOT NULL UNIQUE,
	PRIMARY KEY (`id`)
);

CREATE TABLE `users_teams` (
	`user_id` INT NOT NULL,
	`team_id` INT NOT NULL,
	PRIMARY KEY (`user_id`,`team_id`)
);

CREATE TABLE `projects` (
	`id` INT NOT NULL,
	`name` varchar(256) NOT NULL,
	`description` TEXT NOT NULL,
	`team_id` INT NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `test_view_points` (
	`id` INT NOT NULL,
	`name` varchar(256) NOT NULL,
	`description` TEXT NOT NULL,
	`parent_id` INT,
	PRIMARY KEY (`id`)
);

CREATE TABLE `points_project` (
	`point_id` INT NOT NULL,
	`project_id` INT NOT NULL,
	`objective` varchar(256) NOT NULL,
	PRIMARY KEY (`point_id`,`project_id`)
);

ALTER TABLE `users_teams` ADD CONSTRAINT `users_teams_fk0` FOREIGN KEY (`user_id`) REFERENCES `users`(`id`);

ALTER TABLE `users_teams` ADD CONSTRAINT `users_teams_fk1` FOREIGN KEY (`team_id`) REFERENCES `teams`(`id`);

ALTER TABLE `projects` ADD CONSTRAINT `projects_fk0` FOREIGN KEY (`team_id`) REFERENCES `teams`(`id`);

ALTER TABLE `test_view_points` ADD CONSTRAINT `test_view_points_fk0` FOREIGN KEY (`parent_id`) REFERENCES `test_view_points`(`id`);

ALTER TABLE `points_project` ADD CONSTRAINT `points_project_fk0` FOREIGN KEY (`point_id`) REFERENCES `test_view_points`(`id`);

ALTER TABLE `points_project` ADD CONSTRAINT `points_project_fk1` FOREIGN KEY (`project_id`) REFERENCES `projects`(`id`);

