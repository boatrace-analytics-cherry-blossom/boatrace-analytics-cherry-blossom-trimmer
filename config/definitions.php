<?php

return [
    'Trimmer' => \DI\create('\Boatrace\Analytics\Cherry\Blossom\Trimmer')->constructor(
        \DI\get('MainTrimmer')
    ),
    'MainTrimmer' => function ($container) {
        return $container->get('\Boatrace\Analytics\Cherry\Blossom\MainTrimmer');
    },
];
