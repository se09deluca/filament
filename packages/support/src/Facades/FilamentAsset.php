<?php

namespace Filament\Support\Facades;

use Filament\Support\Assets\AssetManager;
use Illuminate\Support\Facades\Facade;

/**
 * @method static array getAlpineComponents(array | null $packages = null)
 * @method static array getScriptData(array | null $packages = null)
 * @method static array getScripts(array | null $packages = null, bool $withCore = true)
 * @method static array getStyles(array | null $packages = null)
 * @method static void register(array $assets, string | null $package = null)
 * @method static void registerScriptData(array $data, string | null $package = null)
 * @method static string renderScripts(array | null $packages = null, bool $withCore = true)
 * @method static string renderStyles(array | null $packages = null)
 *
 * @see AssetManager
 */
class FilamentAsset extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return AssetManager::class;
    }
}