CREATE TABLE users (
  user_id  SERIAL      PRIMARY KEY,
  username VARCHAR(50) UNIQUE NOT NULL
);

CREATE TABLE topics (
  topic_id    SERIAL PRIMARY KEY,
  user_id     INT    REFERENCES users(user_id),
  topic_title TEXT
);

CREATE TABLE posts (
  post_id      SERIAL PRIMARY KEY,
  user_id      INT    REFERENCES users(user_id),
  topic_id     INT    REFERENCES topics(topic_id),
  post_content TEXT
);


CREATE TABLE replies (
  reply_id      SERIAL PRIMARY KEY,
  post_id       INT    REFERENCES posts(post_id),
  reply_content TEXT
);


INSERT INTO users VALUES 
(
  DEFAULT,
  'samuel'
),
(
  DEFAULT,
  'jessica'
),
(
  DEFAULT,
  'wizardman42'
);

INSERT INTO topics VALUES (
  DEFAULT, 
  1,
  'should BYUI get better food at the crossroads?'
),
(
  DEFAULT,
  2,
  'BYUI BATHROOMS ARE DISGUSTING'
);


INSERT INTO posts VALUES (
  DEFAULT,
  3,
  1,
  'sandwiches at the crossroads are severely lacking, I believe a chain restaurant would do a better job'
),
(
  DEFAULT,
  2,
  1,
  'I think that the current sandwich station is adequate and affordable'
),
(
  DEFAULT,
  1,
  2,
  'the bathrooms in the spori have always been nice for me!'
);





