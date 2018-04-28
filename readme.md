#Simple MVC

- #### Installation
-   Download or clone
-   Chncge the ENV file connect to database

- #### The system should be built according to an MVC structure and contain a rudimentary list view with at ast one controller and one model class.
-   DONE


- #### It should also contain a small API that should provide the possibility to retrieve an object from the collection by specifying its ID as well as a general call that will simply list all items in the collection. This data should be returned in a JSON format.
-   

- #### The system should be built using PHP and MySQL, at a minimum.
-   DONE

```$xslt
 System in implemented using PHP and mysql which is incorporate with laradoc.
```

- #### The code should be formatted in a way that makes it easy to read and understand, preferably with doc blocks before functions and with a consistent convention of method- and variable names. 
-   DONE

{ 

 The code is formatted using phpdoc with small description as to what the basic function of each method.
 
}

- #### All inputs should be secured against the most typical forms of SQL injections.
-   DONE

- #### You must write the MVC structure and core functionality yourself, without using any external MVC frameworks. This is to prove that you understand the core principle behind MVC systems. You do not need to write anything complicated, as long as you have the basics in place.
-   DONE

 Keeping things as simple as possible, the following is my structure:
 ```$xslt
 - config
 - controller
 - model
 - resource
     - css
     - js
 - view
 ```
