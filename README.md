# php-message-encrypt-decrypt
A small piece of PHP code that lets you encrypt and decrypt messages using various encyption methods.

This piece of code does not require any additional software or libraries to be installed, only incorporate it into your project and you are set to go.

NOTE: This is a simple PHP function that will encrypt and decrypt the message, before using it in production please research encryption a bit more in order to be safer.

Instructions:

In order to encrypt a message just use "encrypt_decrypt('encrypt', {your message}, {password})" and to decrypt you just use "encrypt_decrypt('decrypt', {encrypted message}, {password})".


Supported encryption methods:
AES-128-CBC
AES-128-CFB
AES-128-CFB1
AES-128-CFB8
AES-128-CTR
AES-128-ECB
AES-128-OFB
AES-128-XTS
AES-192-CBC
AES-192-CFB
AES-192-CFB1
AES-192-CFB8
AES-192-CTR
AES-192-ECB
AES-192-OFB
AES-256-CBC
AES-256-CFB
AES-256-CFB1
AES-256-CFB8
AES-256-CTR
AES-256-ECB
AES-256-OFB
AES-256-XTS
BF-CBC
BF-CFB
BF-ECB
BF-OFB
CAMELLIA-128-CBC
CAMELLIA-128-CFB
CAMELLIA-128-CFB1
CAMELLIA-128-CFB8
CAMELLIA-128-ECB
CAMELLIA-128-OFB
CAMELLIA-192-CBC
CAMELLIA-192-CFB
CAMELLIA-192-CFB1
CAMELLIA-192-CFB8
CAMELLIA-192-ECB
CAMELLIA-192-OFB
CAMELLIA-256-CBC
CAMELLIA-256-CFB
CAMELLIA-256-CFB1
CAMELLIA-256-CFB8
CAMELLIA-256-ECB
CAMELLIA-256-OFB
CAST5-CBC
CAST5-CFB
CAST5-ECB
CAST5-OFB
DES-CBC
DES-CFB
DES-CFB1
DES-CFB8
DES-ECB
DES-EDE
DES-EDE-CBC
DES-EDE-CFB
DES-EDE-OFB
DES-EDE3
DES-EDE3-CBC
DES-EDE3-CFB
DES-EDE3-CFB1
DES-EDE3-CFB8
DES-EDE3-OFB
DES-OFB
DESX-CBC
RC2-40-CBC
RC2-64-CBC
RC2-CBC
RC2-CFB
RC2-ECB
RC2-OFB
RC4
RC4-40
RC4-HMAC-MD5
SEED-CBC
SEED-CFB
SEED-ECB
SEED-OFB
