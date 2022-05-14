git branch new_branh_name
git branch --list
git branch 
git checkout branch_name
git push --set-upstream origin 2_first_route


create branch and swtich to it 
    - git checkout -b name
    - 

Displaying errors:
in the container class:
    $app = new \Slim\App([
        'settings' => [
            'displayErrorDetails' => true,
        ]
    ]);
More options:

$defaultSettings = [
        'httpVersion' => '1.1',
        'responseChunkSize' => 4096,
        'outputBuffering' => 'append',
        'determineRouteBeforeAppMiddleware' => false,
        'displayErrorDetails' => false,
        'addContentLengthHeader' => true,
        'routerCacheFile' => false,
    ];

