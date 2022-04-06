<?php

return [
    'userManagement'    => [
        'title'          => 'Ajustes',
        'title_singular' => 'Ajustes',
    ],
    'permission'        => [
        'title'          => 'Permisos',
        'title_singular' => 'Permiso',
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
    'role'              => [
        'title'          => 'Roles',
        'title_singular' => 'Rol',
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
    'user'              => [
        'title'          => 'Usuarios',
        'title_singular' => 'Usuario',
        'fields'         => [
            'id'                       => 'ID',
            'id_helper'                => ' ',
            'name'                     => 'Name',
            'name_helper'              => ' ',
            'email'                    => 'Email',
            'email_helper'             => ' ',
            'email_verified_at'        => 'Email verified at',
            'email_verified_at_helper' => ' ',
            'password'                 => 'Password',
            'password_helper'          => ' ',
            'roles'                    => 'Roles',
            'roles_helper'             => ' ',
            'remember_token'           => 'Remember Token',
            'remember_token_helper'    => ' ',
            'created_at'               => 'Created at',
            'created_at_helper'        => ' ',
            'updated_at'               => 'Updated at',
            'updated_at_helper'        => ' ',
            'deleted_at'               => 'Deleted at',
            'deleted_at_helper'        => ' ',
        ],
    ],
    'productManagement' => [
        'title'          => 'Gestion de Productos',
        'title_singular' => 'Gestion de Producto',
    ],
    'productCategory'   => [
        'title'          => 'Categorias',
        'title_singular' => 'Categoria',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'name'              => 'Name',
            'name_helper'       => 'Nombre de la Categoria',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated At',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted At',
            'deleted_at_helper' => ' ',
        ],
    ],
    'productTag'        => [
        'title'          => 'Etiquetas',
        'title_singular' => 'Etiqueta',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'name'              => 'Name',
            'name_helper'       => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated At',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted At',
            'deleted_at_helper' => ' ',
            'imagen_tag'        => 'Imagen Tag',
            'imagen_tag_helper' => ' ',
            'tag_link'          => 'Tag Link',
            'tag_link_helper'   => ' ',
            'tag_title'         => 'Tag Title',
            'tag_title_helper'  => 'atributo title de la imagen',
            'tag_alt'           => 'Tag Alt',
            'tag_alt_helper'    => 'Atributo alt de la imagen',
        ],
    ],
    'product'           => [
        'title'          => 'Productos',
        'title_singular' => 'Producto',
        'fields'         => [
            'id'                              => 'ID',
            'id_helper'                       => ' ',
            'name'                            => 'Name',
            'name_helper'                     => ' ',
            'description'                     => 'Description',
            'description_helper'              => ' ',
            'price'                           => 'Price',
            'price_helper'                    => ' ',
            'category'                        => 'Categories',
            'category_helper'                 => ' ',
            'photo'                           => 'Photo',
            'photo_helper'                    => ' ',
            'created_at'                      => 'Created at',
            'created_at_helper'               => ' ',
            'updated_at'                      => 'Updated At',
            'updated_at_helper'               => ' ',
            'deleted_at'                      => 'Deleted At',
            'deleted_at_helper'               => ' ',
            'marca'                           => 'Marca',
            'marca_helper'                    => ' ',
            'photo_reverso'                   => 'Photo Reverso',
            'photo_reverso_helper'            => ' ',
            'tipo_presentacion'               => 'Tipo Presentacion',
            'tipo_presentacion_helper'        => ' ',
            'envase'                          => 'Envase',
            'envase_helper'                   => 'Info. Despacho',
            'cantidad'                        => 'Cantidad',
            'cantidad_helper'                 => 'Info. Despacho',
            'largo'                           => 'Largo',
            'largo_helper'                    => 'dimensiones',
            'ancho'                           => 'Ancho',
            'ancho_helper'                    => 'dimensiones',
            'peso'                            => 'Peso',
            'peso_helper'                     => 'Info. Despacho',
            'visible_home'                    => 'Producto Destacado',
            'visible_home_helper'             => 'Producto Destacado',
            'descripcion_home'                => 'Descripcion Home',
            'descripcion_home_helper'         => 'descripcion del producto destacado en el carousel',
            'stock'                           => 'Stock',
            'stock_helper'                    => ' ',
            'alto'                            => 'Alto',
            'alto_helper'                     => 'dimensiones',
            'image_frontal_link'              => 'Image Frontal Link',
            'image_frontal_link_helper'       => ' ',
            'image_frontal_title'             => 'Image Frontal Title',
            'image_frontal_title_helper'      => ' ',
            'image_frontal_alt'               => 'Image Frontal Alt',
            'image_frontal_alt_helper'        => ' ',
            'image_reverso_link'              => 'Tabla Nutricional Link',
            'image_reverso_link_helper'       => ' ',
            'image_reverso_title'             => 'Image Reverso Title',
            'image_reverso_title_helper'      => ' ',
            'image_reverso_alt'               => 'Image Reverso Alt',
            'image_reverso_alt_helper'        => ' ',
            'photo_min_frontal'               => 'Photo Min Frontal',
            'photo_min_frontal_helper'        => ' ',
            'photo_min_reverso'               => 'Photo Min Reverso',
            'photo_min_reverso_helper'        => ' ',
            'photo_min_frontal_link'          => 'Forma de la Tabla nutricional ',
            'photo_min_frontal_link_helper'   => ' ',
            'photo_min_reverso_link'          => 'SEO Title',
            'photo_min_reverso_link_helper'   => ' ',
            'etiquetas'                       => 'Etiquetas',
            'etiquetas_helper'                => ' ',
            'slug'                            => 'Slug',
            'slug_helper'                     => 'URL del producto',
            'photo_link_reverso_title'        => 'SEO META Descripcion',
            'photo_link_reverso_title_helper' => ' ',
            'photo_link_reverso_alt'          => 'Photo Link Reverso Alt',
            'photo_link_reverso_alt_helper'   => ' ',
            'photo_link_frontal_title'        => 'Photo Link Frontal Title',
            'photo_link_frontal_title_helper' => ' ',
            'photo_link_frontal_alt'          => 'Photo Link Frontal Alt',
            'photo_link_frontal_alt_helper'   => ' ',
        ],
    ],
    'contacto'          => [
        'title'          => 'Contacto',
        'title_singular' => 'Contacto',
        'fields'         => [
            'id'                          => 'ID',
            'id_helper'                   => ' ',
            'name'                        => 'Name',
            'name_helper'                 => 'Nombre o razon social',
            'email'                       => 'Email',
            'email_helper'                => ' ',
            'telefono'                    => 'Telefono',
            'telefono_helper'             => ' ',
            'info_conocer'                => 'Como nos Conoce',
            'info_conocer_helper'         => ' ',
            'consulta'                    => 'Consulta',
            'consulta_helper'             => ' ',
            'descripcion_consulta'        => 'Descripcion Consulta',
            'descripcion_consulta_helper' => ' ',
            'created_at'                  => 'Created at',
            'created_at_helper'           => ' ',
            'updated_at'                  => 'Updated at',
            'updated_at_helper'           => ' ',
            'deleted_at'                  => 'Deleted at',
            'deleted_at_helper'           => ' ',
        ],
    ],
    'marca'             => [
        'title'          => 'Marcas',
        'title_singular' => 'Marca',
        'fields'         => [
            'id'                  => 'ID',
            'id_helper'           => ' ',
            'name'                => 'Name',
            'name_helper'         => 'Nombre de la marca',
            'descripcion'         => 'Descripcion',
            'descripcion_helper'  => ' ',
            'image'               => 'Image',
            'image_helper'        => ' ',
            'image_link'          => 'Image Link',
            'image_link_helper'   => ' ',
            'image_title'         => 'Image Title',
            'image_title_helper'  => ' ',
            'image_alt'           => 'Image Alt',
            'image_alt_helper'    => ' ',
            'slug'                => 'Slug',
            'slug_helper'         => ' ',
            'visible_home'        => 'Visible Home',
            'visible_home_helper' => ' ',
            'created_at'          => 'Created at',
            'created_at_helper'   => ' ',
            'updated_at'          => 'Updated at',
            'updated_at_helper'   => ' ',
            'deleted_at'          => 'Deleted at',
            'deleted_at_helper'   => ' ',
        ],
    ],
];