<?PHP
CLASS MLAPORAN EXTENDS CI_MODEL {
 
    VAR $TABEL = 'fab_ijin';
 
    FUNCTION __CONSTRUCT() {
        PARENT::__CONSTRUCT();
    }
    FUNCTION GETALLITEM() {
        $THIS->DB->FROM($THIS->TABEL);
        $QUERY = $THIS->DB->GET();
        RETURN $QUERY->RESULT();
    }
 
}
?>