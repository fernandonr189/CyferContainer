pipeline {
    agent 'any'

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