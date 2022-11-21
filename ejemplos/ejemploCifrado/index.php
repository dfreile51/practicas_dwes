<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo Hash</title>
</head>
<body>
    <?php
        /* $texto = "Texto a encriptar";
        $textoHash = hash("sha512", $texto);
        echo "<p>Texto: {$texto}</p>";
        echo "<p>Hash: {$textoHash}</p>";

        $texto2 = "Texto";
        if (hash("sha512", $texto) == $textoHash) {
            echo "<p>Contraseña Correcta</p>";
        } else {
            echo "<p>Contraseña Incorrecta</p>";
        } */

        $texto = "Texto a encriptar";
        $nonce = random_bytes(SODIUM_CRYPTO_SECRETBOX_NONCEBYTES);
        $key = random_bytes(SODIUM_CRYPTO_SECRETBOX_KEYBYTES);
        // $cifrado = sodium_crypto_secretbox($texto, $nonce, $key);
        $cifrado = base64_encode($key.$nonce.sodium_crypto_secretbox($texto, $nonce, $key));
        $cifadoHex = bin2hex($cifrado);
        echo "<p>Texto: {$texto}</p>";
        echo "<p>Cifrado: {$cifrado}</p>";

        // $descifrado = sodium_crypto_secretbox_open($cifrado, $nonce, $key);
        $decode = base64_decode($cifrado);

        $key2 = mb_substr($decode, 0, SODIUM_CRYPTO_SECRETBOX_KEYBYTES,'8bit');
        $nonce2 = mb_substr($decode, SODIUM_CRYPTO_SECRETBOX_KEYBYTES, SODIUM_CRYPTO_SECRETBOX_NONCEBYTES,'8bit');
        $iniText = SODIUM_CRYPTO_SECRETBOX_KEYBYTES + SODIUM_CRYPTO_SECRETBOX_NONCEBYTES;
        $cifrado2 = mb_substr($decode,$iniText,null,'8bit');
        $descifrado2 = sodium_crypto_secretbox_open($cifrado2, $nonce2, $key2);
        echo "<p>Descifrado: $descifrado2</p>";
    ?>
</body>
</html>