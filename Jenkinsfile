pipeline {
    agent {
        label 'docker'
    }

    stages {
        stage('deploying in test') {
            agent {
                label 'test'
            }
            steps {
                sh 'rm -rf /home/jenkins-agent/CyFerContainer/*'
                sh 'rm -rf /home/jenkins-agent/CyFerContainer/.*'
                sh 'git clone https://github.com/fernandonr189/jenkins-test /home/jenkins-agent/CyFerContainer'
                sh 'cd /home/jenkins-agent/CyFerContainer'
                sh 'docker-compose up -d'
            }
        }
        stage('deploying in production') {
            agent {
                label 'prod'
            }
            steps {
                sh 'rm -rf /home/jenkins-agent/CyFerContainer/*'
                sh 'rm -rf /home/jenkins-agent/CyFerContainer/.*'
                sh 'git clone https://github.com/fernandonr189/jenkins-test /home/jenkins/CyFerContainer'
                sh 'cd /home/jenkins-agent/CyFerContainer'
                sh 'docker-compose up -d'
            }
        }
    }
}