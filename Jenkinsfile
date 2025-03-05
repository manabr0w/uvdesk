pipeline {
    agent any

    environment {
        COMPOSER_ALLOW_SUPERUSER = 1
        COMPOSER_NO_INTERACTION = 1
    }

    stages{
        stage("Checkout") {
            steps {
                git branch: 'main', url: 'https://github.com/manabr0w/uvdesk.git'
            }

        }

        stage("Setup envirement") {
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

        stage("Install dependencies") {
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
    }

    post{
        success {
            echo "CI finished succesfull"
        }
    }
}