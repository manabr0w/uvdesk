pipeline {
    agent any

    environment {
        COMPOSER_ALLOW_SUPERUSER = 1
        COMPOSER_NO_INTERACTION = 1
        GITHUB_TOKEN = credentials('GITHUB_TOKEN')
        IMAGE_NAME = 'maksfed31/uvdeskbeta'
    }

    stages {
        stage("Checkout") {
            steps {
                git branch: 'main', url: "https://github.com/manabr0w/uvdesk.git", credentialsId: 'GITHUB_TOKEN'
            }
        }

        stage("Setup Environment") {
            steps {
                sh '''
                echo "Checking PHP and Composer..."

                if ! command -v php > /dev/null; then
                    echo "Installing PHP..."
                    sudo apt-get update && sudo apt-get install -y php php-cli php-mbstring php-xml php-zip php-curl bash
                fi

                # Встановлення Composer
                if ! command -v composer > /dev/null; then
                    echo "Installing Composer..."
                    curl -sS https://getcomposer.org/installer | php
                    sudo mv composer.phar /usr/local/bin/composer
                fi

                if ! command -v docker > /dev/null; then
                    echo "Installing Docker..."
                    sudo apt-get update && sudo apt-get install -y docker.io
                    sudo systemctl start docker
                    sudo systemctl enable docker
                fi
                '''
            }
        }

        stage("Install Dependencies") {
            steps {
                sh '''
                echo "Installing dependencies..."
                composer install --no-interaction --prefer-dist --optimize-autoloader
                '''
            }
        }

        stage("Testing") {
            steps {
                sh '''
                echo "Running tests..."
                vendor/bin/phpunit tests/
                '''
            }
        }

        stage("Docker Login") {
            environment {
                DOCKER_CREDENTIALS = credentials('DOCKERHUB_CREDENTIALS')
            }
            steps {
                sh '''
                echo "Logging in to DockerHub..."
                echo $DOCKER_CREDENTIALS_PSW | docker login -u $DOCKER_CREDENTIALS_USR --password-stdin
                '''
            }
        }

        stage("Build Docker Image") {
            steps {
                sh '''
                echo "Building Docker image..."
                docker build -t ${IMAGE_NAME}:latest .
                '''
            }
        }

        stage("Push to DockerHub") {
            steps {
                sh '''
                echo "Pushing image to DockerHub..."
                docker push ${IMAGE_NAME}:latest
                '''
            }
        }
    }

    post {
        always {
            echo "Pipeline finished"
        }

        success {
            echo "SUCCESS"
        }

        failure {
            echo "CI failed"
        }
    }
}
