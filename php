

PHP Interview Question
Session
A session is a way to store information (in variables) to be used across multiple pages.
PHP session is used to store and pass information from one page to another temporarily (until user close the website).
Unlike a cookie, the information is not stored on the users computer.
A session is started with the session_start() function.
PHP $_SESSION is an associative array that contains all session variables. It is used to set and get session variable values.
PHP session technique is widely used in shopping websites where we need to store and pass cart information e.g. username, product code, product name, product price etc from one page to another. 
PHP session_destroy() function is used to destroy all session variables completely.

COOKIE
PHP cookie is a small piece of information which is stored at client browser. It is used to recognize the user.
Cookie is created at server side and saved to client browser. 
Each time when client sends request to the server, cookie is embedded with request. Such way, cookie can be received at the server side.
PHP setcookie() function is used to set cookie with HTTP response. Once cookie is set, you can access it by $_COOKIE superglobal variable.
EXAMPLE
    setcookie("CookieName", "CookieValue");/* defining name and value only*/ 
If you set the expiration date in past, cookie will be deleted.
setcookie ("CookieName", "", time() - 3600);// set the expiration date to one hour ago 
Difference between session and cookie
Session and Cookies both functions are used to store information. But the main difference between a session and a cookie is that in case of session data is stored on the server but cookies stored data on the browsers.
Sessions are more secure than cookies because session stored information on servers. We can also turn off Cookies from the browser.
Cookie can be turned off from browser.
Cookie can be stored for months or years, depending on the life span of the cookie. But the data in the session is lost when the web browser is closed.
Cookies are stored in browser as text file format.
Sessions are stored in server side.
Cookie stored limit amount of data.It is only allowing 4kb[4096bytes].
Session  stored unlimited amount of data.
Session can hold a multiple variable.
Cookie can not hold multiple variable.
we can access the cookies values in easily. So it is less secure.
we cannot access the session values in easily.So it is more secure.
setting the cookie time to expire the cookie.
using session_destory(), we we will destroyed the sessions.


include() and require() Function
The include() Function
PHP include is used to include file on the basis of given path.
The include() function takes all the text in a specified file and copies it into the file that uses the include function.
 If there is any problem in loading a file then the include() function generates a warning but the script will continue execution.
Example :
<?php include("menu.php"); ?>
The require() Function
The require() function takes all the text in a specified file and copies it into the file that uses the require function.
 If there is any problem in loading a file then the require() function generates a fatal error and halt the execution of the script.
Example 
    <?php require("xxmenu.php"); ?>
Difference between require  and include
So there is no difference in require() and include() except they handle error conditions.
 It is recommended to use the require() function instead of include(), because scripts should not continue executing if files are missing or misnamed.
What’s the difference between unset() and unlink()
unlink()
In PHP unlink() is a function for file system handling,
 unlink() is used to delete files. Suppose you have uploaded a file and wants to delete this file through the coding then unlink() function is used to delete the file.
unset()
unset() is a function for variable management. 
It will make a variable undefined. Or we can say that unset() is used to null out the value of a given variable. OR Unset () is used to destroy a variable in PHP. 
In can be used to remove a single variable, multiple variables, or an element from an 

How can we upload a file in PHP?
For file upload in PHP make sure that the form uses method="post" and attribute: enctype="multipart/form-data". It specifies that which content-type to use when submitting the form.


What is the difference between GET and POST?
GET displays the submitted data as part of the URL, during POST this information is not shown as it’s encoded in the request.
GET can handle a maximum of 2048 characters, POST has no such restrictions.
GET allows only ASCII data, POST has no restrictions, binary data are also allowed.
Normally GET is used to retrieve data while POST to insert and update.
What are the __construct() and __destruct() methods in a PHP class?
All objects in PHP have Constructor and Destructor methods built-in.
 The Constructor method is called immediately after a new instance of the class is being created, and it’s used to initialize class properties. 
for destroying the object Destructor method is used.
When we create an object of any class, we need to set properties of that object before using it. We can do that by first initialising the object and then setting values for the properties.
PHP Destructor method is called just before PHP is about to release any object from its memory. 
The destructor method cannot accept any argument and is called just before the object is deleted, which happens either when no reference exist for an object or when the PHP script finishes its execution.
https://www.studytonight.com/php/php-constructor-and-destructor


What are headers in PHP? 
In PHP header() is used to send a raw HTTP header. It must be called before any actual output is sent, either by normal HTML tags, blank lines in a file, or from PHP
Example :
header(string,replace,http_response_code);
1. string: It is the required parameters. It specifies the header string to send.
2. replace: It is optional. It indicates whether the header should replace previous or add a second header.
3. http_response_code : It is optional. It forces the HTTP response code to the specified value

