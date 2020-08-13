<?php
//=======================================================================================================
// Create new webhook in your Discord channel settings and copy&paste URL
//=======================================================================================================

$webhookurl = "webhookurl";

//=======================================================================================================
// Compose message. You can use Markdown
// Message Formatting -- https://discordapp.com/developers/docs/reference#message-formatting
//========================================================================================================

$timestamp = date("c", strtotime("now"));

$json_data = json_encode([
    // Message
    "content" => "Hello World! This is message line ;) And here is the mention, use userID <@12341234123412341>",

    // Username
    "username" => "neymar.php",

    // Avatar URL.
    // Uncoment to replace image set in webhook
    "avatar_url" => "https://sportbuzz.uol.com.br/media/_versions/neymar_cabelo_widelg.jpg",

    // Text-to-speech
    "tts" => false,

    // File upload
    // "file" => "",

    // Embeds Array
    "embeds" => [
        [
            // Embed Title
            "title" => "PHP - The neymar proggraming language",

            // Embed Type
            "type" => "rich",

            // Embed Description
            "description" => "If neymar say, I agree.",

            // URL of title link
            "url" => "https://twitter.com/RaCozta/status/1293528911800918017",

            // Timestamp of embed must be formatted as ISO8601
            "timestamp" => $timestamp,

            // Embed left border color in HEX
            "color" => hexdec( "3366ff" ),

            // Footer
            "footer" => [
                "text" => "Neymar Jr Twitter",
                "icon_url" => "https://twitter.com/neymarjr"
            ],

            // Image to send
            "image" => [
                "url" => "https://conteudo.imguol.com.br/c/esporte/84/2020/07/24/neymar-ensaia-moicano-pedido-pela-torcida-antes-de-final-da-copa-da-franca-1595616995004_v2_450x337.jpg"
            ],

            // Thumbnail
            //"thumbnail" => [
            //    "url" => "https://ru.gravatar.com/userimage/28503754/1168e2bddca84fec2a63addb348c571d.jpg?size=400"
            //],

            // Author
            "author" => [
                "name" => "neymar.php",
                "url" => "https://twitter.com/neymarjr"
            ],

            // Additional Fields array
            "fields" => [
                // Field 1
                [
                    "name" => "Field #1 Name Adulto",
                    "value" => "Field #1 Value Ney",
                    "inline" => false
                ],
                // Field 2
                [
                    "name" => "Field #2 Name Menino",
                    "value" => "Field #2 Value Ney",
                    "inline" => true
                ]
                // Etc..
            ]
        ]
    ]

], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE );


$ch = curl_init( $webhookurl );
curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-type: application/json'));
curl_setopt( $ch, CURLOPT_POST, 1);
curl_setopt( $ch, CURLOPT_POSTFIELDS, $json_data);
curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt( $ch, CURLOPT_HEADER, 0);
curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1);

$response = curl_exec( $ch );
// If you need to debug, or find out why you can't send message uncomment line below, and execute script.
// echo $response;
curl_close( $ch );
