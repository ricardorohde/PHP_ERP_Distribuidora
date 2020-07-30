<?php
/*
+------------------------------------------------+
| Desenvolvido Por:                              |
| DATATEX INFORMATICA E SERVICOS LTDA            |
| System of the New Generation                   |
|                                                |
| http://www.datatex.com.br                      |
| sistemas@datatex.com.br                        |
| Fone: 55 11 2629-4605                          |
|                                                |
| PROTECAO AOS DIREITOS DE AUTOR E DO REGISTRO:  |
| Toda codificacao deste Sistema esta protegida  |
| pela Lei Nro.9609 onde se dispoe sobre a       |
| protecao da propriedade intelectual de         |
| programa de computador, sua comercializacao    |
| no Pais, e da outras providencias.             |
| ATENCAO: Nao e permitido efetuar alteracoes    |
| na codificacao do sistema, efetuar instalacoes |
| em outros computadores, copias e utiliza-lo    |
| como base no desenvolvimento de outro sistema  |
| semelhante ou de igual funcionamento.          |
+------------------------------------------------+
*/
require_once("vcl/vcl.inc.php");
//Includes
require_once("conexao_principal.php");
use_unit("styles.inc.php");
use_unit("dbtables.inc.php");
use_unit("jsval/formvalidator.inc.php");
use_unit("forms.inc.php");
use_unit("extctrls.inc.php");
use_unit("stdctrls.inc.php");

//*** Exibe imagem de carregando ao processar ***
require_once("includes/msg_carregando_pagina.inc.php");

//Class definition
class cadrepresentantesinc extends Page
{
   public $Label3 = null;
   public $Panel2 = null;
   public $Label1 = null;
   public $Panel1 = null;
   public $mgt_representante_relatorio = null;
   public $mgt_representante_icms = null;
   public $Estilo_Pagina = null;
   public $bt_incluir = null;
   public $mgt_representante_observacao = null;
   public $mgt_representante_1_porcentagem = null;
   public $mgt_representante_email = null;
   public $mgt_representante_fone_cel = null;
   public $mgt_representante_fone_res = null;
   public $mgt_representante_fone_com = null;
   public $mgt_representante_fone_ramal = null;
   public $mgt_representante_ddd = null;
   public $mgt_representante_pais = null;
   public $mgt_representante_cep = null;
   public $mgt_representante_estado = null;
   public $mgt_representante_cidade = null;
   public $mgt_representante_bairro = null;
   public $mgt_representante_complemento = null;
   public $mgt_representante_endereco = null;
   public $mgt_representante_contato = null;
   public $Label19 = null;
   public $GroupBox7 = null;
   public $GroupBox6 = null;
   public $Label18 = null;
   public $GroupBox5 = null;
   public $Label17 = null;
   public $Label16 = null;
   public $Label15 = null;
   public $Label14 = null;
   public $Label13 = null;
   public $Label12 = null;
   public $GroupBox4 = null;
   public $Label11 = null;
   public $Label10 = null;
   public $Label9 = null;
   public $Label8 = null;
   public $Label7 = null;
   public $Label6 = null;
   public $Label5 = null;
   public $Label4 = null;
   public $GroupBox2 = null;
   public $mgt_representante_nome = null;
   public $MSG_Erro = null;
   public $Label2 = null;
   public $bt_fechar = null;
   public $GroupBox1 = null;
   public $GroupBox3 = null;
   public $area_sistema = null;
   function mgt_representante_observacaoJSKeyPress($sender, $params)
   {

   ?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadrepresentantesinc.bt_incluir.focus();
     return false;
   }

