### rm

파일, 디렉토리 삭제

- 옵션
  - `-r` : 하위 디렉토리 삭제
  - `-f` : 강제로 삭제
  - `-i` : 파일 지울지 물어보기
  - `-v` : 삭제정보 보여주기  
    <br/>
- 예제

```bash
# test 하위 디렉토리 모든 파일 확인없이 삭제
rm -fr/test/*
```

### touch

용량 0의 파일 생성

- 예제

```bash
touch abc.txt
touch a.txt b.txt c.txt
```
