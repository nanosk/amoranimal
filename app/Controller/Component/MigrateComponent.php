<?php 

class MigrateComponent extends Component {
    // the other component your component uses
public $uses = array('User','Logbackup');
public $components = array('Cookie','Session','RequestHandler','Paginator','Email');

private $DATA_BASE = 'c9';
private $USERNAME = 'adaptiveware';
private $FILE_NAME = 'bkp.sql';

function exportbkp(){
        //$ruta = APP . 'files/bkp' . DS . 'bkp_YYYYMMDD.sql';
        $execstr = "mysqldump -u adaptiveware c9 > bkp.sql";
        exec ($execstr);
        return true;
} 

function importbkp(){
    $s = "mysql -u adaptiveware c9 < bkp.sql";
    exec ($s);
    return true;     
}
   
}

?>