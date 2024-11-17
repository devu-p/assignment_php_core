1. What are super global variables in PHP? List at least five super global arrays and their
use.

ans:

In PHP, superglobals are built-in global arrays that are always accessible, regardless of scope

Five Super Global Arrays in PHP:
1.$_GET
Purpose: Contains data sent to the script via URL query parameters (GET method).

2.$_POST
Purpose: Contains data sent to the script via HTTP POST method (typically form submissions).

3.$_SERVER
Purpose: Contains information about the server environment and the current request (e.g., HTTP headers, file paths, server details).

4.$_SESSION
Purpose: Stores session variables, which are used to persist data across multiple pages for a user’s session.

5.$_FILES
Purpose: Contains information about file uploads (e.g., file names, file types, temporary locations, and errors).