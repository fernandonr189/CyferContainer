pipeline {
    agent {
        label 'prod'
    }

    stages {
        stage('frontend') {
            agent {
                dockerfile {
                    filename 'Dockerfile'
                    label 'prod'
                    dir 'web'
                }
            }
            steps {
                sh 'echo hello world'
            }
        }
    }
}