# Domesticated

## Installation

Require this package, with [Composer](https://getcomposer.org/), in the root directory of your project.

``` bash
$ composer require faustbrian/domesticated
```

## Usage

``` php
<?php

namespace App\Http\Controllers;

use BrianFaust\Domesticated\Http\Controllers\Controller as BaseController;
use Illuminate\Foundation\Bus\DispatchesCommands;

abstract class Controller extends BaseController
{
    use DispatchesCommands;
}
```

``` php
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

``` php
<?php

namespace App\Http\Requests;

use BrianFaust\Domesticated\Http\Requests\ApiRequest;

class StorePostRequest extends ApiRequest
{

    public function rules()
    {
        return ['title' => 'required', 'body' => 'required'];
    }
}
```

## Security

If you discover a security vulnerability within this package, please send an e-mail to Brian Faust at hello@brianfaust.de. All security vulnerabilities will be promptly addressed.

## License

The [The MIT License (MIT)](LICENSE). Please check the [LICENSE](LICENSE) file for more details.
