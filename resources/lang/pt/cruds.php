<?php

return [
    'userManagement' => [
        'title'          => 'Gestão de Utilizadores',
        'title_singular' => 'Gestão de Utilizadores',
    ],
    'permission' => [
        'title'          => 'Permissões',
        'title_singular' => 'Permissão',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'title'             => 'Title',
            'title_helper'      => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'role' => [
        'title'          => 'Grupos',
        'title_singular' => 'Função',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => ' ',
            'title'              => 'Title',
            'title_helper'       => ' ',
            'permissions'        => 'Permissions',
            'permissions_helper' => ' ',
            'created_at'         => 'Created at',
            'created_at_helper'  => ' ',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => ' ',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => ' ',
        ],
    ],
    'user' => [
        'title'          => 'Utilizadores',
        'title_singular' => 'Utilizador',
        'fields'         => [
            'id'                           => 'ID',
            'id_helper'                    => ' ',
            'name'                         => 'Name',
            'name_helper'                  => ' ',
            'email'                        => 'Email',
            'email_helper'                 => ' ',
            'email_verified_at'            => 'Email verified at',
            'email_verified_at_helper'     => ' ',
            'password'                     => 'Password',
            'password_helper'              => ' ',
            'roles'                        => 'Roles',
            'roles_helper'                 => ' ',
            'remember_token'               => 'Remember Token',
            'remember_token_helper'        => ' ',
            'created_at'                   => 'Created at',
            'created_at_helper'            => ' ',
            'updated_at'                   => 'Updated at',
            'updated_at_helper'            => ' ',
            'deleted_at'                   => 'Deleted at',
            'deleted_at_helper'            => ' ',
            'two_factor'                   => 'Two-Factor Auth',
            'two_factor_helper'            => ' ',
            'two_factor_code'              => 'Two-factor code',
            'two_factor_code_helper'       => ' ',
            'two_factor_expires_at'        => 'Two-factor expires at',
            'two_factor_expires_at_helper' => ' ',
            'provider'                     => 'Provider',
            'provider_helper'              => ' ',
            'provider_id'                   => 'Provider ID',
            'provider_id_helper'            => ' ',
        ],
    ],
    'category' => [
        'title'          => 'Categories',
        'title_singular' => 'Category',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'name'              => 'Name',
            'name_helper'       => ' ',
            'slug'              => 'Slug',
            'slug_helper'       => ' ',
            'image'             => 'Image',
            'image_helper'      => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'resource' => [
        'title'          => 'Resources',
        'title_singular' => 'Resource',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'name'              => 'Name',
            'name_helper'       => ' ',
            'phone_no'          => 'Phone No',
            'phone_no_helper'   => ' ',
            'email'             => 'Email',
            'email_helper'      => ' ',
            'address'           => 'Address',
            'address_helper'    => ' ',
            'details'           => 'Details',
            'details_helper'    => ' ',
            'note'              => 'Note',
            'note_helper'       => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
            'city'              => 'City',
            'city_helper'       => ' ',
            'up_vote'           => 'Up Vote',
            'up_vote_helper'    => ' ',
            'down_vote'         => 'Down Vote',
            'down_vote_helper'  => ' ',
            'url'               => 'Url',
            'url_helper'        => ' ',
            'category'          => 'Category',
            'category_helper'   => ' ',
            'country'           => 'Country',
            'country_helper'    => ' ',
            'state'             => 'State',
            'state_helper'      => ' ',
            'category'          => 'Category',
            'category_helper'   => ' ',
        ],
    ],
    'city' => [
        'title'          => 'City',
        'title_singular' => 'City',
        'fields'         => [
            'id'                  => 'ID',
            'id_helper'           => ' ',
            'name'                => 'Name',
            'name_helper'         => ' ',
            'population'          => 'Population',
            'population_helper'   => ' ',
            'created_at'          => 'Created at',
            'created_at_helper'   => ' ',
            'updated_at'          => 'Updated at',
            'updated_at_helper'   => ' ',
            'deleted_at'          => 'Deleted at',
            'deleted_at_helper'   => ' ',
            'state_code'          => 'State Code',
            'state_code_helper'   => ' ',
            'latitude'            => 'Latitude',
            'latitude_helper'     => ' ',
            'longitude'           => 'Longitude',
            'longitude_helper'    => ' ',
            'country_code'        => 'Country Code',
            'country_code_helper' => ' ',
        ],
    ],
    'state' => [
        'title'          => 'State',
        'title_singular' => 'State',
        'fields'         => [
            'id'                  => 'ID',
            'id_helper'           => ' ',
            'name'                => 'Name',
            'name_helper'         => ' ',
            'state_code'          => 'State Code',
            'state_code_helper'   => ' ',
            'created_at'          => 'Created at',
            'created_at_helper'   => ' ',
            'updated_at'          => 'Updated at',
            'updated_at_helper'   => ' ',
            'deleted_at'          => 'Deleted at',
            'deleted_at_helper'   => ' ',
            'city'                => 'City',
            'city_helper'         => ' ',
            'country_code'        => 'Country Code',
            'country_code_helper' => ' ',
            'latitude'            => 'Latitude',
            'latitude_helper'     => ' ',
            'longitude'           => 'Longitude',
            'longitude_helper'    => ' ',
        ],
    ],
    'worldinfo' => [
        'title'          => 'World info',
        'title_singular' => 'World info',
    ],
    'country' => [
        'title'          => 'Countries',
        'title_singular' => 'Country',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'name'              => 'Name',
            'name_helper'       => ' ',
            'phone_code'        => 'Phone Code',
            'phone_code_helper' => ' ',
            'region'            => 'Region',
            'region_helper'     => ' ',
            'subregion'         => 'Subregion',
            'subregion_helper'  => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
            'state'             => 'State',
            'state_helper'      => ' ',
            'code'              => 'Code',
            'code_helper'       => ' ',
            'capital'           => 'Capital',
            'capital_helper'    => ' ',
        ],
    ],
    'newReq' => [
        'title'          => 'New Request',
        'title_singular' => 'New Request',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'country'           => 'Country',
            'country_helper'    => ' ',
            'state'             => 'State',
            'state_helper'      => ' ',
            'city'              => 'City',
            'city_helper'       => ' ',
            'extra'             => 'Extra',
            'extra_helper'      => ' ',
            'status'            => 'Status',
            'status_helper'     => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
            'catogary'          => 'Catogary',
            'catogary_helper'   => ' ',
        ],
    ],
    'subCategory' => [
        'title'          => 'Sub Categories',
        'title_singular' => 'Sub Category',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'category'          => 'Category',
            'category_helper'   => ' ',
            'name'              => 'Name',
            'name_helper'       => ' ',
            'extra'             => 'Extra',
            'extra_helper'      => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
];
