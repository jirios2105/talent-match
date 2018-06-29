<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Authentication Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are used during authentication for various
    | messages that we need to display to the user. You are free to modify
    | these language lines according to your application's requirements.
    |
    */
    'view_index'=>[
      'intro'=>[
        'carouselItem1'=>[
          'title'=>'Bienvenido a '.config('app.name'),
          'description'=>'Obtener los mejores talentos para las empresas',
        ],
        'carouselItem2'=>[
          'title'=>config('app.name'),
          'description'=>'Lo ayuda a vincular Empresas-Universidades',
        ], 
        'carouselItem3'=>[
          'title'=>config('app.name'),
          'description'=>'Ayuda a los estudiantes a encontrar la mejor empresa para ellos, de acurdo con sus perfiles.'
        ]

      ],
      'about'=>[
        'title'=>'sobre nosotros',
        'description'=>'talent-match es una plataforma dedicada a vincular empresas y universidades, para brindar a los estudiantes la oportunidad de permanecer en empresas de alto nivel'
      ]
    ],
    'name' => 'Nombre',
    'navbar'=>[
      'register_student'=>'Registrar Estudiante',
      'lang'=>'Idioma',
      'register'=>'Registrar',
      'login'=>'Iniciar Sesion',
      'logout'=>'Cerrar Sesion'
    ],
    'navbar2'=>[
      'home'=>'Inicio',
      'about'=>'Sobre nosotros',
      'service'=>'Servicios',
      'portfolio'=>'Portafolio',
      'team'=>'Equipo',
      'contact'=>'Contactanos',
      'profil'=>'Mi perfil'
    ],
    'login'=>[

     'password' => 'Contraseña',
     'email' =>    'Correo Electronico',
     'placeholder_password'=>'Escribe tu contraseña aquí',
     'placeholder_email'=>'Escribe tu correo electronico aquí',
     'forgot'=>'¿Olvidaste tu contaseña?',
     'remember'=>'Recordar',
     'txt_btn_submit'=>'Iniciar'
   ]

 ];
