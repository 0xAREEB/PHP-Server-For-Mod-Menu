# PHP Server For Mod Menu
PHP based Login Server for Android Mod Menus like [Hyupai's Java Login System](https://github.com/Hyupai/Login-Java-Php-Mysql-Android) and [LGL's Login Form Java](https://github.com/LGLTeam/Android-Login-Form-Java-2). 

This server is a modification of [PMT-DVA's Web Server](https://github.com/PMTDVA/PHP-Web-Server).

# Features Added

Following features were added in this Server:

### Super User:

All **Admins** have a restriction that they cannot even view the users registered by others *Except **Super User***. The Super User can View, Edit and Delete the users registered by any Admin.

### Security:

Protection against SQL Injection is added in this Server. Words which can cause SQL Injection are filtered, updated algorithm and Multiple checks are performed to minimize any chance of SQL Injection.

### User Interface:

The interface is desined in a way that any admin can easily perform any operation.

# Steps to Setup Server:

### Setup the Files:

* Download the Server from this repository.
* Upload all the downloaded files to your server.
* Open *phpMyAdmin*. From the header, select Import.
* There will be a file input field, click on it and select the `.sql` file.
* Go to the bottom of the page and click on `Import` Button.

### Update Database Info:

* Open `DB.php`.
* Change the `db_host`, `db_user`, `db_pass`, `db_name` to the values provide by your hosting.
* Add a record in admins tables and start using the server.

# Preview:

![1](https://github.com/0xAREEB/PHP-Server-For-Mod-Menu/assets/93572817/f29c23cc-014f-4cfd-a31f-6c6f2882e0bf)

![2](https://github.com/0xAREEB/PHP-Server-For-Mod-Menu/assets/93572817/be6d3bd6-b5bb-4984-badc-de11dcbc093f)

![3](https://github.com/0xAREEB/PHP-Server-For-Mod-Menu/assets/93572817/5ecc481e-e8c9-49be-be42-53cbb27ebf35)

![4](https://github.com/0xAREEB/PHP-Server-For-Mod-Menu/assets/93572817/0eab0846-b393-4674-8629-3e90513fa040)
