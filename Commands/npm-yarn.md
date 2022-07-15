## npm yarn 명령어 정리

| npm                        | yarn                  | 설명                                            |     |
| -------------------------- | --------------------- | ----------------------------------------------- | --- |
| npm install [package]      |                       |                                                 |     |
| npm uninstall [package]    | yarn remove [pacakge] | 삭제                                            |     |
| npm udpate [package]       | npm upgrade [package] | 업그레이드                                      |     |
| npm outdated               |                       | 설치된 패키지 버전확인                          |     |
| npm show [package] version |                       | 설치된 특정 패키지 버전확인                     |     |
| npm prune                  | yarn prune            | pacakge.json에 선언되지 않은 불필요한 파일 제거 |     |

## 단축어

| 명령어    | 단축 플래그 | 설명 |
| --------- | ----------- | ---- |
| uninstall | uni         | 삭제 |

## Tip

pacake.json

- ~ (tilt) : Minor level(최하위 레벨)에서 가장 최신버전으로
- ^ (carot) : Patch level, 최상위 버전의 업데이트까지 자유롭게 허용
