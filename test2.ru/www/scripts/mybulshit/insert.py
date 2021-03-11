import mysql.connector
from mysql.connector import Error

def create_connection(host_name, user_name, user_password, db_name):
    connection = None
    try:
        connection = mysql.connector.connect(
            host=host_name,
            user=user_name,
            passwd=user_password,
            database=db_name
        )
        print("Connection to MySQL DB successful")
    except Error as e:
        print(f"The error '{e}' occurred")

    return connection

connection = create_connection("localhost", "test", "test", "admin")

def execute_query(connection, query):
     cursor = connection.cursor()
     try:
         cursor.execute(query)
         connection.commit()
         print("Query executed successfully")
     except Error as e:
         print(f"The error '{e}' occurred")

create_users = """
INSERT INTO
  `users` (`name`, `tel`)
VALUES
  ('James', 25),
  ('Leila', 32),
  ('Brigitte', 35),
  ('Mike', 40),
  ('Elizabeth', 21);
"""

execute_query(connection, create_users)  