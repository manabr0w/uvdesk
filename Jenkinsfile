pipeline {
    agent any

    environment {
        COMPOSER_ALLOW_SUPERUSER = 1
        COMPOSER_NO_INTERACTION = 1
        GITHUB_REPO = 'manabr0w/uvdesk'
        GITHUB_TOKEN = credentials('GITHUB_TOKEN')
    }

    stages{
        stage("Checkout") {
            steps {
                git branch: 'main', url: 'https://github.com/manabr0w/uvdesk', credentialsId: 'GITHUB_TOKEN'
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

        stage("Create GitHub Release") {
            steps {
                script {
                    def latestTag = sh(script: "git describe --tags --abbrev=0 || echo v0.0.0", returnStdout: true).trim()
                    def newVersion = latestTag.replaceAll("v", "").tokenize('.').collect{ it as int }
                    newVersion[-1] += 1
                    def newTag = "v${newVersion.join('.')}"

                    echo "Latest tag: ${latestTag}"
                    echo "New tag: ${newTag}"

                    sh "git tag ${newTag}"
                    sh "git push origin ${newTag}"

                    def releaseData = """
                    {
                        "tag_name": "${newTag}",
                        "target_commitish": "main",
                        "name": "${newTag}",
                        "body": "Release ${newTag}",
                        "draft": false,
                        "prerelease": false
                    }
                    """

                    sh """
                    curl -X POST -H "Authorization: token ${GITHUB_TOKEN}" \
                         -H "Accept: application/vnd.github.v3+json" \
                         https://api.github.com/repos/${GITHUB_REPO}/releases \
                         -d '${releaseData}'
                    """
                }
            }
        }

    }

    post{
        always {
            echo "Pipline finished"
        }

        success {
            echo "CI finished succesfull"
        }

        failure {
            echo "CI failed succesfull"
        }
    }
}