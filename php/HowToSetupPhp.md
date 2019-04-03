PHP 개발환경설정

1. WAMP 를 설치한다
2. 경로 C:\Bitnami\wampstack-7.3.1-0\php로 이동한다
3. php.ini파일을 삭제
4. php.ini-development 파일을 복사, 붙여넣기 하여 php.ini로 이름 변경한다.
5. php.ini을 열어서

   - 에러로그 보여주기
     ;display_errors
     ;Default Value: On

   ;log_errors
   ;Default Value:=On

   - [opcache]
     ; Determines if Zend OPCache is enabled
     ;opcache.enable=0

6. Bitnami manager 켜서 서버 껐다가 켜기
