SELECT sid, first, last, birthdate FROM `student`

SELECT CONCAT(first, " ", last) AS "Name", advisor FROM `student` WHERE advisor = 1 OR advisor = 2;

SELECT CONCAT(first, " ", last) AS "Name", birthdate FROM `student` WHERE birthdate > '1960-01-01' ORDER BY birthdate 

SELECT CONCAT(first, " ", last) AS "Name", gpa FROM `student` WHERE gpa >= 3.0 AND gpa <= 4.0 ORDER BY gpa DESC


UPDATE grade
SET grade.grade = 3.4
WHERE classid =(SELECT (Links to an external site.) * from grade INNER JOIN student ON student.sid = grade.sid WHERE student.first = "Herbert")
AND sid = (SELECT (Links to an external site.) * from grade INNER JOIN class ON class.classid = grade.classid WHERE abbrev = "IT 190") 


	DELETE FROM student WHERE sid = '888-777-666'
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	