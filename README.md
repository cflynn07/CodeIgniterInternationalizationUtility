CodeIgniter Internationalization Utility
========================================

Create and manage translations in a spreadsheet:
![alt tag](http://oi40.tinypic.com/2645qis.jpg)
And convert them to usable CodeIgniter language files with this script:
![alt tag](http://oi42.tinypic.com/jhtpqa.jpg)


Description
-----------
Once upon a time, I built a consumer-web type application on top of PHP/CodeIgniter that needed to be multi-lingual. I wrote this script to assist in taking manageable spreadsheets of translations, and convert them into CodeIgniter specific language files for use in the application. This script will take this table (https://docs.google.com/spreadsheet/ccc?key=0AqftDBmFCH7BdDZYQnNnQUVQU1g5c0NKXzQ1bkJ1OGc&usp=sharing) of keys & translations, and convert it into the less manageable codeigniter translation files meant for the 'lang' folder in your project directory. (output dir contains examples)

Examples in use:
----------------
- http://de.clubbingowl.com (german)
- http://ja.clubbingowl.com (japanese)
- http://www.clubbingowl.com (english)

Associated Translation Spreadsheet:
-----------------------------------
- https://docs.google.com/spreadsheet/ccc?key=0AqftDBmFCH7BdDZYQnNnQUVQU1g5c0NKXzQ1bkJ1OGc&usp=sharing

Usage:
------
- Step1: Make sure CIConvert.php is set to executable with 'chmod +x CIConvert.php'
- Step2: CD into a directory with CIConvert.php && your translation CSV file saved as lang_master.csv
- Step3:
<pre>
> php CIConvert.php
</pre>
This will create an 'output' folder in this same directory. Contained will be sub-folders, one for each language column in your spreadsheet. In the case of our example, this means english, german, and japanese. 
<br><br>
Inside each of these folders are individual language files. 

<br><br>
Load the language files from you controller with
http://ellislab.com/codeigniter/user-guide/libraries/language.html
<pre>
$this->lang->load('filename', 'language');
</pre>

And use them from your views with the CI language helper
http://ellislab.com/codeigniter/user-guide/helpers/language_helper.html
<pre>
<?= lang('language_key'); ?>
</pre>

Requirements:
-------------
- PHP
- CodeIgniter2
