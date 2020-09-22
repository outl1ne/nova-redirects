<?php

namespace OptimistDigital\NovaRedirects\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Resource;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Select;

class Redirect extends Resource {

    public static $model = 'OptimistDigital\NovaRedirects\Models\Redirect';

    /**
     * Get the fields displayed by the resource.
     *
     * @param  \Illuminate\Http\Request $request
     * @return array
     */
    public function fields(Request $request)
    {
        return [
            ID::make(),
            Text::make('From', 'from_url')->creationRules('required', 'unique:nova_redirects,from_url')->updateRules('required', 'unique:nova_redirects,from_url,{{resourceId}}'),
            Text::make('To', 'to_url')->rules('required'),
            Select::make('Status', 'status_code')->options([
                '301' => '301 (Moved Permanently)',
                '302' => '302 (Found)',
                '303' => '303 (See Other)',
                '304' => '304 (Not Modified)',
                '307' => '307 (Temporary Redirect)',
                '308' => '308 (Permanent Redirect)'
            ])->rules('required')->withMeta(['value' => $this->status_code ?: '302'])
        ];
    }

}
