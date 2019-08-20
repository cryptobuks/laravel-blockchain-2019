<?php
namespace McCaulay\Blockchain\Facades;

use Illuminate\Support\Facades\Facade;

class Blockchain extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor(): string
    {
        return 'blockchain';
    }
}
