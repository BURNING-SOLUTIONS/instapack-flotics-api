<?php

namespace App\Traits;

trait Base64Manager
{
    public function isBase64($base64_string)
    {
        return (strpos($base64_string, ';base64,')) !== false;
    }

    public function base64ToFile($base64_string, $output_file)
    {
        // open the output file for writing
        $ifp = fopen($output_file, 'wb');

        // split the string on commas
        // $data[ 0 ] == "data:image/png;base64"
        // $data[ 1 ] == <actual base64 string>
        //$data = explode(',', $base64_string);

        // we could add validation here with ensuring count( $data ) > 1
        fwrite($ifp, base64_decode($base64_string));

        // clean up the file resource
        fclose($ifp);

        return $output_file;
    }

    function getBase64FileData(string $base64)
    {
        return explode('base64,', $base64)[1];
    }

    function getBase64Extension(string $base64)
    {
        $extension = "";
        $pos = strpos($base64, ';');
        $type = explode(':', substr($base64, 0, $pos))[1];
        switch ($type) {
            case "application/vnd.ms-excel":
                $extension = "xls";
                break;
            case "application/vnd.openxmlformats-officedocument.wordprocessingml.document":
                $extension = "docx";
                break;
            case "image/jpg":
                $extension = "jpg";
                break;
            case "image/jpeg":
                $extension = "jpeg";
                break;
            case "image/png":
                $extension = "png";
                break;
            case "application/pdf":
                $extension = "pdf";
                break;
        }
        return $extension;
    }

    function getReturnDescription()
    { /*2*/
    }
}