<?php
    class WebUser extends CWebUser{
        protected $_model;
        
        function isAdm(){
            $this->loadUser(Yii::app()->user->id);
            if($this->_model != null)
            {
                return $this->_model->admin == 1;
            }
            return false;
        }

        protected function loadUser($id = null)
	    {
		    if($this->_model == null)
            {
                if($id != null){
                    $this->_model = TblUser::model()->findByPk($id);
                }
            }
		    return $this->_model;
	    }
    }
?>