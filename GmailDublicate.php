<?php

function GmailDublicate($Mail){
    /*
     * Created By Titansoft
     * Author: Enes Alperen Hürüm
     * Date: 26.03.2021 08:43
     */
    if (filter_var($Mail, FILTER_VALIDATE_EMAIL)) {
        $MailLowerCase = mb_strtolower($Mail, "UTF8");
        $MailExtension = explode("@", $MailLowerCase);
        if ($MailExtension[1] == "gmail.com") {
            $CleanDots = str_replace(".", "", $MailExtension[0]);
            $IgnorePluses = explode("+", $CleanDots);
            $Result = $IgnorePluses[0] . "@gmail.com";
        } else {
            $Result = $MailLowerCase;
        }
    } else {
        $Result = "Data is not an email!";
    }
    return $Result;
}

/* Test */
echo GmailDublicate("te.s.t.mail+random@gmail.com");