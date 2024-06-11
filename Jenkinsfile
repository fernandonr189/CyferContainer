pipeline {
    agent {
        label 'docker'
    }

    stages {
        stage('test') {
            agent {
                label 'test'
            }
            steps {
                sh 'git clone https://github.com/fernandonr189/CyferContainer /home/jenkins/CyferContainer'
                sh 'cd CyferContainer'
                sh 'docker-compose up'
            }
        }
    }
}