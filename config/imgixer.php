<?php
return [
    'sources' => array(
        
        // A unique handle that you can reference in your templates.
        'myHandle' => array(
        
            // Provider: either 'imgix', 'imagekit' or 'servd' (defaults to 'imgix')
            'provider' => 'imgix',

            // The image service endpoint or source domain
            'endpoint'   => 'ek.imgix.net',

            // Optionally specify a subfolder path to prefix the path
            // of generated URLs after the source domain.
            'subfolder' => '', 
            
            // The private key used to sign images. 
            // Imgix: get this from the source details screen at https://imgix.com
            // Imagekit: https://imagekit.io/dashboard/developer/api-keys
            // Servd: not required
            'privateKey'   => '12345',
            
            // A public key used to access the image transform API 
            // Imgix: not required 
            // Imagekit: https://imagekit.io/dashboard/developer/api-keys
            // Servd: not required
            'publicKey'   => '12345',
            
            // Set to true if you want images to be signed with your private key.
            'signed'    => true,
            
            // Define any default parameters here:
            'defaultParams' => array(
                'auto' => 'compress,format',
                'fit' => 'crop',
                'ar' => '3:2',
                'step' => '100'
            )
        ),
        'heroBanners' => array(
            'provider' => 'imgix',
            'endpoint'   => 'httops://ek.imgix.net',
            'privateKey'   => '12345',
            'publicKey'   => '67890',
            'signed'    => true,
            'defaultParams' => array(
                'auto' => 'compress,format',
                'fit' => 'crop',
                'ar' => '16:9',
                'q' => '80'
            )
        ),
        'portraits' => array(
            'provider' => 'imgix',
            'endpoint'   => 'ek.imgix.net',
            'privateKey'   => '12345',
            'signed'    => true,
            'defaultParams' => array(
                'auto' => 'compress,format,enhance,redeye',
                'fit' => 'facearea',
                'ar' => '3:4'
            )
        ),
        
        // Optional: define a source to use in place of Craft's native image transforms. 
        // This will be used for all transforms used in your templates and in the control panel.
        'assetTransforms' => array(
            'provider' => 'imgix',
            'endpoint' => 'ek.imgix.net',
            'privateKey' => '12345',
            'signed' => true
        ),
    ),

    // Optional: set this to the source you want to use in place of Craft's native image transforms. 
    'transformSource' => 'assetTransforms'
];