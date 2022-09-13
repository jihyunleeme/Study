## npm yarn 명령어 정리

| npm                        | yarn                   | 설명                                            |  단축 플래그   |
| -------------------------- | ---------------------- | ----------------------------------------------- | --- |
| npm install [package] (--save 생략가능)     | yarn add [package]     |                                |     |
| npm install [package] --save-dev    | yarn add --dev     | devDependencies에 설치                     |-D    |
| npm uninstall [package]    | yarn remove [pacakge]  | 삭제                                            |  uni   |
| npm udpate [package]       | yarn upgrade [package] | 업그레이드                                      |     |
| npm outdated               |                        | 설치된 패키지 버전확인                          |     |
| npm show [package] version |                        | 설치된 특정 패키지 버전확인                     |     |
| npm prune                  | yarn prune             | pacakge.json에 선언되지 않은 불필요한 파일 제거 |     |
| npm cache                  | yarn cache             | npm cache 목록보기                              |     |
| npm cache clean            | yarn cache clean       | cache 삭제                                      |     |
| npm rebuild                | yarn rebuild           | cache 삭제 후 npm 재설치                        |     |


## Tip

pacake.json

- ~ (tilt) : Minor level(최하위 레벨)에서 가장 최신버전으로
- ^ (carot) : Patch level, 최상위 버전의 업데이트까지 자유롭게 허용
- node_modules 폴더 명령어로 삭제하기
  - [윈도우]
    - rimraf 패키지 설치 없이
      - npx rimraf ./\*\*/node_modules
    - rimraf 패키지 이용
      - npm install rimrfa
      - rimraf node_modules
  - [리눅스] rm -rf ./node_modules
