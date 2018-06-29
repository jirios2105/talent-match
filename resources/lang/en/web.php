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
                'title'=>'Welcome to '.config('app.name'),
                'description'=>'Get the best talents for companies',
            ],
            'carouselItem2'=>[
                'title'=>''.config('app.name'),
                'description'=>'Help you to link business-Universities',
            ], 
            'carouselItem3'=>[
                'title'=>config('app.name'),
                'description'=>'Help  students to find the best Business for they, according to their profiles'
            ]
        ], 
        'about'=>[
            'title'=>'About Us',
            'description'=>'talent-match is a platform dedicated to link companies and universities, to give students the opportunity to stay in high-level companies',
        ]
    ],
    'name' => 'Name',
    'navbar'=>[
        'register_student'=>'Register Student',
        'lang'=>'Language',
        'register'=>'Register',
        'login'=>'Login',
        'logout'=>'Logout'
    ],
    'navbar2'=>[
        'home'=>'Home',
        'about'=>'About Us',
        'service'=>'Services',
        'portfolio'=>'Portfolio',
        'team'=>'Team',
        'contact'=>'Contact Us',
        'profil'=>'My profil'   
    ],
    'login'=>[
       'password' => 'Password',
       'email' =>    'E-MAIL',
       'placeholder_password'=>'Type your password here',
       'placeholder_email'=>'Type your E-MAIL here',
       'forgot'=>'Forgot your password?',
       'remember'=>'Keep me Signed in',
       'txt_btn_submit'=>'Login In'
   ]



];
