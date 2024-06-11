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
                sh 'sudo rm -rf /home/jenkins/CyFerContainer && git clone https://github.com/fernandonr189/CyferContainer /home/jenkins/CyferContainer && cd /home/jenkins/CyferContainer && docker-compose up'
            }
        }
    }
}