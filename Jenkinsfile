pipeline {
    agent any

    environment {
        COMPOSER_ALLOW_SUPERUSER = 1
        COMPOSER_NO_INTERACTION = 1
        PATH = "$HOME/.composer/vendor/bin:$PATH"
    }

    stages {
        stage("Checkout") {
            steps {
                git branch: 'main', url: 'https://github.com/manabr0w/uvdesk.git'
            }
        }

        stage("Setup Environment") {
            steps {
                sh '''
                echo "Checking PHP and Composer..."
                if ! command -v php > /dev/null; then
                    echo "Installing PHP..."
                    sudo apt update && sudo apt install -y php php-cli php-mbstring unzip curl
                fi

                if ! command -v composer > /dev/null; then
                    echo "Installing Composer..."
                    curl -sS https://getcomposer.org/installer | php
                    sudo mv composer.phar /usr/local/bin/composer
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

        stage("Install Linter") {
            steps {
                sh '''
                if ! command -v phpcs > /dev/null; then
                    echo "Installing PHP_CodeSniffer..."
                    composer global require squizlabs/php_codesniffer
                fi
                export PATH="$HOME/.composer/vendor/bin:$PATH"
                '''
            }
        }

        stage("Testing") {
            steps {
                sh '''
                echo "Running tests..."
                if [ -d "tests" ]; then
                    vendor/bin/phpunit tests/
                else
                    vendor/bin/phpunit
                fi
                '''
            }
        }

        stage("Running Linter") {
            steps {
                sh '''
                echo "Running PHP_CodeSniffer..."
                phpcs --standard=PSR12 src/
                '''
            }
        }
    }

    post {
        always {
            echo "Pipeline finished"
        }

        success {
            echo "CI finished successfully"
        }

        failure {
            echo "CI failed"
        }
    }
}
