How to use git - Basic
-------------------------------

##### Initialize a local git repository - 저장소 만들기
            $ git init


##### Connecting git remote repository - 원격 저장소 추가하기
            $ git remote add <shortname> <url><br>
            ex ) git remote add origin http://
        
        
##### Showing git remote repository - 원격저장소 확인하기
            $ git remote
            origin
            
            $ git remote -v
            origin https://~.git
        
        
##### Renaming & Removing remotes - 원격저장소 이름 바꾸기, 원격저장소 제거하기
            $ git remote rename <oldname> <newname>
            $ git remote remove <remotename>
        
        
##### Adding the files in my new local repository  - 로컬 저장소의 모든 파일 staging  
           $ git add . 


##### When never committed - should create the first commit - 첫 커밋
error: src refspec master does not match any.

            $ git commit -m "initial commit"
            
            $ git push --set-upstream origin branch_name
        

##### Writing a commit messsage - 커밋 메시지 작성
            $ git commit -m "commit message"


##### Pushing the changes in my local repository to Github - 로컬 저장소의 변경사항 원격으로 push하기
            $ git push origin master 



