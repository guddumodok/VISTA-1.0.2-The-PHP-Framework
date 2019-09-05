# VISTA->
## Stands for Very Inteligent System for Technical Asignment 
### What is Vista?
##### Vista is a PHP Libery Stands for Very Inteligent System for Technical Asignment.
### Why We Used VISTA?
##### Small Code = Big solution. We can Solved Big Problems with a Single Line of Code.Also We can Secure String, Create File Folders, Cookies,Sessions,Htaccess etc.
### How to Use VISTA?
##### Download The Vista ZIP and Unzip it in Root Folder .Than Create a Index File in Root Folder and Paste the Codes.
##### <?php
##### define("vista","Developer Name");
##### include("vista/.vista");
##### $vista= new vista();
##### $vista->p("Hello World");
##### ?>
##### I think if You know Core PHP than You understood the Codes.
##### in first line we write the pre processors. Than we define "vista" Constant for a Security Layer & Assign a Value with Your Name.
##### If You don't define the Constant than Vista Doesnot Work. After That We include .vista File.
##### than We create a Object and assign the Object in $vista veriable.Next  $vista->p() function for Print some Outputs.
##### atlast we closed the Pre Processors.
## Lets Explain the Functions::-
### p(value):-
##### Its help to print some outputs. If the Outputs is a Normal String or Number than its display normally. or if the value is a array than its display as array.
##### Example $string="Hello World";
##### $array=[0,1,2];
##### $vista->p($string);// Hello World
##### $vista->p($array);//Array ( [0] => 0 [1] => 1 [2] => 2 )
### get_connection(connection_object):-
##### This Function saved the Connection Code of MYSQLI.
##### Example:- 
##### $connection_object=mysqli_connect("localhost","root","","database_name");
##### $vista->get_connection($connection_object);// its Hold the Connection Code. If You Not assign the values than You get Errors in many necessary Functions.
### help(all/fun):-
##### this function help to get the functions information/Description.
##### Example:-
##### help("all");// Priint all the Functions Names and Descriptions.
### redirect(url)::-
##### this Function help to redirct to the URL.
##### Example::-
##### $vista->redirect("https://www.netsalution.com"); //when someone access this page they redirect into Net Salution Website
### timeredirect(time,url):-
##### this function help to redirect when the time end.
##### example:-
##### $vista->timeredirect("5-s","https://www.netsalution.com");// When 5 second End than The Page Redirect into Net Salution Website.
##### We assign Second as '-s'.
##### We assign Minute as '-m'.
##### We assign Hour as '-h'.
##### if You can not set the time than the browser alert some error.
### en(number):-
##### This Function help to Break line in How Much Value we passed in argument.
##### example:-
##### $vista->get_connection($connection_object);
##### $vista->p("Hello World");
##### $vista->en(5);
##### $vista->p("Hello 2);
