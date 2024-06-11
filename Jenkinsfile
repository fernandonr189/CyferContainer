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
                sh 'rm -rf /home/jenkins/CyFerContainer/*'
                sh 'rm -rf /home/jenkins/CyFerContainer/.*'
                sh 'git clone https://github.com/fernandonr189/jenkins-test /home/jenkins/CyFerContainer'
                sh 'cd /home/jenkins/CyFerContainer'
                sh 'docker-compose up -d'
            }
        }
        stage('prod') {
            agent {
                dockerfile {
                    dir 'web'
                    label 'prod'
                    filename 'Dockerfile'
                }
            }
            steps {
                sh 'echo docker image built in prod'
            }
        }
    }
}