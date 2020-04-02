<?php
/**
    Plugin Name: Co-Assinantes WooCommerce
    Description: Plugin para adicionar Co-Assinantes
    Author: UpSites
    Version: 1.0.0
    Text Domain: co-assinantes
 */

// $order = wc_get_order( $order_id );



do_action( 'woocommerce_update_order', $order_get_id );


function action_woocommerce_update_order ( $_order_get_id ) { 
    $nome = ($_POST['nome']);
    $cpf = ($_POST['cpf']);

    if(isset( $nome )  && isset( $cpf) ) {
        echo 'Nome: ' . $nome;
        echo 'Cpf: ' . $cpf;
    }    
}; 

add_action ( 'woocommerce_update_order' , 'action_woocommerce_update_order' , 10 , 1 ); 

 


