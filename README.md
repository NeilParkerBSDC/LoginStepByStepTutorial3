# Login Step By Step Tutorial 3
This is the basic version of a login for a website. This version adds a bit more security, using session variablles t stop users bypassing the **ServerSideValidator.php** Page

It consists of the following files:

## ServerSide1.php

This file creates a form to be submited to the **ServerSideValidator.php file** which checks the password.

>  No changes from the previous version [previous version:](https://github.com/NeilParkerBSDC/LoginStepByStepTutorial2)

## ServerSideValidator.php

This checks the password submitted from the form on ServerSide1.html. If it is the same as the stored password then it send you on to the secure page (ServerSide2.html), otherwise it sends you back to the login page (ServerSide1.html)

> Added from the [previous version:](https://github.com/NeilParkerBSDC/LoginStepByStepTutorial2)
>
> - Connects to the database
> - Runs an SQL query to get the usernamen and password which matches the username submitted on the form on **ServerSide1.php**
> - extract the password for this users and uses that in the validation if statement instead of the fixed password of previous version.

## ServerSide2.html

The "secure" desitniation page

> Added from the [previous version:](https://github.com/NeilParkerBSDC/LoginStepByStepTutorial2)
>
> - some "echo" statements added to check what data has been passed to this page

## Diagram
```
+------------------+
| ServerSide1.html | --Submit----+
+------------------+             |
         ^                       v
         |           +-------------------------+                                  ____________
         |           | ServerSideValidator.php |                                 (____________)
         |           |                         | <---Get data for this user ---> | Database   |
         No ---------|Submitted PW = Stored PW?|                                 (____________)
                     +-------------------------+                               
                                 |
                                Yes
+------------------+             |     
| ServerSide2.html | <-----------+
+------------------+

```
