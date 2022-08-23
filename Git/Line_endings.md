## Dealing with line endings

The error message :
**_Warning: line endings have changed from 'LF' to 'CRLF'." when files have LF line endings on Windows_**

what does the error mean?
Text files created on Windows machine have different line endings than files created on Unix / Mac OS.

- line ending on Unix : only use LF (Line Feed, \n)
- line ending on Mac OS : CR (Carriage-Return, \r)
- line ending on Windows : CRLF, CR (Carriage-Return, \r) and LF (Line Feed, \n)

### git confing autocrlf으로 해결하기

설정확인을 위해

```bash
git config --global --list
```

Windows환경을 사용하고 있다면

```bash
git config --global core.autocrlf true
```

Windows만을 사용하는 프로젝트라면 기능끄기.

```bash
git config --global core.autocrfl false
```

Linux나 Mac 사용하고 있다면

```bash
git config --global core.autocrlf input
```
