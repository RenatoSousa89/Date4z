<?php
/**
* Classe para formatação de data
*
* @author RenatoSousa89
*/
class Date4z{
    
    const DATE_TIME_FORMAT = 'dd@MM@YY - H:mm';
    const DATE_FORMAT = 'dd@MM@YYYY';
    const DATE_FORMAT_MYSQL = 'YYYY@MM@dd';
    
    
    /**
     *
     *Método para formatar data datetime
     *@param string $date
     *@param string $type
     *@return string
     *
     **/
    public static function formatDateTime($date, $type){
        $dateTime = new Zend_Date($date);
        return $dateTime->toString(str_replace('@',$type,self::DATE_TIME_FORMAT));
    }
	
	/**
     *
     *Método para formatar data mysql
     *@param string $date
     *@param string $type
     *@return string
     *
     **/
    public static function formatDateTimeMysql($date, $type){
        $dateTime = new Zend_Date($date);
        return $dateTime->toString(str_replace('@',$type,self::DATE_FORMAT_MYSQL));
    }
    
     /**
      *
     *Método para formatar data date
     *@param string $date
     *@param string $type
     *@return string
     *
     **/
    public static function formatDate($date, $type){
        $dateTime = new Zend_Date($date);
        return $dateTime->toString(str_replace('@',$type,self::DATE_FORMAT));
    }
    
    /**
    *
    *Método que controla diferença de data em dias
    *@param date $iniDate
    *@param date $endDate
    *@return int $days
    *
    **/
    public static function dataDiff($iniDate, $endDate){  
       $iniDate = new Zend_Date($iniDate);  
       $endDate = new Zend_Date($endDate);  
       $days = 0;
       while( $endDate->isLater($iniDate)){  
         $iniDate->addDay(1);  
         $days++;
       }  
       return (int) $days;  
    }
    
    /**
    *
    *Método que retorna a data corrente
    *@return string
    *
    **/
    public static function dateNow(){
        $now = new Zend_Date();
        return $now->toString('yyyy-MM-dd H:mm');
    }
	
	

}



?>
