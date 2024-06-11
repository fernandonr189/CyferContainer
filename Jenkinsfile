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
        }
    }
}