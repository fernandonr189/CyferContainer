pipeline {
    agent {
        label "docker"
    }

    stages {
        stage('test') {
            agent {
                dockerfile {
                    filename 'Dockerfile'
                    label 'test'
                    dir 'web'
                }
            }
            steps {
                sh 'echo hello world'
            }
        }
    }
}