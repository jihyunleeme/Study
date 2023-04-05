# DNS의 개념과 동작방법

## DNS란

- Domain Name System(DNS)
- 사용자는 도메인명을 통해 온라인 정보에 접근
- 웹 브라우저, 인터넷 프로토콜(IP) 주소를 통해 상호작용
- DNS는 도메인 이름을 IP주소로 변환

## DNS는 어떻게 동작하는가
- DNS resolution 프로세스 : hostname(www.example.com)을 컴퓨터 친화적 IP 주소(192.168.1.1)로 변환
- IP주소는 각 장치에 지정
- 초기 요청외 사용자의 컴퓨터와 상호작용없음

## 웹페이지 로딩과 관련된 4가지 DNS서버 - 도서관과 비교하기

- DNS recursor(재귀)

  - 도서관에 특정 책이 어디있는지 사서에게 물어보기
  - 웹 브라우저와 같이 어플리케이션을 통해 클라이언트 컴퓨터에서 쿼리를 받도록 설계된 서버
  - 일반적으로 recursor(재귀)는 클라이언트의 DNS 쿼리를 충족하기 위해 추가 요청을 수행하는 역할을 한다.

- **Root nameserver**

  - 다른 책꽂이를 가르키는 도서관의 색인
  - 사람이 읽을 수 있는 호스트 네임을 IP 주소로 변환하는 첫번째 단계
  - 일반적으로 다른 위치의 참조를 제공

- TLD nameserver
  - 도서관에서 특정 책꽂이
  - Top level domain server(TLD)
  - 특정 IP주소를 탐색하는 다음 단계
  - hostname의 마지막 부분을 호스팅
  - (example.com에서 TLD 서버는 "com")

- 권위적인 nameserver
  - 책꽂이의 사전
  - 마지막 nameserver, 특정이름을 정의로 변역
  - nameserver 쿼리에 마지막 stop
  - 권한 있는 nameserver가 요청된 레코드에 엑세스 할 수 있는 경우
  - 요쳥된 호스트의 IP 주소를 초기 요청한 DNS Recursor(사서)에게 다시 반환

<br/><br/><br/><br/>

<hr/>

참고자료

- [What is DNS?](https://www.cloudflare.com/en-gb/learning/dns/what-is-dns/)
