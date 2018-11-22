<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App{
/**
 * App\User
 *
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property string $email
 * @property string|null $email_verified_at
 * @property int $id
 * @property string $name
 * @property string $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

namespace Timbioz\Helper\Models{
/**
 * Timbioz\Helper\Models\Tag
 *
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property string|null $description
 * @property int $id
 * @property int|null $modified_id
 * @property int|null $parent_id
 * @property string|null $seo_description
 * @property string|null $seo_title
 * @property string|null $short_description
 * @property string $slug
 * @property string|null $title
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int|null $user_id
 * @method static \Illuminate\Database\Eloquent\Builder|\Timbioz\Helper\Models\Tag newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Timbioz\Helper\Models\Tag newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Timbioz\Helper\Models\Tag query()
 * @method static \Illuminate\Database\Eloquent\Builder|\Timbioz\Helper\Models\Tag whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Timbioz\Helper\Models\Tag whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Timbioz\Helper\Models\Tag whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Timbioz\Helper\Models\Tag whereModifiedId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Timbioz\Helper\Models\Tag whereParentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Timbioz\Helper\Models\Tag whereSeoDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Timbioz\Helper\Models\Tag whereSeoTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Timbioz\Helper\Models\Tag whereShortDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Timbioz\Helper\Models\Tag whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Timbioz\Helper\Models\Tag whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Timbioz\Helper\Models\Tag whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Timbioz\Helper\Models\Tag whereUserId($value)
 */
	class Tag extends \Eloquent {}
}

