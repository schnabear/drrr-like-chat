INTRODUCTION

This is Ajax-based Durarara-like-chat.

http://suin.asia/2010/03/26/durarara_like_chat (japanese)


WHY DID I DEVELOPED THIS?

- I like the interface of Durarara chat.
- I wanted to try make chat with Ajax.


LICENSE

This application is under General Public License 3.
See License.txt


REQUIREMENTS

- PHP 5.1.0 or later
- mbstring
- add writing permission(0777) to /trust_path/xml


HOW TO SET UP

- add writing permission(0777) to /trust_path/xml


CONFIGURE SETTINGS

- Please rename setting.dist.php to setting.php, and modify it.


SOUND EFFECT

If you prepare sound.mp3 and put it under /js, the sound effect is available.


ADDING ICONS

put icons under /css. Icon names must be like icon_XXX.png.
You have to modify /css/style.css, when you add your icons.


TRANSLATION

create two files {language code}-{country code}.php under /trust_path/language/ and {language code}-{country code}.js under /js/language/.

Example:
/trust_path/language/en-US.php // English（US）
/js/language/en-US.js
/trust_path/language/zh-TW.php // Chinese（Taiwan）
/js/language/zh-TW.js
/trust_path/language/ko-KR.php // Korean（South Korea）
/js/language/ko-KR.js

Left is source language.
Right is target language.
You must NOT modify source language.

Example:
       Source                Translation
"Please input name." => "名前を決めてください。", // *.php
"Please input name." : "名前を決めてください。", // *.js

Site language setting is defined by DURA_LANGUAGE in setting.php.
