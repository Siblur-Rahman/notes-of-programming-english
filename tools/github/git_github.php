<!-- github header -->

<?php include('./github_header.php') ?>
<div id="main_content"><!--Start Main Content -->
    <a class="to_jump" name="00"></a>
      <h1 class="all-center">GitHub</h1>
   <h1 class="mx-auto" style="width: 500px;">GitHub</h1>
   <div class=" border border-dark p-2">
	<div>
	<mark>create a new repository on the command line	</mark>	
		echo "# practice-git&github"  README.md <br>
		git init <br>
		git add README.md <br>
		git commit -m "first commit" <br>
		git branch -M main <br>
		git remote add origin git@github.com:Siblur-Rahman/htutyiuy.git <br>
		git push -u origin main <br>
 <br>
 <br>
		<mark>push an existing repository from the command line</mark>
		git remote add origin git@github.com:Siblur-Rahman/htutyiuy.git
		git branch -M main
		git push -u origin main
	</div>
	</div>
<a class="to_jump" name="1"></a>
<p>To check git version, type <mark>'git --version'</mark></p>

	<div class=" border border-dark p-2">
		<h3>1. To Configure Git:</h3>
		<h3>To check git version, type <mark>'git --version'</mark></h3>
		<div>To add name, type <mark>'git config --global user.name "MS Rahman"</mark>
		To see name, type <mark>'git config --global user.name</mark><br>
		To add name, type <mark>git config --global user.email "msrahman048gmail.com"'</mark><br>
		To add email, type <mark>git config --global user.email'</mark>
		</div>
	</div>
							<!--**** 2 ****-->
	<a class="to_jump" name="2"></a>
	<div>
		<h1>2. Creating, Removing and so on file and folder</h1>
		<h3>To create Git Folder,type <mark>'mkdir folder's name'</mark> </h3>

		<h3>To remove file and folder, type <mark>'rm folder's name''</mark> </h3>

		<h3>To remove file,type <mark>'rm folder's name' -f'</mark> </h3>
		
		<h3>To remove file,type <mark>'rm folder's name' -f'</mark> </h3>

		<h3>To see files and folders,type <mark>'ls'</mark> </h3>
		<h3>To see, which directory I am inside,type <mark>'pwd'</mark> </h3>

		<h3>To check the Git statustype <mark>'git status'</mark> </h3>

		<h3>To see hidden files and folders,type <mark>'ls -lart'</mark> </h3>

		<h3>To change the current working directory,type <mark>'cd folder's name'</mark> </h3>
		<h3>To change directory to parent or previous directory, type <mark>'cd ..'</mark></h3>

		<h3>To initialize Git,type <mark>'git init'</mark> </h3>

		<p>To Add New Files, type <mark>'touch file name with extension'</mark> </p>

		<h3>To add the files to a Staging Environment,type <mark>'git add file name with extension'</mark> </h3>

		<h3>To add all,type <mark>'git add -A</mark> </h3>

		<h4>Note: The shorthand command for git add --all is git add -A</h4>

		<h3>To add all folder to stage,type <mark>'git add .</mark></h3>
	</div>

							<!--**** 3 ****-->
							<a class="to_jump" name="3"></a>
<h1>3. Git Commit:(24:15)</h1>
<h3>To Commit ,type <mark>'git commit -m "a message"'</mark></h3>


<h3>To bring back a file after commit,type <mark>'git checkout index.html'</mark> </h3>

<h3>To bring back a file after commit,type <mark>'git checkout -f'</mark> </h3>
							<!--**** 4 ****-->
							<a class="to_jump" name="4"></a>
<h1>Git Commit Log:</h1>
<h3>To view the history of commits for a repository,type <mark>'git log'</mark> </h3>


<h3>To see last commit,,type <mark>'git log –p -1'</mark> </h3>

<h3>To ,type <mark>''</mark> </h3>

<h3>To reset,type <mark>'git reset'</mark> </h3>

<h3>To ,type <mark>''</mark> </h3>

<h3>To back to Terminal,<mark>'press the Q button'</mark> </h3>

<h3>To see different between stage files,type <mark>'git diff'</mark> </h3>

<h3>To compare between last commit and staged,type <mark>'git diff --staged'</mark> </h3>
							<!--**** 5 ****-->
							<a class="to_jump" name="5"></a>
<h1>5. Git Branch</h1>

<h3>To see branch,type <mark>'git branch'</mark> </h3>

<h3>To create a new branch,type <mark>'git branch branch name'</mark> </h3>

<h3>To switch to branch,type <mark>'git checkout branch name'</mark> </h3>

<h3>To create a new branch and switch together,type <mark>'git checkout -b  branch name'</mark> </h3>

<h3>To Merge branch,type <mark>'git merge branch name -m "message"'</mark> </h3>

									<!--**** 6 ****-->
	<a class="to_jump" name="6"></a>
<div class="border border-dark ps-3">
<h1>Push (53:20-Last)</h1>
<h3>For First time :</h3>
<p> First Step, Type, git remote add origin link of repository </p>
such as, <div class="mark">git remote add origin git@github.com:Siblur-Rahman/MY-WEB-DEVLOPMENT-NOTES.git</div>

<p> Second step, to see connection Type, <mark>git remote -v</mark></p>
<p> Tried step,Generating a new SSH key and adding it to the ssh-agent <br>
	To generate SSH Key, Type, <mark>ssh-keygen -t rsa -b 4096 -C "msrahman048gmail"</mark> <br> and write a word such as git then <mark>Press Enter a few times.</mark>
</p>
<p><mark>Fourth step,</mark> Adding your SSH key to the ssh-agent</p>
<p>Working with SSH key passphrases: <mark>eval "$(ssh-agent -s)"</mark>
<p><mark>Five step,</mark>Adding Identity <br>
	Type <mark>ssh-add ~/.ssh/id_ed25519</mark> such as <mark>ssh-add  /e/xampp/htdocs/MY-WEB-DEVLOPMENT-NOTES/git or /f/Current-Courses/project-batch477/git or ssh-add  /e/xampp/htdocs/MY-ALL-ISLAMIC-NOTES/git </mark>
</p>
<p>
	<mark>Six step,</mark> Taking public ssh key, Type <mark>cat git.pub</mark> then to take public ssh key, we have to paste to SSH keys / Add new 
</p>
<p><mark>Finely, Commit and Push</mark>
To Commit & Push. For Commit type, <mark>git commit -m "message"</mark> <mark>git push -u origin master</mark>

<h3>Second time type, <mark> git push -u origin master</mark></h3>
<h1>OR</h1>
<p>Type
	<mark>eval "$(ssh-agent -s)"</mark>then
	<mark>ssh-add  /e/xampp/htdocs/MY-NOTES/git</mark>then
	<mark> git push -u origin master</mark>
</p>
</div>
<h3>To ,type <mark>''</mark> </h3>
<h1> <a href="https://www.youtube.com/watch?v=M-qSAdWFs9c&list=PLSNRR4BKcowBr2KbKZjKBxWb6cFsaFNSo&index=11" target="_blank">1. Git & GitHub Crash Course - Bangla Tutorial</a> </h1>
<h1><a href="https://www.youtube.com/playlist?list=PLgH5QX0i9K3qAW8DT6I0XOxC23qnA4FL-">2. Git & GitHub complete course Bangla (Beginner to Advanced)Anisul Islam</a></h1>
		<h1><a href="https://www.youtube.com/watch?v=ulQA5tjJark">3. Git & GitHub Crash Course 2023 in English</a></h1>

</div><!--End Main Content -->
    
 <!--Common footer -->

    <?php include'../../common_footer.php'?>