## Dealing with line endings

The error message :
**_Warning: line endings have changed from 'LF' to 'CRLF'." when files have LF line endings on Windows_**

what does the error mean?
Text files created on Windows machine have different line endings than files created on Unix / Mac OS.

- line ending on Unix : only use LF (Line Feed, \n)
- line endign on Mac OS : CR (Carriage-Return, \r)
- line ending on Windows : CR (Carriage-Return, \r) and LF (Line Feed, \n)

### git confing autocrlf으로 해결하기

Window환경을 사용하고 있다면

```bash
git config --global core.autocrlf true
```

It converts LF ending into CRLF
Value needs to be configured manually but, it should be done only one time per git installation.
