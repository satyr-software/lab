<?php
$code=[
 'URMWXOZIRGBRM7DRWGSC5WVKGS',
 'DVZIVZFWZXRLFHRMXLMXVKGZMWNVGRXFOLFHRMVCVXFGRLM',
 'BGOAMVOEIATSIRLNGTTNEOGRERGXNTEAIFCECAIEOALEKFNR5LWEFCHDEEAEEE7NMDRXX5',
 ];

function atbash($in)
{
        $from='ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $to=strrev($from);

        $text=strtoupper($in);
        $output='';
        for ($i=0;$i<strlen($in);$i++)
        {
                $pos=strpos($from,$in[$i]);
                if ($pos!==false) { $output.=$to[$pos]; continue; }
                $output.=$in[$i];               // No change if not letters
        }
        return $output;
}

echo "Outer ring\n";
echo "[\u{2713}] ".atbash($code[0])."\n";
echo "[\u{2713}] ".atbash($code[1])."\n";
echo "[X] ".atbash($code[2])."\n";

echo "Code Inner length = ".strlen($code[2]). "\n";
echo "7x5 decode?\n";
for ($i=0; $i<strlen($code[2]); $i++)
{
        if ($i % 7 == 0) { echo "\n"; }
        if ($i % 35 == 0) { echo "\n"; }
        echo ' ' .$code[2][$i];
}
echo "\n";

# XOR Code
$hexcode='e3b'.
'8287d4'.
'290f723381'.
'4d7a47a291dc'.
'0f71b2806d1a53b'.
'311cc4b97a0e1cc2b9'.
'3b31068593332f10c6a3352f14d1b27a3514d6f7382f1ad0b0322955d1b83d3801cdb2287d05c0b82a311085a033291d85a3323855d6bc333119d6fb7a3c11c4a72e3c17ccbb33290c85b6343955ccba3b3a1ccbb62e341acbf72e3255caa73f2f14d1b27a341b85a3323855d6bb333055c4a53f3c55c7b22e2a10c0b97a291dc0f73e3413c3be392819'.      
'd1f73b331185a33'.
'23855ccba2a3'.
'206d6be383'.
'1108b';
$xorstring=hex2bin($hexcode);
echo "Binary = ".strlen($hexcode)."\n";
$decodestr='';
for ($i=0; $i< strlen($xorstring); $i++)
{
#       echo "Chr = ".ord($xorstring[$i]).' xor='.chr( ord($xorstring[$i]) ^ 0xA5 )." mod = ".($i % 5)."\n";
        switch ($i % 5)
        {
        case 0 : $decodestr.=chr( ord($xorstring[$i]) ^ 0xA5 ); break;;
        case 1 : $decodestr.=chr( ord($xorstring[$i]) ^ 0xD7 ); break;;
        case 2 : $decodestr.=chr( ord($xorstring[$i]) ^ 0x5A ); break;;
        case 3 : $decodestr.=chr( ord($xorstring[$i]) ^ 0x5D ); break;;
        case 4 : $decodestr.=chr( ord($xorstring[$i]) ^ 0x75 ); break;;
        }
}
echo "Decoded as: ". $decodestr."\n";
?>
