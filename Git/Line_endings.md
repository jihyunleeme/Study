Dealing with line endings
-------------------------------
The error message : 
***Warning: line endings have changed from 'LF' to 'CRLF'." when files have LF line endings on Windows***


what does the error mean?
Text files created on Windows machine have different line endings than files created on Unix / Mac OS.
- line ending on Windows : CR (Carriage-Return, \r) and LF (Line Feed, \n)
- line ending on Unix / Mac OS : only use LF (Line Feed, \n)



If I am on a Window machine, 

    git config --global core.autocrlf true

It converts LF ending into CRLF



Value needs to be configured manually but, it should be done only one time per git installation.