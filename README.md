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
### en(number)/br(number):-
##### This Function help to Break line in How Much Value we passed in argument.
##### example:-
##### $vista->get_connection($connection_object);
##### $vista->p("Hello World");
##### $vista->en(5);
##### $vista->p("Hello 2);
### hr(number):-
##### This Function help to ccreate Rules in How Much Value we passed in argument.
##### example:-
##### $vista->get_connection($connection_object);
##### $vista->p("Hello World");
##### $vista->hr(5);
##### $vista->p("Hello 2);
### sthead(code):-
##### this function automaticaly Include Structure of HTML file.its start the Head Section. In Argument You can write any HTML/CSS/JS Code.
##### example:-
##### $vista->sthead("<title>Helllo</title>");
### ehead():-
##### This function help to end Head Section
### css(code):-
##### this is a Simple Function for write CSS Codes.
##### Example:-
##### $vista->css("body{color:red}");
### js(code):-
##### this is a Simple Function for write JS Codes.
##### Example:-
##### $vista->js("alert('hi')");
### v():-
##### this function used for check version.
### hideerror()::-
##### This Function help to hide all error message.
### rightclick():-
##### this function help to create a right click menu. But if you want to work with this function than you must assign sthead() function.
### rc_menu(name,url):-
##### this function help to create right click menu options and by click to go url.
##### Example:-
##### rc_menu("Net Salution","https://www.netsalution,com");// Create a Option.
### erightclick():-
##### This function help to end Right Click section.
### input("type:name/id/class:placeholder/value;",autocomplete,break_line,section_name):-
##### this function help us to Create Input Boxes.
##### Example:-
##### $vista->input("text:fname:Enter Your First Name;text:lname:Enter Your Last Name;",true,true,"s1");// This code generate me two input box and the boxes are in s1. The Boxes display one by one in lines. Their autocomplete is on.
#### Why we Used this Function?
##### => Because we can generate Multiple Input Boxes in a Single Line Codes. We also can send the Input values to my PHP file in a single line. Just Read Below.
### sendinputvalues(name,section_name,"name:event",location,challenge,method,return):-
##### this function help to send data to php file in AJAX method. Here First we assign jquery() function.Than Create Input Boxes.
##### Example:-
##### $vista->jquery();
##### $vista->input("text:fname:Enter Your First Name;text:lname:Enter Your Last Name;",true,true,"s1");
##### input("button:send:Send");
##### $vista->sendinputvalues("my_first_data","s1","send:click","from.php","work:getdata","post","alert(data)");
##### Explain:-
##### First We create Two Input Boxes.and Its will assign in s1.
##### than sendinputvalues() function create Jquery Code for Send Input values to from.php file and received the output and store in a Javascript values.
##### here we assign in first argument 'my_first_data'-> its mean we store the input values in COOKIE with the name of my_first_data.
##### Next we assign 's1'-> its mean we get s1 sections input boxes values. and store in the Cookie.
##### next we assign 'send:click'-> Look at 'input("button:send:Send");'. Here we create a Button with the ID send. So we define here than send:click .here click is Event Name.
##### NExt we assign 'from.php'-> its mean we send the data into from.php files.
##### next we assign 'work:getdata'-> its mean in from.php file we used a condition.The from.php file get a variable value getdata. Its a Great filter system.That If getdata is not post than do noting.
##### Next we assign 'post'-> its the method which i want to send data. Methods are twwo type 1)post 2)get.
##### next we enter any javascript code. We return a Data variable in javascript where the Output store.
### getinput(name,section_name):-
##### this function used for get the values from

