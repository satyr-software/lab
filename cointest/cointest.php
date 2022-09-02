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
?>
