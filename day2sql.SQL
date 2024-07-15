<!-- task1 -->
SELECT * FROM employees;
<!-- task2 -->
SELECT name, salary FROM employees;
<!-- task3 -->
SELECT * FROM employees WHERE salary > 50000;
<!-- task4 -->
SELECT * FROM employees WHERE name like j%;
<!-- task5 -->
SELECT * FROM employees WHERE departmentID IN(1,2,3);
<!-- TASK6 -->
SELECT * FROM employees
 ORDER BY HireDate DESC;
 <!-- TASK7 -->
 SELECT COUNT() FROM employees;
 <!-- TASK8 -->
 SELECT SUM(salary) FROM employees;
 <!-- TASK9 -->
 SELECT AVG(salary) FROM employees;
 <!-- TASK10 -->
 SELECT MAX(salary) FROM employees;
 SELECT MIN(salary) FROM employees;
 <!-- TASK11 -->
 SELECT * FROM employees WHERE salary > 50000;
 SELECT department, AVG(salary) AS avg_salary
FROM employees
GROUP BY department
HAVING AVG(salary) > 50000;
<!-- TASK12 -->
 CREATE TABLE employees (
    employeeID INT PRIMARY KEY,
    name VARCHAR(255),
    departmentID INT NOT NULL  AUTO_INCREMENT ,
    salary FLOAT NOT NULL,
    hire_date DATE NOT NULL,
    FOREIGN KEY (departmentID) REFERENCES departments(departmentID)
);
-- TASK13
CREATE TABLE departments (
 departmentID INT  PRIMARY KEY NOT NULL AUTO_INCREMENT ,
    departmentName VARCHAR(100)
);
CREATE TABLE employees (
    employeeID INT PRIMARY KEY NOT NULL AUTO_INCREMENT ,
    employeeName VARCHAR(100),
   departmentID INT,
    FOREIGN KEY (departmentID) REFERENCES departments(departmentID)
);
-- task14
CREATE TABLE students (
    studentID INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    studentName VARCHAR(255)
);
CREATE TABLE courses (
    courseID INT PRIMARY KEY,
    courseName VARCHAR(255)
);
CREATE TABLE student_courses (
    studentID INT,
    courseID INT,
    PRIMARY KEY (studentID, courseID ),
    FOREIGN KEY (studentID) REFERENCES students(studentID),
    FOREIGN KEY (courseID ) REFERENCES courses(courseID )
);
-- TASK15
ALTER TABLE employees
ADD CONSTRAINT fk_departmentID
FOREIGN KEY (departmentID) REFERENCES departments(D);

-- TASK16
ALTER TABLE employees
ALTER COLUMN name VARCHAR(255) NOT NULL;
-- TASK17
ALTER TABLE employees
ADD CONSTRAINT Uemail UNIQUE (email);
-- TASK18
ALTER TABLE employees
ADD CONSTRAINT checksalary CHECK (salary > 0);
-- task19
ALTER TABLE employees
ALTER COLUMN status SET DEFAULT 'Active'; 









