<?php

/*
 * This file is part of Domesticated.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace BrianFaust\Domesticated\Traits;

use Closure;
use Dingo\Api\Http\Response;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Support\Collection;

trait TransformerTrait
{
    /**
     * @var
     */
    protected $transformer;

    /**
     * @param Collection   $collection
     * @param null         $transformer
     * @param array        $parameters
     * @param Closure|null $after
     *
     * @return mixed
     */
    public function collection(Collection $collection, $transformer = null, array $parameters = [], Closure $after = null)
    {
        return $this->transform('collection', $collection, $transformer, $parameters, $after);
    }

    /**
     * @param $item
     * @param null         $transformer
     * @param array        $parameters
     * @param Closure|null $after
     *
     * @return mixed
     */
    public function item($item, $transformer = null, array $parameters = [], Closure $after = null)
    {
        return $this->transform('item', $item, $transformer, $parameters, $after);
    }

    /**
     * @param Paginator    $paginator
     * @param null         $transformer
     * @param array        $parameters
     * @param Closure|null $after
     *
     * @return mixed
     */
    public function paginator(Paginator $paginator, $transformer = null, array $parameters = [], Closure $after = null)
    {
        return $this->transform('paginator', $paginator, $transformer, $parameters, $after);
    }

    /**
     * @param $type
     * @param $data
     * @param $transformer
     * @param array $parameters
     * @param $after
     *
     * @return mixed
     */
    private function transform($type, $data, $transformer, array $parameters, $after)
    {
        $transformer = empty($transformer) ? new $this->transformer()
                                           : new $transformer();

        return $this->response()->{$type}($data, $transformer, $parameters, $after);
    }
}
