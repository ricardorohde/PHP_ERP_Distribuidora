<?php
<object class="cobtransferencia" name="cobtransferencia" baseclass="Page">
  <property name="Alignment">agLeft</property>
  <property name="Background"></property>
  <property name="Caption"><![CDATA[ManagerTEX - Datatex Informatica e Servicos Ltda - Fone: (11) 2629-4605]]></property>
  <property name="DocType">dtNone</property>
  <property name="Height">510</property>
  <property name="IsMaster">0</property>
  <property name="Layout">
  <property name="Type">REL_XY_LAYOUT</property>
  </property>
  <property name="Name">cobtransferencia</property>
  <property name="Width">755</property>
  <property name="OnCreate">cobtransferenciaCreate</property>
  <property name="jsOnLoad">cobtransferenciaJSLoad</property>
  <object class="Label" name="area_sistema" >
    <property name="Caption"><![CDATA[CONTAS A RECEBER - Transferencia entre Contas]]></property>
    <property name="Height">13</property>
    <property name="Name">area_sistema</property>
    <property name="Width">755</property>
  </object>
  <object class="GroupBox" name="GroupBox3" >
    <property name="Caption"><![CDATA[Contas para Transferencia]]></property>
    <property name="Height">99</property>
    <property name="Left">8</property>
    <property name="Name">GroupBox3</property>
    <property name="Top">39</property>
    <property name="Width">730</property>
    <object class="Label" name="Label25" >
      <property name="Caption">Conta de Origem</property>
      <property name="Height">13</property>
      <property name="Left">11</property>
      <property name="Name">Label25</property>
      <property name="Top">26</property>
      <property name="Width">83</property>
    </object>
    <object class="ComboBox" name="conta_origem" >
      <property name="Color">#EBE9ED</property>
      <property name="Height">21</property>
      <property name="ItemIndex">0</property>
      <property name="Items">a:0:{}</property>
      <property name="Left">101</property>
      <property name="Name">conta_origem</property>
      <property name="ParentColor">0</property>
      <property name="Top">22</property>
      <property name="Width">616</property>
      <property name="jsOnKeyPress">conta_origemJSKeyPress</property>
    </object>
    <object class="Label" name="Label1" >
      <property name="Caption">Conta de Destino</property>
      <property name="Height">13</property>
      <property name="Left">11</property>
      <property name="Name">Label1</property>
      <property name="Top">50</property>
      <property name="Width">83</property>
    </object>
    <object class="ComboBox" name="conta_destino" >
      <property name="Color">#EBE9ED</property>
      <property name="Height">21</property>
      <property name="ItemIndex">0</property>
      <property name="Items">a:0:{}</property>
      <property name="Left">101</property>
      <property name="Name">conta_destino</property>
      <property name="ParentColor">0</property>
      <property name="Top">46</property>
      <property name="Width">616</property>
      <property name="jsOnKeyPress">conta_destinoJSKeyPress</property>
    </object>
    <object class="Label" name="Label2" >
      <property name="Caption"><![CDATA[Data da Transferencia]]></property>
      <property name="Height">13</property>
      <property name="Left">11</property>
      <property name="Name">Label2</property>
      <property name="Top">73</property>
      <property name="Width">108</property>
    </object>
    <object class="Edit" name="data_transferencia" >
      <property name="Color">#F4F1AA</property>
      <property name="Height">21</property>
      <property name="Left">122</property>
      <property name="MaxLength">10</property>
      <property name="Name">data_transferencia</property>
      <property name="ParentColor">0</property>
      <property name="Top">69</property>
      <property name="Width">65</property>
      <property name="jsOnKeyPress">data_transferenciaJSKeyPress</property>
      <property name="jsOnKeyUp">data_transferenciaJSKeyUp</property>
    </object>
    <object class="Label" name="Label3" >
      <property name="Caption"><![CDATA[Valor da Transferencia]]></property>
      <property name="Height">13</property>
      <property name="Left">193</property>
      <property name="Name">Label3</property>
      <property name="Top">73</property>
      <property name="Width">110</property>
    </object>
    <object class="Edit" name="valor_transferencia" >
      <property name="Color">#F4F1AA</property>
      <property name="Height">21</property>
      <property name="Left">305</property>
      <property name="MaxLength">8</property>
      <property name="Name">valor_transferencia</property>
      <property name="ParentColor">0</property>
      <property name="Top">69</property>
      <property name="Width">65</property>
      <property name="jsOnKeyPress">valor_transferenciaJSKeyPress</property>
      <property name="jsOnKeyUp">valor_transferenciaJSKeyUp</property>
    </object>
    <object class="Label" name="Label4" >
      <property name="Caption"><![CDATA[Observacao]]></property>
      <property name="Height">13</property>
      <property name="Left">375</property>
      <property name="Name">Label4</property>
      <property name="Top">73</property>
      <property name="Width">61</property>
    </object>
    <object class="Edit" name="observacao" >
      <property name="Height">21</property>
      <property name="Left">437</property>
      <property name="MaxLength">255</property>
      <property name="Name">observacao</property>
      <property name="Top">69</property>
      <property name="Width">280</property>
      <property name="jsOnKeyPress">observacaoJSKeyPress</property>
    </object>
  </object>
  <object class="GroupBox" name="GroupBox1" >
    <property name="Caption"><![CDATA[Opcoes]]></property>
    <property name="Height">52</property>
    <property name="Left">8</property>
    <property name="Name">GroupBox1</property>
    <property name="Top">138</property>
    <property name="Width">730</property>
    <object class="Button" name="bt_fechar" >
      <property name="Caption">Fechar</property>
      <property name="Height">25</property>
      <property name="Left">647</property>
      <property name="Name">bt_fechar</property>
      <property name="Top">17</property>
      <property name="Width">75</property>
      <property name="OnClick">bt_fecharClick</property>
    </object>
    <object class="Button" name="bt_transferir" >
      <property name="Caption">Transferir</property>
      <property name="Height">25</property>
      <property name="Left">327</property>
      <property name="Name">bt_transferir</property>
      <property name="Top">17</property>
      <property name="Width">75</property>
      <property name="OnClick">bt_transferirClick</property>
    </object>
    <object class="Label" name="Label18" >
      <property name="Caption"><![CDATA[- Campos Obrigatorios]]></property>
      <property name="Height">13</property>
      <property name="Left">22</property>
      <property name="Name">Label18</property>
      <property name="Top">18</property>
      <property name="Width">131</property>
    </object>
    <object class="Panel" name="Panel1" >
      <property name="BorderColor">#000000</property>
      <property name="BorderWidth">1</property>
      <property name="Color">#F4F1AA</property>
      <property name="Height">10</property>
      <property name="Left">8</property>
      <property name="Name">Panel1</property>
      <property name="ParentColor">0</property>
      <property name="Top">19</property>
      <property name="Width">10</property>
    </object>
    <object class="Panel" name="Panel2" >
      <property name="BorderColor">#000000</property>
      <property name="BorderWidth">1</property>
      <property name="Color">#EBE9ED</property>
      <property name="Height">10</property>
      <property name="Left">8</property>
      <property name="Name">Panel2</property>
      <property name="ParentColor">0</property>
      <property name="Top">32</property>
      <property name="Width">10</property>
    </object>
    <object class="Label" name="Label19" >
      <property name="Caption"><![CDATA[- Campos Nao Alteraveis]]></property>
      <property name="Height">13</property>
      <property name="Left">22</property>
      <property name="Name">Label19</property>
      <property name="Top">31</property>
      <property name="Width">148</property>
    </object>
  </object>
  <object class="Label" name="MSG_Erro" >
    <property name="Alignment">agCenter</property>
    <property name="Font">
    <property name="Color">#FF0000</property>
    </property>
    <property name="Height">13</property>
    <property name="Left">8</property>
    <property name="Name">MSG_Erro</property>
    <property name="ParentFont">0</property>
    <property name="Top">18</property>
    <property name="Width">730</property>
  </object>
  <object class="StyleSheet" name="Estilo_Pagina" >
        <property name="Left">693</property>
        <property name="Top">205</property>
    <property name="FileName">css/estilo.css</property>
    <property name="Name">Estilo_Pagina</property>
  </object>
</object>
?>
