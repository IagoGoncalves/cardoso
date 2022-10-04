<?php

function custom_metabox() {
   global $post;

//Dados
  $post_metabox = new Odin_Metabox(
   'conteudo-dados', // Slug/ID of the Metabox (Required)
   'INFORMAÇÕES', // Metabox name (Required)
   'dados', // Slug of Post Type (Optional)
   'normal', // Context (options: normal, advanced, or side) (Optional)
   'high' // Priority (options: high, core, default or low) (Optional)
 );
 $post_metabox->set_fields(
   array( 
     //LOCALIZAÇÃO
       array(
         'id'   => 'localizacao', // Required
         'label'=> __( 'LOCALIZAÇÃO', 'odin' ), // Required
         'type' => 'title', // Required
       ),
       array(
         'id'          => 'logradouro', // Required
         'label'       => __( 'Logradouro:', 'odin' ), // Required
         'type'        => 'select', // Required
         'default'    => 'Rua', // Optional               
         'options' => 
         array(
           'Rua' => 'Rua',
           'Avenida' => 'Avenida',
           'Praça' => 'Praça',
           'Bosque' => 'Bosque',
           'Alameda' => 'Alameda',
           'Estrada' => 'Estrada',
           'Rodovia' => 'Rodovia',
           'Travessa' => 'Travessa',
           '-' => '-',
         ),
       ),
       array(
         'id'          => 'endereco', // Obrigatório
         'label'       => __( 'Endereço:', 'odin' ), //Obrigatório
         'type'        => 'text', // Obrigatório
         'default'     => '', // Opcional (deve ser o id de uma imagem em mídias, separe os ids com virtula)
         'description' => __( 'Nome da rua, avenida, praça, etc, sem o número', 'odin' ), // Optional
       ),
       array(
         'id'          => 'numero', // Obrigatório
         'label'       => __( 'Número:', 'odin' ), // Obrigatório
         'type'        => 'text', // Obrigatório
         'default'     => '', // Opcional (deve ser o id de uma imagem em mídias, separe os ids com virtula)
         'description' => __( 'Número do estabelecimento', 'odin' ), // Optional
       ),
       array(
         'id'          => 'bairro', // Obrigatório
         'label'       => __( 'Bairro:', 'odin' ), // Obrigatório
         'type'        => 'text', // Obrigatório
         'default'     => '', // Opcional (deve ser o id de uma imagem em mídias, separe os ids com virtula)
         'description' => __( '', 'odin' ), // Optional
       ),
       array(
         'id'          => 'cidade', // Obrigatório
         'label'       => __( 'Cidade:', 'odin' ), // Obrigatório
         'type'        => 'text', // Obrigatório
         'default'     => 'Extrema', // Opcional (deve ser o id de uma imagem em mídias, separe os ids com virtula)
         'description' => __( '', 'odin' ), // Optional
       ),
       array(
         'id'          => 'estado', // Required
         'label'       => __( 'Estado:', 'odin' ), // Required
         'type'        => 'select', // Required
         'default'    => 'MG', // Optional
         'description' => __( '', 'odin' ), // Optional
         'options' => 
         array( // Required (id => title)
           'AC' => 'AC',
           'AL' => 'AL',
           'AM' => 'AM',
           'AP' => 'AP',
           'BA' => 'BA',
           'CE' => 'CE',
           'DF' => 'DF',
           'ES' => 'ES',
           'GO' => 'GO',
           'MA' => 'MA',
           'MG' => 'MG',
           'MS' => 'MS',
           'MT' => 'MT',
           'PA' => 'PA',
           'PB' => 'PB',
           'PE' => 'PE',
           'PI' => 'PI',
           'PR' => 'PR',
           'RJ' => 'RJ',
           'RN' => 'RN',
           'RO' => 'RO',
           'RR' => 'RR',
           'RS' => 'RS',
           'SC' => 'SC',
           'SE' => 'SE',
           'SP' => 'SP',
           'TO' => 'TO',
         ),
       ),
       array(
         'id'          => 'cep', // Obrigatório
         'label'       => __( 'CEP:', 'odin' ), // Obrigatório
         'type'        => 'text', // Obrigatório
         'default'     => '37640-000', // Opcional (deve ser o id de uma imagem em mídias, separe os ids com virtula)
         'description' => __( '', 'odin' ), // Optional
       ),

       array(
         'id'          => 'complemento', // Obrigatório
         'label'       => __( 'Complemento:', 'odin' ), // Obrigatório
         'type'        => 'text', // Obrigatório
         'default'     => '', // Opcional (deve ser o id de uma imagem em mídias, separe os ids com virtula)
         'description' => __( '', 'odin' ), // Optional
       ),

     array(
       'id'   => 'separator1', // Obrigatório
       'type' => 'separator' // Obrigatório
     ),  
     array(
       'id'          => 'telefone1', // Obrigatório
       'label'       => __( 'Telefone 1:', 'odin' ), // Obrigatório
       'type'        => 'text', // Obrigatório
       'default'     => '', // Opcional (deve ser o id de uma imagem em mídias, separe os ids com virtula)
       'description' => __( 'Digite o numero ex.: (xx) xxxx-xxxx', 'odin' ),
       'attributes'  => array( // Optional (html input elements)
         'type' => 'tel'
       )
     ),  
     array(
      'id'          => 'telefone2', // Obrigatório
      'label'       => __( 'Telefone 2:', 'odin' ), // Obrigatório
      'type'        => 'text', // Obrigatório
      'default'     => '', // Opcional (deve ser o id de uma imagem em mídias, separe os ids com virtula)
      'description' => __( 'Digite o numero ex.: (xx) xxxx-xxxx', 'odin' ),
      'attributes'  => array( // Optional (html input elements)
        'type' => 'tel'
      )
    ),  
    array(
      'id'          => 'telefone3', // Obrigatório
      'label'       => __( 'Telefone 3:', 'odin' ), // Obrigatório
      'type'        => 'text', // Obrigatório
      'default'     => '', // Opcional (deve ser o id de uma imagem em mídias, separe os ids com virtula)
      'description' => __( 'Digite o numero ex.: (xx) xxxx-xxxx', 'odin' ),
      'attributes'  => array( // Optional (html input elements)
        'type' => 'tel'
      )
    ),  
     array(
      'id'          => 'email1', // Obrigatório
      'label'       => __( 'Email:', 'odin' ), // Obrigatório
      'type'        => 'text', // Obrigatório
      'default'     => '', // Opcional (deve ser o id de uma imagem em mídias, separe os ids com virtula)
      'attributes'  => array( // Optional (html input elements)
        'type' => 'email'
      )
    ),   
     array(
       'id'          => 'whatsapp', // Obrigatório
       'label'       => __( 'Whatsapp:', 'odin' ), // Obrigatório
       'type'        => 'text', // Obrigatório
       'default'     => '', // Opcional (deve ser o id de uma imagem em mídias, separe os ids com virtula)
       'description' => __( 'Digite o numero ex.: (xx) xxxx-xxxx', 'odin' ),
       'attributes'  => array( // Optional (html input elements)
         'type' => 'tel'
       )
     ),
     array(
       'id'          => 'whats-esocial', // Obrigatório
       'label'       => __( 'Whatsapp e-social:', 'odin' ), // Obrigatório
       'type'        => 'text', // Obrigatório
       'default'     => '', // Opcional (deve ser o id de uma imagem em mídias, separe os ids com virtula)
       'description' => __( 'Digite o numero ex.: (xx) xxxx-xxxx', 'odin' ),
       'attributes'  => array( // Optional (html input elements)
         'type' => 'tel'
       )
     ),  
     array(
       'id'          => 'facebook', // Required
       'label'       => __( 'Link do facebook', 'odin' ), // Required
       'type'        => 'input', // Required
       'attributes'  => array( // Optional (html input elements)
         'type' => 'url'
       )
     ),
     array(
       'id'          => 'instagram', // Required
       'label'       => __( 'Link do instagram', 'odin' ), // Required
       'type'        => 'input', // Required    
       'attributes'  => array( // Optional (html input elements)
         'type' => 'url'
       )
     ),   
   )
 );
//Pagina home
  $post_metabox = new Odin_Metabox(
    'home', // Slug/ID of the Metabox (Required)
    'Fields home', // Metabox name (Required)
    'page', // Slug of Post Type (Optional)
    'normal', // Context (options: normal, advanced, or side) (Optional)
    'high', // Priority (options: high, core, default or low) (Optional)
    'page-home.php'
  );
  $post_metabox->set_fields(
    array(
    // Banner
      array(
        'id'          => 'icone1', // Obrigatório
        'label'       => __( 'Icone 1', 'odin' ), // Obrigatório
        'type'        => 'image', // Obrigatório
        'default'     => '', // Opcional (deve ser o id de uma imagem em mídia)
        'description' => __( '', 'odin' ), // Opcional
      ),
      array(
        'id'          => 'text-icn-1', // Obrigatório
        'label'       => __( 'Texto do ícone 1', 'odin' ), // Obrigatório
        'type'        => 'textarea', // Obrigatório
      ),
      array(
        'id'          => 'icone2', // Obrigatório
        'label'       => __( 'Icone 2', 'odin' ), // Obrigatório
        'type'        => 'image', // Obrigatório
        'default'     => '', // Opcional (deve ser o id de uma imagem em mídia)
        'description' => __( '', 'odin' ), // Opcional
      ),
      array(
        'id'          => 'text-icn-2', // Obrigatório
        'label'       => __( 'Texto do ícone 2', 'odin' ), // Obrigatório
        'type'        => 'textarea', // Obrigatório
      ),
      array(
        'id'   => 'separator1', // Obrigatório
        'type' => 'separator' // Obrigatório
      ),
    // Produtos
      array(
        'id'          => 'text-produto', // Obrigatório
        'label'       => __( 'Subtitulo produto', 'odin' ), // Obrigatório
        'type'        => 'textarea', // Obrigatório
      ),
      array(
        'id'   => 'separator1', // Obrigatório
        'type' => 'separator' // Obrigatório
      ),
    // Serviços
      array(
        'id'          => 'texto-servico1', // Obrigatório
        'label'       => __( 'Texto Serviço 1', 'odin' ), // Obrigatório
        'type'        => 'textarea', // Obrigatório
      ),
      array(
        'id'          => 'img-servico1', // Obrigatório
        'label'       => __( 'Imagem serviço 1', 'odin' ), // Obrigatório
        'type'        => 'image_plupload', // Obrigatório
        'default'     => '', // Opcional (deve ser o id de uma imagem em mídia)
        'description' => __( '', 'odin' ), // Opcional
      ),
      array(
        'id'          => 'texto-servico2', // Obrigatório
        'label'       => __( 'Texto Serviço 2', 'odin' ), // Obrigatório
        'type'        => 'textarea', // Obrigatório
      ),
      array(
        'id'          => 'img-servico2', // Obrigatório
        'label'       => __( 'Imagem serviço 2', 'odin' ), // Obrigatório
        'type'        => 'image_plupload', // Obrigatório
        'default'     => '', // Opcional (deve ser o id de uma imagem em mídia)
        'description' => __( '', 'odin' ), // Opcional
      ),
      array(
        'id'   => 'separator2', // Obrigatório
        'type' => 'separator' // Obrigatório
      ),
    // Frota
      array(
        'id'          => 'texto-frota', // Obrigatório
        'label'       => __( 'Texto Frota', 'odin' ), // Obrigatório
        'type'        => 'textarea', // Obrigatório
      ),
      array(
        'id'          => 'imagens-frota', // Obrigatório
        'label'       => __( 'Imagens Frota', 'odin' ), // Obrigatório
        'type'        => 'image_plupload', // Obrigatório
        'default'     => '', // Opcional (deve ser o id de uma imagem em mídias, separe os ids com virtula)
      ),
    // Cliente
      array(
        'id'          => 'clientes', // Obrigatório
        'label'       => __( 'Imagens Clientes', 'odin' ), // Obrigatório
        'type'        => 'image_plupload', // Obrigatório
        'default'     => '', // Opcional (deve ser o id de uma imagem em mídias, separe os ids com virtula)
      ),
    )
  );
//Produtos
  $post_metabox = new Odin_Metabox(
    'conteudo-produtos', // Slug/ID of the Metabox (Required)
    'INFORMAÇÕES', // Metabox name (Required)
    'produto', // Slug of Post Type (Optional)
    'normal', // Context (options: normal, advanced, or side) (Optional)
    'high' // Priority (options: high, core, default or low) (Optional)
  );
  $post_metabox->set_fields(
    array(  
      array(
        'id'          => 'imagens-produto', // Obrigatório
        'label'       => __( 'Imagens Produto', 'odin' ), // Obrigatório
        'type'        => 'image_plupload', // Obrigatório
        'default'     => '', // Opcional (deve ser o id de uma imagem em mídias, separe os ids com virtula)
      ),
    )
  );
}
add_action( 'init', 'custom_metabox', 1 );

