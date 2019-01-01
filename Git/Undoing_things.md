Undoing Things
-------------------------------


##### Undstaging a staged file / git add 취소하기(stage에서 내리기) 
    
        git reset [commit]
        $ git reset --soft [commit]    
    
    
When git reset asks 'more?'
The ```^``` is an escape character in the Windows Command Line.
Use ```^^``` instead of ```^```


        $ git reset HEAD~1            -- 바로 이전 이력으로 돌아가기
        $ git reset HAED~2            -- 2개 이전 이력으로
            ...    
        $ git reset HAED~6            -- 6개 이전 이력으로


##### git push 취소하기

        $ git reset HEAD^
        $ git push origin <branch> -f

##### git merge 취소하기

        $ git merge --abort

