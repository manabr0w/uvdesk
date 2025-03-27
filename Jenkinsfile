pipeline {
    agent {
        docker {
            image 'docker:24.0'
            args '--privileged'
        }
    }

    environment {
        COMPOSER_ALLOW_SUPERUSER = 1
        COMPOSER_NO_INTERACTION = 1
        GITHUB_REPO = 'manabr0w/uvdesk'
        GITHUB_TOKEN = credentials('GITHUB_TOKEN')
        DOCKER_USER = credentials('DOCKERHUB_USERNAME')
        DOCKER_PASS = credentials('DOCKERHUB_PASSWORD')
        IMAGE_NAME = "manabr0w/uvdesk"
        IMAGE_TAG = "latest"
    }

    stages {
        stage("Checkout") {
            steps {
                echo "Cloning repository..."
                git branch: 'main', url: 'https://github.com/manabr0w/uvdesk', credentialsId: 'GITHUB_TOKEN'
            }
        }

        stage("Setup environment") {
            steps {
                sh '''
                echo "Setting up PHP and Composer..."
                apk add --no-cache php php-cli php-mbstring php-xml php-zip php-openssl php-phar curl bash
                if ! command -v composer > /dev/null; then
                    curl -sS https://getcomposer.org/installer | php
                    mv composer.phar /usr/local/bin/composer
                fi
                composer --version
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

        stage("Run Tests") {
            steps {
                sh '''
                echo "Running tests..."
                vendor/bin/phpunit tests/
                '''
            }
        }

        stage("Docker Login") {
            steps {
                sh '''
                echo "Logging in to DockerHub..."
                echo $DOCKER_PASS | docker login -u $DOCKER_USER --password-stdin
                '''
            }
        }

        stage("Build Docker Image") {
            steps {
                sh '''
                echo "Building Docker Image..."
                docker build -t $IMAGE_NAME:$IMAGE_TAG .
                '''
            }
        }

        stage("Push Docker Image") {
            steps {
                sh '''
                echo "Pushing Docker Image to DockerHub..."
                docker push $IMAGE_NAME:$IMAGE_TAG
                '''
            }
        }
    }

    post {
        always {
            echo "Pipeline execution completed."
        }
        success {
            echo " Build and push succeeded!"
        }
        failure {
            echo " Build failed. Check logs for errors."
        }
    }
}
