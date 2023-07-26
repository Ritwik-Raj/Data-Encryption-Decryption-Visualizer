<h2 align="left">
    <h1>Description of idea:</h1>
A simple visualization of how encryption and decryption happen in the servers which are end to end encrypted.
The encryption method used here is the AES-128 bit encryption which uses a 128-bit key length to encrypt and decrypt a block of messages using the open SSl functions available in PHP.
<h1> Learning about AES </h1>
AES includes three block ciphers:
  <ul>
   1) AES-128 using 128-bit key length to encrypt and decrypt a block of messages.
   2) AES-192 using 192-bit key length to encrypt and decrypt a block of messages.
   3) AES-256 using 256-bit key length to encrypt and decrypt a block of messages.
  </ul>
It is a symmetric cypher technique which uses the same key for encrypting and decrypting. The sender and the receiver must both know --and use --the same secret key.
There are 10 rounds for 128-bit keys, 12 rounds for 192-bit keys and 14 rounds for 256-bit keys. A round consists of several proceessing steps that include substitution, transportation
  and mixing of the input plaintext to transform it into the final output of ciphertext.
<h1>
   THE RELEVANT IMAGES ARE AS FOLLOWS :
</h1>
    <img src="/Screenshots/Encryption.png" width="600" height="300"> 
    <img src="/Screenshots/Database.png" width="600" height="300"> 
    <img src="/Screenshots/Decryption.png" width="600" height="300"> 
    <img src="/Screenshots/Decrypted_Data.png" width="600" height="300">
