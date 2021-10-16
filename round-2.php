<?php

return [
    'pointScale' => 200,
    'categories' => [
        [
            'name' => 'Sponsors',
            'questions' =>  [
                ['question' => 'This sponsor is an online learning community with thousands of classes for creative and curious people', 'answer' => 'Who is Skillshare?'],
                ['question' => 'This sponsor helps you build web applications that run in the cloud.', 'answer' => 'Who is AWS?'],
                ['question' => 'This non-profit is dedicated to raising awareness, educating, and providing resources to support mental wellness in the tech and open source communities', 'answer' => 'Who is OSMI?'],
                ['question' => 'This Laravel partner is based in Texas, but has engineers across the globe to help you build your next big idea.', 'answer' => 'Who is Primitive?'],
                ['question' => 'This sponsor\'s platform features a heavy dose of javascript and cookies based humor with their performance monitoring', 'answer' => 'Who is Sentry?'],
            ]
        ],
        [
            'name' => 'ElePHPant',
            'questions' =>  [
                ['question' => 'This is the most commonly used color of elephpant, and has been used for Zend, CakePHP and ConFoo', 'answer' => 'What is Blue?'],
                ['question' => 'This conference produced the Wooly Mamoth shown here: https://www.flickr.com/photos/atomictaco/24918188561/', 'answer' => 'What is True North?'],
                ['question' => 'This sponsor created the only orange elephpant, nicknamed Archie: https://www.flickr.com/photos/akrabat/14473851298/', 'answer' => 'What is php[architect]?'],
                ['question' => 'Named Liona, this red elephpant was created by this Longhorn PHP sponsor: https://afieldguidetoelephpants.net/photos/red-laravel-1-400x300.jpg', 'answer' => 'What is Laravel?'],
                ['question' => 'A single gold elephpant prototype was created and auctioned off to celebrate this event: https://afieldguidetoelephpants.net/photos/gold-opengoodies-0-400x300.jpg', 'answer' => 'What is PHP\'s 20th anniversary on June 8, 2015?'],
            ]
        ],
        [
            'name' => 'Speakers',
            'questions' =>  [
                ['question' => 'This speaker will help you get legacy code under control.', 'answer' => 'Who is Anna Filina?'],
                ['question' => 'This speaker has served as a PHP release manager multiple times.', 'answer' => 'Who is Sara Goleman?'],
                ['question' => 'This speaker has tweeted about hot chicken over 30 times.', 'answer' => 'Who is Matt Trask?'],
                ['question' => 'If you have questions about MySQL, this speaker will be able to answer them.', 'answer' => 'Who is Dave Stokes?'],
                ['question' => 'She was one of our two remote tutorial presenters.', 'answer' => 'Who is Paulina Vos?'],
            ]
        ],
        [
            'name' => 'PHP 8',
            'questions' =>  [
                ['question' => 'This change in PHP 8 allows programmers to specify only required parameters, skipping optional ones.', 'answer' => 'What are named parameters?'],
                ['question' => 'This new feature allows us to get rid of this boilerplate docblock annotation: `@param float|int $number`', 'answer' => 'What are union types?'],
                ['question' => 'With this new feature in PHP 8, when the evaluation of one element in the chain fails, the execution of the entire chain aborts and the entire chain evaluates to null.', 'answer' => 'What is nullsafe operator?'],
                ['question' => 'This new expression is similar to a switch statement', 'answer' => 'What is match expression?'],
                ['question' => 'In PHP 8, you\'ll no longer be able to silence fatal errors using this operator.', 'answer' => 'What is "@"?'],
            ]
        ],
        [
            'name' => 'Old &amp;&amp; Busted',
            'questions' => [
                ['question' => 'There\'s no need to manually pull variables from the request with this feature enabled!', 'answer' => 'What is register_globals?'],
                ['question' => 'Boot up PHP 5.3 with this feature enabled and you can laugh in the face of danger (or shared hosts).', 'answer' => 'What is Safe Mode?'],
                ['question' => 'The now-deprecated 3rd parameter to the `define()` function allowed users to create what?', 'answer' => 'Case-Insensitive Constants'],
                ['question' => 'Before PHP 7, a method named after its class would be treated as what?', 'answer' => 'What is a constructor?'],
                ['question' => 'Before PHP 8, you could make passwords generated with `password_hash` extra super-duper secure by providing your own what?', 'answer' => 'What is a salt?'],
            ]
        ]
    ]
];
