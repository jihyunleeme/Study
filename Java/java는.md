### ch1-1~2 자바란? 자바의 역사
자바는 실행환경(JRE) + 개발도구(JDK) + 라이브러리(API)을 제공

### ch1-3~4 자바의 특징, 자바 가상 머신(JVM)
자바 가상 머신 (JVM)
자바 프로그램이 실행되는 가상머신 (VM)

한번 작성하면 어느 운영체제이든 JVM만 설치되어있으면 java 어플리케이션의 소스 코드 수정없이 실행 가능하다.

### ch1-5~6 자바 개발 도구의 설치와 설정 - Windows
자바 프로젝트 만들고 실행하기
1. 오른쪽 버튼 > New > Java Project > Project name 에 프로젝트 이름 > Finish 

2. 프로젝트 클릭 > src > New > Class > New Java Class > Packages: 는 지우기 > Name: 작성 (Class의 Name은 대문자로 시작) > public static void main(String[] args) 체크

<br/>
👉 module-info.java란 무엇일까?
서로 다른 프로젝트 a,b에 대해 a에서 선언한 클래스 b에서 불러와 사용가능 (Java 1.9(Java9)부터 변경된 사항)

### java.base모듈
  - java.lang
  - java.math
  - java.util
  - java.io
  - java.net
  - java.time 등

<br/>
👉 java 버전확인
cmd 창에서
```shell
> java -version
```
했을 때 버전명이 나오면 정상 설치 완료

<br/>
👉 cmd에서 D 드라이브로 이동
C:\>D:

원하는 드라이브 알파벳 + 콜론(`:`)
