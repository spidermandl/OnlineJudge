 <?php
/**
 * 缓存用户实时提交的accept的题
 *
 * @author Desmond

  CREATE TABLE IF NOT EXISTS `temp_accept` (
  `accept_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(48) NOT NULL,
  `problem_id` int(11) NOT NULL,
  `pending1` text CHARACTER SET utf8,
  `pending2` text CHARACTER SET utf8,
  `pending3` text CHARACTER SET utf8,
   PRIMARY KEY (`accept_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

 */
class Model_TempAC extends Model_Base{

    static $cols = array(
        'accept_id',
        'user_id',
        'problem_id',
    );

    static $primary_key = 'accept_id';

    static $table = 'temp_accept';

    public $accept_id;
    public $user_id;
    public $problem_id;

    protected function initial_data(){
    }

    public function validate(){
    }

}