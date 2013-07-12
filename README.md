CodeIgniter Internationalization Utility
========================================

Description
-----------
Once upon a time, I built a consumer-web type application on top of PHP/CodeIgniter that needed to be multi-lingual. I wrote this script to assist in taking manageable spreadsheets of translations, and convert them into CodeIgniter specific language files for use in the application.

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

Requirements:
-------------
- PHP
- CodeIgniter2
