## Path variable, Query parameter Best practice

- path parameter : resource 식별
- query string : 정렬이나 필터

기본적인 crud 기능을 위해 다른 url이나 query parameter 정의 불필요  
원하는 기능에 알맞게 HTTP 메소드 변경할 것

거의 모든 crud 프로세스에 추가적인 endpoint가 없어도됨
http 메소드를 사용하지 않고

1. path로 처리할때 생기는 일: user/create
2. query parameter 로 처리할때 : users?action=create

참고 : [path parameter과 query string는 언제 사용해야할까?](https://ryan-han.com/post/translated/pathvariable_queryparam/)
