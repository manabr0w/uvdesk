pipeline {
    agent any

    environment {
        COMPOSER_ALLOW_SUPERUSER = 1
        COMPOSER_NO_INTERACTION = 1
        DOCKER_CREDENTIALS = credentials('docker-hub-credentials')
        IMAGE_NAME = 'your_dockerhub_username/uvdesk'
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

        stage("Run Linter") {
            steps {
                sh '''
                echo "Running linter..."
                vendor/bin/php-cs-fixer fix --dry-run --diff
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
                echo "Logging in to DockerHub..."
                echo "${DOCKER_CREDENTIALS_USR}" | docker login -u "${DOCKER_CREDENTIALS_USR}" --password-stdin

                echo "Pushing image to DockerHub..."
                docker push ${IMAGE_NAME}:latest
                '''
            }
        }
    }

    post {
        always {
            echo "Pipeline execution completed."
        }

        success {
            echo " Pipeline completed successfully!"
        }

        failure {
            echo " Pipeline failed!"
        }
    }
}
