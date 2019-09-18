git 

ls = 리스트

git init = .git 이라는 파일이 만들어질꺼다.

ls -all = 숨겨져있는 .git 파일을 찾아줄것이야

rm -rf = 컴퓨터 포맷

rm -rf .git  = git 확장자만 다지운거

git add = git 만 기록을 하겠다.

git commit -m "first picture" = 첫번째 사진이라고 기록을 하겠다.

git config user.??? "~~~~"= 이름 이메일 같은 정보 입력가능







Sseokkoo@Sseokkoo MINGW64 /c/PHP_201540201 (master)
$ ls -all
total 13
drwxr-xr-x 1 Sseokkoo 197121   0  8월 28 16:01 ./
drwxr-xr-x 1 Sseokkoo 197121   0  8월 28 15:49 ../
drwxr-xr-x 1 Sseokkoo 197121   0  8월 28 16:31 .git/
-rw-r--r-- 1 Sseokkoo 197121 211  8월 28 15:53 readme.md

Sseokkoo@Sseokkoo MINGW64 /c/PHP_201540201 (master)
$ git status
On branch master
Your branch is up to date with 'origin/master'.

nothing to commit, working tree clean

Sseokkoo@Sseokkoo MINGW64 /c/PHP_201540201 (master)
$ git status
On branch master
Your branch is up to date with 'origin/master'.

Changes not staged for commit:
  (use "git add <file>..." to update what will be committed)
  (use "git restore <file>..." to discard changes in working directory)
        modified:   readme.md

no changes added to commit (use "git add" and/or "git commit -a")

Sseokkoo@Sseokkoo MINGW64 /c/PHP_201540201 (master)
$ git add .

Sseokkoo@Sseokkoo MINGW64 /c/PHP_201540201 (master)
$ git commit -m "seccond"
[master 6a2f249] seccond
 1 file changed, 1 insertion(+), 1 deletion(-)

Sseokkoo@Sseokkoo MINGW64 /c/PHP_201540201 (master)
$ git push -u origin master
To https://github.com/Sseokkoo/php_201540201.git
 ! [rejected]        master -> master (fetch first)
error: failed to push some refs to 'https://github.com/Sseokkoo/php_201540201.git'
hint: Updates were rejected because the remote contains work that you do
hint: not have locally. This is usually caused by another repository pushing
hint: to the same ref. You may want to first integrate the remote changes
hint: (e.g., 'git pull ...') before pushing again.
hint: See the 'Note about fast-forwards' in 'git push --help' for details.

Sseokkoo@Sseokkoo MINGW64 /c/PHP_201540201 (master)
$ git pull
remote: Enumerating objects: 5, done.
remote: Counting objects: 100% (5/5), done.
remote: Compressing objects: 100% (4/4), done.
remote: Total 4 (delta 0), reused 0 (delta 0), pack-reused 0
Unpacking objects: 100% (4/4), done.
From https://github.com/Sseokkoo/php_201540201
   af3aa56..4cb0a08  master     -> origin/master
Merge made by the 'recursive' strategy.
 2019_08_28.txt |  40 ++++++++++++++++++++++++++++++++++++++++
 2019_08_28.zip | Bin 0 -> 2832746 bytes
 2 files changed, 40 insertions(+)
 create mode 100644 2019_08_28.txt
 create mode 100644 2019_08_28.zip

Sseokkoo@Sseokkoo MINGW64 /c/PHP_201540201 (master)
$ ls
2019_08_28.txt  2019_08_28.zip  readme.md

Sseokkoo@Sseokkoo MINGW64 /c/PHP_201540201 (master)
$ git push -u origin master
Enumerating objects: 9, done.
Counting objects: 100% (8/8), done.
Delta compression using up to 4 threads
Compressing objects: 100% (4/4), done.
Writing objects: 100% (5/5), 575 bytes | 575.00 KiB/s, done.
Total 5 (delta 2), reused 0 (delta 0)
remote: Resolving deltas: 100% (2/2), completed with 2 local objects.
To https://github.com/Sseokkoo/php_201540201.git
   4cb0a08..b62439e  master -> master
Branch 'master' set up to track remote branch 'master' from 'origin'.

Sseokkoo@Sseokkoo MINGW64 /c/PHP_201540201 (master)
$
