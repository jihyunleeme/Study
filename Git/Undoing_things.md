## Undoing Things

##### Undstaging a staged file / git add 취소하기(stage에서 내리기)

        git reset [commit]
        $ git reset --soft [commit]

When git reset asks 'more?'
The `^` is an escape character in the Windows Command Line.
Use `^^` instead of `^`

        $ git reset HEAD~1            -- 바로 이전 이력으로 돌아가기
        $ git reset HAED~2            -- 2개 이전 이력으로
            ...
        $ git reset HAED~6            -- 6개 이전 이력으로

##### git push 취소하기

        $ git reset HEAD^
        $ git push origin <branch> -f

##### git merge 취소하기

        $ git merge --abort

##### 잘못 push 파일 삭제하기

원격 저장소와 로컬 저장소 파일 삭제
git rm [file name]
</br></br>

##### 원격 저장소 파일만 삭제. 로컬 저장소에 있는 파일은 삭제하지 않음.

    git rm --cached [file name]

- .gitignore파일에 추가했지만 계속 변화를 감지하고 tracked일때  
  ✔️작업하던 내용, 커밋하고 진행할것
  - git rm -r --cached .
  - git add .
  - git commit -m "commit message"

##### .gitignore 설정

git add 전에 설정 되어있어야한다.

참고로 원격 저장소에 적용하기 위해서는 commit과 push를 해야함
git commit -m "commit message"
git push origin master
