# PHP Components / Middlewares

## Utilisation

```
use PhpComponents\Middlewares\Request;
use PhpComponents\Middlewares\Dispatcher;
use PhpComponents\Middlewares\ExampleMiddleware;

require_once 'vendor/autoload.php';

$request = Request::createFromGlobals();

$dispatcher = new Dispatcher();
$dispatcher->pipe(new ExampleMiddleware());
$response = $dispatcher->dispatch($request);
```