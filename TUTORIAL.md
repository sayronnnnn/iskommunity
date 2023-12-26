## TUTORIAL 

Tutorial kung paano ninyo mattry on your end yung iskommunity. Pa-heads up nalang sa gc if may maencounter na issue.

## Barebone Login 12-26-2023

1. Locate your XAMPP's directory. Commonly, its directory is __C:\xampp__.

2. Find and go to __htdocs__ folder.

3. Download the __iskommunity__ folder in this Github repository.

4. Paste it inside the __htdocs__ folder.
   
#### We are almost done!

5. Setup your XAMPP, and start Apache and MySQL.

6. Go to __phpmyadmin__ in your web browser.

7. Create a database named __*iskommunity*__.

8. Once done, inside *iskommunity* database, look for __Import__ in the Options bar/ Ribbon on top (it is in the row together with Structure).

9. Inside __iskommunity__ folder in htdocs, find __sql__ folder. There is __*student.sql*__ and __*organization.sql*__ -- download and import them each in the __*iskommunity*__ database.

#### FINISH!

10. Now, you can open __iskommunity__ in your browser by appending /iskommunity/index.php in your localhost url.

### [Account testing for org]
If gusto niyong matry if pwedeng mag-login yung organization, I have added dummy TPG credentials sa organization.sql. May inserted values na rin yun. Yung username is puptpg and password is tpg1. Kapag naglog-in kayo, makikita niyo dapat yung username na puptpg sa header. 

