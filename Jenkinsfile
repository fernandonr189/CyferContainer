pipeline {
    agent {
        label 'docker'
    }

    stages {
        stage('test') {
            agent {
                dockerfile {
                    dir 'web'
                    label 'test'
                    filename 'Dockerfile'
                }
            }
            steps {
                sh 'echo docker image built'
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