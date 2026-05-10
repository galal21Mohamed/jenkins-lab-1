# Jenkins_Lab_1
---
## Lab 1 – CI Foundation: Unit Tests, Webhooks & Secrets
## Description
You have a simple PHP web app ( with HTML/CSS/JS frontend and PHP backend)
The code is in a public GitHub repository. You will configure Jenkins to:
- Trigger a build automatically when code is pushed (webhook).
- Run a unit test (PHPUnit) against the PHP logic.
- Store sensitive data (GitHub personal access token) as a secret in Jenkins.
- Fail the build if tests fail.
## Goal of this lab:
1. Create a declarative pipeline (Jenkinsfile)
2. Configure a GitHub webhook to trigger builds on push to a public repo
3. Write and execute a unit test
4. Store and use a GitHub token as a secret in Jenkins
5. Understand build triggers, pipeline syntax, and console output

---
## Tasks: 
1. Prepare the public GitHub repository
2. Install PHPUnit on the Jenkins server
3. Create a Jenkins Pipeline job
4. Store GitHub Personal Access Token in Jenkins credentials (ID: github-token) with scope “Global”.
5. Configure GitHub webhook
6. Write the Jenkinsfile
7. Trigger the build by pushing a commit that breaks a unit test, then fix it and push again to see the automatic build

--- 

#                                          **Task Answer**
1. clone this repo $ git clone 