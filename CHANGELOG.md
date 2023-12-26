# Change Log
All notable changes to this project will be documented in this file.
 
The format is based on [Keep a Changelog](http://keepachangelog.com/)
and this project adheres to [Semantic Versioning](http://semver.org/).
 
## Barebone Login - 12-26-2023
 
About to sa login and registration page natin. Tables included:
- student
- organization

### Changed

- Sa student table, tinanggal ko yung 'stud_FirstName' and 'stud_LastName' kasi I think para sa registration and login, or even sa profile, and sa buong website, di natin need malaman full name ni user.
- I think di na natin isasama yung orgrepresentative table. Lahat ng orgrep credentials (email and pass) nilagay ko nalang sa organization table.

 
### Added
- May dinagdag ako sa student table, yung 'created_At' column to store yung creation date ng account.
- May dinagdag ako sa organization table, 'org_Username' for logging in.
 
