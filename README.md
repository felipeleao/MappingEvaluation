MappingEvaluation
=================

A PHP web app to help evaluating the mapping of WordNet synsets to Dixon's Semantic Types generated automatically by the [SupersenseMapping](https://github.com/felipeleao/SupersenseMapping) application. It has been created to help enabling the case study developed during my Master's thesis, which you can learn about in [my homepage](http://www.fleao.com.br/researches).

Usage
---

![Application Screenshot](https://github.com/felipeleao/MappingEvaluation/images/screenshots/screenshot1.png)

The usage is pretty straightforward. Once logged the user will be able to access the **Evaluate!** section. The application will show a synset and the semantic type related to it. The user must simply select *correct* or *wrong*, and click the respective button.

The user's choice is saved in the database and another mapping is shown to be evaluated. This cycle continuos until the user have evaluated the estipulated number of mappings.


Installation
-----
To install the application first clone/download it.
```bash
## Clone it!
git clone https://github.com/felipeleao/MappingEvaluation.git
```
Then place it inside a webserver prepared for PHP (e.g. apache+php). The webserver must also be prepared to establish a connection with MySQL. Feel free to use other DBMS, but be aware that if you wish to do so you'll have to edit a few PHP files, since they not only have explicity calls to PHP's mysql methods, but also some of the queries might be closely related to the SQL standart implemented by MySQL.

To prepare the database begin by running the script `MappingEvaluation.sql`, placed inside `database_files/`. This will generate the database along with some data. After that run `other_tables.sql` script, inside the sam folder. This second script will generate some other tables related specifically to the web application. The reason why there are two files instead of a simple script is to enable you to generate your own mappings based [SupersenseMapping](https://github.com/felipeleao/SupersenseMapping) application (check the link), which will output a script similar to `MappingEvaluation.sql`. If you choose to do so, don't forget to run `other_tables.sql` afterwards.

With the application inside the webserver and the database created edit the `config/constants.php` file to specify the database connection pparameters right in the begining

````php
//Database connection parameters and credentials
define("SGBD_SERVER", "localhost");
define("SGBD_PORT", "3306");
define("SGBD_USER", "root");
define("SGBD_PASSWORD", "");
define("SGBD_SCHEMA", "mapping_evaluation");
````

in the `user` table, especify individually the number of mappings that each user must evaluate. No other configurations should be necessary! =)

Any doubts?
---
Fell free to contact me if you have any kind of doubts on how to use this application or wish some kind of info on the project it is related to.

License
---
This application is provided under the MIT license, for further information check the `license.txt` file under the root folder.
