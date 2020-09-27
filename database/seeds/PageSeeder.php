<?php

use Illuminate\Database\Seeder;
use App\Page;
use App\Block;
class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $page = Page::create([
            'name'      => 'LandingPage',
            'slug'      => 'welcome',
            'description' => 'Pagina de Destino para AppConta v.10',
            'direction' => 'welcome',
            'user_id' => 1,
            'details'   => json_encode([
                    'title' => [
                        'type' => 'text',
                        'name' => 'title',
                        'label' => 'Titulo',
                        'value' => 'AppConta v1.0',
                        'width' => 6
                    ],
                    'image1' => [
                        'type' => 'image',
                        'name' => 'image1',
                        'label' => 'Imagen (600x670)',
                        'value' => 'myimage.png',
                        'width' => 6
                    ],
                    'button_text1' => [
                        'type' => 'text',
                        'name' => 'button_text1',
                        'label' => 'Texto Boton #1',
                        'value' => 'Solicitar Demo',
                        'width' => 6
                    ],
                    'button_link1' => [
                        'type' => 'text',
                        'name' => 'button_link1',
                        'label' => 'Link Text #1',
                        'value' => '#',
                        'width' => 6
                    ],
                    'button_text2' => [
                        'type' => 'text',
                        'name' => 'button_text2',
                        'label' => 'Texto Boton #2',
                        'value' => 'Ver Precios',
                        'width' => 6
                    ],
                    'button_link2' => [
                        'type' => 'text',
                        'name' => 'button_link2',
                        'label' => 'Link Text #2',
                        'value' => '#pricing',
                        'width' => 6
                    ],
                    'description_data' => [
                        'type' => 'rich_text_box',
                        'name' => 'description_data',
                        'label' => 'Descripcion',
                        'value' => 'SER RECONOCIDOS POR NUESTRA INNOVACIÓN Y SER LA EMPRESA LÍDER EN SERVICIOS DE ATENCIÓN MÉDICA A NIVEL NACIONAL E INTERNACIONAL.',
                        'width' => 12
                    ]
                ])
            ]);



        //-----------------------
            $page = Page::create([
                'name'        =>  'Politicas & Privacidad',
                'slug'        =>  'policies',
                'user_id'     =>  1,
                'direction'   =>  'pages.generica',
                'description' =>  'Pagina para las politicas & seguridad'
            ]);
            $count = 1;
            Block::create([
                'name'        => 'body',
                'title'       => 'Blocke Generico',
                'description' => 'Blocke Generico para Paginas',
                'page_id'     => $page->id,
                'position'    => $count++,
                'type'        => 'dinamyc-data',
                'details'     => json_encode([
                    'body' => [
                        'type'   => 'rich_text_box',
                        'name'   => 'body',
                        'label'  => 'Editor HTML',
                        'value'  => null,
                        'width'  => 12
                    ]
                ])
            ]);

            $page = Page::create([
                'name'        =>  'Terminos & Condiones',
                'slug'        =>  'terms',
                'user_id'     =>  1,
                'direction'   =>  'pages.generica',
                'description' =>  'Pagina para los terminos y condiciones'
            ]);
            $count = 1;
            Block::create([
                'name'        => 'body',
                'title'       => 'Blocke Generico',
                'description' => 'Blocke Generico para Paginas',
                'page_id'     => $page->id,
                'position'    => $count++,
                'type'        => 'dinamyc-data',
                'details'     => json_encode([
                    'body' => [
                        'type'   => 'rich_text_box',
                        'name'   => 'body',
                        'label'  => 'Editor HTML',
                        'value'  => null,
                        'width'  => 12
                    ]
                ])
            ]);
    }
}
