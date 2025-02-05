<?php

namespace Boydreams\LaravelNovaPermission;

use Laravel\Nova\Resource;

class Permission extends Resource
{
	use PermissionResourceTrait;

	/**
	 * The model the resource corresponds to.
	 *
	 * @var string
	 */
    public static $model = \App\Permission::class;

	/**
	 * The single value that should be used to represent the resource when being displayed.
	 *
	 * @var string
	 */
	public static $title = 'name';

	/**
	 * The columns that should be searched.
	 *
	 * @var array
	 */
	public static $search = [
		'name',
	];

	/**
	 * Indicates if the resource should be displayed in the sidebar.
	 *
	 * @var bool
	 */
	public static $displayInNavigation = false;

	/**
	 * Get the displayable label of the resource.
	 *
	 * @return string
	 */
	public static function label()
	{
		return __('laravel-nova-permission::resources.Permissions');
	}

	/**
	 * Get the displayable singular label of the resource.
	 *
	 * @return string
	 */
	public static function singularLabel()
	{
		return __('laravel-nova-permission::resources.Permission');
	}
}
