# Domesticated

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Build Status][ico-travis]][link-travis]
[![Coverage Status][ico-scrutinizer]][link-scrutinizer]
[![Quality Score][ico-code-quality]][link-code-quality]
[![Total Downloads][ico-downloads]][link-downloads]

## Install

Via Composer

``` bash
$ composer require draperstudio/domesticated
```

## Usage

``` php
<?php

namespace App\Http\Controllers;

use DraperStudio\Domesticated\Http\Controllers\Controller as BaseController;
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

use DraperStudio\Domesticated\Http\Requests\ApiRequest;

class StorePostRequest extends ApiRequest
{

    public function rules()
    {
        return ['title' => 'required', 'body' => 'required'];
    }
}
```

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Testing

``` bash
$ composer test
```

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) and [CONDUCT](CONDUCT.md) for details.

## Security

If you discover any security related issues, please email hello@draperstudio.tech instead of using the issue tracker.

## Credits

- [DraperStudio][link-author]
- [All Contributors][link-contributors]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/DraperStudio/domesticated.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/DraperStudio/Domesticated/master.svg?style=flat-square
[ico-scrutinizer]: https://img.shields.io/scrutinizer/coverage/g/DraperStudio/domesticated.svg?style=flat-square
[ico-code-quality]: https://img.shields.io/scrutinizer/g/DraperStudio/domesticated.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/DraperStudio/domesticated.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/DraperStudio/domesticated
[link-travis]: https://travis-ci.org/DraperStudio/Domesticated
[link-scrutinizer]: https://scrutinizer-ci.com/g/DraperStudio/domesticated/code-structure
[link-code-quality]: https://scrutinizer-ci.com/g/DraperStudio/domesticated
[link-downloads]: https://packagist.org/packages/DraperStudio/domesticated
[link-author]: https://github.com/DraperStudio
[link-contributors]: ../../contributors
