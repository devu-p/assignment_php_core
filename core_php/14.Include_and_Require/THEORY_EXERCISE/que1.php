Explain the difference between include and require in PHP

ans:
In PHP, both include and require are used to include and execute code from another PHP file within the current script.
Although they serve a similar purpose, there are key differences between them, primarily related to error handling.

include:
include is best used when the file you're including is not critical to the script's operation. It provides more flexibility, as the script will continue running even if the file is missing.

require:
require should be used for essential files that are necessary for the application to function properly. If the file is missing, it will stop the script with a fatal error.