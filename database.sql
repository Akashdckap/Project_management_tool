CREATE DATABASE projectManagement;

use projectManagement;

CREATE TABLE projects(
id int not null AUTO_INCREMENT,
project_name varchar(255),
created_at timestamp,
updated_at timestamp,
PRIMARY KEY (id)
);

CREATE TABLE tasks(
id int not null AUTO_INCREMENT,
task_name varchar(255),
task_file varchar(255),
task_description varchar(255),
project_id int,
is_delete timestamp,
created_at timestamp,
updated_at timestamp,
primary key(id),
FOREIGN KEY(project_id) REFERENCES projects(id)
);