What is the difference between file_get_contents() and file_put_contents() in PHP? 

What is the role of the .htaccess file in php?
The .htaccess file is a type of configuration file for use on web servers running the Apache Web Server software. It is used to alter the configuration of our Apache Server software to enable or disable additional functionality that the Apache Web Server software has to offer.

PHP implode()  and explode() Function
PHP Implode() Function
The implode function in PHP is used to "join elements of an array with a string".
The implode() function returns a string from elements of an array. 
It takes an array of strings and joins them together into one string using a delimiter of your choice.
Syntax     implode (separator, array)
Example      $arr = Array ("A","E","I","O","U");
        $str = implode("-",$arr);     //output    A-E-I-O-U
 
PHP Explode() Function
The explode function is used to "Split a string by a specified string into pieces i.e. it breaks a string into an array".
The explode function in PHP allows us to break a string into smaller text with each break occurring at the same symbol. 
Syntax explode (separator,string,limit)
This symbol is known as the delimiter. 
Using the explode command we will create an array from a string.
The explode() function breaks a string into an array, but the implode function returns a string from the elements of an array.
Example     $input=”1,2,3,4,5,6,7”;    
 echo array_sum(explode(',',$input));

What are the 3 scope levels available in PHP and how would you define them? Or access modifier 
Public – accessible to any other code accessing the class or This modifier is open to use inside as well as outside the class.
Private – accessible  only in its own class,
Protected – If the class members declared as protected then it can be accessed only within the class itself and by inheriting and parent classes.
What are getters and setters and why are they important?
Array function?
An array is a data structure that stores one or more similar type of values in a single value.
Explain the difference between array_merge() and array_combine()? 
array_merge() Function
The array_merge() function merges one or more arrays into one array.
Syntex : array_merge(array1, array2, array3, ...) 
<?php
$a1=array("red","green");
$a2=array("blue","yellow");
print_r(array_merge($a1,$a2));
?>
Output : Array ( [0] => red [1] => green [2] => blue [3] => yellow ) 
array_combine() Function
The array_combine() function creates an array by using the elements from one "keys" array and one "values" array.  Both arrays must have equal number of elements!
Syntex : array_combine(keys, values)
<?php
$fname=array("Peter","Ben","Joe");
$age=array("35","37","43");
$c=array_combine($fname,$age);
print_r($c);
?>



How to get a total number of elements used in the array?
We can use the count() or size() function to get the number of elements or values in an array in PHP.
Example                     
$element = array("sunday","monday","tuesday");
echo count($element );
echo sizeof($element );
String function?

How can we get the IP address of the client?
$_SERVER["REMOTE_ADDR"];

What is the use of cURL()? 

It is a PHP library and a command line tool that helps us to send files and also download data over HTTP and FTP. It also supports proxies, and you can transfer data over SSL connections.
cURL is a library that lets you make HTTP requests in PHP.
Some basic cURL functions:
The curl_init() function will initialize a new session and return a cURL handle.
curl_exec($ch) function should be called after initialize a cURL session and all the options for the session are set. Its purpose is simply to execute the predefined CURL session (given by ch).
curl_setopt($ch, option, value) set an option for a cURL session identified by the ch parameter. Option specifies which option is to set, and value specifies the value for the given option.
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1) return page contents. If set 0 then no output will be returned.
curl_setopt($ch, CURLOPT_URL, $url) pass URL as a parameter. This is your target server website address. This is the URL you want to get from the internet.
curl_exec($ch) grab URL and pass it to the variable for showing output.
curl_close($ch) close curl resource, and free up system resources.

 
CURLOPT_POST       => true,
CURLOPT_POSTFIELDS => $postData,
curl_error and curl_errno to debug the response and receive informative error messages.



https://www.bestinterviewquestion.com/core-php-interview-questions
https://www.javatpoint.com/php-include-file
https://www.tutorialspoint.com/php/
https://www.sitesbay.com/php/php-introduction






Codeigniter question and answer
Explain the difference between helper and library in CodeIgniter?
Helper is a set of Common functions which we can use within Models, Views, Controllers everywhere. Once we include that file then we can get access to the functions.
Library is a class which we need to make an instance of the class by $this->load->library() this function.
NOTE : A library is used in object-oriented context but a helper is more suitable to be used within the Views

What is routing?


Mysql
Triggers ??
ports

