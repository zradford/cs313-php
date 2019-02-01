CREATE TABLE users (
  user_id  SERIAL      PRIMARY KEY,
  username VARCHAR(50) UNIQUE NOT NULL
);

CREATE TABLE posts (
  post_id      SERIAL PRIMARY KEY,
  user_id      INT    REFERENCES users(user_id),
  post_content TEXT
);

CREATE TABLE replies (
  reply_id      SERIAL PRIMARY KEY,
  post_id       INT    REFERENCES posts(post_id),
  reply_content TEXT
);

CREATE TABLE topics (
  topic_id    SERIAL PRIMARY KEY,
  user_id     INT    REFERENCES users(user_id),
  post_id     INT    REFERENCES posts(post_id),
  topic_title TEXT
);