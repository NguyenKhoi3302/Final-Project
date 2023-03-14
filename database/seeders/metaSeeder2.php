<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use Arr;
use Str;

class metaSeeder2 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('page_meta')->insert(
            [
                    [
                        'page_id' => '999',
                        'meta_key' => 'logo_page',
                        'meta_label' => 'Chọn logo cho trang web',
                        'meta_type' => 'image',
                        'meta_value' => json_encode([
                            'url' => 'images/logo/page_logo_2.png',
                            'alt' => '',
                        ])
                    ],
                    [
                        'page_id' => '999',
                        'meta_key' => 'favicon',
                        'meta_label' => 'Chọn icon cho trang web',
                        'meta_type' => 'image',
                        'meta_value' => json_encode([
                            'url' => 'images/logo/page_logo_2.png',
                            'alt' => '',
                        ])
                    ],
                    [
                        'page_id' => '999',
                        'meta_key' => 'address_footer',
                        'meta_label' => 'Nhập địa chỉ footer',
                        'meta_type' => 'text',
                        'meta_value' => 'FPT Polytechnic - Tòa F Tân Hưng Thuận, Quận 12, Thành phố Hồ Chí Minh, Việt Nam'
                    ],
                    [
                        'page_id' => '999',
                        'meta_key' => 'phone_footer',
                        'meta_label' => 'Nhập số điện thoại footer',
                        'meta_type' => 'text',
                        'meta_value' => '0854.643.848'
                    ],
                    [
                        'page_id' => '999',
                        'meta_key' => 'fax_footer',
                        'meta_label' => 'Nhập địa chỉ fax',
                        'meta_type' => 'text',
                        'meta_value' => '0123456789'
                    ],
                    [
                        'page_id' => '999',
                        'meta_key' => 'email_footer',
                        'meta_label' => 'Nhập địa chỉ email',
                        'meta_type' => 'text',
                        'meta_value' => 'contact@beeswatch.online'
                    ],
                    [
                        'page_id' => '999',
                        'meta_key' => 'copyright',
                        'meta_label' => 'Nhập copyright',
                        'meta_type' => 'text',
                        'meta_value' => 'Copyright © 2023',
                    ],
                    [
                        'page_id' => '999',
                        'meta_key' => 'social_footer',
                        'meta_label' => 'Nhập icon mạng xã hội footer',
                        'meta_type' => 'repeater',
                        'meta_value' => json_encode([
                            [
                                [
                                    'child_key' => 'icon',
                                    'child_type' => 'image',
                                    'child_label' => 'Chọn icon',
                                    'child_value' => [
                                        'url' => 'images/icon/facebook.png',
                                        'alt' => '',
                                    ],
                                ],
                                [
                                    'child_key' => 'link',
                                    'child_type' => 'link',
                                    'child_label' => 'Nhập link',
                                    'child_value' => [
                                        'title' => 'Facebook',
                                        'url' => 'https://www.facebook.com/',
                                        'target' => '_blank',
                                    ]
                                ]
                            ],
                            [
                                [
                                    'child_key' => 'icon',
                                    'child_type' => 'image',
                                    'child_label' => 'Chọn icon',
                                    'child_value' => [
                                        'url' => 'images/icon/instagram.png',
                                        'alt' => '',
                                    ],
                                ],
                                [
                                    'child_key' => 'link',
                                    'child_type' => 'link',
                                    'child_label' => 'Nhập link',
                                    'child_value' => [
                                        'title' => 'Instagram',
                                        'url' => 'https://www.instagram.com/',
                                        'target' => '_blank',
                                    ]
                                ]
                            ],
                            [
                                [
                                    'child_key' => 'icon',
                                    'child_type' => 'image',
                                    'child_label' => 'Chọn icon',
                                    'child_value' => [
                                        'url' => 'images/icon/zalo.png',
                                        'alt' => '',
                                    ]
                                ],
                                [
                                    'child_key' => 'link',
                                    'child_type' => 'link',
                                    'child_label' => 'Nhập link',
                                    'child_value' => [
                                        'title' => 'Zalo',
                                        'url' => 'https://chat.zalo.me/',
                                        'target' => '_blank',
                                    ]
                                ]
                            ],
                            [
                                [
                                    'child_key' => 'icon',
                                    'child_type' => 'image',
                                    'child_label' => 'Chọn icon',
                                    'child_value' => [
                                        'url' => 'images/icon/youtube.png',
                                        'alt' => '',
                                    ]
                                ],
                                [
                                    'child_key' => 'link',
                                    'child_type' => 'link',
                                    'child_label' => 'Nhập link',
                                    'child_value' => [
                                        'title' => 'Youtube',
                                        'url' => 'https://www.youtube.com/',
                                        'target' => '_blank',
                                    ]
                                ]
                            ]
                        ]),
                    ],
                    [
                        'page_id' => '999',
                        'meta_key' => 'choose_pd_cat_footer',
                        'meta_label' => 'Chọn danh mục sản phẩm footer',
                        'meta_type' => 'pd_cat',
                        'meta_value' => json_encode([1,2,3,4])
                    ],
                    [
                        'page_id' => '999',
                        'meta_key' => 'choose_news_cat_footer',
                        'meta_label' => 'Chọn danh mục tin tức footer',
                        'meta_type' => 'news_cat',
                        'meta_value' => json_encode([1,2,3,4])
                    ],
                    [
                        'page_id' => '999',
                        'meta_key' => 'choose_link_footer',
                        'meta_label' => 'Nhập link footer',
                        'meta_type' => 'repeater',
                        'meta_value' => json_encode([
                            [
                                [
                                    'child_key' => 'link',
                                    'child_label' => 'Nhập link',
                                    'child_type' => 'link',
                                    'child_value'=> [
                                        'url' => 'http://127.0.0.1:8000/',
                                        'title' => 'Trang chủ',
                                        'target' => ''
                                    ]
                                ],
                            ],
                            [
                                [
                                    'child_key' => 'link',
                                    'child_label' => 'Nhập link',
                                    'child_type' => 'link',
                                    'child_value'=> [
                                        'url' => 'http://127.0.0.1:8000/contact',
                                        'title' => 'Liên hệ',
                                        'target' => '_blank'
                                    ]
                                ],
                            ],
                            [
                                [
                                    'child_key' => 'link',
                                    'child_label' => 'Nhập link',
                                    'child_type' => 'link',
                                    'child_value'=> [
                                        'url' => 'http://127.0.0.1:8000/shop',
                                        'title' => 'Sản phẩm',
                                        'target' => '_blank'
                                    ]
                                ],
                            ]
                        ])
                    ]
            ]
        );
    }
}
