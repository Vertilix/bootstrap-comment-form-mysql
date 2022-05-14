<h1>Responsive bootstrap comment form using MySQL</h1>

First time using bootstrap and made a comment form with it.

![image](https://user-images.githubusercontent.com/96177454/168445209-5c7eda7b-b17b-431a-a581-5bf28fdf5699.png)


Instructions:
Open XAMPP or any alternative to that, Turn on Apache and MySQL.

Create a new mysql database with the name commentform and execute this query:

```
CREATE TABLE comments (
amount INT NOT NULL AUTO_INCREMENT,
name VARCHAR(100) NOT NULL,
email VARCHAR(100) NOT NULL
text VARCHAR(150) NOT NULL,
date DATE NOT NULL,
```

Now open the comment form and change the ```$conn = mysqli_connect('localhost', 'root' ,'', 'commentform'); ``` in redirect.php and comments.php.

Thats about it please let me know if I forgor 💀 something.
