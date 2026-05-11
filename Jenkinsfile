pipeline {
    agent { label 'built-in' }

    environment {
        GITHUB_TOKEN = credentials('github-token')
    }

    stages {
        stage('Checkout') {
            steps {
                checkout scm
            }
        }

        stage('Run Unit Tests') {
            steps {
                sh 'phpunit --bootstrap src/OrderProcessor.php tests/OrderTest.php'
            }
        }
    }

    post {
        success {
            echo 'All tests passed! Build successful.'
        }
        failure {
            echo 'Tests failed! Build failed.'
        }
    }
}
