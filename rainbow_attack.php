<?php
$target_hash = "5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8";
$wordlist = file("common-passwords.txt", FILE_IGNORE_NEW_LINES);

foreach ($wordlist as $word) {
    if (sha1($word) === $target_hash) {
        echo "Match found: $word\n";
        break;
    }
}
?>
