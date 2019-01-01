How to use git - Basic
-------------------------------

##### Initialize a local git repository - 저장소 만들기
            $ git init


##### Connecting git remote repository
            $ git remote add <shortname> <url><br>
            ex ) git remote add origin http://
        
        
##### Showing git remote repository
            $ git remote
            origin
            
            $ git remote -v
            origin https://~.git
        
        
##### Renaming & Removing remotes<br>
            $ git remote rename <oldname> <newname>
            $ git remote remove <remotename>
        
        
##### Adding the files in my new local repository.
            $ git add . 


##### When never committed - should create the first commit.
error: src refspec master does not match any.

            $ git commit -m "initial commit"
            
            $ git push --set-upstream origin branch_name
        

##### Writing a commit messsage<br>
            $ git commit -m "commit message"


##### Pushing the changes in my local repository to Github<br>
            $ git push origin master 



