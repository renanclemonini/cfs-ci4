<?php

namespace App\Controllers\Spad;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use FetchMeditation\SPADLanguage;
use FetchMeditation\SPADSettings;
use FetchMeditation\SPAD;
use FetchMeditation\EnglishSPAD;
use Stichoza\GoogleTranslate\GoogleTranslate;


class SpadController extends BaseController
{
    public function index()
    {
        $settings = new SPADSettings(SPADLanguage::English);
        $client = new EnglishSPAD($settings);
        $dados = $client->fetch();

        // var_dump($dados);

        $tr = new GoogleTranslate('pt-br');
        // print($dados->content[0]) . "<br>";
        echo $tr->translate($dados->content[0]);
    }

    public function show()
    {
        
        

        // echo $tr->translate("ola pessoal");
    }
}
