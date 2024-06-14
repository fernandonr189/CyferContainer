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
                sh 'rm -rf /home/$USER/CyFerContainer/*'
                sh 'rm -rf /home/$USER/CyFerContainer/.*'
                sh 'git clone https://github.com/fernandonr189/CyferContainer.git /home/$USER/CyFerContainer'
                sh 'cd /home/$USER/CyFerContainer'
                sh 'docker-compose up -d'
            }
        }
        stage('deploying in production') {
            agent {
                label 'prod'
            }
            steps {
                sh 'rm -rf /home/$USER/CyFerContainer/*'
                sh 'rm -rf /home/$USER/CyFerContainer/.*'
                sh 'git clone https://github.com/fernandonr189/CyferContainer.git /home/$USER/CyFerContainer'
                sh 'cd /home/$USER/CyFerContainer'
                sh 'docker-compose up -d'
                sh 'echo done!'
            }
        }
    }
}