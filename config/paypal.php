<?php

return[
    'client_id'=>env(key: 'PAYPAL_CLIENT_ID'),
    'secret'=>env(key: 'PAYPAL_SECRET'),

    'settings'=>[
        'mode'=>env(key:'PAYPAL_MODE',default:'sandbox'),
        'http.ConnectionTimeOut'=>30,
        'log.LogEnabled'=>true,
        //Dirección del archivo que guarda los msgs de error
        'log.FileName'=>storage_path(path:'/logs/paypal.log'),
        //Detalles de los problemas que pueden ocurrir en la transacción
        'log.LogLevel'=>'ERROR'
    ]
];