# AWS Lambda PHP Hello World

The basics of using [Serverless Framework][1] for AWS Lambda PHP applications.

## Notes

1. Install Serverless Framework globally by following the [Quick Start][2]
2. Install Composer following [these instructions][4]
3. Install Composer dependencies via `./bin/composer.phar install`
4. Set up your [AWS credentials][3]
5. Write your serverless application (!) - the default is in `src/hello.handler.php`
6. Run `sls deploy` to deploy to Lambda
7. Run `sls invoke -f hello -l` to invoke your function

## PHP handler function signature

The signature for the PHP function is:

    function main($event) : array

Hello world looks like:

    <?php
    function hello($event) : array
    {
        return ["msg" => "Hello from PHP " . PHP_VERSION];
    }

[1]: https://serverless.com
[2]: https://serverless.com/framework/docs/providers/aws/guide/quick-start/
[3]: https://serverless.com/framework/docs/providers/aws/guide/credentials/
[4]: https://getcomposer.org/download/
