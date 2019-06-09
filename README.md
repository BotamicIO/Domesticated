# Domesticated

[![Build Status](https://img.shields.io/travis/artisanry/Domesticated/master.svg?style=flat-square)](https://travis-ci.org/artisanry/Domesticated)
[![PHP from Packagist](https://img.shields.io/packagist/php-v/artisanry/domesticated.svg?style=flat-square)]()
[![Latest Version](https://img.shields.io/github/release/artisanry/Domesticated.svg?style=flat-square)](https://github.com/artisanry/Domesticated/releases)
[![License](https://img.shields.io/packagist/l/artisanry/Domesticated.svg?style=flat-square)](https://packagist.org/packages/artisanry/Domesticated)

## Installation

Require this package, with [Composer](https://getcomposer.org/), in the root directory of your project.

```bash
$ composer require artisanry/domesticated
```

## Usage

```php
<?php

namespace App\Http\Controllers;

use Artisanry\Domesticated\Http\Controllers\Controller as BaseController;
use Illuminate\Foundation\Bus\DispatchesCommands;

abstract class Controller extends BaseController
{
    use DispatchesCommands;
}
```

```php
<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Repositories\PostRepository;
use App\Transformers\PostTransformer;
use Illuminate\Http\Request;

class PostController extends Controller
{
    protected $transformer = PostTransformer::class;

    public function __construct(PostRepository $posts)
    {
        $this->posts = $posts;
    }

    public function index()
    {
        if ($this->authenticated()) {
            $posts = $this->posts->findAllPaginatedForUser($this->getCurrentUser());
        } else {
            $posts = $this->posts->findAllPaginated();
        }

        return $this->paginator($posts);
    }

    public function create(StorePostRequest $request)
    {
        $post = $this->posts->create($request->all());

        return $this->created(route('post.show', $post->slug));
    }

    public function read($id)
    {
        $post = $this->posts->findById($id);

        if (empty($post)) {
            return $this->errorNotFound();
        }

        return $this->item($post);
    }

    public function update($id, UpdatePostRequest $request)
    {
        $post = $this->posts->findById($id);

        if (empty($post)) {
            return $this->errorNotFound();
        }

        if (!$this->isManageable($post, 'author_id')) {
            return $this->errorUnauthorized();
        }

        $post->update($request->all());

        return $this->updated();
    }

    public function delete($id, Request $request)
    {
        $post = $this->posts->findById($id);

        if (empty($post)) {
            return $this->errorNotFound();
        }

        if (!$this->isManageable($post, 'author_id')) {
            return $this->errorUnauthorized();
        }

        $post->delete();

        return $this->deleted();
    }
}
```

```php
<?php

namespace App\Http\Requests;

use Artisanry\Domesticated\Http\Requests\ApiRequest;

class StorePostRequest extends ApiRequest
{

    public function rules()
    {
        return ['title' => 'required', 'body' => 'required'];
    }
}
```

## Testing

```bash
$ phpunit
```

## Security

If you discover a security vulnerability within this package, please send an e-mail to hello@basecode.sh. All security vulnerabilities will be promptly addressed.

## Credits

-   [Brian Faust](https://github.com/artisanry)
-   [All Contributors](../../contributors)

## License

Mozilla Public License Version 2.0 ([MPL-2.0](./LICENSE)).
