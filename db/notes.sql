CREATE TABLE course (
    course_id      SERIAL      PRIMARY KEY
  , course_name    varchar(60) NOT NULL
  , course_code    varchar(10) NOT NULL  
);

CREATE TABLE note (
    note_id    SERIAL PRIMARY KEY
  , course_id  INT NOT NULL   REFERENCES course(course_id)
  , note_date  DATE NOT NULL
  , note_content  TEXT NOT NULL
);

/*we want to connect things with the primary key, mostly the ID, so we connect
 with that insteasd of the course number*/

INSERT INTO course (course_name, course_code) VALUES ('Web I','CS213');
INSERT INTO course (course_name, course_code) VALUES ('Web II','CS313');
