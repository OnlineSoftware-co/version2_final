### version2
## Dont push in version1 

steps to switch to this repo:
<br>
create new folder version2 in the same directory as of version1
<br><br>
like if version1 is at c://xyz/version1
<br>
then version2 must be at c://xyz/version2
<br><br>
just enable to view hidden files and check if  &nbsp;  '.git'  &nbsp;  folder is at  &nbsp; 'c://xyz'  &nbsp;  => delete it!<br> dont delete   &nbsp; '.git'  &nbsp;  of  'c://xyz/version1'
<br>
<br> 
<br>
now, move to c://xyz/version2 and run <br>
```
git clone https://github.com/OnlineSoftware-co/version2.git
git checkout -b yourBranchName
git push origin yourBranchName
```
<br>for getting latest changes while you work, run:<br>
```
git pull origin main
```
<br>for uploading your work, run: <br>
```
git push origin  yourBranchName
```