   <?php

   }

   function mgt_representante_cepJSKeyUp($sender, $params)
   {

?>
   //Add your javascript code here

   //*** INICIO - So Numero e Traco ***

   var campo = document.cadrepresentantesinc.mgt_representante_cep
   var digits="0123456789-"
   var campo_temp
   for (var i=0;i<campo.value.length;i++){
       campo_temp=campo.value.substring(i,i+1)
       if (digits.indexOf(campo_temp)==-1){
          campo.value = campo.value.substring(0,i);
          break;
       }
   }

   //*** FINAL - So Numero e Traco ***

   <?php

   }

   function mgt_representante_1_porcentagemJSKeyUp($sender, $params)
   {

?>
   //Add your javascript code here

   //*** INICIO - So Valores ***

   var campo = document.cadrepresentantesinc.mgt_representante_1_porcentagem;
   var digits="0123456789.,";
   var campo_temp;
   for (var i=0;i<campo.value.length;i++){
       campo_temp=campo.value.substring(i,i+1);
       if (digits.indexOf(campo_temp)==-1){
          campo.value = campo.value.substring(0,i);
          break;
       }
   }
   campo.value = campo.value.replace(',','.');

   //*** FINAL - So Valores ***

   <?php

   }

   function mgt_representante_fone_ramalJSKeyUp($sender, $params)
   {

?>
   //Add your javascript code here

   //*** INICIO - So Numeros ***

   var campo = document.cadrepresentantesinc.mgt_representante_fone_ramal
   var digits="0123456789"
   var campo_temp
   for (var i=0;i<campo.value.length;i++){
       campo_temp=campo.value.substring(i,i+1)
       if (digits.indexOf(campo_temp)==-1){
          campo.value = campo.value.substring(0,i);
          break;
       }
   }

   //*** FINAL - So Numeros ***

   <?php

   }

   function mgt_representante_dddJSKeyUp($sender, $params)
   {

?>
   //Add your javascript code here

   //*** INICIO - So Numeros ***

   var campo = document.cadrepresentantesinc.mgt_representante_ddd
   var digits="0123456789"
   var campo_temp
   for (var i=0;i<campo.value.length;i++){
       campo_temp=campo.value.substring(i,i+1)
       if (digits.indexOf(campo_temp)==-1){
          campo.value = campo.value.substring(0,i);
          break;
       }
   }

   //*** FINAL - So Numeros ***

   <?php

   }

   function mgt_representante_1_porcentagemJSKeyPress($sender, $params)
   {

?>
   //Add your javascript code here

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadrepresentantesinc.mgt_representante_observacao.focus();
     return false;
   }

   <?php

   }

   function mgt_representante_emailJSKeyPress($sender, $params)
   {

?>
   //Add your javascript code here

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadrepresentantesinc.mgt_representante_1_porcentagem.focus();
     return false;
   }

   <?php

   }

   function mgt_representante_fone_celJSKeyPress($sender, $params)
   {

?>
   //Add your javascript code here

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadrepresentantesinc.mgt_representante_email.focus();
     return false;
   }

   <?php

   }

   function mgt_representante_fone_resJSKeyPress($sender, $params)
   {

?>
   //Add your javascript code here

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadrepresentantesinc.mgt_representante_fone_cel.focus();
     return false;
   }

   <?php

   }

   function mgt_representante_fone_comJSKeyPress($sender, $params)
   {

?>
   //Add your javascript code here

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadrepresentantesinc.mgt_representante_fone_res.focus();
     return false;
   }

   <?php

   }

   function mgt_representante_fone_ramalJSKeyPress($sender, $params)
   {

?>
   //Add your javascript code here

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadrepresentantesinc.mgt_representante_fone_com.focus();
     return false;
   }

   <?php

   }

   function mgt_representante_dddJSKeyPress($sender, $params)
   {

?>
   //Add your javascript code here

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadrepresentantesinc.mgt_representante_fone_ramal.focus();
     return false;
   }

   <?php

   }

   function mgt_representante_paisJSKeyPress($sender, $params)
   {

?>
   //Add your javascript code here

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadrepresentantesinc.mgt_representante_ddd.focus();
     return false;
   }

   <?php

   }

   function mgt_representante_cepJSKeyPress($sender, $params)
   {

?>
   //Add your javascript code here

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadrepresentantesinc.mgt_representante_pais.focus();
     return false;
   }

   <?php

   }

   function mgt_representante_estadoJSKeyPress($sender, $params)
   {

?>
   //Add your javascript code here

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadrepresentantesinc.mgt_representante_cep.focus();
     return false;
   }

   <?php

   }

   function mgt_representante_cidadeJSKeyPress($sender, $params)
   {

?>
   //Add your javascript code here

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadrepresentantesinc.mgt_representante_estado.focus();
     return false;
   }

   <?php

   }

   function mgt_representante_bairroJSKeyPress($sender, $params)
   {

?>
   //Add your javascript code here

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadrepresentantesinc.mgt_representante_cidade.focus();
     return false;
   }

   <?php

   }

   function mgt_representante_complementoJSKeyPress($sender, $params)
   {

?>
   //Add your javascript code here

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadrepresentantesinc.mgt_representante_bairro.focus();
     return false;
   }

   <?php

   }

   function mgt_representante_enderecoJSKeyPress($sender, $params)
   {

?>
   //Add your javascript code here

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadrepresentantesinc.mgt_representante_complemento.focus();
     return false;
   }

   <?php

   }

   function mgt_representante_contatoJSKeyPress($sender, $params)
   {

?>
   //Add your javascript code here

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadrepresentantesinc.mgt_representante_endereco.focus();
     return false;
   }

   <?php

   }

   function cadrepresentantesincCreate($sender, $params)
   {
      require_once("includes/valida_sessao.inc.php");

      //*************************************
      //*** INICIO - Validacao de Leitura ***
      //*************************************

      $tag_permissao = trim($this->Name);
      $tag_permissao = str_replace('alt', '', $tag_permissao);
      $tag_permissao = str_replace('inc', '', $tag_permissao);
	  $tag_permissao = $_SESSION['login_permissao_' . trim($tag_permissao)];
	  
      if($tag_permissao == "2")
      {
        if( isset($this->bt_incluir) )
        {
           $this->bt_incluir->Visible = false;
        }
        if( isset($this->bt_alterar) )
        {
           $this->bt_alterar->Visible = false;
        }
        if( isset($this->bt_excluir) )
        {
           $this->bt_excluir->Visible = false;
        }
      }
      elseif($tag_permissao == "0")
      {
 	     redirect('frame_corpo.php');
	  }

      //************************************
      //*** FINAL - Validacao de Leitura ***
      //************************************

      $this->MSG_Erro->Caption = "";

      //*** Inicio - Carrega os Estados ***

      $this->mgt_representante_estado->Clear();
      $this->mgt_representante_estado->AddItem("AC", null , "AC");
      $this->mgt_representante_estado->AddItem("AL", null , "AL");
      $this->mgt_representante_estado->AddItem("AP", null , "AP");
      $this->mgt_representante_estado->AddItem("AM", null , "AM");
      $this->mgt_representante_estado->AddItem("BA", null , "BA");
      $this->mgt_representante_estado->AddItem("CE", null , "CE");
      $this->mgt_representante_estado->AddItem("DF", null , "DF");
      $this->mgt_representante_estado->AddItem("ES", null , "ES");
      $this->mgt_representante_estado->AddItem("GO", null , "GO");
      $this->mgt_representante_estado->AddItem("MA", null , "MA");
      $this->mgt_representante_estado->AddItem("MT", null , "MT");
      $this->mgt_representante_estado->AddItem("MS", null , "MS");
      $this->mgt_representante_estado->AddItem("MG", null , "MG");
      $this->mgt_representante_estado->AddItem("PA", null , "PA");
      $this->mgt_representante_estado->AddItem("PB", null , "PB");
      $this->mgt_representante_estado->AddItem("PR", null , "PR");
      $this->mgt_representante_estado->AddItem("PE", null , "PE");
      $this->mgt_representante_estado->AddItem("PI", null , "PI");
      $this->mgt_representante_estado->AddItem("RN", null , "RN");
      $this->mgt_representante_estado->AddItem("RS", null , "RS");
      $this->mgt_representante_estado->AddItem("RJ", null , "RJ");
      $this->mgt_representante_estado->AddItem("RO", null , "RO");
      $this->mgt_representante_estado->AddItem("RR", null , "RR");
      $this->mgt_representante_estado->AddItem("SC", null , "SC");
      $this->mgt_representante_estado->AddItem("SP", null , "SP");
      $this->mgt_representante_estado->AddItem("SE", null , "SE");
      $this->mgt_representante_estado->AddItem("TO", null , "TO");
      $this->mgt_representante_estado->AddItem("--", null , "--");
      $this->mgt_representante_estado->ItemIndex = "SP";

      $this->mgt_representante_icms->ItemIndex = 0;
      $this->mgt_representante_relatorio->ItemIndex = 0;

      //*** Final - Carrega os Estados ***

      //*** Efetua a Limpeza dos Campos ***

      $this->mgt_representante_nome->Text = '';
      $this->mgt_representante_endereco->Text = '';
      $this->mgt_representante_complemento->Text = '';
      $this->mgt_representante_bairro->Text = '';
      $this->mgt_representante_cidade->Text = '';
      $this->mgt_representante_cep->Text = '';
      $this->mgt_representante_pais->Text = '';
      $this->mgt_representante_contato->Text = '';
      $this->mgt_representante_ddd->Text = '';
      $this->mgt_representante_fone_ramal->Text = '';
      $this->mgt_representante_fone_com->Text = '';
      $this->mgt_representante_fone_res->Text = '';
      $this->mgt_representante_fone_cel->Text = '';
      $this->mgt_representante_email->Text = '';
      $this->mgt_representante_1_porcentagem->Text = '';
      $this->mgt_representante_observacao->Text = '';
   }

   function mgt_representante_nomeJSKeyPress($sender, $params)
   {

?>
   //Add your javascript code here

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadrepresentantesinc.mgt_representante_contato.focus();
     return false;
   }

   <?php

   }

   function mgt_representante_codigoJSKeyPress($sender, $params)
   {

?>
   //Add your javascript code here

   <?php

   }


   function bt_incluirJSClick($sender, $params)
   {

?>
   //Add your javascript code here

   <?php

   }

   function bt_fecharClick($sender, $params)
   {
         //*** Restaura a Ultima Selecao Efetuada ***
         GetConexaoPrincipal()->SQL_MGT_Representantes->Close();
         GetConexaoPrincipal()->SQL_MGT_Representantes->SQL = $_SESSION['comando_sql_grid'];
         GetConexaoPrincipal()->SQL_MGT_Representantes->Open();

         redirect('cad_representantes.php');
   }

   function bt_incluirClick($sender, $params)
   {
      //*** Inicio - Validacao dos Campos ***

      if(trim($this->mgt_representante_nome->Text) == "")
      {
         $this->MSG_Erro->Caption = "Por favor, preencha o campo de Nome.";
      }
      elseif(trim($this->mgt_representante_endereco->Text) == "")
      {
         $this->MSG_Erro->Caption = "Por favor, preencha o campo de Logradouro.";
      }
      elseif(trim($this->mgt_representante_bairro->Text) == "")
      {
         $this->MSG_Erro->Caption = "Por favor, preencha o campo de Bairro.";
      }
      elseif(trim($this->mgt_representante_cidade->Text) == "")
      {
         $this->MSG_Erro->Caption = "Por favor, preencha o campo de Cidade.";
      }
      elseif(trim($this->mgt_representante_cep->Text) == "")
      {
         $this->MSG_Erro->Caption = "Por favor, preencha o campo de CEP.";
      }
      elseif(trim($this->mgt_representante_1_porcentagem->Text) == "")
      {
         $this->MSG_Erro->Caption = "Por favor, preencha o campo de Porcentagem.";
      }

      //*** Final - Validacao dos Campos ***

      else
      {
         $Comando_SQL = "INSERT INTO mgt_representantes(";
         $Comando_SQL .= "mgt_representante_nome,";
         $Comando_SQL .= "mgt_representante_endereco,";
         $Comando_SQL .= "mgt_representante_complemento,";
         $Comando_SQL .= "mgt_representante_bairro,";
         $Comando_SQL .= "mgt_representante_cidade,";
         $Comando_SQL .= "mgt_representante_estado,";
         $Comando_SQL .= "mgt_representante_cep,";
         $Comando_SQL .= "mgt_representante_pais,";
         $Comando_SQL .= "mgt_representante_contato,";
         $Comando_SQL .= "mgt_representante_ddd,";
         $Comando_SQL .= "mgt_representante_fone_ramal,";
         $Comando_SQL .= "mgt_representante_fone_com,";
         $Comando_SQL .= "mgt_representante_fone_res,";
         $Comando_SQL .= "mgt_representante_fone_cel,";
         $Comando_SQL .= "mgt_representante_email,";
         $Comando_SQL .= "mgt_representante_1_porcentagem,";
         $Comando_SQL .= "mgt_representante_icms,";
         $Comando_SQL .= "mgt_representante_relatorio,";
         $Comando_SQL .= "mgt_representante_observacao)";
         $Comando_SQL .= " VALUES(";
         $Comando_SQL .= "'" . trim($this->mgt_representante_nome->Text) . "',";
         $Comando_SQL .= "'" . trim($this->mgt_representante_endereco->Text) . "',";
         $Comando_SQL .= "'" . trim($this->mgt_representante_complemento->Text) . "',";
         $Comando_SQL .= "'" . trim($this->mgt_representante_bairro->Text) . "',";
         $Comando_SQL .= "'" . trim($this->mgt_representante_cidade->Text) . "',";
         $Comando_SQL .= "'" . trim($this->mgt_representante_estado->ItemIndex) . "',";
         $Comando_SQL .= "'" . trim($this->mgt_representante_cep->Text) . "',";
         $Comando_SQL .= "'" . trim($this->mgt_representante_pais->Text) . "',";
         $Comando_SQL .= "'" . trim($this->mgt_representante_contato->Text) . "',";
         $Comando_SQL .= "'" . trim($this->mgt_representante_ddd->Text) . "',";
         $Comando_SQL .= "'" . trim($this->mgt_representante_fone_ramal->Text) . "',";
         $Comando_SQL .= "'" . trim($this->mgt_representante_fone_com->Text) . "',";
         $Comando_SQL .= "'" . trim($this->mgt_representante_fone_res->Text) . "',";
         $Comando_SQL .= "'" . trim($this->mgt_representante_fone_cel->Text) . "',";
         $Comando_SQL .= "'" . trim($this->mgt_representante_email->Text) . "',";
         $Comando_SQL .= "'" . trim($this->mgt_representante_1_porcentagem->Text) . "',";
         $Comando_SQL .= "'" . (($this->mgt_representante_icms->ItemIndex == 0) ? "S": "N") . "',";
         $Comando_SQL .= "'" . (($this->mgt_representante_relatorio->ItemIndex == 0) ? "S": "N") . "',";
         $Comando_SQL .= "'" . trim($this->mgt_representante_observacao->Text) . "')";

         GetConexaoPrincipal()->SQL_Comunitario->Close();
         GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
         GetConexaoPrincipal()->SQL_Comunitario->Open();
         GetConexaoPrincipal()->SQL_Comunitario->Close();

         //*** Restaura a Ultima Selecao Efetuada ***
         GetConexaoPrincipal()->SQL_MGT_Representantes->Close();
         GetConexaoPrincipal()->SQL_MGT_Representantes->SQL = $_SESSION['comando_sql_grid'];
         GetConexaoPrincipal()->SQL_MGT_Representantes->Open();

         redirect('cad_representantes.php');
      }

   }

   function cadrepresentantesincJSSubmit($sender, $params)
   {

?>
       //Add your javascript code here

       <?php

   }

   function cadrepresentantesincJSLoad($sender, $params)
   {

   ?>
   //Adicione seu codigo javascript aqui

   carregando_pagina();

   <?php

   }

}

global $application;

global $cadrepresentantesinc;

//Creates the form
$cadrepresentantesinc = new cadrepresentantesinc($application);

//Read from resource file
$cadrepresentantesinc->loadResource(__FILE__);

//Shows the form
$cadrepresentantesinc->show();

?>