We are going to create a MySQL database from this mysql query.
'CREATE database company;'

And now we are going to create a 'user' table in the company database. For that the query will look like.

'create table user(id int not null primary key auto_increment, fullname varchar(50), email varchar(255) , password varchar(255), contact bigint);'

Now let's create HTML form for the user registration.

We have created our form in form.HTML

mouse is moved over a div , a messag emust appear wherether the div is empty or not