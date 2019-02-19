CREATE TABLE users (
  user_id      SERIAL      PRIMARY KEY,
  username     VARCHAR(50) UNIQUE NOT NULL,
  creation_date DATE   NOT NULL,
  hashed_pass VARCHAR(256) NOT NULL
);

ALTER TABLE users ADD COLUMN hashed_pass VARCHAR(256);

CREATE TABLE topics (
  topic_id      SERIAL    PRIMARY KEY,
  user_id       INT       REFERENCES users(user_id),
  creation_time DATE NOT NULL,
  topic_title   TEXT
);

CREATE TABLE posts (
  post_id       SERIAL    PRIMARY KEY,
  user_id       INT       REFERENCES users(user_id),
  topic_id      INT       REFERENCES topics(topic_id),
  creation_time DATE NOT NULL,
  post_content  TEXT      NOT NULL
);


CREATE TABLE replies (
  reply_id      SERIAL    PRIMARY KEY,
  post_id       INT       REFERENCES posts(post_id),
  creation_time DATE NOT NULL,
  reply_content TEXT NOT NULL
);


INSERT INTO users (user_id, username, creation_date) VALUES 
(
  DEFAULT,
  'samuel',
  '2019-02-14'
), 
(
  DEFAULT,
  'jessica',
  '2019-02-14'
),
(
  DEFAULT,
  'wizardman42',
  '2019-02-14'
);

INSERT INTO topics VALUES (
  DEFAULT, 
  2,
  '2019-02-14',
  'should BYUI get better food at the crossroads?'
),
(
  DEFAULT,
  3,
  '2019-02-14',
  'BYUI BATHROOMS ARE DISGUSTING'
),
INSERT INTO topics VALUES 
(
  DEFAULT,
  4,
  '2019-02-18',
  'Can we just wear ripped pants?'
);



INSERT INTO posts VALUES (
  DEFAULT,
  3,
  1,
  '2019-02-14',
  'sandwiches at the crossroads are severely lacking, I believe a chain restaurant would do a better job'
),
(
  DEFAULT,
  2,
  1,
  '2019-02-14',
  'I think that the current sandwich station is adequate and affordable'
),
(
  DEFAULT,
  4,
  2,
  '2019-02-14',
  'the bathrooms in the spori have always been nice for me!'
);





