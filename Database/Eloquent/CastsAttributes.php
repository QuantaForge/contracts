<?php

namespace QuantaForge\Contracts\Database\Eloquent;

use QuantaForge\Database\Eloquent\Model;

/**
 * @template TGet
 * @template TSet
 */
interface CastsAttributes
{
    /**
     * Transform the attribute from the underlying model values.
     *
     * @param  \QuantaForge\Database\Eloquent\Model  $model
     * @param  string  $key
     * @param  mixed  $value
     * @param  array<string, mixed>  $attributes
     * @return TGet|null
     */
    public function get(Model $model, string $key, mixed $value, array $attributes);

    /**
     * Transform the attribute to its underlying model values.
     *
     * @param  \QuantaForge\Database\Eloquent\Model  $model
     * @param  string  $key
     * @param  TSet|null  $value
     * @param  array<string, mixed>  $attributes
     * @return mixed
     */
    public function set(Model $model, string $key, mixed $value, array $attributes);
}
