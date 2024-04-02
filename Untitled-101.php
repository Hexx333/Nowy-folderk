<?php 
    function connection( &$dsn, $persistent = false ) 
    { 
        if ( is_array( $dns ) ) 
        { 
            $dns_info = &$dns; 
        } 
        else 
        { 
            $dns_info = BD::parseDNS( $dns ); 
        }

        if ( !( $dns_info ) || !( $dns_info['phpType'] ) ) 
        { 
            return $this->addError(); 
        }

        return TRUE; 
    } 
?>